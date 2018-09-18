<?php 

class Site_model extends Model{

 private $flagConnection=null;

 public function  __construct(){
    $this->flagConnection= parent::__construct();



 }

 public function view(){
     return $this->select('products',' * ',1,0);

 }

    public function view_by_id($id){
        return $this->select('products',' * ',"product_id='$id'" ,0);

    }

    public function ajax_serach($table,$cahr){
     return $this->search($table,$cahr);
    }




  

}