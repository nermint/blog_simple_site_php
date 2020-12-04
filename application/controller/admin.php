<?php


class Admin extends Controller{

    public $modelconfig=[];
    public $modeladmin=[];
    public $msgcount=[];
    public function __construct()
    {
        $this -> modelconfig = $this->model("Configmodel");
        $this -> modeladmin = $this -> model("Adminmodel");
        //  msj sayinin butun sehifelerde gorunmesi ucun show_message cagirilmalidi ve massive yigilarag melumat ist edilir
        $this->modeladmin->msg_count();
        $this->msgcount = $this->modeladmin->data['countrow'];
        $status=FName::status();
        if(!$status){
            $this->view('admin/login',[],'login');
            exit;
        }
    }

    public function index( $param="" ){
       $this->modelconfig->config_page();
       $info= $this->modelconfig->data['infopage'];
       $this->view('admin/index',["info" => $info, "msgcount"=> $this->msgcount],'admin');
    }

    public function generalsetting($param="" ){
       $this->modelconfig->config_page();
       $info= $this->modelconfig->data['infopage'];
        switch($param){
            case 'edit':
                $this->view('admin/generalsetting/edit',["info" => $info, "msgcount"=> $this->msgcount],'admin');
                break;
            default:    
                $this->view('admin/generalsetting/all',["info" => $info, "msgcount"=> $this->msgcount],'admin');
                break;
        }
     }


     public function loginsetting($param="" ){
        $this->modeladmin->admin_login();
        $this ->modelconfig->config_page();
        $info1= $this->modeladmin->data['infoadmin'];
        $info2 =$this->modelconfig->data['infopage'];
        $this->view('admin/loginsetting',["admininfo" => $info1, "info" => $info2, "msgcount"=> $this->msgcount],'admin');
                    
      }

      public function message($param=""){
        $this ->modelconfig->config_page();
        $info2 = $this->modelconfig->data['infopage'];
        switch($param){
            case !'':
                $this->modeladmin->show_single_message($param);
                $this->modeladmin->read_message_now($param);
                $info1 = $this->modeladmin->data['infomessage'];
                $this->view('admin/message/read',["info" => $info2,"msgcount" =>$this->msgcount, "msginfo" =>$info1],'admin');
                break;
            default:  
                $this->modeladmin->show_message($param);
                $info1 = $this->modeladmin->data['infomessage'];
                $this->view('admin/message/all',["info" => $info2,"msginfo"=>$info1, "msgcount" => $this->msgcount],'admin');
                break;
        }
                    
      }

      public function delete($id=""){
          $this->modeladmin->delete_single_message($id);
          header("Location:".HOME."admin/message");
      }

      public function services($param=""){
            $this ->modelconfig->config_page();
            $info2 = $this->modelconfig->data['infopage'];
          switch($param){
              case 'add':
                $this->view('admin/services/add',["info"=>$info2,"msgcount" => $this->msgcount],'admin');
                break; 
              case !'':
                $this->modeladmin->delete_single_services($param);
                header("Location:".HOME."admin/services");
                //$this->view('admin/services/delete',["info"=>$info2,"msgcount" => $this->msgcount],'admin');
                break;
              default:
                $this->modeladmin->show_all_services();
                $infoservices=$this->modeladmin->data['infoservices'];
                $this->view('admin/services/all',["info"=>$info2,"msgcount" => $this->msgcount, "infoservices" => $infoservices],'admin');
                break;
          }
      }


      public function project($param=""){
        $this ->modelconfig->config_page();
        $info2 = $this->modelconfig->data['infopage'];
      switch($param){
          case 'add':
            $this->view('admin/project/add',["info"=>$info2,"msgcount" => $this->msgcount],'admin');
            break; 
          case !'':
            $this->modeladmin->show_single_project($param);
            $single_project = $this->modeladmin->data['single_project'];
            $this->view('admin/project/edit',["info"=>$info2,"msgcount" => $this->msgcount,"single"=>$single_project],'admin');
            break;
          default:
            $this->modeladmin->show_all_projects();
            $project=$this->modeladmin->data['project'];
            $this->view('admin/project/all',["info"=>$info2,"msgcount" => $this->msgcount, "project" => $project],'admin');
            break;
      }
     }


     public function deleteprj($img){
        $this->modeladmin->delete_project($img);
        header("Location:".HOME."admin/project");
     }

    public function signout(){
        FName:: signout();
    }

}

?>