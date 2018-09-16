<?php 

class View {
    public $param_view;

    public function __contruct(){

    }

    public function render($name, $params=array(),$loadTheme=0){
        if($loadTheme==0)
            $this->header();

        $this->param_view=extract($params);
        //var_dump($params);

        require("views/$name.php");

        if($loadTheme==0)
            $this->footer();
    return;
    }

    public function header(){
        require("views/header.php");
    }

    public function footer(){

        require("views/footer.php");

    }

}