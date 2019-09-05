<?php
require_once 'header.php';

require_once 'inc/icon_tools_menu.php'; //подключение меню выбора типа инструмента, с иконками и всплывающими надписями
?>

<div class="site-section services-1-wrap">
    <div class="container">


        <?php
       //tools catalog
        require_once 'inc/main_catalog_inc.php';  //бензиновые генераторы
        ?>

    </div>
</div>
<!-- END services -->


            <?php require_once 'inc/block_delivery_service.php' //подключение блока с описанием доставки и почему мы?>


<!-- END block-2 -->







<div class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 align-self-end">
                <img src="images/img_transparent.png" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-7 align-self-center mb-5">

                <div class="bg-black  quote-form-wrap wrap text-white">
                    <div class="mb-5">
                        <h3 class="section-subtitle">Остались вопросы?</h3>
                        <h2 class="section-title mb-4">Пишите или <strong><a href="tel:<?php echo $site_settings ['tel']; ?>">Звоните</a></strong></h2>
                    </div>
                    <form action="#" class="quote-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Ваше имя*">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Номер телефона">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Ваш email*">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Тема">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                    <textarea name="" class="form-control" id="" placeholder="Сообщение*" cols="30"
                                              rows="7"></textarea>
                            </div>
                            <div class="col-md-6 align-self-end">
                                <input type="submit" class="btn btn-primary btn-block btn-lg rounded-0"
                                       value="Отправить">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="site-section block-3">
    <div class="container">

        <div class="mb-5">
            <h3 class="section-subtitle">наш ассортимент</h3>
            <h2 class="section-title mb-4">Новые поступления <strong>в отдел проката</strong></h2>
        </div>

        <div class="projects-carousel-wrap">
            <div class="owl-carousel owl-slide-3">
                <div class="project-item">
                    <div class="project-item-contents">
                        <a href="#">
                            <span class="project-item-category">Factory</span>
                            <h2 class="project-item-title">
                                Building Refinery
                            </h2>
                        </a>
                    </div>
                    <img src="images/works_1.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="project-item">
                    <div class="project-item-contents">
                        <a href="#">
                            <span class="project-item-category">Factory</span>
                            <h2 class="project-item-title">
                                Building Refinery
                            </h2>
                        </a>
                    </div>
                    <img src="images/works_2.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="project-item">
                    <div class="project-item-contents">
                        <a href="#">
                            <span class="project-item-category">Factory</span>
                            <h2 class="project-item-title">
                                Building Refinery
                            </h2>
                        </a>
                    </div>
                    <img src="images/works_3.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="project-item">
                    <div class="project-item-contents">
                        <a href="#">
                            <span class="project-item-category">Factory</span>
                            <h2 class="project-item-title">
                                Building Refinery
                            </h2>
                        </a>
                    </div>
                    <img src="images/works_4.jpg" alt="Image" class="img-fluid">
                </div>


            </div>
        </div>

    </div>
</div>


<div class="site-section testimonial-wrap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 mb-5 text-center">
                <h3 class="section-subtitle">Отзывы и рекомендации</h3>
                <h2 class="section-title text-black mb-4">Что говорят о нас наши клиенты</h2>
            </div>
        </div>

        <div class="row bg-light">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="testimonial ">
                    <img src="images/person_3_sq.jpg" alt="">
                    <blockquote>
                        <p>&ldquo;Заказывал бензогенератор под работы сварщика, привезли быстро, цены одни из самых низких в городе&rdquo;</p>
                    </blockquote>
                    <p class="client-name">Марат Сайфутдинов</p>
                </div>
            </div>
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="testimonial">
                    <img src="images/person_4_sq.jpg" alt="">
                    <blockquote>
                        <p>&ldquo;Заказывал несколько раз компрессоры на разные объекты, инструмент приходит практически новый, все работает отлично. Спасибо за скорость!&rdquo;</p>
                    </blockquote>
                    <p class="client-name">Сергей Беляков (прораб АСК)</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!--<div class="site-section bg-light">-->
