<?php
require_once 'site_settings.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Прокат бензоинструмента, бензогенераторов в Екатеринбурге с доставкой</title>
    <meta name="description" content="Прокат бензогенераторов и строительных инструментов в Екатеринбурге с доставкой, закажите доставку и прокат бензогенераторов">
    <meta name="keywords" content="прокат, бензогенераторы, Екатеринбург, прокат с доставкой">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|Muli:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/max.css">



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
                    <a href="index.html">
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
        </div>


        <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

            <div class="container">
                <div class="d-flex align-items-center">

                    <div class="mr-auto">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                                <li class="active">
                                    <a href="index.html" class="nav-link text-left">Главная</a>
                                </li>
                                <li>
                                    <a href="about.html" class="nav-link text-left">О нас</a>
                                </li>
                                <li>
                                    <a href="#petrol-generators" class="nav-link text-left">Прокат бензогенераторов</a>
                                </li>
                                <li>
                                    <a href="testimonials.html" class="nav-link text-left">Условия проката</a>
                                </li>
                                <li><a href="blog.html" class="nav-link text-left">Доставка</a></li>
                                <li>
                                    <a href="contact.html" class="nav-link text-left">Оплата</a>
                                </li>
                            </ul>
                            </ul>
                        </nav>

                    </div>

                </div>
            </div>

        </div>

    </div>

    <div class="hero-slide owl-carousel site-blocks-cover">
        <div class="intro-section" style="background-image: url('images/hero_3.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <h1>Прокат бензогенераторов в Екатеринбурге с доставкой</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-section" style="background-image: url('images/hero_2.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <span class="d-block"></span>
                        <h1>Бензогенераторы под любые задачи</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <span class="d-block"></span>
                        <h1>Прокат строительного инструмента</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-section" style="background-image: url('images/hero_5.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <span class="d-block"></span>
                        <h1>Мы привезем вам генератор сами</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END slider -->