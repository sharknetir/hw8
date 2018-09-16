<?php


class errors extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        //var_dump($errnum,$errtxt);
        $this->viewobject->render('errors/index');

    }
}