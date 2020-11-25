<?php

    //set default value for $controller & $function variable when controller & function not found in url
    $controller='home';
    $function='home';


    //if controller found inside url then hold controller value
    if(isset($_GET['controller']) && $_GET['controller']!=''){
        $controller=$_GET['controller'];
    }

    //if function found inside url then hold function value/name
    if(isset($_GET['function']) && $_GET['function']!=''){
        $function=$_GET['function'];
    }


    //validate
    if(file_exists('controller/'.$controller.'.php')){
        //Now include file from controller folder which are use in this file
        include('controller/'.$controller.'.php');

        //Now,create a class object for that page which comes from controller folder //
            //first,hold class name which used inside controller folder page
            $class_name=$controller.'Controller';
            //create object of '$class_name' class
            $obj=new $class_name();
            
            //check '$function' exists or not exists inside '$class_name' class
            if(method_exists($class_name,$function)){
                //now call function which hold by '$function' variable from url
                $obj->$function();
            }else{
                echo "Function not found!";
            }
    }else{
        echo 'Controller not found!';
    }

?>