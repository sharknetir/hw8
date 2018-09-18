<?php 
class site extends Controller{
public $mymodel=null;
public $view_products;
public function __construct($model){
  parent::__construct();
  Session::init();
  //Session::setSession('qty',0);

    $this->mymodel=$model;
}

  public function index(){
    $pro=new Site_model();
    $this->view_products=$pro->view();
    $this->viewobject->render('site/index',$this->view_products,0);

     return;
   }

  public function products($id_product){
      $pro_select=new Site_model();
      $this->view_products=$pro_select->view_by_id($id_product);
      $this->viewobject->render('site/products',$this->view_products,0);

      return;

  }
  public function checkout(){
      $pro1=new Site_model();
      $this->view_products=$pro1->view();

      $this->viewobject->render('site/checkout',$this->view_products,0);
      return;

  }



}
