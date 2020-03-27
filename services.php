<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Услуги</title>
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
        <link rel="stylesheet" href="css/services.css">
    </head>

    <body>

        <?php include("blocks/navigation.php"); ?>

        <div class="main">
            <div class="wrapper">
                <div class="box">
                    <div class="center">
                        <h1>Наши услуги</h1>
                    </div>
                    <div class="services">
                        <div class="service">
                            <div class="service-image">
                                <img src="images/logo-birthday.png" alt="foto">
                                <a href="birthday">Подробнее</a>
                            </div>
                            <div class="service-text">
                                <h2>День Рождения</h2>
                                <p>Этот день каждый ждёт с нетерпением. Не зависимо от возраста мы в душе всегда ожидаем
                                    какого-то чуда, правда? Наши предложения позволят подобрать максимально подходящую
                                    программу для именинника.</p>
                            </div>
                        </div>

                        <div class="service">
                            <div class="service-image">
                                <img src="images/logo-graduation.png" alt="foto">
                                <a href="graduation">Подробнее</a>
                            </div>
                            <div class="service-text">
                                <h2>Выпускной</h2>
                                <p>А Вы помните свой выпускной вечер? Наша команда гарантирует, что праздник, организованный
                                    нами, сохранится в воспоминаниях ещё очень и очень долго!</p>
                            </div>
                        </div>
                        <div class="service">
                            <div class="service-image">
                                <img src="images/logo-wedding.png" alt="foto">
                                <a href="wedding">Подробнее</a>
                            </div>
                            <div class="service-text">
                                <h2>Свадьба</h2>
                                <p>Свадьба - очень важный день в жизни пары. Часто из-за волнительный подготовки и контроля
                                    всего вокруг день торжества превращается в настоящее испытание. Наша команда возьмёт на
                                    себя координирование всей свадьбы "от и до", чтобы этот день стал для Вас сказкой.</p>
                            </div>
                        </div>

                        <div class="service">
                            <div class="service-image">
                                <img src="images/logo-teambuilding.png" alt="foto">
                                <a href="teambuilding">Подробнее</a>
                            </div>
                            <div class="service-text">
                                <h2>Тимбилдинг</h2>
                                <p>А Вы знаете, что сплочённость коллектива - один из самых важных факторов его успешного
                                    развития. Такое мероприятие, организованное на природе, даёт намного лучший эффект, чем
                                    застолье, посиделки в офисе, словесные квесты. Это дарит ощущение уверенности в своей
                                    способности решить любые задачи, не самостоятельно – так вместе с товарищами.</p>
                            </div>
                        </div>
                        <div class="service" id="disabled">
                            <div class="service-image">
                                <img src="images/logo-corporate-party.png" alt="foto">
                                <a href="">Подробнее</a>
                            </div>
                            <div class="service-text">
                                <h2>Корпоратив</h2>
                                <p>Эффектное = эффективное. Это формула успешного корпоративного мероприятия!
                                    В соответствии с заданным и утвержденным бюджетом организация любого праздника в
                                    окружении коллег пройдет идеально! Начиная с разработки концепции и заканчивая контролем
                                    в день самого корпоративного праздника.</p>
                            </div>
                        </div>
                        <div class="service" id="disabled">
                            <div class="service-image">
                                <img src="images/logo-events.png" alt="foto">
                                <a href="">Подробнее</a>
                            </div>
                            <div class="service-text">
                                <h2>Массовые мероприятия</h2>
                                <p>Уже не первый год наша команда занимается организацией спортивных и массовых мероприятий
                                    по всему городу и области. Масленицы, спортивные соревнования, ярмарки... У нас за
                                    плечами огромный опыт, гарантирующий отменный результат.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include("blocks/footer.php"); ?>

    </body>

</php>