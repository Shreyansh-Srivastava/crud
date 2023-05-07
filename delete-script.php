<?php
include("database.php");
if(isset($_GET['delete'])){

    $id= $_GET['delete'];
  delete_data($connection, $id);

}
function delete_data($connection, $id){
   
    $query="DELETE from student_details WHERE id=$id";
    $exec= mysqli_query($connection,$query);

    if($exec){
      header('location:index.php');
    }else{
      $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
      echo "<script>alert('$msg');</script>";
    }
}
?>