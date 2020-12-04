<?php

class Postmodel{
    
        protected $db = [];
        public $data = [];

        public function __construct()
        {
            $this->db= new DB();
        }

        //control login

        public function login_control($admin_name,$password){
            //bir setir melumat ucun row
            $info=$this->db->query("select * from admin where admin_name= :value1",["value1"=> $admin_name]);
            if(empty($info)){
                $result="not admin";
            }else{
                $get_passw=$info[0]['password'];
                if($password==$get_passw){
                    $result="success";
                    $this->data['session']=["power" => $info[0]["power"],"id" => $info[0]["id"], "admin_name" => $info[0]["admin_name"]];
                }else{
                    $result="password";
                }
            }
            $this->data['login'] = $result;
        }

        public function do_general_update($data){
            $update = $this-> db-> row("update config set title =:1 , phone =:2, email =:3, address =:4, footer =:5",["1"=> $data['title'], "2"=> $data['phone'], "3"=> $data['email'], "4"=> $data['address'] ,"5"=> $data['footer']]);
        }

        public function do_admin_update($data){

            if(empty($data['admin_name']) && !empty($data['password'])){
                $update = $this-> db-> row("update admin set password=:1", ["1"=> $data['password']]);
                exit;
            }
                 
            if(empty($data['password']) && !empty($data['admin_name'])){
                $update = $this-> db-> row("update admin set admin_name=:1", ["1"=> $data['admin_name']]);
                exit;
            }
                 
            if(!empty($data['password']) && !empty($data['admin_name'])){
                $update = $this-> db-> row("update admin set admin_name =:1, password=:2", ["1" => $data['admin_name'], "2" => $data['password']]);
            }
            
              
        }

        public function send_form_message($data){
            if(empty($data['first_name']) &&  empty($data['last_name']) && empty($data['email']) && empty($data['subject']) && empty($data['website']) && empty($data['message'])) {
                $result="fail";
            }else{
                $insert= $this->db -> query("insert into message(first_name, last_name, email,subject, website, message) values(:1,:2,:3,:4,:5,:6)",["1" => $data['first_name'],$data['last_name'],$data['email'],$data['subject'],$data['website'],$data['message'],]);

                // $count=$this->db->rowCount($insert);
                // if($count != 0)
                //     $result="success";
                // else
                //     $result="fail";

                if($insert){
                    $result="success";
                }
            }
            
            $this->data['message_insert'] = $result;
        }

        public function do_services_add($data){
            $insert=$this->db->row("insert into services(heading, description, icon) values(:1,:2,:3)",["1"=>$data['heading'],"2" => $data['description'], "3"=>$data['icon']]);
            $count=$this->db->rowCount();
            if($count!=0)
                $result="success";
            else
                $result="fail";
            $this->data['servicessadd']=$result;
        }


        public function add_data($data, $img) {
            $ekleyen = FName::get_id();
            $time = FName::time("int");
            $insert = $this->db->query("insert into  project(heading,project_name,img,time) values(:1,:2,:3,:4)", ["1" => $data["heading"], "2" => $data["project_name"], "3" => $img, "4" => $time]);
            $count=$this->db->rowCount();
            if($count!=0)
                $result="success";
            else
                $result="fail";
            $this->data['project']=$result;
            //en son elave olunanin id'si
            //$this->veri["blog_kayit_id"] = $this->db->lastInsertId();
        }

        public function edit_data($data , $img){
            $time = FName::time("int");
            if(empty($img)){
                $update = $this->db->row("update project set heading=:1, project_name=:2 where id=:3",["1"=>$data['heading'] , "2" => $data['project_name'], "3"=>$data['id']]);
            }else{
                $update = $this->db->row("update project set heading=:1, project_name=:2, img=:3 where id=:4",["1"=>$data['heading'] , "2" => $data['project_name'], "3" => $img, "4" =>$data['id']]);
                unlink(SERVERWAY . "application/source/img/portfolio/thumbnails/".$data['last_img']);
            }
           
        }
        
}

?>