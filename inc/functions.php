<?php
//функция формирования цен в зависимости от сроков аренды инструмента, возвращает массив в раздел main_catalog_inc.php
function getPricesFoo ($arg_prc) {
    if ($arg_prc) {
        $multiply = 100; //кратность цен
        $prc_1 = $multiply * round ($arg_prc * 0.9 / $multiply)  ; //приводим цену кратно 50
        $prc_2 = $multiply * round ($arg_prc * 0.8 / $multiply)  ; //приводим цену кратно 50
        $prc_3 = $multiply * round ($arg_prc * 0.7 / $multiply)  ; //приводим цену кратно 50
        return array($prc_1, $prc_2, $prc_3); //возвращаем результат в виде массива
    }
}

?>