<?php

class Admin_model extends Model{

    private $flagConnection=null;

    public function  __construct(){
        $this->flagConnection= parent::__construct();
      //  $this->InsertToUser();



    }


    public function searchall(){

        return $this->select('users',' * ');
    }

    public function UpdateUser($id){

        return $this->update($id,'users');

    }






}