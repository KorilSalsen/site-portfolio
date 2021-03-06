<!doctype html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="bower/normalize-css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/media.css">
    <!--[if IE 8]>
        <script src="bower/html5shiv/dist/html5shiv.min.js"></script>
        <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
    <title>Корченов.ру. Вход.</title>
</head>
<body>
    <div class="page-wrapper">
        <div class="content-block__container content-block__container_login">
            <p class="form-title">Авторизируйтесь</p>
            <div class="server-message">
                <a href="" class="server-message__close" title="Close">Close</a>
                <p class="server-message__title"></p>
                <p class="server-message__text"></p>
            </div>
            <form action="/" class="login-form">
                <div class="input input_login-email">
                    <label for="login-email" class="input__label input__label_login input__label_login-email">Email</label>
                    <input id="login-email" class="input__text input__text_login input__text_login-email" type="email" name="login-email" placeholder="Введите Email" data-tooltip="введите email" data-tooltip-position="right">
                </div>
                <div class="input input_login-pass">
                    <label for="login-pass" class="input__label input__label_login input__label_login-pass">Пароль</label>
                    <div class="input-tooltip-wrapper">
                        <input id="login-pass" class="input__text input__text_login input__text_login-pass" type="password" name="login-pass" placeholder="Введите пароль" data-tooltip="введите пароль" data-tooltip-position="right">
                        <div class="tooltip tooltip_right">введите пароль</div>
                    </div>
                </div>
                <input id="remember" class="login-form__checkbox" type="checkbox" checked="checked">
                <label for="remember" class="login-form__checkbox-label">Запомнить меня</label>
                <input class="input__button input__button_submit input__button_submit-login" type="submit" value="Войти">
            </form>
        </div>
    </div>
    <footer class="footer">
        <div class="copyright">
            <a href="" class="enter">вход</a>
            <span class="copyright__text">© 2015. Это мой сайт, пожалуйста, не копируйте и не воруйте его!</span>
        </div>
    </footer>
    <script src="bower/jquery/dist/jquery.min.js"></script>
    <!--[if IE 8]>
    <script src="bower/jquery-placeholder/jquery.placeholder.min.js"></script>
    <![endif]-->
    <script src="js/main.js"></script>
</body>
</html>