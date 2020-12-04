<?php

class Configmodel{
    
        protected $db = [];
        public $data = [];

        public function __construct()
        {
            $this->db= new DB();
        }

        public function config_page(){
            //bir setir melumat ucun row
            $info=$this ->db->row("select * from config");
            if(empty($info)){
                $result="This table is empty";
            }else{
                $result=$info;
            }
            $this->data['infopage'] = $result;
        }

}

?>