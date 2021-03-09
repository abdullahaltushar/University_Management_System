<?php

session_start();
if ($_SESSION['id'] == null) {
    header('Location: index.php');
}
require_once '../Apps/classes/Database.php';
require_once '../Apps/classes/Login.php';
$login = new \App\classes\Login();
if (isset($_GET['logout'])) {
    $login->adminLogout();
}
$con = mysqli_connect('localhost', 'root', '', 'umsystem');
$sql = "SELECT * FROM `teachaer`";
$id=$_GET['id'];
$sql="DELETE FROM `teachaer` WHERE id=$id";
$query=mysqli_query($con,$sql);
header('location: manage_teacher.php');
?>

