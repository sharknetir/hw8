<?php

class admin extends Controller{
public $view_table;
    public function __construct(){
        parent::__construct();
        Session::init();

    }

    public function index(){
        if (Session::getSession('login')){

            $table=new Admin_model();
            $this->view_table=$table->searchall();
            //var_dump($view_table);die();
            $this->viewobject->render('admin/index',$this->view_table,1);

        }else{
            header('Location:  '.URL."/hw8/login/index");
        }


        return;
    }
    public function update($id){

    if (isset($id)){
        $id=explode('*',$id);
        $table=new Admin_model();
        $table->UpdateUser($id);
        header('Location:../index');
        //$this->viewobject->render('admin/index',$this->view_table,1);
        return;
}
    }


}
