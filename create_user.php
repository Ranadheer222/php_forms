<?php
 
// print_r($_POST);
 
echo "Hello ".$_POST["first_name"];
// echo $_POST["last_name"];

 $first_name = $_POST["first_name"];
 $last_name = $_POST["last_name"];
 $contact_number = $_POST["contact_num"];
 $code=$_POST["code"];
$address= $_POST["place"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$birthdate = $_POST["date"];


$servername = "localhost";
$username = "root";
$password = "";
$db = "php_sessions";
 
$conn = new mysqli($servername, $username, $password, $db);
 
if($conn->connect_error){
    echo "Not connected";
 
}else{
    //echo "Connected";
}



$sqlQuery = "INSERT INTO user (first_name, last_name, contact_number, country_code, address, gender, email, birthdate)
VALUES ('$first_name', '$last_name', '$contact_number', '$code', '$address', '$gender', '$email', '$birthdate')";


 
echo $sqlQuery;

if($conn->query($sqlQuery) == true){
    echo "inserted data";
}else{
    echo "some error";
}
?>