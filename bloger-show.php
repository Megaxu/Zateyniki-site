<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Блогерская вечеринка</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/bloger-show.css">
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
                        <h1>Блогерская вечеринка</h1>
                    </div>
                    <div class="box-info">
                        <div class="text-block">
                            <h3>Возраст: от 10 до 15 лет.</h3>
                            <p>Любите снимать вайны и бэкстейджи? Танцуете перед камерой телефона, набирая подписчиков и считая лайки? Тогда мы Вас уверяем: организация блогерской вечеринки это то, что вам нужно! <br> Тик-токеры. Лайкеры, Инстаграмеры и блогеры — мы подготовили для Вас бомбическую развлекательную программу. Вместе с нашими звездными ведущими Вы попробуете набрать больше подписчиков и лайков, повысить свой рейтинг в соцсетях, разобраться в тонкостях возможных направлений своего блога. Не сомневайтесь, наши ребята — блогеры со стажем. Устроим настоящие баттлы на просторах Инстаграма, научимся отличать скетчи от live haks, подготовим стартап по запуску новой звезды You Tube и запишем клип «один день из жизни блогера-именинника», который взорвет соцсети друзей!</p>
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
                            <img src="images/best-bloger.jpg" alt="fixies-foto" width="800px" height="600px">
                            <div class="text-block-wait-you">
                                <p>1. Два ведущих;</p>
                                <p>2. Конкурсы и челленджи;</p>
                                <p>3. Программа от 1 до 2 часов;</p>
                                <p>4. Памятные призы каждому гостю;</p>
                                <p>5. Яркие селфи с друзьями в инстабудке.</p>
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
                                        <img src="images/blog_1.jpg" width="800" height="800">
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