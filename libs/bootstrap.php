<?php 
//  var_dump($_SERVER["REQUEST_URI"]);
 $request=$_SERVER["REQUEST_URI"];
 $request=explode('/',$request);
//===============controller=================
 if(file_exists('Controllers/'.$request[2].".php"))
 {
     require('Controllers/'.$request[2].".php");
     $model=ucfirst($request[2])."_model";
     if ($request[2]!="errors") {
         require('models/' . $model . ".php");
     }
 }else{
     require_once('./Controllers/errors.php');
     function customError($errno, $errstr) {
     $err=new errors();
     $err->index($errno,$errstr);
     }
     set_error_handler("customError");

     //require_once('index.php');
   die;
 }
 //================end controller===========
if ($request[2]=="errors"){
    $currentcontroller= new $request[2]();

}else{

    $currentmodel= new  $model;
    $currentcontroller= new $request[2]($currentmodel);

}
$currentfunction=$request[3];
if(method_exists($currentcontroller,$currentfunction)){

    if(isset($request[7])){

        $currentcontroller->$currentfunction($request[4],$request[5],$request[6],$request[7]);

    }elseif(isset($request[6])){

        $currentcontroller->$currentfunction($request[4],$request[5],$request[6]);
    
    }elseif(isset($request[5])){

        $currentcontroller->$currentfunction($request[4],$request[5]);
    
    }elseif(isset($request[4])){

        $currentcontroller->$currentfunction($request[4]);
    
    }else{
        $currentcontroller->$currentfunction();
    }
}

