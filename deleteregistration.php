<?php
error_reporting(0);
if(isset($_GET["id"]) && $_GET["id"] != "")
{

$con=mysqli_connect("localhost","krutika","K.a.1195","registration_page");

if(!$con)
{
 echo "DB NOT CONNCETD";
echo mysqli_connect_error($con);

}	
 else
{
 echo "DB  CONNCETD";
}


$insertquery="DELETE FROM information 
WHERE id= '".$_GET["id"]."'";
$res=mysqli_query($con,$insertquery);
if($res)
{
    header("Location: http://localhost/pizaapan-project/showregistration.php");
}
else
{
    echo "Data not deleted";
    echo musqli_error($con);
}
}
else
{
 exit("please provide id");
}
?>