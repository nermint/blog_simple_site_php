<?php

class Adminmodel{
    
        protected $db = [];
        public $data = [];

        public function __construct()
        {
            $this->db= new DB();
        }

        public function admin_login(){
           
            $info=$this ->db->row("select * from admin");
            if(empty($info)){
                $result="This table is empty";
            }else{
                $result=$info;
            }
            $this->data['infoadmin'] = $result;
        }

        public function show_message(){
            $info=$this->db->query("select * from message");
            if(empty($info)){
                $result="This table is empty";
            }else{
                $result=$info;
            }
            $this->data['infomessage'] = $result;
        }
        public function msg_count(){
            $info=$this->db->query("select * from message where seen=0");
            $count =$this ->db -> rowCount();
            $this->data['countrow']= $count;
        }

        public function show_single_message($id=""){
            $info=$this->db->row("select * from message where id=:1",["1" => $id]);
            if(empty($info)){
                $result="This table is empty";
            }else{
                $result=$info;
            }
            $this->data['infomessage'] = $result;
        }


        public function read_message_now($id=""){
            $update = $this ->db->row("update message set seen=1 where id=:1",["1" => $id]);
        }

        public function delete_single_message($id=""){
            $delete = $this ->db->row("delete from message where id=:1",["1"=>$id]);
        }


        public function show_all_services(){
            $info=$this->db->query("select * from services");
            $count=$this->db->rowCount();
            if($count!=0)
                $result=$info;
            else{
                $result="This table is empty";
            }
            $this->data['infoservices']=$result;
        }

        public function delete_single_services($id=""){
            $delete = $this ->db->row("delete from services where id=:1",["1"=>$id]);
        }

        public function show_all_projects(){
            $info=$this->db->query("select * from project");
            $count=$this->db->rowCount();
            if($count!=0)
                $result=$info;
            else{
                $result="This table is empty";
            }
            $this->data['project']=$result;
        }

        public function delete_project ($imgname){
            $delete = $this ->db->row("delete from project where img=:1",["1"=>$imgname]);
            unlink(SERVERWAY . "application/source/img/portfolio/thumbnails/".$imgname);
        }

        public function show_single_project($id=""){
            $single = $this-> db -> row("select * from project where id=:1",["1"=>$id]);
            $count=$this->db->rowCount();
            if($count !=0){
                $result=$single;
            }else{
                $result="This table is empty";
            }
            $this->data['single_project'] = $result;
        }
}

?>