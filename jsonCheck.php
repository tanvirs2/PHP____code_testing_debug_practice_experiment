<?php
//include 'jsonProcess.php';

//getResult();
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<table style="margin: 0 40%" border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Action</td>
    </tr>



    <tr>
        <td></td>
        <td></td>
        <td><a href="home.php">New Entry</a></td>
        <td></td>
    </tr>
</table>

<script>
    $(document).ready(function(){
        var root = 'http://localhost/phpcrud/jsonProcess.php?getResult';

        $.ajax({
            url: root,
            //method: 'GET',
            success: function(data) {

                //var myData = {data};
                var myData = JSON.parse(data);
                //alert(data);
                alert(myData[0]['name']);
                //$("#myId").text(data.address.city);
                console.log(myData[0]);
            }
        });
    });
</script>