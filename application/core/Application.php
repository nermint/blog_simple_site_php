<?php

class Application {
    protected $controller = '';  //hecne yazmadiqda default olaraq visitor kimi daxil oluruq
    protected $method = 'index';
    protected $param = [];

    //class cagirildigda ilk caliwan kontruktor olur
    public function __construct()
    {
        $url= $this->parseUrl();
        //echo $url[0];

        //http://localhost/creative_with_mvc/new/page/blog
        // url[0] => new ; url[1] => page ; url[2] => blog
    
        if(isset($url[0])){
            //bele bir fayl varmi
            if(file_exists('application/controller/' . $url[0] . '.php')){
                //echo "girdi";
                $this->controller=$url[0];

                //url[0] in icini bowaldirig
                unset($url[0]);
                require_once 'application/controller/'. $this->controller.'.php';
                $this->controller = new $this->controller;

            }
            
        }else if(empty($url[0])){
            //echo 'This url is empty';
            if(file_exists('application/controller/visitor.php')){
                $this->controller='visitor';
                unset($url[0]);
                require_once 'application/controller/'. $this->controller.'.php';
                $this->controller = new $this->controller;

            }
        }
       

        
        
        // visitor'dan bir class yaradirig
        
        if(isset($url[1])){
            // class daxilinde bele bir funsksiya varmi
            if(method_exists($this->controller,$url[1])){
                $this->method=$url[1];
                unset($url[1]);
            }
        }

        $this-> param = $url ? array_values($url) : [];
        
        // visitor classinda index funskiyasi ve varsa parametri ile birge cagrilir

        if(! $this->controller){
            $this->controller= "errorr";  
            require_once 'application/controller/'. $this->controller.'.php';
            $this->controller = new $this->controller;
        }
        
        
        call_user_func_array([$this->controller,$this->method],$this->param);
    }


    // url ni hisselere ayrimaq ucun funskiya yaradilir
    public function parseUrl(){
        // isset böyle bir obyekt varmı ? diye kontrol eder
        if(isset($_GET['url'])){
            //explode--- stringi massive cevirir
            return $url = explode('/', filter_var(rtrim($_GET["url"], '/'), FILTER_SANITIZE_URL));
        }
    }
}


?>