<!--    <div class="container">-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-12 mb-5 text-left">-->
<!--                <h3 class="section-subtitle">Blog</h3>-->
<!--                <h2 class="section-title text-black mb-4">News &amp; Updates</h2>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">-->
<!--                <div class="blog-entry">-->
<!--                    <a href="#" class="img-link">-->
<!--                        <img src="images/hero_1.jpg" alt="Image" class="img-fluid">-->
<!--                    </a>-->
<!--                    <div class="blog-entry-contents">-->
<!--                        <h3><a href="#">Top Companies That Are Best In Industrial Business</a></h3>-->
<!--                        <div class="meta">Posted by <a href="#">Admin</a> In <a href="#">News</a></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">-->
<!--                <div class="blog-entry">-->
<!--                    <a href="#" class="img-link">-->
<!--                        <img src="images/hero_1.jpg" alt="Image" class="img-fluid">-->
<!--                    </a>-->
<!--                    <div class="blog-entry-contents">-->
<!--                        <h3><a href="#">Top Companies That Are Best In Industrial Business</a></h3>-->
<!--                        <div class="meta">Posted by <a href="#">Admin</a> In <a href="#">News</a></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">-->
<!--                <div class="blog-entry">-->
<!--                    <a href="#" class="img-link">-->
<!--                        <img src="images/hero_1.jpg" alt="Image" class="img-fluid">-->
<!--                    </a>-->
<!--                    <div class="blog-entry-contents">-->
<!--                        <h3><a href="#">Top Companies That Are Best In Industrial Business</a></h3>-->
<!--                        <div class="meta">Posted by <a href="#">Admin</a> In <a href="#">News</a></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<div class="py-5 bg-primary block-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h3 class="text-white">подписка на новости</h3>
                <p>что бы не пропустить обновление парка инструментов и акции, подписывайся на наши новости</p>
            </div>
            <div class="col-lg-6">
                <form action="#" class="form-subscribe d-flex">
                    <input type="text" class="form-control form-control-lg">
                    <input type="submit" class="btn btn-secondary px-4" value="хочу получать">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <p class="mb-4"><img src="images/logo.png" alt="Image" class="img-fluid"></p>
                <p>Самые выгодные условия на прокат бензо и электроинструментов в Екатеринбурге </p>

            </div>
            <div class="col-lg-3">
                <h3 class="footer-heading"><span>Our Company</span></h3>
                <ul class="list-unstyled">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Сервис</a></li>
                    <li><a href="#">Наши сотрудники</a></li>
                    <li><a href="#">Вакансии</a></li>
                    <li><a href="#">Поставщики</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h3 class="footer-heading"><span>Наш сервис</span></h3>
                <ul class="list-unstyled">
                    <li><a href="#">Доставка</a></li>
                    <li><a href="#">Оплата</a></li>
                    <li><a href="#">Обслуживание</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h3 class="footer-heading"><span>Контакты</span></h3>
                <ul class="list-unstyled">
                    <li><a href="#">Поддержка</a></li>
                    <li><a href="#">Обращение</a></li>
                    <li><a href="#">Пресса о нас</a></li>
                    <li><a href="#">Строительные площадки</a></li>
                    <li><a href="#">Наши партнеры</a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="copyright">
<!--                    <p>-->
<!--                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!--                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>-->
<!--                        All rights reserved | This template is made with <i class="icon-heart text-danger"-->
<!--                                                                            aria-hidden="true"></i> by <a-->
<!--                            href="https://colorlib.com" target="_blank">Colorlib</a>-->
<!--                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!--                    </p>-->
                </div>
            </div>
        </div>
    </div>
</div>


</div>
<!-- .site-wrap -->
<!-- loader -->
<div id="loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#ff5e15"/>
    </svg>
</div>

<?php
//including main scripts
require_once 'inc/scripts_footer_inc.php';
?>

</body>

</html>