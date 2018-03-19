<?php
/**
 * Created by PhpStorm.
 * User: Tanvir
 * Date: 20-Oct-17
 * Time: 7:19 PM
 */

include("simple_html_dom.php");

$html = file_get_html('http://www.espncricinfo.com/ci/engine/match/1075505.json?view=scorecard;wrappertype=none;xhr=1');

$elemArray = [];

foreach ($html->find("table.inningsTable>tbody>tr>td.inningsDetails>b") as  $tn) {
    if ($tn->innertext == "Fall of wickets") {
        $elemArray[] = $tn->parent();
    }
}

foreach ($elemArray as $singleTr) {

    echo $singleTr;

    /* line break start */
    echo '<br>';
    echo '<hr>';
    /* line break end */
}

?>