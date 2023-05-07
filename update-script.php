<?php
include('database.php');
if(isset($_GET['edit'])){
  $id= $_GET['edit'];
  $editData= edit_data($connection, $id);
}

if(isset($_POST['update']) && isset($_GET['edit'])){
  $id= $_GET['edit'];
  update_data($connection,$id); 
} 

function edit_data($connection, $id)
{
  $query= "SELECT * FROM student_details WHERE id= $id";
  $exec = mysqli_query($connection, $query);
  $row= mysqli_fetch_assoc($exec);
  return $row;
}

function update_data($connection, $id){
  $prn= ($_POST['prn']);
  $full_name= legal_input($_POST['full_name']);
  $email_address= legal_input($_POST['email_address']);
  $class= legal_input($_POST['class']);
  $roll=($_POST['roll']);
  $city = legal_input($_POST['city']);
    
    $query="UPDATE student_details 
            SET prn='$prn',
                full_name='$full_name',
                email_address='$email_address',
                class='$class',
                rollno='$roll',
                city= '$city' WHERE id=$id";

    $exec= mysqli_query($connection,$query);
  
      if($exec){
         header('location:index.php');
        }
        else{
         $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
         echo "<script>alert('$msg');</script>";
        }
}

function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>