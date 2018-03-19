<?php

function getResult()
{
    $link = mysqli_connect('localhost', 'root', '', 'phpcrud');

    $sql = "SELECT * FROM `users`";

    $result = mysqli_query($link, $sql);

    $arr=[];

    foreach ($result as $res) {
        //echo $res['name']. ' | ';
        $arr[] = [
            'id' => $res['id'],
            'name' => $res['name'],
            'email' => $res['email'],
        ];
    }

    echo json_encode($arr);

    //echo 'ds';
    //return 'bn';
}

if(isset($_GET['getResult'])){
    getResult();
}


//print_r($result);

?>


