<!DOCTYPE html>
<html lang="ru">
<?php require "general-components/head.php"; ?>
<body class="">
<div class="wrapper">
    <section class="fullscreen">
        <div class="fullscreen__body">
            <header class="secondary-navigation nav-fill header my-0 pt-3">
                <?php require "general-components/nav.php"; ?>
            </header>

            <main class="my-md-5 main-content">
                <div class="container auth-form bootdey my-md-3">

                    <div class="omb_login">
                        <h3 class="omb_authTitle">Регистрация</h3>
                        <div class="row omb_row-sm-offset-1">
                            <div class="col-xs-12 col-sm-12">
                                <p class="omb_forgotPwd text-center">
                                    *Постарайтесь без ошибок ввести Вашу почту и придумайте пароль. Не забудьте записать:)
                                </p>
                            </div>
                        </div> 
                        <div class="row omb_row-sm-offset-3">
                            <div class="registration-bg col-xs-12 col-sm-6">
                                <form class="omb_loginForm" action="registration-script.php" autocomplete="off" method="POST">
                                    <span class="help-block"></span>
                                    <div class="input-group mb-3">
                                        <span class="input-group-addon"><i class="fa fa-envelope mr-2"></i></i></span>
                                        <input type="text" required class="form-control stage__stage-txt" name="username"
                                               placeholder="E-mail">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-addon"><i class="fa fa-lock mr-2"></i></span>
                                        <input type="password" required class="form-control stage__stage-txt" name="password"
                                               placeholder="Пароль">
                                    </div>
                                    <div class="text-center">
                                        <button class="about-author__call-btn auth-btn border-0 my-3" type="submit">Зарегистрироваться</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </main>

        </div>
    </section>
    <?php include "general-components/footer.php"; ?>
</div>
</body>
</html>