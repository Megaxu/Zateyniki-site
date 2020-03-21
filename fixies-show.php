<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <title>А кто такие Фиксики?</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/fixies-show.css">
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
                        <h1>А кто такие Фиксики?</h1>
                    </div>
                    <div class="box-info">
                        <div class="text-block">
                            <h3>Возраст: до 12 лет.</h3>
                            <p>Симка и Нолик объявляют настоящий протест... Протест против скучных праздников! Они собрали все самые интересные и познавательные игры, флэшмобы и викторины, чтобы доказать всему миру, что их праздник самый весёлый. Ребята перевоплотятся в морских существ, поохотятся на льва, станут настоящими хоккеистами и даже попробуют себя в роли профессиональных актёров. Конечно же наши яркие Фиксик и Нолик никогда не откажутся сфотографироваться со своими новыми друзьями (а иногда даже покривляться на камеру)</p>
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
                            <img src="images/best-fixies.jpg" alt="fixies-foto" width="690px" height="560px">
                            <div class="text-block-wait-you">
                                <p>1. Два ведущих;</p>
                                <p>2. Программа на 1 или 2 часа;</p>
                                <p>3. Отличные фотографии после праздника;</p>
                                <p>4. Профессиональные аниматоры в ярких костюмах;</p>
                                <p>5. Памятные призы от Симки и Нолика каждому гостю.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box-galery-fixies">
                        <div class="wrapper">
                            <div class="center">
                                <h2 class="h2-fiol">Галерея</h2>
                            </div>
                            <div id="slider-wrap">
                                <div id="slider">
                                    <div class="slide">
                                        <img src="images/fx_1.jpg" width="600" height="600">
                                    </div>
                                    <div class="slide">
                                        <img src="images/fx_2.jpg" width="600" height="600">
                                    </div>
                                    <div class="slide">
                                        <img src="images/fx_3.jpg" width="600" height="600">
                                    </div>
                                    <div class="slide">
                                        <img src="images/fx_4.jpg" width="600" height="600">
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