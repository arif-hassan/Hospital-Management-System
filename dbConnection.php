<?php
// creating variables

$db_host="localhost";
$dB_user="root";
$dB_password="password";
$dB_name="HospitalManagement";
$dB_port="3306";

// Creating Connection
$conn = new mysqli($db_host,$dB_user,$dB_password,$dB_name,$dB_port);
if ($conn->connect_error){
    die("Connection failed");
} 
//else {
  //  echo "Connect";
//}

?>