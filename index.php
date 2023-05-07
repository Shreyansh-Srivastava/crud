<?php
include('read-script.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="formt.css">
<title>PHP CRUD Operations</title>
</head>

<body>
<div class="table-data">
    <div class="list-title">
        <h2><span>Student-Details Table </span></h2><a href="create-form.php" class="boxBtn">Add Data</a><br>
    </div>

    <table border="1">
        <thead>
            <th><u>Sr. No.</u></th>
            <th><u>PRN No.</u></th>
            <th><u>Full Name</u></th>
            <th><u>Email Address</u></th>
            <th><u>Class</u></th>
            <th><u>Roll No.</u></th>
            <th><u>City</u></th>
            <th><u>Edit</u></th>
            <th><u>Delete</u></th>
        </thead>       
<?php
        if(count($fetchData)>0){
        $sn=1;
        foreach($fetchData as $data){          
?>
<tbody>
<tr>
<td><?php echo $sn; ?></td>
<td><?php echo $data['prn']; ?></td>
<td><?php echo $data['full_name']; ?></td>
<td><?php echo $data['email_address']; ?></td>
<td><?php echo $data['class']; ?></td>
<td><?php echo $data['rollno']; ?></td>
<td><?php echo $data['city']; ?></td>
<td><a href="update-form.php?edit=<?php echo $data['id']; ?>"class="Btn1">Edit</a></td>
<td><a href="delete-script.php?delete=<?php echo $data['id']; ?>"class="Btn2">Delete</a></td>
</tr> 

<?php
    $sn++;
        }
        }
        else{         
?>
      <tr>
        <td colspan="9"><center>No Data Found</center></td>
      </tr>               
<?php
    }
?> 
</tbody>
    </table>
    </div>
</body>
</html>