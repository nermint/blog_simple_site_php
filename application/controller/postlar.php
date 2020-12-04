<?php



class Postlar extends Controller{

    public $model = [];
    
    //burada sehifedeki post emeliyyatlari aparilir
    public function __construct()
    {
        $this->model = $this->model("Postmodel");
    }

    public function login(){

        $data=$_POST['form_data'];
         // parse funksiyasi ile melumatlar ayrilir
        $data=FName::parse($data);
        $admin_name=$data['admin_name'];
        $password=$data['password'];
        $this->model->login_control($admin_name,$password);
        $result= $this->model->data['login'];
        if($result=="not admin"){
            $json['operation']="not admin";
        }else if($result=="password"){
            $json['operation']="password";
        }else if($result == "success"){
            $json['operation'] = "success";
            $_SESSION['login'] = $this->model->data['session'];
        }
        //echo $result;
        echo json_encode($json);

    }
    public function general_update(){
        $data=$_POST['form_data'];
        $data=FName::parse($data);
        $this->model->do_general_update($data);
        
    }


    public function admin_update(){
        $data=$_POST['form_data'];
        $data=FName::parse($data);
        $this->model->do_admin_update($data);

    }

    public function send_message(){
        $data=$_POST['form_data'];
        $data=FName::parse($data);
        $this->model->send_form_message($data);
        $result=$this->model->data['message_insert'];
        if($result == 'success')
            $json['operation']="success";
        else if($result == 'fail'){
            $json['operation']="fail";
        }
        //echo $result;
        echo json_encode($json);
    }

    public function services_add()
    {
        $data=$_POST['form_data'];
        $data=FName::parse($data);
        $this->model->do_services_add($data);
        $result=$this->model->data['servicessadd'];
        if($result=="success")
            $json['operation']="success";
        else if($result == 'fail'){
            $json['operation']="fail";
        }
        echo json_encode($json);
    }

    public function add_project(){
        $data=$_POST['forminfo'];
        $data=FName::parse($data);

        $take_img = [];
        if (isset($_FILES['files']) && !empty($_FILES['files'])) {
            //$count_files = count($_FILES["files"]['name']);
                if ($_FILES["files"]["error"] > 0) {
                    echo "Error: " . $_FILES["files"]["error"] . "<br>";
                    $json['operation']="fail";
                } else {
                    if (@file_exists('uploads/' . $_FILES["files"]["name"])) {
                        echo 'File already exists : uploads/' . $_FILES["files"]["name"];
                        $json['operation']="exists";
                    } else {
                        $extension = explode(".", $_FILES["files"]["name"]);
                        $extension = $extension[(count($extension) - 1)];
                        //$img_name = FName::get_id() . "_" . uniqid() . "." . $extension;
                        $img_name = uniqid() . "." . $extension;
                        $direction = SERVERWAY . "application/source/img/portfolio/thumbnails/" . $img_name;
                        $take_img[] = $img_name;
                        move_uploaded_file($_FILES["files"]["tmp_name"], $direction);
                    }
                }
        }
        $take_img = implode(",", $take_img);
        $this->model->add_data($data, $take_img);
        $json["operation"] = "success";
        //$json["id"] = $this->model->veri["blog_kayit_id"];
        echo json_encode($json);

    }


    public function edit_project(){
        $data=$_POST['forminfo'];
        $data=FName::parse($data);

        $take_img = [];
        if (isset($_FILES['files']) && !empty($_FILES['files'])) {
            //$count_files = count($_FILES["files"]['name']);
                if ($_FILES["files"]["error"] > 0) {
                    echo "Error: " . $_FILES["files"]["error"] . "<br>";
                    $json['operation']="fail";
                } else {
                    if (@file_exists('uploads/' . $_FILES["files"]["name"])) {
                        echo 'File already exists : uploads/' . $_FILES["files"]["name"];
                        $json['operation']="exists";
                    } else {
                        $extension = explode(".", $_FILES["files"]["name"]);
                        $extension = $extension[(count($extension) - 1)];
                        //$img_name = FName::get_id() . "_" . uniqid() . "." . $extension;
                        $img_name = uniqid() . "." . $extension;
                        $direction = SERVERWAY . "application/source/img/portfolio/thumbnails/" . $img_name;
                        $take_img[] = $img_name;
                        move_uploaded_file($_FILES["files"]["tmp_name"], $direction);
                    }
                }
        }
        $take_img = implode(",", $take_img);
        $this->model->edit_data($data, $take_img);
        $json['operation']="success";
        echo json_encode($json);

    }

}

?>