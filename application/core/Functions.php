<?php

class FName{

    //burada sehifede iwlenen funksiyalar yazilir
    public function __construct() {
        
    }
    
    //serialize dan alinan melumatlari ayirmaq
    //ona gore static edirikki birbawa class adi ile muraciet ede bilek
    public static function parse($value){
        parse_str($value, $output);
        return $output;
    }

    public static function status(){
        if(isset($_SESSION['login']))
            return true;
        else
            return false;
    }

    public static function signout(){
        session_destroy();
        header("Location:".HOME."admin");
    }
    public static function get_id(){
        return $_SESSION["login"]["id"];
    }

    public static function time($deger, $value = "") {
        switch ($deger) {
            case "int":
                //return strtotime(date("d.m.Y H:i:s"));
                return date("Y-m-d");
                break;
            case "yaz":
                return (date("d.m.Y H:i:s", $value));
                break;

            default:
                break;
        }
    }
}

?>