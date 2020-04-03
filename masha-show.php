<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Маша и Медведь</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta property="og:title" content="Маша и Медведь">
        <meta property="og:site_name" content="Затейники-СПБ оргнанизация праздников в СПБ">
        <meta property="og:url" content="masha-show">
        <meta property="og:image" content="images/masha-show-preview.jpg">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/masha-show.css">
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
                        <h1>Маша и Медведь</h1>
                    </div>
                    <div class="box-info">
                        <div class="text-block">
                            <h3>Возраст: до 10 лет.</h3>
                            <p>С любым ребенком Маша и её верный спутник Медведь – найдут общий язык. Искренность и отзывчивость отличает наших артистов от прочих мастеров жанра, мы действительно ценим интересы ребенка. Сценарии наших выступлений постоянно обновляются. Также быстро, как появляются новые идеи для очередного приключения у неутомимых персонажей любимого мультфильма.</p>
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
                            <img src="images/best-masha.jpg" alt="fixies-foto" width="750px" height="500px">
                            <div class="text-block-wait-you">
                                <p>1. Подарки от Маши и Медведя каждому гостю;</p>
                                <p>2. Много яркого реквизита для конкурсов;</p>
                                <p>3. Профессиональные аниматоры;</p>
                                <p>4. 1 аниматор + ростовая кукла;</p>
                                <p>5. Программа 1 час.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box-galery-masha">
                        <div class="wrapper">
                            <div class="center">
                                <h2 class="h2-fiol">Галерея</h2>
                            </div>
                            <div id="slider-wrap">
                                <div id="slider">
                                    <div class="slide">
                                        <img src="images/mm_1.jpg" width="500" height="500">
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