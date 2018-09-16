<?php

class Login_model extends Model{

    private $flagConnection=null;

    public function  __construct(){
        $this->flagConnection= parent::__construct();


    }


    public function search($username_and_password){

        return $this->select('users',' email ',"email = '$username_and_password[0]' AND password = '$username_and_password[1]'",1);
    }

    public function access_level($email){
        return $this->select('users','access_level',"email='$email'",1);
    }







}