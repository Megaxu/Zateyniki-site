<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Тайные агенты</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/spy-show.css">
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
                        <h1>Тайные агенты</h1>
                    </div>
                    <div class="box-info">
                        <div class="text-block">
                            <h3>Возраст: от 10 до 14 лет.</h3>
                            <p>Шпионы никогда не спят, так же как и их враги! Для шпиона самое главное - оставаться незаметным, именно поэтому наши агенты очень избирательны в подборе новобранцев. Сегодня наши агенты прибыли сюда с очень важной миссией — организовать школу юных шпионов!
                                Множество головоломок, надежная маскировка, бесшумное проникновение во вражеский штаб, снятие отпечатков пальцев, взлом сейфа с важными документами, поиск улик и многое другое!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="wrapper">
                <div class="box-wait-you">
                    <div class="center">
                        <h2 class="h2-fiol">Что вас ждет?</h2>
                    </div>
                    <div class="box-info">
                        <img src="images/best-spy.jpg" alt="spy-foto" width="700px" height="800px">
                        <div class="text-block-wait-you">
                            <p>1. Два ведущих;</p>
                            <p>2. Программа на 1 или 2 часа;</p>
                            <p>3. Памятный приз каждому участнику;</p>
                            <p>4. Квест с элементами тимбилдинга;</p>
                            <p>5. Невероятные фотографии в шпионском образе.</p>
                        </div>
                    </div>
                </div>
                <div class="box-galery-spy">
                    <div class="wrapper">
                        <div class="center">
                            <h2 class="h2-fiol">Галерея</h2>
                        </div>
                        <div id="slider-wrap">
                            <div id="slider">
                                <div class="slide">
                                    <img src="images/spy_1.jpg" width="690" height="690">
                                </div>
                                <div class="slide">
                                    <img src="images/spy_2.jpg" width="690" height="690">
                                </div>
                                <div class="slide">
                                    <img src="images/spy_3.jpg" width="690" height="690">
                                </div>
                                <div class="slide">
                                    <img src="images/spy_4.jpg" width="690" height="690">
                                </div>
                                <div class="slide">
                                    <img src="images/spy_5.jpg" width="690" height="690">
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