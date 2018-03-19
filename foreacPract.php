
<?php

function dd($arr)
{
    if ($arr) {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }
}

$a=[
    0 => [
        "car" => "red",
        "honda" => "10"
    ],
    1 => [
        "car" => "blue",
        "honda" => "10"
    ],
    2 => [
        "car" => "yellow",
        "honda" => "10"
    ],
    3 => [
        "car" => "red",
        "honda" => "10"
    ],
    4 => [
        "car" => "violet",
        "honda" => "40"
    ],
    9 => [
        "car" => "violet",
        "honda" => "35"
    ],
    5 => [
        "car" => "red",
        "honda" => "10"
    ],
    6 => [
        "car" => "red",
        "honda" => "10"
    ],
    7 => [
        "car" => "red",
        "honda" => "10"
    ],
    8 => [
        "car" => "blue",
        "honda" => "10"
    ],

];

$b = ["x" => 'ac', "y" => 'bc', "z" => 'ac'];

//print_r(array_unique($b));

/*
$temp = [];
$result = [];

foreach ($a as $c) {

    if (!in_array($c['car'], $temp)) {
        array_push($temp, $c['car']);
        array_push($result, $c);
    }
}

echo '<pre>';
print_r($result);*/




/*func start*/
function arraySumFromKey($arr, $key)
{
    $tmp = array();
    $result = array();
    foreach ($arr as $childArr) {
        if (!in_array($childArr[$key], $tmp)) {
            array_push($tmp, $childArr[$key]);
            array_push($result, $childArr);
        }
    }
    $arrUnqByKyData = $result;
    foreach ($arrUnqByKyData as $sngl) {
        $cnt = 0;
        foreach ($arr as $item) {
            if ($sngl[$key] == $item[$key]) {
                $cnt++;
                if ($cnt > 1) {
                    $dupl[] = $item; //return only duplicate without main array
                }
            }
        }
    }

        foreach ($dupl as $protiDupli) {
            foreach ($arrUnqByKyData as $k=>$protiArrUnqByKyData) {
                if ($protiDupli[$key] == $protiArrUnqByKyData[$key]) {
                    $arrUnqByKyData[$k]['honda']+=$protiDupli['honda'];
                }
            }
        }


    return $arrUnqByKyData;
}
/*func end*/

foreach (arraySumFromKey($a, 'car') as $item) {
    //echo $item['car']. " = ";
    //echo $item['honda']. " <br> ";

}
dd($a);
?>

<pre>
    <?php
    //array_unique_by_key($a);

    //print_r(array_unique_by_key($a, 'car'));
    //print_r($a);
    ?>
</pre>
