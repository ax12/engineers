<?php
function getPricesFoo ($arg_prc) {
    if ($arg_prc) {
        $prc_1 = $arg_prc * 0.9;
        $prc_2 = $arg_prc * 0.8;
        $prc_3 = $arg_prc * 0.7;
        return array($prc_1, $prc_2, $prc_3,);
    }
}

?>