<?php

class signup extends Controller{
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $phone;
    public $newsletter=0;//TODO (0) is null (1) is true newsleter

    public function __construct(){

        parent::__construct();
    }

    public function index(){
        $this->viewobject->render('signup/index',array('xyz'=>123456),1);
        if (isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['email'])&&isset($_POST['password'])){
            $this->test_input($this->firstname);
            $this->test_input($this->lastname);
            $this->test_input($this->email);
            $this->test_input($this->password);
            $this->test_input($this->phone);




            $this->firstname = $_POST['firstname'];
            $this->lastname = $_POST['lastname'];
            $this->email = $_POST['email'];
            $this->password = $_POST['password'];

            if (isset($_POST['phone'])){
                $this->phone = $_POST['phone'];

            }
            if(isset($_POST['newsletter'])){
                $this->newsletter = $_POST['newsletter'];
            }





        $user =new Signup_model();


        $alluser=array();
        $alluser['firstname']=$this->firstname;
        $alluser['lastname']=$this->lastname;
        $alluser['email']=$this->email;
        $alluser['password']=$this->password;
        $alluser['phone']=$this->phone;
        $alluser['newsletter']=$this->newsletter;
        $valid=$user->search($this->email);
        //var_dump($user->search($this->email));die();
        if ($valid==true){
            echo "<script>
    swal({
        icon: \"error\",
        text:\"This Email is Sign Up\",
        
    });
</script>";

        }else{
            $user->InsertToUser($alluser);


                echo "<script>swal({
                                icon: \"success\",
                                text: \"Success In Sign Up\",
                    });</script>";
                //header('Location: http://www.example.com/');
                return;

            }
        }


    }
}
