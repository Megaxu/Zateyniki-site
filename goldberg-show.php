<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <title>GoldbergTeam</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/goldberg-show.css">
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
                        <h1>GoldbergTeam</h1>
                    </div>
                    <div class="box-info">
                        <div class="text-block">
                            <p>Хотите увидеть Машину Голдберга в действии?<br>Гигантская цепочка событий сработает в финале как единый механизм. GoldbergTeam - абсолютно новый формат мероприятий: Задача участников - за несколько часов построить своими руками конструкцию длинной цепочки событий. Задания для всех разные: одни строят автомобиль и горку, с которой он съезжает, другие – лестницу, с которой скатывается мяч. Финал программы – это запуск цепной реакции. Когда цепная реакция пройдет без сбоев с первого до последнего этапа, Вы смело сможете называть себя super team!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-with-video">
            <div class="wrapper">
                <div class="center">
                    <h2 class="h2-white">Что Такое машина Голдберга?</h2>
                    <iframe width="700" height="470" src="https://www.youtube.com/embed/GvnEBX9aedY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="text-block-with-video">
                        <p>Что такое машина Голдберга?<br>Это устройство, которое выполняет очень простое действие чрезвычайно сложным образом — как правило, посредством длинной последовательности взаимодействий по «принципу домино». Финальное действие хоть и простое, но сработает только при безупречной работе всех предыдущих шагов. Отличный способ показать, как важен для успеха команды каждый ее участник!</p>
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
                            <img src="images/best-goldberg.jpg" alt="machine-foto" width="700px" height="470px">
                            <div class="text-block-wait-you">
                                <p>1. Невероятный видеоролик работы всего механизма на память;</p>
                                <p>2. Инструменты и материалы для создания машины Голдберга;</p>
                                <p>3. Полная свобода фантазии в реализации машины;</p>
                                <p>4. Программа на 2 или 3 часа;</p>
                                <p>5. Два ведущих.</p>
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
                                        <img src="images/gold_1.jpg" width="690" height="500">
                                    </div>
                                    <div class="slide">
                                        <img src="images/gold_2.jpg" width="690" height="500">
                                    </div>
                                    <div class="slide">
                                        <img src="images/gold_3.jpg" width="690" height="500">
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