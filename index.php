<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Главная Затейники-СПб</title>
        <meta http-epuiv="X-UA-Compatible" content="IE=edge">
        <meta property="og:title" content="Главная Затейники-СПб">
        <meta property="og:site_name" content="Затейники-СПБ оргнанизация праздников в СПБ">
        <meta property="og:url" content="index">
        <meta property="og:image" content="images/main-title-foto.png">">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/main-page.css">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function(m, e, t, r, i, k, a) {
                m[i] = m[i] || function() {
                    (m[i].a = m[i].a || []).push(arguments)
                };
                m[i].l = 1 * new Date();
                k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
            })
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(57696484, "init", {
                clickmap: true,
                trackLinks: true,
                accurateTrackBounce: true,
                webvisor: true
            });
        </script>
        <noscript>
            <div><img src="https://mc.yandex.ru/watch/57696484" style="position:absolute; left:-9999px;" alt="" /></div>
        </noscript>
        <!-- /Yandex.Metrika counter -->
    </head>

    <body>

        <?php include('blocks/navigation.php'); ?>

        <div class="main">
            <div class="banner">
                <div class="wrapper">
                    <div class="box-title">
                        <img src="images/test-hut.png" alt="Logo" width="100" height="175">
                        <div class="title-text">
                            <h1>Затейники-СПб</h1>
                            <p>Не бывает мелочей в исполнении затей!</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-about-us">
                            <img src="images/main-title-foto.png" alt="Фото" width="640" height="640">
                            <blockquote>
                                <h2>О нас</h2>
                                <p>Компания «Затейники-СПб» ведёт историю с 1992 года. За это время проведены десятки
                                    выпускных вечеров, сотни Дней рождения, юбилеев и корпоративных праздников, тысячи
                                    свадеб (в том числе – серебряных и золотых).
                                </p>
                                <p>
                                    Мы рады предложить Вам самые разнообразные услуги по организации мероприятий и торжеств:
                                    от проведения корпоратива на природе, выездной регистрации до фоторепортажей и стихов
                                    под заказ.
                                </p>

                                <p>
                                    Наш слоган “Нет мелочей в воплощении затей!” мы подтверждаем на деле, находя
                                    индивидуальный подход к заказчику и создавая уникальную программу на каждое
                                    мероприятие.
                                </p>
                            </blockquote>
                        </div>

                        <div class="box-stocks">
                            <div class="center">
                                <h2 class="h2-white">Акции!</h2>
                            </div>
                            <div class="stocks">
                                <div class="stock">
                                    <img src="images/logo-stock-double.png" alt="">
                                    <h3>Скидка 30% при единовременном заказе 2-х выпускных.</h3>
                                </div>
                                <div class="stock">
                                    <img src="images/logo-stocks-repost.png" alt="">
                                    <h3>Скидка на следующий праздник за отзыв в соцсети</h3>
                                </div>
                                <div class="stock" id="disabled">
                                    <img src="images/logo-stocks-candy.png" alt="">
                                    <h3>До конца марта Candy Bar при заказе праздника под ключ в подарок</h3>
                                </div>
                            </div>
                            <div class="stock" id="all-stocks">
                                <h3><a href="stocks">Все акции</a></h3>
                            </div>
                        </div>

                        <div class="box-services">
                            <div class="center">
                                <h2 class="h2-fiol">Услуги</h2>
                            </div>
                            <div class="services">
                                <div class="service">
                                    <img src="images/logo-birthday.png" alt="">
                                    <h3><a href="birthday">День рождения</a></h3>
                                </div>
                                <div class="service">
                                    <img src="images/logo-wedding.png" alt="">
                                    <h3><a href="wedding">Свадьба</a></h3>
                                </div>
                                <div class="service">
                                    <img src="images/logo-graduation.png" alt="">
                                    <h3><a href="graduation">Выпускной</a></h3>
                                </div>
                            </div>
                            <div class="service" id="another-services">
                                <h3><a href="services">Другие</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include("blocks/footer.php"); ?>

    </body>

</php>