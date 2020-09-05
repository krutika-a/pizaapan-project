<?php

error_reporting(0);
echo"<br>";
$con=mysqli_connect("localhost","krutika","K.a.1195","products");
if(!$con)
{
    echo"DB NOT CONNECTED";
    echo mysqli_connect_error($con);
}
else
{
    echo"DB CONNECTED";
}
echo"<br>";
echo"<br>";

print_r($_POST);


echo $insertquery="UPDATE product_menu SET
`title`='".$_POST['title']."',
`discription`='".$_POST['discription']."',
`price`='".$_POST['price']."',
`quantity`='".$_POST['quantity']."'
 WHERE id='".$_GET['id']."";

$res=mysqli_query($con,$insertquery);
if(!$res)
{
    echo"Data not updated";
    echo mysqli_error($con);
}
else
{
    echo"data updated";
}



echo"<br>";
echo"<br>";
?>


<html>
<form actiion="" method="post"><fieldset>
Title:<input type="text" name="title"/><br><br>
Discription:<input type="text" name="discription"/><br><br>
price:<input type="text" name="price"/><br><br>
Quantity:<input type="text" name="quantity"/><br><br>
submit:<input type="submit" name="submit" value="submit"/>
</fieldset></form>
</html>
