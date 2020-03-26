<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Вручение премии Оскар</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/oscar-show.css">
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
                        <h1>Вручение премии Оскар</h1>
                    </div>
                    <div class="box-info">
                        <div class="text-block">
                            <p>Праздник в стиле премии Оскар – это праздник для настоящих звезд! Мы перенесемся в Лос-Анджелес, и сможем выбрать и оценить достойно лучшего из лучших. Гости смогут попробовать свои силы в роли актеров, режиссеров, сценаристов, рекламщиков и гримеров. Приглашаем Вас побывать в Голливуде и устроить незабываемый праздник в стиле вручения премии «Оскар». Такая программа будет по душе и детям, и взрослым, которые любят шумно и активно проводить время. Каждому из них будет действительно интересно попробовать себя в роли настоящей звезды!</p>
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
                            <img src="images/best-oscar.jpg" alt="fixies-foto" width="700px" height="470px">
                            <div class="text-block-wait-you">
                                <p>1. Два ведущих;</p>
                                <p>2. Программа на 2 или 3 часа;</p>
                                <p>3. Памятный приз каждому гостю;</p>
                                <p>4. Фотосессия в стиле премии Оскар;</p>
                                <p>5. Необычная и оригинальная программа.</p>
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
                                        <img src="images/oscar_1.jpg" width="690" height="500">
                                    </div>
                                    <div class="slide">
                                        <img src="images/oscar_2.jpg" width="690" height="500">
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