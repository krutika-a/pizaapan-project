<?php



$con=mysqli_connect("localhost","krutika","K.a.1195","products");
if(!$con)
{
    echo"please check db connection";
    echo mysqli_coonect_error($con);
}

$query="DELETE FROM product_menu
WHERE id='".$_GET["id"]."'";
$res=mysqli_query($con,$query);
if($res)
{
    header("Location: http://localhost/pizaapan-project/showproduct.php");
}
else
{
    echo "Data not deleted";
    echo musqli_error($con);
}


?>