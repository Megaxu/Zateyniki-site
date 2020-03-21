<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Тайная лаборатория</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/science-show.css">
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

        <div class="main">
            <div class="banner">
                <div class="wrapper">
                    <div class="box">
                        <div class="center">
                            <h1>Тайная лаборатория</h1>
                        </div>
                        <div class="box-info">
                            <div class="text-block">
                                <h3>Возраст: от 8 до 14 лет.</h3>
                                <p>Наука - это просто!
                                    Необычная смесь квеста и самого популярного шоу среди детей (и не только!). Под присмотром ученых ребята самостоятельно проведут яркие эксперименты, выполняя разнообразные задания и разгадывая множество загадок сумасшедшего профессора. Полное погружение в увлекательный мир науки и волшебства! А в конце праздника всех ждет памятный научный приз!</p>
                            </div>
                        </div>
                        <div class="center">
                            <h2 class="h2-fiol">Что вас ждет?</h2>
                        </div>
                        <div class="box-info">
                            <img src="images/best-science.jpg" alt="science-foto" width="600px" height="400px" style="margin: auto 0">
                            <div class="text-block-wait-you">
                                <p>1. 2 ведущих;</p>
                                <p>2. Программа на 1 или 2 часа;</p>
                                <p>3. Профессиональные ведущие обеспечат полную безопасность для детей во время проведения опытов и демонстраций;</p>
                                <p>4. Яркие фотографии в образе ученого;</p>
                                <p>5. Памятные призы каждому участнику.</p>
                            </div>
                        </div>
                        <div class="box-galery-sсience">
            <div class="wrapper">
                <div class="center">
                    <h2 class="h2-fiol">Галерея</h2>
                </div>
                <div id="slider-wrap">
                    <div id="slider">
                        <div class="slide">
                            <img src="images/science_1.jpg" width="600" height="600">
                        </div>
                        <div class="slide">
                            <img src="images/science_2.jpg" width="600" height="600">
                        </div>
                        <div class="slide">
                            <img src="images/science_3.jpg" width="600" height="600">
                        </div>
                        <div class="slide">
                            <img src="images/science_4.jpg" width="600" height="600">
                        </div>
                        <div class="slide">
                            <img src="images/science_5.jpg" width="600" height="600">
                        </div>
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