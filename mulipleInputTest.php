<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<style>
    tr:first-child input {
        background: red;
    }

    td:first-child input {
        background: yellowgreen;
    }

    table {
        display: inline;
    }
</style>
<form action="" method="post">
    <table>
        <tr>
            <td><input style="background: white" name="" type="text" value="sl"></td>
            <td><input name="size[]" type="text" value="1"></td>
            <td><input name="size[]" type="text" value="2"></td>
            <td><input name="size[]" type="text" value="3"></td>
        </tr>
        <tr>
            <td><input name="color[]" type="text" value="1"></td>
            <td><input name="qty[]" type="text" value="a"></td>
            <td><input name="qty[]" type="text" value="b"></td>
            <td><input name="qty[]" type="text" value="c"></td>
        </tr>
        <tr>
            <td><input name="color[]" type="text" value="2"></td>
            <td><input name="qty[]" type="text" value="d"></td>
            <td><input name="qty[]" type="text" value="e"></td>
            <td><input name="qty[]" type="text" value="f"></td>
        </tr>
        <tr>
            <td><input name="color[]" type="text" value="3"></td>
            <td><input name="qty[]" type="text" value="g"></td>
            <td><input name="qty[]" type="text" value="h"></td>
            <td><input name="qty[]" type="text" value="i"></td>
        </tr>
        <tr>
            <td class="mmm"><input class="Item" name="color[]" type="text" value="4"></td>
            <td><input name="qty[]" type="text" value="j"></td>
            <td><input name="qty[]" type="text" value="k"></td>
            <td><input name="qty[]" type="text" value="l"></td>
        </tr>
    </table>
    <table>
        <tr>
            <td><input style="background: white" name="" type="text" value="sl"></td>
            <td><input name="clr[]" type="text" value="1"></td>
            <td><input name="clr[]" type="text" value="2"></td>
            <td><input name="clr[]" type="text" value="3"></td>
        </tr>
        <tr>
            <td><input name="" type="text" value=""></td>
            <td><input name="qtyFab[]" type="text" value="a"></td>
            <td><input name="qtyFab[]" type="text" value="b"></td>
            <td><input name="qtyFab[]" type="text" value="c"></td>
        </tr>
        <tr>
            <td><input name="" type="text" value=""></td>
            <td><input name="qtyBaf[]" type="text" value="d"></td>
            <td><input name="qtyBaf[]" type="text" value="e"></td>
            <td><input name="qtyBaf[]" type="text" value="f"></td>
        </tr>
    </table>
    <br>
    <br>
    <input type="submit" value="submit">
</form>

<script>
    $(document).ready(function () {
        $('.Item').click(function () {
            var a = $(this).parent();
            alert(a[0].nodeName.toLowerCase());
        });
    });
</script>


<?php
$new_row = array('a', 'b', 'c', 'd');
$new_row2 = array('a', 'b', 'c', 'd');


?>

<table class="table table-bordered">
    <?php
    foreach ($new_row as $k => $rows): ?>
        <tr>
            <?php
            foreach ($new_row2 as $row){ ?>
                <td>d</td>
            <?php }?>
        </tr>
    <?php endforeach; ?>
</table>

<pre>
<?php
foreach ($_POST['qtyFab'] as $k => $row) {
    //$qtyFab[] = $row.":".$_POST['qtyBaf'][$k].":".$_POST['clr'][$k].'|';
    $qtyFab[] = ['a' => $row, 'b' => $_POST['qtyBaf'][$k], 'c' => $_POST['clr'][$k]];
}
//print_r($qtyFab);


//echo count($_POST['clr']);
//print_r($_POST['qtyFab']);

//$snglRow = array_chunk($_POST['qtyFab'], count($_POST['clr']));

//print_r($snglRow);


// ONE ARRAY TO MULTI ARRAY
$chankArr = array_chunk($_POST['qty'], count($_POST['size']));

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

//print_r($finalOneArr);
?>
</pre>
