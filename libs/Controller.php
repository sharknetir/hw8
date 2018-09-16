<?php 

class Controller {
    public $viewobject=null;
    //public $data;

   public function __construct(){
     $this->viewobject=new View();
     //$test=$_SERVER["REQUEST_URI"];
     //echo "class base and <br><br>.$test";
   }
    public function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


}