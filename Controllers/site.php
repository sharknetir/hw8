<?php 
class site extends Controller{
public $mymodel=null;
public $view_products;
public function __construct($model){
  parent::__construct();
  Session::init();
  $this->mymodel=$model;
 // var_dump($this->mymodel);die();
}

  public function index(){
    $pro=new Site_model();
    $this->view_products=$pro->view();
    $this->viewobject->render('site/index',$this->view_products,0);

     return;
   }

  public function insert($a=null,$b=null){
   if($a && $b)
     echo  ($a+$b);
   else
     echo "Error: \"Your Variable is not valid\"";
  }



}
