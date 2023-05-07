<?php
include('update-script.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP CRUD Operations</title>
<link rel="stylesheet" href="form.css">

</head>
<body>

<div class="student-detail">
    <div class="form-title">
    <h2>Update Student Details</h2>
    </div>

    <form method="post" action="">
          <label>PRN No.</label>
          <input type="number" placeholder="Enter 8 digit PRN No." name="prn" required value="<?php echo isset($editData) ? $editData['prn'] : '' ?>">    

          <label>Full Name</label>
          <input type="text" placeholder="Enter Full Name" name="full_name" required value="<?php echo isset($editData) ? $editData['full_name'] : '' ?>">

          <label>Email Address</label>
          <input type="email" placeholder="Enter Email Address" name="email_address" required value="<?php echo isset($editData) ? $editData['email_address'] : '' ?>">

          <label>Class</label>
          <input type="text" placeholder="Enter class (eg. TY-CS-D)" name="class" required value="<?php echo isset($editData) ? $editData['class'] : '' ?>">
          
          <label>Roll No.</label>
          <input type="number" placeholder="Enter Roll No." name="roll" required value="<?php echo isset($editData) ? $editData['rollno'] : '' ?>">

          <label>City</label>
          <input type="text" placeholder="Enter Full City" name="city" required value="<?php echo isset($editData) ? $editData['city'] : '' ?>">
          
          <button type="submit" name="update">Update Data</button>
    </form>
</div>

</body>
</html>