<?php
session_start();

$host = "localhost";
$username = "root"; 
$password = "";    
$dbname = "login";

$conn = new mysqli($host, $username, $password, $dbname);


$users = [
    "admin" => "1234", 
    "user" => "abcd"
];


$username = $_POST['username'];
$password = $_POST['password'];


if (isset($users[$username]) && $users[$username] === $password) {
   
    $_SESSION['username'] = $username;

    
    header("Location: Dashboard.php");
    exit;
} else {
   
    echo "Username atau password salah.";
}
?>
