<?php
include('database.php');
if(isset($_POST['create'])){   
  $msg=insert_data($connection);
}

function insert_data($connection){
   
      $prn= ($_POST['prn']);
      $full_name= legal_input($_POST['full_name']);
      $email_address= legal_input($_POST['email_address']);
      $class= legal_input($_POST['class']);
      $roll=($_POST['roll']);
      $city = legal_input($_POST['city']);
      $query="INSERT INTO student_details (prn,full_name,email_address,class,rollno,city) VALUES ('$prn','$full_name','$email_address','$class','$roll','$city')";
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