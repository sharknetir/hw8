<?php 

class Site_model extends Model{

 private $flagConnection=null;

 public function  __construct(){
    $this->flagConnection= parent::__construct();



 }

 public function view(){
     return $this->select('products',' * ',1,0);

 }




  

}