 <!---connect with database---->
<?php
 
$con = mysqli_connect("localhost", "root","","ODS_DB");

if(!$con){
 die('Connection Failed'.mysqli_connect_error());
}
?>