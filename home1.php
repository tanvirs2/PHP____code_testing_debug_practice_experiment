<?php

phpinfo();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="process.php" method="post">
<table style="margin: 0 40%">
    <tr>
        <td>Name</td>
        <td>Email</td>
    </tr>
    <tr>
        <td><input type="text" name="name"></td>
        <td><input type="text" name="email"></td>
    </tr>
    <tr>
        <td><button type="submit">Submit</button></td>
    </tr>

</table>
</form>
</body>
</html>