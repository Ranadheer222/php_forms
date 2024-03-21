<?php
 
 //print_r($_POST);
 
echo "welcome ".$_POST["first_name"];   
// echo $_POST["last_name"];

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$code=$_POST["country_code"];
$contact_number = $_POST["contact_num"];
$address= $_POST["address"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$birthdate = $_POST["birthdate"];
$pass1 = $_POST["pass1"];
$Confirm_password = $_POST["confirm_password"];


$servername = "localhost";  //giving db details to php file to get connected to db
$username = "root";
$password = "";
$db = "php_sessions";
 
$conn = new mysqli($servername, $username, $password, $db);
 
if($conn->connect_error){
    echo "Not connected to the database";     //checking whether db connected or not
 
}else{
    //echo "Connected to the database";
}

//inserting the data into the table

$sqlQuery = "INSERT INTO user_table (first_name, last_name, country_code,contact_number,  address, gender, email, birthdate, password, confirm_password)
VALUES ('$first_name', '$last_name', '$code','$contact_number', '$address', '$gender', '$email', '$birthdate', '$pass1','$Confirm_password')";


 
echo $sqlQuery;  //printing the sql query

if($conn->query($sqlQuery) == true){
    echo "data inserted successfully";   //getting print message whether the data inserted or not
}else{
    echo "error encountered while inserting data";
}
?>