<?php

class Adminmodel{
    
        protected $db = [];
        public $data = [];

        public function __construct()
        {
            $this->db= new DB();
        }

        public function add_message(){
           
            $info=$this ->db->row("select * from admin");
            if(empty($info)){
                $result="This table is empty";
            }else{
                $result=$info;
            }
            $this->data['infoadmin'] = $result;
        }

}

?>