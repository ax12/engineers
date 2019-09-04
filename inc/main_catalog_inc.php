<?php
if (!defined('TOSIBOSI')) {
    die("Off, Fuck off =) !");
} ?>
<div class="row no-gutters">
 <?php

    require_once 'functions.php'; //пользовательские функции
    //
    //    getFilenameFoo ( '$current_url_page' ); //функция определяет какой файл подключать в зависимости от адреса страницы
    //    $current_url_page = $path_by_address = $_SERVER['REQUEST_URI']; //получаем адрес страницы и отправляем его в функцию выше
    //    require_once $current_url_page . '.php'; //подключаем нужный файл, имя которого определила функция getFilenameFoo()
    //    echo $current_url_page;
    ?>

    <div class="row mb-5 justify-content-center text-center">
        <div class="col-lg-8"><a name="petrol-generators">
                <h3 class="section-subtitle"><?php echo $page_settings_array ['h3']; ?></h3>

                <h2 class="section-title mb-4 text-black"><?php echo $page_settings_array ['h2']; ?>
                </h2>
        </div>
    </div>

    <?php
    for ($i = 1; $i <= $count_arrays; $i++) {
        if (empty(${'catalog_item_' . $i} ['img'])) {
            break;
        } //если массивы закончились, выходим из цикла
        ?>
        <div class="col-lg-<?php echo $col_lg_count; ?> col-md-<?php echo $col_md_count; ?>">
            <div class="service-1 mx-project-item">
                <span class="number">АРЕНДА</span>
                <!--            hover-effect-->
                <div class="project-item-contents">
                    <?php
                    //вычисляем цены в функции getPriceFoo,
                    // отправляем общую цены, получам три цены, там же они делаются кратно 50
                    $main_price = ${'catalog_item_' . $i} ['price']; //цена из массива товара
                    list($price_1, $price_2, $price_3) = getPricesFoo($main_price); //получаем массив цен из функции и
                    // присваем его значения переменным с помощью функции php list

                    ?>
                    <div class="list-prices">
                        <div class="project-item-category">Сутки
                            : <?php echo ${'catalog_item_' . $i} ['price'] . $after_price ?></div>
                        <div class="project-item-category">2-7 суток
                            : <?php echo $price_1 . $after_price ?></div>
                        <div class="project-item-category">8-14 суток
                            : <?php echo $price_2 . $after_price ?></div>
                        <div class="project-item-category">более 15 суток
                            : <?php echo $price_3 . $after_price ?></div>
                        <!--                        --><?php //require_once 'feedback/feedback_form.php' ?>
                        <!--                        <input type="submit" class="btn btn-primary rounded-0 mx-buttom d-none d-sm-block" value="онлайн заявка">-->
                        <a class="btn btn-primary rounded-0 mx-buttom d-block d-sm-none"
                           href="tel:<?php echo $site_settings ['tel']; ?>">заказать</a>

                    </div>

                </div>

                <div class="justify-content-center">
                    <img class="item-main-photo rounded mx-auto d-block"
                         src="/images/<?php echo ${'catalog_item_' . $i} [img]; ?>  " alt="">

                </div>
                <div class="service-1-content">
                    <h3 class="service-heading mt-3"><?php echo ${'catalog_item_' . $i} ['name']; ?></h3>

                    <p class="item-options parameters">
                        <?php
                        $optioans_array = ${'catalog_item_' . $i}['options'];
                        foreach ($optioans_array as $key => $value) {
                            echo "<span class='parameters' >$key - $value </span><br>";
                        }
                        ?>
                    </p>
                    <div class="price-item-up-to"> <?php echo $before_price ?>

                        от <?php echo $price_3 . $after_price ?> </div>
                </div>
            </div>
        </div>

        <?php
    }
    ?>


    <!--first row end-->
</div>>