<?php
mysql_connect("dimpy1986.db.13768750.hostedresource.com", "dimpy1986", "Theo1986@") or die("Connection Failed");
mysql_select_db("dimpy1986")or die("Connection Failed");
$user = $_POST['user'];
$password = $_POST['userpassword'];
$query = "UPDATE test SET password = '$password' WHERE name = '$user'";
if(mysql_query($query)){
echo "updated";}
else{
echo "fail";}
?>