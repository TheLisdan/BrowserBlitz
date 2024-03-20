<?php require_once __DIR__ . "/boot.php";
echo var_export(check_auth(), true);?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>BrowserBlitz</title>
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="./img/webclip.png">
</head>
<body>
    <header>
        <div class="header__wrapper">
            <div class="header__left">
                <a href="#" class="header__left-logo">
                    <img src="./img/svg/logo.svg" alt="logo">
                </a>
                <nav>
                    <ul>
                        <li class="header__left__nav-button">
                            <a href="#">
                                <img src="./img/svg/catalog.svg" alt="catalog">Каталог
                            </a>
                        </li>
                        <li class="header__left__nav-button">
                            <a href="#">
                                <img src="./img/svg/search.svg" alt="search">Поиск
                            </a>
                        </li>
                        <li class="header__left__nav-button">
                            <a href="#">
                                <img src="./img/svg/faq.svg" alt="faq">FAQ
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header__right">
                <button class="header__right-login"
                onclick="show_login_form()">Вход</button>
                <button class="header__right-registration"
                onclick="show_registration_form()">Регистрация</button>
            </div>
        </div>
    </header>

    <div class="registration" id="registration">
        <h1>Регистрация</h1>
        <button class="close-button" onclick="hide_registration_form()">
            <img src="./img/svg/close.svg" alt="Close">
        </button>
        <form action="./session/process_registration_form.php" method="post">
            <input type="text"
            name="nickname" 
            id="registration__nickname" 
            required placeholder="Имя Пользователя">
            <input type="email" 
            name="email" 
            id="registration__email" 
            required placeholder="Почта">
            <div class="registration__password__wrapper">
                <input type="password" 
                name="password"
                id="registration__password" 
                required placeholder="Пароль">
                <img src="./img/svg/eye-closed.svg" 
                alt="Eye" 
                id="registration__password-eye"
                onclick="toggle_registration_password()">
            </div>
            <?php flash();?>
            <label class="registration__checkbox-wrapper">
                <input type="checkbox"
                name="checkbox"
                value="check">
                <span class="registration__checkbox-checkmark"></span>
                <p>Ознакомлен с <a href="#">Пользовательским Соглашением</a></p>
            </label>
            <input type="submit" value="ЗАРЕГИСТРИРОВАТЬСЯ">
        </form>
    </div>

    <div class="login" id="login">
        <h1>Вход</h1>
        <button class="close-button" onclick="hide_login_form()">
            <img src="./img/svg/close.svg" alt="Close">
        </button>
        <form action="./session/process_login_form.php" method="post">
            <input type="text" 
            name="email" 
            id="login__email" 
            required placeholder="Логин">
            <div class="login__password__wrapper">
                <input type="password"
                name="password" 
                id="login__password" 
                required placeholder="Пароль">
                <img src="./img/svg/eye-closed.svg" 
                alt="Eye"
                id="login__password-eye" 
                onclick="toggle_login_password()">
            </div>
            <?php flash();?>
            <input type="submit" value="ВОЙТИ">
        </form>
    </div>

    <main>
        <section class="popular">
            <h1>Популярные Игры</h1>
            <div class="popular__gallery">
                <div class="popular__gallery__card">
                    <img src="./img/svg/gamezag.svg" alt="Game">
                    <h2>Game Name</h2>
                </div>
                <div class="popular__gallery__card">
                    <img src="./img/svg/gamezag.svg" alt="Game">
                    <h2>Game Name</h2>
                </div>
                <div class="popular__gallery__card">
                    <img src="./img/svg/gamezag.svg" alt="Game">
                    <h2>Game Name</h2>
                </div>
                <div class="popular__gallery__card">
                    <img src="./img/svg/gamezag.svg" alt="Game">
                    <h2>Game Name</h2>
                </div>
            </div>
        </section>

        <div class="wrapper">
            <section class="catalog">
                <h1>Новые игры</h1>
                <hr>
                <div class="catalog__card">
                    <img src="./img/svg/gamezag.svg" alt="Game">
                    <div class="catalog__card-info">
                        <h2>Game Name</h2>
                        <p>Описание</p>
                    </div>
                </div>
                <div class="catalog__card">
                    <img src="./img/svg/gamezag.svg" alt="Game">
                    <div class="catalog__card-info">
                        <h2>Game Name</h2>
                        <p>Описание</p>
                    </div>
                </div>
                <div class="catalog__card">
                    <img src="./img/svg/gamezag.svg" alt="Game">
                    <div class="catalog__card-info">
                        <h2>Game Name</h2>
                        <p>Описание</p>
                    </div>
                </div>
                <div class="catalog__card">
                    <img src="./img/svg/gamezag.svg" alt="Game">
                    <div class="catalog__card-info">
                        <h2>Game Name</h2>
                        <p>Описание</p>
                    </div>
                </div>
                <div class="catalog__card">
                    <img src="./img/svg/gamezag.svg" alt="Game">
                    <div class="catalog__card-info">
                        <h2>Game Name</h2>
                        <p>Описание</p>
                    </div>
                </div>
                <div class="catalog__card">
                    <img src="./img/svg/gamezag.svg" alt="Game">
                    <div class="catalog__card-info">
                        <h2>Game Name</h2>
                        <p>Описание</p>
                    </div>
                </div>
                <div class="catalog__card">
                    <img src="./img/svg/gamezag.svg" alt="Game">
                    <div class="catalog__card-info">
                        <h2>Game Name</h2>
                        <p>Описание</p>
                    </div>
                </div>
                <div class="catalog__card">
                    <img src="./img/svg/gamezag.svg" alt="Game">
                    <div class="catalog__card-info">
                        <h2>Game Name</h2>
                        <p>Описание</p>
                    </div>
                </div>
                <div class="catalog__card">
                    <img src="./img/svg/gamezag.svg" alt="Game">
                    <div class="catalog__card-info">
                        <h2>Game Name</h2>
                        <p>Описание</p>
                    </div>
                </div>
            </section>
            
            <div>
                <section class="top">
                    <h1>Топ активных игроков</h1>
                    <hr>
                    <div class="top__card">
                        <img src="./img/svg/avatarzag.svg" alt="Avatar">
                        <div class="top__card-info">
                            <h2>Nickname</h2>
                            <p>0ч 0м 0с</p>
                        </div>
                    </div>
                    <div class="top__card">
                        <img src="./img/svg/avatarzag.svg" alt="Avatar">
                        <div class="top__card-info">
                            <h2>Nickname</h2>
                            <p>0ч 0м 0с</p>
                        </div>
                    </div>
                    <div class="top__card">
                        <img src="./img/svg/avatarzag.svg" alt="Avatar">
                        <div class="top__card-info">
                            <h2>Nickname</h2>
                            <p>0ч 0м 0с</p>
                        </div>
                    </div>
                    <div class="top__card">
                        <img src="./img/svg/avatarzag.svg" alt="Avatar">
                        <div class="top__card-info">
                            <h2>Nickname</h2>
                            <p>0ч 0м 0с</p>
                        </div>
                    </div>
                    <div class="top__card">
                        <img src="./img/svg/avatarzag.svg" alt="Avatar">
                        <div class="top__card-info">
                            <h2>Nickname</h2>
                            <p>0ч 0м 0с</p>
                        </div>
                    </div>
                </section>
    
                <section class="genres">
                    <h1>Жанры</h1>
                    <hr>
                    <ul>
                        <li><a href="#">MMORPG</a></li>
                        <li><a href="#">RTS</a></li>
                        <li><a href="#">Головоломки</a></li>
                        <li><a href="#">Строительство</a></li>
                        <li><a href="#">Симуляторы</a></li>
                        <li><a href="#">Выживание</a></li>
                        <li><a href="#">RPG</a></li>
                        <li><a href="#">Аркады</a></li>
                        <li><a href="#">Битва</a></li>
                        <li><a href="#">Квесты</a></li>
                        <li><a href="#">Карточные</a></li>
                        <li><a href="#">Гонки</a></li>
                        <li><a href="#">Шутеры</a></li>
                        <li><a href="#">Фэнтези</a></li>
                        <li><a href="#">Платформеры</a></li>
                        <li><a href="#">Тир</a></li>
                        <li><a href="#">Спорт</a></li>
                        <li><a href="#">Мистика</a></li>
                        <li><a href="#">Викторины</a></li>
                        <li><a href="#">Песочницы</a></li>
                    </ul> 
                </section>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer__left">
            <p>Made by <b>HappyToo</b> & <a href="https://github.com/TheLisdan" target="_blank">Lisdan</a></p>
        </div>

        <img src="./img/svg/logo-white.svg" alt="BrowserBlitz">

        <div class="footer__right">
            <p>© 2024 <a href="https://thelisdan.github.io/BrowserBlitz/">BrowserBlitz</a>. All rights reserved</p>
        </div>
    </footer>

    <script>
        let registration_form = document.getElementById("registration");
        let registration_password = document.getElementById("registration__password");
        let registration_password_eye = document.getElementById("registration__password-eye");
        let login_form = document.getElementById("login");
        let login_password = document.getElementById("login__password");
        let login_password_eye = document.getElementById("login__password-eye");

        function toggle_registration_password() {
            if (registration_password.type === "password") {
                registration_password.type = "text";
                registration_password_eye.src = "./img/svg/eye-opened.svg";
            } else {
                registration_password.type = "password";
                registration_password_eye.src = "./img/svg/eye-closed.svg";
            }
        }

        function toggle_login_password() {
            if (login_password.type === "password") {
                login_password.type = "text";
                login_password_eye.src = "./img/svg/eye-opened.svg";
            } else {
                login_password.type = "password";
                login_password_eye.src = "./img/svg/eye-closed.svg";
            }
        }

        function toggle_blur() {
            let blur_elements = [
                document.getElementsByTagName("header")[0],
                document.getElementsByTagName("main")[0],
                document.getElementsByTagName("footer")[0]
            ];
            blur_elements.forEach(function(entry) {
                entry.classList.toggle("blur");
            })
        }

        function check_active_form() {
            if (window.getComputedStyle(registration_form).display === "flex"
            || window.getComputedStyle(login_form).display === "flex") {
                return true;
            }
            else {
                return false;
            }
        }

        function show_registration_form() {
            if (check_active_form()) {
                return;
            }
            toggle_blur();
            registration_form.style.display = "flex";
            setTimeout(() => registration_form.style.opacity = "1", 1);
            if (registration_password.type === "text") {
                toggle_registration_password();
            }
        }

        function show_login_form() {
            if (check_active_form()) {
                return;
            }
            toggle_blur();
            login_form.style.display = "flex";
            setTimeout(() => login_form.style.opacity = "1", 1);
            if (login_password.type === "text") {
                toggle_login_password();
            }
        }

        function hide_registration_form() {
            toggle_blur();
            registration_form.style.opacity = "0";
            setTimeout(() => registration_form.style.display = "none", 300);
        }
        
        function hide_login_form() {
            toggle_blur();
            login_form.style.opacity = "0";
            setTimeout(() => login_form.style.display = "none", 300);
        }

        document.addEventListener('keydown', function(event) {
            if (event.code === "Escape") {
                if (window.getComputedStyle(registration_form).display === "flex") {
                    hide_registration_form();
                } else if (window.getComputedStyle(login_form).display === "flex") {
                    hide_login_form();
                }
            }
        });
    </script>
</body>
</html>