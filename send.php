<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$time = date("YmdHis"); 

$phone = (int)$phone;
$name = '\''.$name.'\'';
$email = '\''.$email.'\'';

$conn = new mysqli("localhost", "root", "", "EnglishTest");
if($conn->connect_error){ die("Ошибка: " .$conn->connect_error); } 

$sql = "INSERT INTO applications (timestamp, name, phone, email) VALUES ($time, $name, $phone, $email)";

if($conn->query($sql)){
    // echo "Данные успешно добавлены";
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();


?>