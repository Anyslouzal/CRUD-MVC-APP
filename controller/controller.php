<?php
require "../model/model.php";

$cmd=$_GET["cmd"];
$model=new student();


if($cmd == "add"){
    $name=$_POST["name"];
    $old=$_POST["old"];
    $num=$_POST["num"];
    $email=$_POST["email"];
    
    $model->create($name,$old,$num,$email);

    header('Location: ../index.php');

}


if($cmd=="creat"){
    require "../view/form.php";
}



if($cmd=="list"){
    
    $data=$model->getall();

    require "../view/data.php";

}

 if($cmd=="modify"){

     $id= $_GET["id"];
     $name= $_GET["name"];
     $old=$_GET["old"];
     $num=$_GET["num"];
     $email=$_GET["email"];
    
    $model->update ($id,$name,$old,$num,$email);

    header("Location : ../view/data.php");
 }
  if ($cmd=="delete"){
    $id= $_GET["id"];

    $model->delete($id);
    header("Location : ../view/data.php");

  }

?>