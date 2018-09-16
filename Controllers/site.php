<?php 
class site extends Controller{
public $mymodel=null;
public function __construct($model){
  parent::__construct();
  Session::init();
  $this->mymodel=$model;
 // var_dump($this->mymodel);die();
}

  public function index(){
    //$myuser=$this->mymodel->search("'ali'");
    //var_dump($this->mymodel->search("'ali'"));die();
    $this->viewobject->render('site/index');

     return;
   }

  public function insert($a=null,$b=null){
   if($a && $b)
     echo  ($a+$b);
   else
     echo "Error: \"Your Variable is not valid\"";
  }
}
