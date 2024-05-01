<?php
$id=$_GET['takeid'];
echo $id;
$con = mysqli_connect('localhost', 'root', '', "dj");
$sql="UPDATE `dj`.`book_request` SET `status` = 'cancel' WHERE `book_request`.`id` ='$id'";
$result=mysqli_query($con,$sql);
if($result)
{
    header("location:cancel.php");
}
?>