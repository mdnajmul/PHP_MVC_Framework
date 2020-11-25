<?php

/*
* Here, we use Classes & function to build controller
*/    


    class homeController{
        
        function __construct(){
            include('model/home.php');
            //create a object of homeModel class 
            $this->obj=new homeModel();
        }
        
        function home(){
            $arr=$this->obj->pages(1);
            include('view/header.php');
            include('view/page.php');
            include('view/footer.php');
        }
        
        function about(){
            $arr=$this->obj->pages(2);
            include('view/header.php');
            include('view/page.php');
            include('view/footer.php');
        }
        
        function contact(){
            $arr=$this->obj->pages(3);
            include('view/header.php');
            include('view/page.php');
            include('view/footer.php');
        }
    }

?>