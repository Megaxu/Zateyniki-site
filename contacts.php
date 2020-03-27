<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Контакты</title>
        <meta http-epuiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/contacts.css">
        <link rel="stylesheet" href="css/email.css">
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
                                <h2><a id="btn_modal_window">info@zateyniki-spb.ru</a></h2>
                                <div id="my_modal" class="modal">
                                    <div class="modal_content">
                                        <span class="close_modal_window">×</span>
                                        <p>Форма связи</p>
                                        <?php
                                        //проверяем, существуют ли переменные в массиве POST
                                        if (!isset($_POST['fio']) and !isset($_POST['email']) and !isset($_POST['phone'])) {
                                        ?>
                                            <form action="" id="link-form" method="post">
                                                <p><input type="text" name="fio" placeholder="Ваше имя *" required></p>
                                                <p><input type="text" name="email" placeholder="E-mail *" required></p>
                                                <p><input type="text" name="phone" placeholder="Телефон *" required></p>
                                                <p id="info-link-text">* - обязательны для заполнения</p>
                                                <button type="sumbit" id="send-form">Отправить</button>
                                            </form> <?php
                                                } else {
                                                    //показываем форму
                                                    $fio = $_POST['fio'];
                                                    $email = $_POST['email'];
                                                    $phone = $_POST['phone'];
                                                    $fio = htmlspecialchars($fio);
                                                    $email = htmlspecialchars($email);
                                                    $phone = htmlspecialchars($phone);
                                                    $fio = urldecode($fio);
                                                    $email = urldecode($email);
                                                    $phone = urldecode($phone);
                                                    $fio = trim($fio);
                                                    $email = trim($email);
                                                    $phone = trim($phone);

                                                    if (mail("zateynik009@yandex.ru", "Заявка с сайта", "Имя:" . $fio . ".\nE-mail: " . $email . ".\nТелефон: " . $phone, "From: info@zateyniki-spb.ru \r\n")) {
                                                        echo "Сообщение успешно отправлено. Чтобы отправить форму повторно, перезайдите на страницу.";
                                                    } else {
                                                        echo "При отправке сообщения возникли ошибки.";
                                                    }
                                                }
                                                    ?>
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
        <script src="js/email.js"></script>
    </body>

</php>