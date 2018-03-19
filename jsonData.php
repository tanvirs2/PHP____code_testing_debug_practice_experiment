<?php
/**
 * Created by PhpStorm.
 * User: Tanvir
 * Date: 17-Oct-17
 * Time: 5:09 PM
 */
header('Access-Control-Allow-Origin: *');
$link = mysqli_connect('localhost', 'root', '', 'crud');

$sql = "SELECT * FROM `users`";

$result = mysqli_query($link, $sql);


foreach ($result as $data) {
    $myArr[] = [
        'id' => $data['id'],
        'name' => $data['name'],
        'email' => $data['email'],
    ];
}

$myJson = json_encode($myArr);
echo $myJson;