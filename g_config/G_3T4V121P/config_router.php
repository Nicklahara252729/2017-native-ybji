<?php
class Nick{
    private $nickConHost = "localhost";
    private $nickConUser = "root";
    private $nickConPass = "";
    private $nickConDb = "ybji";
    function __construct(){
        try{
            $nickConnection = new PDO("mysql:host=$this->nickConHost;dbname=$this->nickConDb", $this->nickConUser, $this->nickConPass);
            //echo "connected";
            $nickConnection = null;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}
?>