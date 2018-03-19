<?php
$link = mysqli_connect('localhost', 'root', '', 'phpcrud');

$sql = "SELECT * FROM `users`";

$result = mysqli_query($link, $sql);

//$sql2 = "SELECT MAX(id), name FROM users";
//$sql2 = "SELECT LAST_INSERT_ID()";
//$sql2 = "SELECT LAST_INSERT_ID() FROM table";
/*$sql2 = "INSERT INTO users (name) VALUE ('dsaads')";
$res2 = mysqli_query($link, $sql2);




$id = "SELECT LAST_INSERT_ID() FROM users";
$rId = mysqli_query($link, $id);
$fid = mysqli_fetch_array($rId);

echo $fid[0];*/

//echo 'dfsf ' . $rId;
//$lstRow = mysqli_fetch_array($res2);
//echo "New record has id: " . mysqli_insert_id($link);

$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//mysql_select_db('phpcrud');
//mysql_query("INSERT INTO users (name) values ('kossu')");
//printf("Last inserted record has id %d\n", mysql_insert_id());
?>
<pre>
    <?php
    //print_r($lstRow);
    ?>
</pre>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="process.php" method="post">
    <table style="margin: 0 40%" border="1">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Action</td>
        </tr>
        <?php
        foreach ($result as $data) {
            $myArr[] = [
                   'id' => $data['id'],
                   'name' => $data['name'],
                   'email' => $data['email'],
            ]
        ?>
        <tr>
            <td><?php echo $data['id']?></td>
            <td><?php echo $data['name']?></td>
            <td><?php echo $data['email']?></td>
            <td>
                <a href="editData.php?id=<?php echo $data['id']?>">Edit</a> |
                <a href="deleteData.php?id=<?php echo $data['id']?>">Delete</a>
            </td>
        </tr>
        <?php }
        echo '<pre>';

        $myJson = json_encode($myArr);
        print_r($myJson);
        //return 'asd';
        echo '</pre>';
        ?>
        <a href="jsonData.php?jsonData="></a>
        <tr>

        </tr>
        <tr>

        </tr>
        <tr>

        </tr>
        <tr>

        </tr>
        <tr>

        </tr>
        <tr>

        </tr>
        <tr>

        </tr>
        <tr>

        </tr>

        <tr>
            <td></td>
            <td></td>
            <td><a href="home.php">New Entry</a></td>
            <td></td>
        </tr>
    </table>
</form>

<form action="jsonData.php" method="get">
    <input type="text" name="name" value="vung">
    <input type="text" name="age" value="chung">
    <button type="submit">Sav</button>
</form>

</body>
</html>