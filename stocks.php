<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Акции</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

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

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/stocks.css">
        <link rel="stylesheet" href="css/timer.css">
    </head>

    <body>

        <?php include('blocks/navigation.php'); ?>

        <div class="main">
            <div class="wrapper">
                <div class="box">
                    <div class="center">
                        <h1>Акции</h1>
                    </div>
                    <div class="stocks">
                        <div class="stock">
                            <div class="center">
                                <img src="images/logo-stock-double.png" alt="foto">
                                <p>Скидка 30% при единовременном заказе 2-х выпускных.</p>
                            </div>
                        </div>

                        <div class="stock">
                            <div class="center">
                                <img src="images/logo-stocks-repost.png" alt="foto">
                                <p>Скидка 5% на следующий праздник за отзыв в соцсети</p>
                            </div>
                        </div>

                        <div class="stock">
                            <div class="center">
                                <img src="images/logo-stocks-candy.png" alt="foto">
                                <p>До конца марта Candy Bar при заказе праздника под ключ в подарок</p>
                                <div class="timer">
                                    <h1 class="countdown-title">До конца акции</h1>
                                    <div id="deadline-message" class="deadline-message">
                                        <p>Акция завершена</p>
                                    </div>
                                    <div id="countdown" class="countdown">
                                        <div class="countdown-number">
                                            <span class="days countdown-time"></span>
                                            <span class="countdown-text">Дней</span>
                                        </div>
                                        <div class="countdown-number">
                                            <span class="hours countdown-time"></span>
                                            <span class="countdown-text">Часов</span>
                                        </div>
                                        <div class="countdown-number">
                                            <span class="minutes countdown-time"></span>
                                            <span class="countdown-text">Минут</span>
                                        </div>
                                        <div class="countdown-number">
                                            <span class="seconds countdown-time"></span>
                                            <span class="countdown-text">Секунд</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="stock" id="disabled">
                            <div class="center">
                                <img src="images/logo-2-in-1.png" alt="foto">
                                <p>Объедини 23 февраля и 8 марта в один праздник и получи скидку 50%</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>

        <?php include("blocks/footer.php"); ?>

        <script src="js/timer.js"></script>

    </body>

</php>