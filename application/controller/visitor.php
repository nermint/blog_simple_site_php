<?php



class Visitor extends Controller{

    //db ile elaqenin qurulmasi ucun model deyiskeni yaradilir
    public $model=[];
    public $modeladmin = [];
    public function __construct()
    {
        $this->model = $this->model("Configmodel");
        $this->modeladmin = $this->model("Adminmodel");
        $this ->modelpost = $this ->model("Postmodel");
    }

    public function index( $param="" ){

       $this->model->config_page();
       $info = $this->model->data['infopage'];

       $this->modeladmin->show_all_services();
       $info2 =  $this->modeladmin->data['infoservices'];

       $this->modeladmin->show_all_projects();
       $info3 = $this->modeladmin -> data['project'];

       $this->view('visitor/index',["info" => $info , "infoservices" => $info2 ,"project" => $info3],'home');
    }
    
}

?>