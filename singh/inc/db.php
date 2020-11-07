<?php 

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="singh_construction";
$db_port=3306;

$con=new mysqli($db_host,$db_user,$db_password,$db_name,$db_port);

if($con->connect_error){
	die("Connection Failed");
}
// else{
// 	echo "Connection Succesfully";
// }

?>