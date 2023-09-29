<?php
function cnx () {
    $host="localhost";
    $dbname="school";
    $username="root";
    $pwd="";
   
    try{
       $conn=new PDO("mysql:host=$host;dbname=$dbname",$username,$pwd);
       return $conn;
    }catch(Exception $e){
       return null;
    }
}

?>