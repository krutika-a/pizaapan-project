<?php
error_reporting(0);
$con=mysqli_connect("localhost","krutika","K.a.1195","registration_page");
if(!$con)
{
    echo"DB NOT CONNECTED";
    echo mysqli_connect_error($con);
}
else
{
    echo"DB CONNECTED";
}



$query="SELECT * FROM information";
echo ($query);
$res=mysqli_query($con,$query);
if(!$res)
{
    echo"false";
    echo mysqli_error($con);
}
else{
    echo "true";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<a href="registred.php"><button type="button" class="btn btn-success">Registerc</button></a>
<div class="container">

  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Password</th>
        <th>contact-Number</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Hobbies</th>
        <th>City</th>
  
      </tr>
    </thead>
    <tbody>
    <?php while($registration_page=mysqli_fetch_assoc($res)){ ?>
      <tr>
        <td><?php echo $registration_page["firstname"];?></td>
        <td><?php echo $registration_page["lastname"];?></td>
        <td><?php echo $registration_page["email"];?></td>
        <td><?php echo $registration_page["password"];?></td>
        <td><?php echo $registration_page["contact"];?></td>
        <td><?php echo $registration_page["address"];?></td>
        <td><?php echo $registration_page["gender"];?></td>
        <td><?php echo $registration_page["hobbies"];?></td>
        <td><?php echo $registration_page["city"];?></td>
        <td><a href="edit.php?id=<?php echo $registration_page["id"];?>">Edit</a> || <a href="deleteregistration.php?id=<?php echo $registration_page["id"];?>">Delete</a></td>
    
    <?php }?>

      
    </tbody>
  </table>
</div>

</body>
</html>




