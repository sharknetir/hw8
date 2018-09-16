<?php

class Signup_model extends Model{

    private $flagConnection=null;
    public $data;

    public function  __construct(){
        $this->flagConnection= parent::__construct();
        //$this->InsertToUser();



    }

    /**
     * @array $alluser
     */
    public function InsertToUser($alluser){

      return  $this->insert($alluser,'users');



    }
    public function search($email){
       return   $this->select('users',' * ',"email = '$email'",1);
        //var_dump($this->select('users',' * ',"email = '$email'",1));die();

    }






}