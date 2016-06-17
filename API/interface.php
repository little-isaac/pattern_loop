<?php

function cF($str) {
    return isset($_REQUEST[$str]);
}

function gF($str) {
    if (cF($str)) {
        return $_REQUEST[$str];
    } else {
        return "";
    }
}

if (cF('PRINT_TRUE') && cF('PRINT_FALSE') && cF('total_line') && cF('true_upto')) {
    $print_true = gF('PRINT_TRUE');
    $PRINT_FALSE = gF('PRINT_FALSE');
    $total_line = gF('total_line');
    $true_upto = gF('true_upto');
    $rows = array();

    for ($row = 0; $row < $total_line; $row++) {
        $cols = "";
        for ($col = 0; $col <= $row; $col++) {
            if ($row < $true_upto) {
                $cols .= $print_true;
            } else {
                $cols .= $PRINT_FALSE;
            }
        }
        array_push($rows, $cols);
    }
   echo json_encode($rows);
}
