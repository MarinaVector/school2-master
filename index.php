<?php
session_start();
require_once "conn.php";?>


<!DOCTYPE html>
<html lang="ru">
<?php require "general-components/head.php"; ?>

    <body class="container-fluid p-0">
        <div class="wrapper">
            <section class="fullscreen bg-page">
                <div class="fullscreen__body">
                    <header class="main-header pb-5 pb-md-0 pb-lg-5">
                        <div class="bg-bottom">
                            <div class="bg-top pt-3">
                                <?php require "general-components/nav.php";?>
                                <div class="info-block container
                                 pb-3 mt-3 mt-md-0 my-lg-5 py-lg-4">
                                    <div class="p-0">
                                        <h3 class="info-block__school-title mb-1 mt-md-5">Светлана Светайло</h3>
                                        <h1 class="info-block__coach-title">Бизнес монетизатор</h1>

                                        <a href="#courses-and-products-id" class="info-block__btn info-block__full-btn__learn info-block__yellow-btn top-btn mr-xl-5 mb-3 my-xl-5 mr-2">приступить к
                                обучению</a>
                                        <a href="#consult-id" class="info-block__btn info-block__empty-btn info-block__empty-btn__yellow top-btn
                                        info-block__yellow-btn px-5">консультация</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>

                    <section class="container-fluid px-0">
                        <div class="container">
                            <div class="p-o">
                                <div class="row position-relative">
                                    <div class="position-absolute d-xl-block d-none pt-4">
                                        <img class="bg-star" style="padding-top: 0;" src="/img/Header-logo.png"
                                             height="1100" width="1140"  alt="star-logo"/>
                                    </div>
                                    <div class="position-absolute d-lg-block d-none d-xl-none pt-4">
                                        <img class="bg-star" style="padding-top: 0;" src="/img/lg_Header-logo.png"
                                              height="869" width="900"  alt="star-logo"/>
                                    </div>
                                    <div class="position-absolute d-md-block d-none d-lg-none pt-4">
                                        <img class="bg-star" style="padding-top: 0;" src="/img/md_Header-logo%20.png"
                                              height="676" width="700"  alt="star-logo"/>
                                    </div>
                                    <div class="position-absolute d-sm-block d-none d-md-none pt-4">
                                        <img class="bg-star" style="padding-top: 0;" src="/img/sm_Header-logo%20.png"
                                              height="502" width="520"  alt="star-logo"/>
                                    </div>
                                    <div class="position-absolute bg-star-sm d-sm-none col-6 offset-3 mt-5">
                                        <img class="bg-star" style="padding-top: 0;" src="/img/super_sm_Header-logo%20.png"
                                             height="338" width="350"  alt="star-logo"/>
                                    </div>
                                    <div class="col-md-12 col-12 my-lg-1 mx-auto pt-4">
                                        <p id="about-author-id" class="about-author__title my-lg-5 my-md-2">Об авторе</p>
                                    </div>
                                    <div class="author-img d-xl-block d-none">
                                        <img class="icon-img"  src="img/Photo.png" alt="Svetlana Svetailo photo">
                                    </div>
                                    <div class="author-img d-lg-block ml-lg-3 d-xl-none d-none">
                                        <img class="icon-img"  src="img/Photo_small.png" alt="Svetlana Svetailo photo">
                                    </div>
                                    <div class="d-md-block col-md-6 pl-md-5 d-lg-none d-none small-foto">
                                        <img class="mt-1 ml-sm-0" src="img/Photo_min.png" alt="Svetlana Svetailo photo">
                                    </div>
                                    <div class="d-sm-block col-sm-6 d-md-none d-none small-foto">
                                        <img class="mt-1 ml-sm-0" src="img/m_Photo_min.png" alt="Svetlana Svetailo photo">
                                    </div>
                                    <div class="col-12 offset-1 mx-auto d-block d-sm-none small-bg">
                                        <img class="ml-sm-0" src="img/m_Photo_min.png" alt="Svetlana Svetailo photo">
                                    </div>


                                    <div class="col-sm-6 pl-sm-0 pr-sm-0 pl-md-2 pl-lg-0 offset-xl-6 col-12">
                                        <section class="pt-1 mt-lg-5 mt-xl-n4  mx-3 mx-sm-0 pl-md-0 ml-lg-1">
                                            <h2 class="about-author__name about-author__name__title mt-sm-5 mt-md-3
                                             my-1 pt-lg-3 pt-xl-0 my-md-none">Светлана Светайло</h2>
                                            <p class="about-author__info">Бизнес-Монетизатор. Креативный-маркетолог. Экономист
                                            </p>
                                            <h4 class="about-author__name about-author__name__info">Я имею
                                        высшее экономическое образование</h4>
                                            <div class="p-0 m-0 d-none d-md-block d-xl-none">
                                                <?php require "main-page-parts/author_list.php"; ?>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="col-12 d-block d-md-none d-xl-block col-xl-6 offset-xl-6">
                                        <?php require "main-page-parts/author_list.php"; ?>
                                    </div>

                                    <div class="col-12 pl-md-4 pl-lg-3 pl-xl-0 col-xl-6 offset-xl-6">

                                        <p class="about-author__info my-1 px-lg-3 px-xl-0 py-1 mt-lg-4 mt-xl-0">Многолетний опыт работы с
                                            предпринимателями также показал, что большинство бизнесменов получают
                                            доход только от продажи своих продуктов и оказании услуг. Они никак не
                                            монетизируют собственный ресурс. Даже если у собственника или у
                                            руководителя есть идеи и решения по монетизации ресурса, их никто не
                                            внедряет. Они так и остаются идеями, повисшими в воздухе.
                                        </p>
                                            <p class="about-author__info my-1 px-lg-3 px-xl-0 py-1 mb-lg-2 mr-sm-n4">Так в моей жизни
                                                появился еще один мощный инструмент под названием Монетизатор, который
                                                помогает бизнесменам получить прибыль от монетизации ресурса, часто
                                                превышающий доход от основного вида деятельности в несколько раз.
                                            </p>
                                            <h4 class="about-author__name about-author__name__info text-study pl-xl-0 my-1">
                                        Я училась у лучших в
                                        мире учителей.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <section class="about-author container-fluid px-0 pb-3">
                        <div class="container">
                            <div class="offset-xl-6 pl-xl-1 pl-3 mb-5">
                                <div class="school-product">
                                    <p class="about-author__info">В копилке моих знаний, постоянно применяемых на практике:</p>

                                    <ul class="fa-ul about-author__list">
                                        <li class="about-author__block pl-2 my-3"><span class="fa-li about-author__info">
                                                        <img class="arrow" src="/img/arrow_green.png"
                                                             alt="arrow_green"></span> Трансформационная программа
                                            Аркадия Осипова, эксперта
                                            в сфере применения Природоподобных Технологий</li>
                                        <li class="about-author__block pl-2 my-3"><span class="fa-li about-author__info">
                                                        <img class="arrow" src="/img/arrow_green.png" alt="arrow_green">
                                            </span>Обучение кросс-маркетингу в школе Владислава Бермуды</li>
                                        <li class="about-author__block pl-2 my-3"><span class="fa-li about-author__info">
                                                        <img class="arrow" src="/img/arrow_green.png" alt="arrow_green">
                                            </span>Обучение
                                            на Монетизатора для генерация прибыли в компании с
                                            созданием дополнительных источников дохода</li>
                                        <li class="about-author__block pl-2 my-3"><span class="fa-li about-author__info">
                                                        <img class="arrow" src="/img/arrow_green.png" alt="arrow_green">
                                            </span>Повышение квалификации
                                            в школе партизанского интернет-маркетинга
                                            Алексеева Никиты</li>
                                    </ul>
                                </div>
                            </div>


                            <div class="col-md-12 mt-lg-5">
                                <section class="container mt-lg-5">
                                    <?php require "main-page-parts/cross_video.php";?>
                                </section>

                                <section class="container mb-5">
                                    <?php require "main-page-parts/courses_tabs.php";?>
                                </section>

                                <section class="container mb-md-5 px-0">
                                    <?php require "main-page-parts/nested-consalt.php";?>
                                </section>

                                <section class="container">
                                    <h3 id="reviews-id" class="section-product__title faq-clients my-mt-5">Отзывы наших клиентов</h3>
                                    <div class="">
                                        <?php require "main-page-parts/video_slider.php";?>
                                    </div>
                                    <div class="pb-4 d-md-none d-block">
                                        <?php require "main-page-parts/video_slider_small.php";?>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </section>
                </div>
            </section>

            <?php include "general-components/footer.php";?>
                </div>


                <script src="slick/video.js"></script>
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                <!-- Slider Slick -->
                <script src="slick/slick.min.js"></script>
                <script src="slick/script.js"></script>
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                        crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                        crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                        crossorigin="anonymous"></script>

    </body>

</html>