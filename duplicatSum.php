<?php
/**
 * Created by PhpStorm.
 * User: Tanvir
 * Date: 23-Aug-17
 * Time: 1:48 PM
 */



$array  = array(Array("inputAvg" => 5.41,"outputAvg" => 22.03,"date" => "2011-08-01"),
                Array("inputAvg" => 10.63,"outputAvg" => 186.05,"date" => "2011-08-01" ),
                Array("inputAvg" => 15.63, "outputAvg" => 186.05,"date" => "2011-08-02")
);

$res  = array();
foreach($array as $vals){
    if(array_key_exists($vals['date'],$res)){
        $res[$vals['date']]['inputAvg']    += $vals['inputAvg'];
        $res[$vals['date']]['outputAvg']   += $vals['outputAvg'];
        $res[$vals['date']]['date']        = $vals['date'];
    }
    else{
        $res[$vals['date']]  = $vals;
    }
}

echo "<pre>";
//print_r($res);


$marksTnv = array(
    "1" => array (
        "stdQl_id" => 3,
        "physics" => 1,
        "maths" => 30,
        "chemistry" => 39
    ),

    "2" => array (
        "stdQl_id" => 3,
        "physics" => 1,
        "maths" => 32,
        "chemistry" => 29
    ),

    "3" => array (
        "stdQl_id" => 3,
        "physics" => 1,
        "maths" => 22,
        "chemistry" => 39
    ),

    "4" => array (
        "stdQl_id" => 6,
        "physics" => 1,
        "maths" => 32,
        "chemistry" => 29
    ),

    "5" => array (
        "stdQl_id" => 6,
        "physics" => 1,
        "maths" => 22,
        "chemistry" => 39
    ),

    "6" => array (
        "stdQl_id" => 6,
        "physics" => 1,
        "maths" => 32,
        "chemistry" => 29
    ),

    "7" => array (
        "stdQl_id" => 8,
        "physics" => 1,
        "maths" => 22,
        "chemistry" => 39
    )
);


foreach ($marksTnv as $item) {
    if ($item['stdQl_id'] == 6) {
        $ff[][] = $item['physics'];
    }
}

print_r($ff);
//echo array_sum($ff);


$sumArray = array();

foreach ($marksTnv as $k=>$subArray) {
    foreach ($subArray as $id=>$value) {
        $sumArray[$id]+=$value;
    }
}

print_r($sumArray);




?>