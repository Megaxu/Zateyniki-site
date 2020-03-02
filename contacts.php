<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Контакты</title>
        <meta http-epuiv="X-UA-Compatible" content="IE=edge">
        
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
        <link rel="stylesheet" href="css/contacts.css">
    </head>

    <body>

        <?php include("blocks/navigation.php"); ?>

        <div class="main">
            <div class="wrapper">
                <div class="box">
                    <div class="center">
                        <h1>Связаться с нами</h1>
                        <p>Чтобы Вам было максимально удобно связаться с нами и заказать себе незабываемый празднник, мы
                            предлагаем сразу три способа связи:</p>
                    </div>
                    <div class="contacts">
                        <div class="contact">
                            <div class="contact-image">
                                <img src="images/logo-contacts-vk.png" alt="foto">
                                <h2><a href="https://vk.com/zateyniki_spb">Наша группа ВКонтакте</a></h2>
                            </div>
                        </div>

                        <div class="contact">
                            <div class="contact-image">
                                <img src="images/logo-contacts-phone.png" alt="foto">
                                <h2>+7(921) 350-03-27</h2>
                                <h2>+7(999) 239-55-32</h2>
                            </div>
                        </div>
                        <div class="contact">
                            <div class="contact-image">
                                <img src="images/logo-contacts-mail.png" alt="foto">
                                <a href=""></a>
                                <h2>info@zateyniki-spb.ru</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include("blocks/footer.php"); ?>

    </body>

</php>