<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/main.css">
</head>
<body>
    <header class="header">
        <div class="container header__wrap">
            <div class="logo">
                <a href="" class="logo__link">
                    <div class="logo__image">
                        <img src="../../images/Logo.svg"> 
                    </div>
                    <!-- <div class="logo__name">саяны</div> -->
                </a>
            </div>
            <div class="menu header__menu">
                <ul class="horizontal-list menu__list">
                    <li class="list__item"><a href="">Главная</a></li>
                    <li class="list__item"><a href="">Программы</a></li>
                    <li class="list__item"><a href="">Объявления</a></li>
                    <li class="list__item"><a href="">Телепрограмма</a></li>
                    <li class="list__item"><a href="">О компании</a></li>
                </ul>
            </div>
        </div>
    </header>
    <?php 
    // include '../main.html';
    include '../publication.html';
    // include '../program.html';
    // include '../program-alt.html';
    ?>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col col-xl-3">
                    <div class="information-block footer__contacts">
                        <h3 class="information-block__header h3-header">Контакты</h3>
                        <div class="information-block__content">
                            <ul class="vertical-list information-block__list">
                                <li class="list__item m-address-i"><a href="">г. Минусинск, ул. Абаканская, 43а</a></li>
                                <li class="list__item m-mail-i"><a href="">Email: ton@recmaster.ru</a></li>
                                <li class="list__item m-phone-i"><a href="">Телефон: /39132/ 5-30-30</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-xl-3">
                    <div class="information-block footer__about-company">
                        <h3 class="information-block__header h3-header">Информация о компании</h3>
                        <div class="information-block__content">
                            <ul class="vertical-list information-block__list">
                                <li class="list__item"><a href="">О компании</a></li>
                                <li class="list__item"><a href="">Рекламодателям</a></li>
                                <li class="list__item"><a href="">Вакансии</a></li>
                                <li class="list__item"><a href="">Программа передач</a></li>
                                <li class="list__item"><a href="">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-xl-3">
                    <div class="information-block footer__copyrighting">
                        <div class="information-block__content">
                            <p class="text information-block__other-iformation">
                                Копирование информации допускается только со ссылкой на сайт «Саяны Медиа». Для сайтов — только с активной гиперссылкой на страницу новости на нашем сайте.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col col-xl-3">
                    <div class="information-block footer__follow">
                        <h3 class="information-block__header h3-header">Следите за новостями</h3>
                        <div class="information-block__content">
                            <ul class="list horizontal-list information-block__icon-links">
                                <li class="list_item pic-link"><a href=""><div class="vk-i"></div></a></li>
                                <li class="list_item pic-link"><a href=""><div class="inst-i"></div></a></li>
                                <li class="list_item pic-link"><a href=""><div class="ok-i"></div></a></li>
                            </ul>
                            <div class="information-block__redaction">
                                <a href="">Редакция: +7 913 341 5132</a>
                            </div>
                            <div class="information-block__developed">
                                <a href="">Разработка сайта: <span class="webtolk-logo">Веб</span><span class="webtolk-logo webtolk-logo_orange">толк</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>