<?php
/**
 * Created by PhpStorm.
 * User: Tanvir
 * Date: 4/21/2017
 * Time: 9:15 AM
 */

$name = $_POST['name'];
$email = $_POST['email'];


$link = mysqli_connect('localhost', 'root', '', 'phpcrud');

if (mysqli_connect_errno()) {
    echo 'Connect Failed' . mysqli_connect_error();
    exit();
}

$sql = "INSERT INTO `users` (`id`, `name`, `email`) VALUES (NULL, '$name', '$email')";

if (mysqli_query($link, $sql) == true) {
    echo 'Data Added';
}

header('location:dataList.php');