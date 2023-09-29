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

?>