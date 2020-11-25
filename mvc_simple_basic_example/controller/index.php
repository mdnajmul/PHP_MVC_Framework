<?php


    //Here, if page found from url then hold that page value inside '$page' variable.Otherwise set 'home' value inside '$page' variable 
        $page='home';
        if(isset($_GET['page'])){
            $page=$_GET['page'];
        }

    include('model/index.php');

        if($page=='home'){
          include('view/home.php');  
        }else if($page=='about'){
          include('view/about.php');  
        }else{
          include('view/404.php');  
        }


?>