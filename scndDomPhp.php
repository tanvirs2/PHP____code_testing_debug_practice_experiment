<?php

include("simple_html_dom.php");

$html = file_get_html('file:///E:/html.html');

foreach ($html->find("table>td.nameClass") as  $tn) {
    if ($tn->innertext == "tahmina") {
        //echo $tn->innertext;
        echo '<hr>';
        echo $tn->parent();
        echo '<hr>';
    }
}

//echo $title;
//echo $html;



//echo $html;
?>