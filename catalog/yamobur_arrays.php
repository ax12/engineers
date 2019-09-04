<?php
if (!defined('TOSIBOSI')) {
    die("Off, Fuck off =) !");
} ?>
<?php
//setting for page
$page_settings_array = array(
    'h3' => 'нужно бурить?',
    'h2' => 'Закажите мотобур (бензобур) <strong>в аренду с доставкой</strong> и расчитайтесь удобным для вас способом. Удлинитель и шнек в комплекте',
);
//const
$before_price = 'Стоимость в сутки';
$after_price = ' руб';
//указать максимаьное количество товаров к выводу
$count_arrays = 30;
//prices


$catalog_item_1 = array(
    'img' => 'yamobur/HitachiDA300E.jpg',
    'name' => "Мотобур Hitachi DA300E",
    'price' => 1300,
    'options' => array(
        'Мощность' => '2.1 л.с.',
        'Вес' => '17 кг',
        'Комлектация' => 'шнек+удлинитель',
        'Диаметр шнека' => '200-300 мм',
    )

);

$catalog_item_2 = array(
    'img' => 'yamobur/RedVergRD-EA630B.jpeg',
    'name' => "Аренда бензобура RedVerg RD-EA630B",
    'price' => 900,
    'options' => array(
        'Мощность' => '2.1 л.с.',
        'Вес' => '17 кг',
        'Комлектация' => 'шнек+удлинитель',
        'Диаметр шнека' => '200-300 мм',
    )

);
$catalog_item_3 = array(
    'img' => 'yamobur/ADAGroundDrill-5.jpg',
    'name' => "Аренда мотобура ADA GroundDrill-5",
    'price' => 900,
    'options' => array(
        'Мощность' => '1800 вт',
        'Вес' => '11 кг',
        'Объем двигателя' => '52 куб.см',
        'Макс. диаметр шнека' => '250 мм',
    )

);
$catalog_item_4 = array(
    'img' => 'yamobur/RedVergRD-EA490.jpg',
    'name' => "Аренда мотобура RedVerg RD-EA490",
    'price' => 800,
    'options' => array(
        'Мощность' => '2,2 л.с.',
        'Вес' => '9,5 кг',
        'Объем двигателя' => '49 куб.см',
        'Макс. диаметр шнека' => '250 мм',
    )

);
$catalog_item_5 = array(
    'img' => 'yamobur/ADAGroundDrill-15.jpg',
    'name' => "Аренда мотобура ADA Ground Drill-15",
    'price' => 1400,
    'options' => array(
        'Мощность' => '5,5 л.с.',
        'Вес' => '30 кг',
        'Объем двигателя' => '196 куб.см',
        'Шнеки' => '150-300 мм',
    )

);
$catalog_item_6 = array(
    'img' => 'yamobur/ChampionAG252.jpg',
    'name' => "Аренда мотобура Champion AG252",
    'price' => 1400,
    'options' => array(
        'Мощность' => '2 л.с.',
        'Вес' => '12 кг',
        'Объем двигателя' => '49 куб.см',
        'Шнеки' => '150-200 мм',
        'Топливо' => 'масло-бензин',
    )

);
$catalog_item_7 = array(
    'img' => 'yamobur/StihlBT-121.jpg',
    'name' => "Аренда мотобура Stihl BT-121",
    'price' => 1300,
    'options' => array(
        'Мощность' => '1,8 л.с.',
        'Вес' => '9,4 кг',
        'Объем двигателя' => '49 куб.см',
        'Шнеки' => '150-200 мм',
        'Топливо' => 'масло-бензин',
    )

);
$catalog_item_8 = array(
    'img' => 'yamobur/StihlBT-360.jpg',
    'name' => "Аренда мотобура Stihl BT-360",
    'price' => 1800,
    'options' => array(
        'Мощность' => '3,9 л.с.',
        'Вес' => '28,8 кг',
        'Объем двигателя' => '60,3 куб.см',
        'Шнеки' => '250/300/350 мм',
        'Назначение' => 'Грунт, лед',
    )

);

$catalog_item_9 = array(
    'img' => 'yamobur/IronMoleProfit.jpg',
    'name' => "Гидравлический ямобур Iron Mole Profit",
    'price' => 4000,
    'options' => array(
        'Мощность' => '15 л.с.',
        'Вес' => '80 кг',
        'Тип двигателя' => 'Бензиновый',
        'Шнеки' => 'до 450 мм',
        'Назначение' => 'Грунт, лед',
    )

);

?>