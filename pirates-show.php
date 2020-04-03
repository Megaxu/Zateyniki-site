<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Пиратская вечеринка</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta property="og:title" content="Пиратская вечеринка">
        <meta property="og:site_name" content="Затейники-СПБ оргнанизация праздников в СПБ">
        <meta property="og:url" content="pirates-show">
        <meta property="og:image" content="images/pirates-show-fon.jpg">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/pirates-show.css">
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

        <?php include("blocks/navigation.php"); ?>

        <div class="banner">
            <div class="wrapper">
                <div class="box">
                    <div class="center">
                        <h1>Пиратская вечеринка</h1>
                    </div>
                    <div class="box-info">
                        <div class="text-block">
                            <p>Много лет назад капитан Флинт и его команда спрятали свои величайшие сокровища, оставив кладоискателям лишь одну подсказку. Но бутылка с картой блуждает по мировому океану и еще никому не удалось найти её... Постойте, что это? Неужели это она?! Скорее собирай экспедицию из надежных товарищей и отправляйся на поиски клада. Но задания не так просты! Помимо логики и внимательности новоиспеченным пиратам необходим командный дух, ведь некоторые испытания можно пройти исключительно сообща. Даже дети знают, что любой уважающий себя пират не оставил бы клад в кустах, а закопал бы поглубже. Жажда сокровищ и лопата в руках - вот он залог успеха! Как принято на корабле, добычу делим поровну, и каждый уйдет с подарком и яркими воспоминаниями! Ваша команда уже готова? Поднять паруса!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="wrapper">
                <div class="center">
                    <div class="box-wait-you">
                        <h2 class="h2-fiol">Что вас ждет?</h2>
                        <div class="box-info">
                            <img src="images/best-pirates.jpg" alt="fixies-foto" width="700px" height="480px">
                            <div class="text-block-wait-you">
                                <p>1. Два ведущих;</p>
                                <p>2. Программа от 1 до 3 часов;</p>
                                <p>3. Настоящий сундук с сокровищами;</p>
                                <p>4. Детский и взрослый сценарий на выбор;</p>
                                <p>5. Оригинальные фото в пиратских образах.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box-galery-pirates">
                        <div class="wrapper">
                            <div class="center">
                                <h2 class="h2-fiol">Галерея</h2>
                            </div>
                            <div id="slider-wrap">
                                <div id="slider">
                                    <div class="slide">
                                        <img src="images/pir_1.jpg" width="690" height="690">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include("blocks/footer.php"); ?>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script src="js/slider.js"></script>

    </body>

</php>