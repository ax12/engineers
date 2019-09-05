<?php
define('TOSIBOSI', 1);

require_once 'inc/site_settings.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Прокат бензоинструмента, бензогенераторов в Екатеринбурге с доставкой</title>
    <meta name="description" content="Прокат бензогенераторов и строительных инструментов в Екатеринбурге с доставкой, закажите доставку и прокат бензогенераторов">
    <meta name="keywords" content="прокат, бензогенераторы, Екатеринбург, прокат с доставкой">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<?php require_once 'inc/scripts_style_header_inc.php';?>




</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <div class="header-top bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-lg-3">
                    <a href="/">
                        <img src="images/logo.png" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-3 d-none d-lg-block">

                    <div class="quick-contact-icons d-flex">
                        <div class="icon align-self-start">
                            <span class="flaticon-placeholder text-primary"></span>
                        </div>
                        <div class="text">
                            <span class="h4 d-block"><?php echo $site_settings ['city']; ?></span>
                            <span class="caption-text"><?php echo $site_settings ['address']; ?></span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="quick-contact-icons d-flex">
                        <div class="icon align-self-start">
                            <span class="flaticon-call text-primary"></span>
                        </div>
                        <div class="text">
                            <span class="h4 d-block"><a href="tel:<?php echo $site_settings ['tel']; ?>"><?php echo $site_settings ['tel']; ?></a></span>
                            <span class="caption-text">Отдел заказов</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 d-none d-lg-block">
                    <div class="quick-contact-icons d-flex">
                        <div class="icon align-self-start">
                            <span class="flaticon-email text-primary"></span>
                        </div>
                        <div class="text">
                            <span class="h4 d-block"><?php echo $site_settings ['email']; ?></span>
                            <span class="caption-text">Написать нам</span>
                        </div>
                    </div>
                </div>

                <div class="col-6 d-block d-lg-none text-right">
                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                            class="icon-menu h3"></span></a>
                </div>
            </div>
            <div class="col-12 d-block d-lg-none">
                <div class="quick-contact-icons d-flex mt-2">
                    <div class="icon-tel align-self-start">
                        <span class="flaticon-call text-primary"></span>
                    </div>
                    <div class="text">
                        <span class="h4 d-block"><a href="tel:<?php echo $site_settings ['tel']; ?>"><?php echo $site_settings ['tel']; ?></a></span>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

            <div class="container">
                <div class="d-flex align-items-center">

                    <div class="mr-auto">
                        <nav class="site-navigation position-relative text-right " role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block main-menu-font">
                                <?php
                                $menu_array = $site_settings['main_menu'];
                                foreach ($menu_array as $key => $value) {
                                    echo "<li $active >  <a href=\"$value\" class=\"nav-link text-left\">$key</a> </li>";
                                }
                                ?>


<!--                                <li class="active">-->
<!--                                    <a href="/" class="nav-link text-left">Главная</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="about.html" class="nav-link text-left">О нас</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="arenda-benzogeneratora" class="nav-link text-left">Прокат бензогенераторов</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="arenda-benzobur-yamobur" class="nav-link text-left">Прокат бензобуров</a>-->
<!--                                </li>-->
<!--                                <li><a href="arenda-vibroplit" class="nav-link text-left">прокат виброплит</a></li>-->
<!--                                <li>-->
<!--                                    <a href="contact.html" class="nav-link text-left">Оплата</a>-->
<!--                                </li>-->
                            </ul>

                        </nav>

                    </div>

                </div>
            </div>

        </div>

    </div>


    <?php
//    if ($_SERVER['REQUEST_URI'] == '/')
    require_once 'inc/slider.php' ?>
    <!-- END slider -->