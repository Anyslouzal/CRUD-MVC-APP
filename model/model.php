<?php
require ('../config/db_conn.php');

class model_student {

    private $cnx ;

   public function __construct (){
        $this->cnx=cnx();
    }

   public function creat_student($name,$old,$numb,$email){
   $statement=$this->cnx->prepare("INSERT INTO student (name,old,numb,email) values (?,?,?,?)");
   $statement->bindParam(1,$name);
   $statement->bindParam(2,$old);
   $statement->bindParam(3,$numb);
   $statement->bindParam(4,$email);
   $statement->execute();
   $
   }

   public function update($id,$name,$old,$numb,$email){
    $statement=$this->cnx->prepare("UPDATE student set name=?,old=?,numb=?,email=? WHERE id=?");
    $statement->bindParam(1,$name);
    $statement->bindParam(2,$old);
    $statement->bindParam(3,$numb);
    $statement->bindParam(4,$email);
    $statement->bindParam(5,$id);
    $statement->execute();
   }

   public function delete($id){
   $statement=$this->cnx->prepare("DELETE FROM student WHERE id=?");
   $statement->bindParam(1,$id);
   $statement->execute();
   }

   public function getall(){
    $statement=$this->cnx->prepare("SELECT * from student");
    $statement->execute();
    $data=$statement->fetchAll();
    return $data;
   }
}
?>