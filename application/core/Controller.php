<?php

class Controller{
    public function __construct()
    {
        
    }
    //model ile view arasinda elaqe ucun controllere model elave olunur
    public function model($model) {
        require_once 'application/model/' . $model . '.php';
        return new $model();
    }
    public function view($view, $data=[], $page="home"){
        switch($page){
            case "home":
                require_once 'application/view/constants/header.php';
                require_once 'application/view/'. $view. '.php';
                require_once 'application/view/constants/footer.php';
            break;
            case "error":
                require_once 'application/view/constants/header.php';
                require_once 'application/view/'. $view. '.php';
                // require_once 'application/view/constants/footer.php';
            break;
            case "login":
                require_once 'application/view/constants/login_header.php';
                require_once 'application/view/'. $view. '.php';
                require_once 'application/view/constants/login_footer.php';
            break;
            case "admin":
                require_once 'application/view/constants/admin_header.php';
                require_once 'application/view/'. $view. '.php';
                require_once 'application/view/constants/admin_footer.php';
            break;
            
        }
    }
}

?>