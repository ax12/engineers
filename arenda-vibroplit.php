
<?php
require_once 'header.php';
?>

<div class="site-section services-1-wrap">
    <div class="container">


        <?php
        //tools catalog
        require_once 'catalog/vibroplita_arrays.php';
        require_once 'inc/main_catalog_inc.php';  //бензиновые генераторы
        ?>

    </div>
</div>

<?php require_once 'inc/icon_tools_menu.php'; //подключение меню выбора типа инструмента, с иконками и всплывающими надписями?>
<!-- END services -->
<?php require_once 'inc/block_delivery_service.php' //подключение блока с описанием доставки и почему мы?>




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
                        <p>&ldquo;Заказывал бензогенератор под работы сварщика, привезли быстро, цены одни из самых
                            низких в городе&rdquo;</p>
                    </blockquote>
                    <p class="client-name">Марат Сайфутдинов</p>
                </div>
            </div>
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="testimonial">
                    <img src="images/person_4_sq.jpg" alt="">
                    <blockquote>
                        <p>&ldquo;Заказывал несколько раз компрессоры на разные объекты, инструмент приходит практически
                            новый, все работает отлично. Спасибо за скорость!&rdquo;</p>
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

<?php require_once 'footer.php'; ?>



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