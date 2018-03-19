<?php
/**
 * Created by PhpStorm.
 * User: Tanvir
 * Date: 4/21/2017
 * Time: 11:22 AM
 */

$id = $_GET['id'];

$link = mysqli_connect('localhost', 'root', '', 'phpcrud');

if (mysqli_connect_errno()) {
    echo 'Connect Failed' . mysqli_connect_error();
    exit();
}

$sql = "DELETE FROM `users` WHERE `users`.`id` = '$id'";

if (mysqli_query($link, $sql) == true) {
    echo 'Data Added';
}

header('location:dataList.php');