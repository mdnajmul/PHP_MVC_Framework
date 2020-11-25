<?php

    class homeModel{
        
        function __construct(){
            try{
                //create database connection
                $this->con=new PDO('mysql:host=localhost;dbname=mvc','root','');
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        
        function pages($id){
            $sql="SELECT title,data FROM page WHERE id='$id'";
            $stmt=$this->con->prepare($sql);
            $stmt->execute();
            $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
            
            $arr=$data['0'];
            return $arr;
        }
    }

?>