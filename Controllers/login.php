<?php

class login extends Controller{
    public $password;
    public $email;

    public function __construct(){
        parent::__construct();
        Session::init();

    }

    public function index(){
        $this->viewobject->render('login/index',array('xyz'=>123456),1);
        if (isset($_POST['email'])&&isset($_POST['password'])){

            $this->email=$_POST['email'];
            $this->password=$_POST['password'];

            $user =new Login_model();
            $alluser=array();
            array_push($alluser,$this->email);
            array_push($alluser,$this->password);
            $user->search($alluser);
            $access=$user->access_level($this->email);

            //var_dump();die();
            if ($user->search($alluser)==true){
                if ($access['access_level']==1){
                    Session::setSession('login', $this->email);

                    echo "<script>swal({
                                                icon: \"success\",
                                                text: \"Success In Sign Up\",
                                    });</script>";

                }else{
                    echo "<script>swal({
                        icon: \"error\",
                        text:\"This email has not yet been verified by the admin\"
                   });</script>";

                }

            }else{
                echo "<script>swal({
                        icon: \"error\",
                        text:\"This email has not been registered yet\"
                   });</script>";

            }

            return;


        }





        return;
      }

    public function logout(){

        Session::sessionDeath();
        $this->index();
    }
}
