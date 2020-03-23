<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Минута славы!</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/minute-of-fame-show.css">
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
                        <h1>Минута славы!</h1>
                    </div>
                    <div class="box-info">
                        <div class="text-block">
                            <p>Минута Славы - абсолютно новый формат мероприятия! Это не просто праздник, это настоящее шоу, где вы сможете не только получить заряд позитива и накачать пресс от смеха, но и проявить себя в шуточных талантах. Абсолютно каждый получит диплом лучшего в одной из выдуманных номинаций, ведь мы точно знаем: талат есть у каждого. Осталось только найти его и показать миру! Смелые конкурсы, забавные интерактивы, остроумные ведущие и море позитива наполнят ваш праздник. Шоу, где каждый получит свою минуту славы и станет звездой!</p>
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
                            <img src="images/best-minute-of-fame.jpg" alt="minute-foto" width="700px" height="570px">
                            <div class="text-block-wait-you">
                                <p>1. Детский и взрослый сценарий на выбор;</p>
                                <p>2. Памятные призы каждому участнику;</p>
                                <p>3. Фотосессия в звездных образах;</p>
                                <p>4. Программа на 2 часа;</p>
                                <p>5. Два ведущих.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box-galery-minute-of-fame">
                        <div class="wrapper">
                            <div class="center">
                                <h2 class="h2-fiol">Галерея</h2>
                            </div>
                            <div id="slider-wrap">
                                <div id="slider">
                                    <div class="slide">
                                        <img src="images/min_1.jpg" width="690" height="690">
                                    </div>
                                    <div class="slide">
                                        <img src="images/min_2.jpg" width="690" height="690">
                                    </div>
                                    <div class="slide">
                                        <img src="images/min_3.jpg" width="690" height="690">
                                    </div>
                                    <div class="slide">
                                        <img src="images/min_4.jpg" width="690" height="690">
                                    </div>
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