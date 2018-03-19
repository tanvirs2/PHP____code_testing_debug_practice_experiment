<?php
$id = $_GET['id'];

$link = mysqli_connect('localhost', 'root', '', 'phpcrud');
$sql = "SELECT * FROM `users` WHERE id='$id'";

$result =  mysqli_query($link, $sql);

$row = mysqli_fetch_array($result);

//print_r($row);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="updateData.php?id=<?php echo $row['id']?>" method="post">
    <table style="margin: 0 40%">
        <tr>
            <td>Name</td>
            <td>Email</td>
        </tr>
        <tr>
            <td><input type="text" name="name" value="<?php echo $row['name']?>"></td>
            <td><input type="text" name="email" value="<?php echo $row['email']?>"></td>
        </tr>
        <tr>
            <td><button type="submit">Update</button></td>
        </tr>

    </table>
</form>
</body>
</html>