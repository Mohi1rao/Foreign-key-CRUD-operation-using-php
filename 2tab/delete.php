<?php

include'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];


     //$sql="DELETE FROM `crud` WHERE id=$id";


    // $sql = "DELETE c,c1 FROM crud c,crud1 c1 ON c.emp_id = c1.emp_id WHERE c.emp_id=$id";

     $sql = "DELETE crud,crud1 FROM crud INNER JOIN crud1 ON crud.emp_id = crud1.crud_id WHERE crud.emp_id = $id";

     $result=mysqli_query($conn,$sql);
     if($result)
     {
         header('location:display.php');
     }
}

?>