<?php
/**
 * Created by PhpStorm.
 * User: Tanvir
 * Date: 4/21/2017
 * Time: 11:22 AM
 */

$name = $_POST['name'];
$email = $_POST['email'];
$id = $_GET['id'];
//echo $id;

$link = mysqli_connect('localhost', 'root', '', 'phpcrud');

if (mysqli_connect_errno()) {
    echo 'Connect Failed' . mysqli_connect_error();
    exit();
}

$sql = "UPDATE `users` SET `name` = '$name', `email` = '$email' WHERE `users`.`id` = '$id'";

if (mysqli_query($link, $sql) == true) {
    echo 'Data Added';
}

header('location:dataList.php');