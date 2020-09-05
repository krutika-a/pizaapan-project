<?php

error_reporting(0);


//connection with database
$con=mysqli_connect("localhost","krutika","K.a.1195","products");
if(!$con)
{
    echo "Error in DB connection";
    echo mysqli_connect_error($con);
    exit;
}



$query="SELECT * FROM  product_menu";
echo($query);
$res=mysqli_query($con,$query);

//echo $res; object data type so its now have power to echo object data type
//$data=mysqli_fetch_array($res);   .... this is for single fetch -only last enter enty retrive
//print_r($data);
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

<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
    <a href="addproducts.php"><button type="button" class="btn btn-success">ADDc</button></a>
    <div class="container">
      <tr>
        <th>Title</th>
        <th>Discription</th>
        <th>price</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>

    <?php while($product_menu=mysqli_fetch_assoc($res)) { ?>
      <tr>
        <td><?php echo $product_menu["title"];?></td>
        <td><?php echo $product_menu ["discription"];?></td>
        <td><?php echo $product_menu ["price"];?></td>
        <td><?php echo $product_menu ["quantity"];?></td>
        <td><a href="editproduct.php?id=<?php echo $product_menu["id"];?>"> Edit</a> || <a href="deleteproduct.php?id=<?php echo $product_menu["id"];?>">Delete</a></td>
    </tr>
    <?php } ?>

    
    </tbody>
  </table>
</div>

</body>
</html>


?>