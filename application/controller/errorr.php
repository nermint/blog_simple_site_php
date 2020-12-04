<?php



class Errorr extends Controller {
    public function __construct()
    {
        
    }
    public function index($param=""){
        $this -> view('error/index',[],"error");
    }


}


?>