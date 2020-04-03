<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Дискотека 90-х</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta property="og:title" content="Дискотека 90-х">
        <meta property="og:site_name" content="Затейники-СПБ оргнанизация праздников в СПБ">
        <meta property="og:url" content="disco-show">
        <meta property="og:image" content="images/disco-show-preview.png">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/disco-show.css">
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
                        <h1>Дискотека 90-х</h1>
                    </div>
                    <div class="box-info">
                        <div class="text-block">
                            <p>Все на PARTY!!!<br>Те, у кого детство или юность прошли в бурные девяностые, наверняка с некоторой ностальгией вспоминают о лихих и ярких временах. Ярких во всех смыслах этого слова: напитки «Юпи» и «Инвайт» неестественно сочных оттенков, кислотные цвета в одежде, разноцветные шарики и кубики жвачек — вся эта волна «яркости» возвращается с новым размахом прямо на Ваш праздник!</p>
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
                            <img src="images/best-disco.jpg" alt="fixies-foto" width="700px" height="470px">
                            <div class="text-block-wait-you">
                                <p>1. Программа на 2 и 3 часа;</p>
                                <p>2. Ведуший и DJ с аппаратурой;</p>
                                <p>3. Яркая тематическая фотосессия;</p>
                                <p>4. Памятные сувениры каждому гостю;</p>
                                <p>5. Качественный плейлист и песни на заказ.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box-galery-disco">
                        <div class="wrapper">
                            <div class="center">
                                <h2 class="h2-fiol">Галерея</h2>
                            </div>
                            <div id="slider-wrap">
                                <div id="slider">
                                    <div class="slide">
                                        <img src="images/disco_1.jpg" width="690" height="470">
                                    </div>
                                    <div class="slide">
                                        <img src="images/disco_2.jpg" width="690" height="470">
                                    </div>
                                    <div class="slide">
                                        <img src="images/disco_3.jpg" width="690" height="470">
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