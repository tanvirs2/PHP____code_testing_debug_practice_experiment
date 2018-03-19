<?php

function dd($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    exit();
}

function databaseConnect(){
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "db_crud";
	
	$link = mysqli_connect($host,$user,$pass,$db);

	if(!$link){
		die('Connection Failed ' .mysqli_connect_error());
	} else {
        return $link;
    }
}



function insertData($data){

	$link = databaseConnect();
    //dd(databaseConnect());
	if(isset($data['btn'])){
		$name = mysqli_real_escape_string($link, $data['name']);
		$email = mysqli_real_escape_string($link, $data['email']);
		$pass = mysqli_real_escape_string($link, $data['pass']);
		$mobile = mysqli_real_escape_string($link, $data['mobile']);

		
		$pass = password_hash($pass, PASSWORD_DEFAULT);
		
		$query = "INSERT INTO members (name,email,password,mobile) VALUES('$name','$email','$pass','$mobile')";
		if(mysqli_query($link,$query)){
			$msg = "Data Inserted Successfully";
		}else{
			$msg = "Error Inserting Data " . mysqli_connect_error($link);
		}
		mysqli_close($link);
	}
	return $msg;
}
?>