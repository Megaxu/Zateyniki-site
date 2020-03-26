<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Классика</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/classic-show.css">
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
                        <div class="box-wait-you">
                            <h1>Классика</h1>
                            <div class="box-info">
                                <img src="images/best-classic.jpg" alt="fixies-foto" width="700px" height="470px">
                                <div class="text-block-wait-you">
                                    <p>1. Ведущий + DJ с аппаратурой;</p>
                                    <p>2. Создание незабываемой атмосферы;</p>
                                    <p>3. Памятные сувениры для всех гостей;</p>
                                    <p>4. Чёткая организация выпускного вечера;</p>
                                    <p>5. Памятные фотографии с одноклассниками.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main">
                <div class="wrapper">
                    <div class="center">
                        <div class="box-galery-classic">
                            <div class="wrapper">
                                <div class="center">
                                    <h2 class="h2-fiol">Галерея</h2>
                                </div>
                                <div id="slider-wrap">
                                    <div id="slider">
                                        <div class="slide">
                                            <img src="images/classic_1.jpg" width="690" height="460">
                                        </div>
                                        <div class="slide">
                                            <img src="images/classic_2.jpg" width="690" height="460">
                                        </div>
                                        <div class="slide">
                                            <img src="images/classic_3.jpg" width="690" height="460">
                                        </div>
                                        <div class="slide">
                                            <img src="images/classic_4.jpg" width="690" height="460">
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