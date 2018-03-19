<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="col-md-3"></div>
<div class="col-md-6">
    <form action="" method="post">
        <table>
            <tr>
                <td><input style="background: white" name="" type="text" value=""></td>
                <td><input name="size[]" type="text" value="M"></td>
                <td><input name="size[]" type="text" value="L"></td>
                <td><input name="size[]" type="text" value="XXL"></td>
            </tr>
            <tr>
                <td><input name="color[]" type="text" value="Red"></td>
                <td><input name="qty[]" type="text" value="a"></td>
                <td><input name="qty[]" type="text" value="b"></td>
                <td><input name="qty[]" type="text" value="c"></td>
            </tr>
            <tr>
                <td><input name="color[]" type="text" value="Blue"></td>
                <td><input name="qty[]" type="text" value="d"></td>
                <td><input name="qty[]" type="text" value="e"></td>
                <td><input name="qty[]" type="text" value="f"></td>
            </tr>
            <tr>
                <td><input name="color[]" type="text" value="Green"></td>
                <td><input name="qty[]" type="text" value="g"></td>
                <td><input name="qty[]" type="text" value="h"></td>
                <td><input name="qty[]" type="text" value="i"></td>
            </tr>
            <tr>
                <td class="mmm"><input class="Item" name="color[]" type="text" value="Yellow"></td>
                <td><input name="qty[]" type="text" value="j"></td>
                <td><input name="qty[]" type="text" value="k"></td>
                <td><input name="qty[]" type="text" value="l"></td>
            </tr>
            <tr>
                <td class="mmm"><input class="Item" name="color[]" type="text" value="Pink"></td>
                <td><input name="qty[]" type="text" value="j"></td>
                <td><input name="qty[]" type="text" value="k"></td>
                <td><input name="qty[]" type="text" value="l"></td>
            </tr>
        </table>
        <br>
        <br>
        <input type="submit" value="submit">
        <br>
        <br>
        <hr>
    </form>
    <pre>
<?php

// ONE ARRAY TO MULTI ARRAY
$chankArr = array_chunk($_POST['qty'], count($_POST['size']));
//print_r($_POST['qty']);
foreach ($chankArr as $k1 => $val1) {
    foreach ($val1 as $k2 => $val2) {
        //$finalOneArr[] = 'Size:'.$_POST['size'][$k2].'| Quantity:'.$val2.'| Color:'.$_POST['color'][$k1];
        $finalOneArr[] =
            [
                'size' => $_POST['size'][$k2],
                'Color' => $_POST['color'][$k1],
                'Quantity' => $val2
            ];
    }
}

foreach ($finalOneArr as $rows){
    $Quantity[] = $rows['Quantity'];
    $color[] = $rows['Color'];
    $size[] = $rows['size'];
}


$unqSize = array_unique($size);
$unqColor = array_unique($color);

$lastChnkArr = array_chunk($Quantity, count($unqSize));

foreach ($unqColor as $item) {
    $itemArr[] = $item;
}

print_r($itemArr);

/*$new_row =
    [
        'bn' => [
            'Year' => 2011,
            'Value' => 10000
        ],
        'ind' => [
            'Year' => 2012,
            'Value' => 20000
        ],
        'bn' => [
            'Year' => 2011,
            'Value' => 10000
        ],
        'bn' => [
            'Year' => 2011,
            'Value' => 10000
        ],
        'bn' => [
            'Year' => 2011,
            'Value' => 10000
        ],
    ];*/
?>
        </pre>
    <table border="" class="table table-bordered">
        <tr>
            <td></td>
            <?php foreach ($unqSize as $cK => $col) {?>
                <td><?php echo $col?></td>
            <?php } ?>
        </tr>
        <?php foreach ($lastChnkArr as $rK => $rows) {?>
            <tr>
                <td><?php echo $itemArr[$rK]?></td>
                <?php foreach ($rows as $cK => $col) {?>
                    <td><?php echo $rK.'=>'.$cK.'=>'.$col?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

















    <table style="display: none" class="table table-bordered">
        <?php

        foreach ($finalOneArr as $rows): ?>
            <tr>
                <?php
                foreach ($rows as $k => $row) { ?>
                    <td><?php //echo $k.' '.$row
                        echo $rows['Quantity'];
                        ?></td>
                <?php } ?>
            </tr>
        <?php endforeach; ?>
    </table>
















    <?php
    $new_row = array('a', 'b', 'c', 'd');
    $new_row2 = array('a', 'b', 'c', 'd');


    ?>

    <table class="table table-bordered">
        <?php
        foreach ($new_row as $k => $rows): ?>
            <tr>
                <?php
                foreach ($new_row2 as $row) { ?>
                    <td>d</td>
                <?php } ?>
            </tr>
        <?php endforeach; ?>
    </table>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>