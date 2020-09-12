<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Сезонное</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta property="og:title" content="Сезонное">
        <meta property="og:site_name" content="Затейники-СПБ оргнанизация праздников в СПБ">
        <meta property="og:url" content="seasonal">
        <meta property="og:image" content="images/seasonal-vesna-fon.jpg">

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
        <link rel="stylesheet" href="css/seasonal.css">
        <link rel="stylesheet" href="css/timer-to-ny.css">
    </head>

    <body>

        <?php include("blocks/navigation.php"); ?>

        <div class="main">
            <div class="wrapper">
                <div class="box">
                    <div class="center">
                        <h1>Предложения сезона - Осень-Зима</h1>
                    </div>
                    <div class="seasonal-services">
                        <div class="seasonal-service" id="disabled">
                            <div class="seasonal-service-image">
                                <img src="images/logo-defender's-day.png" alt="foto">
                                <a href="defenders-day.php">Подробнее</a>
                            </div>
                            <div class="seasonal-service-text">
                                <h2>23 февраля</h2>
                                <p>Этот день каждый ждёт с нетерпением. Не зависимо от возраста мы в душе всегда ожидаем
                                    какого-то чуда, правда? Наши предложения позволят подобрать максимально подходящую
                                    программу для именинника.</p>
                            </div>
                        </div>
                        <div class="seasonal-service" id="disabled">
                            <div class="seasonal-service-image">
                                <img src="images/logo-woman's-day.png" alt="foto">
                                <a href="womans-day.php">Подробнее</a>
                            </div>
                            <div class="seasonal-service-text">
                                <h2>8 марта</h2>
                                <p>Если Вам надоело однообразное празднование и хочется порадовать себя или близкого человека, подарив ему новые эмоции и впечатления, то самое время заказать проведение праздника у нас. Наша команда гарантирует, что праздник, организованный
                                    нами, сохранится в воспоминаниях ещё очень и очень долго!</p>
                            </div>
                        </div>
                        <div class="seasonal-service" id="disabled">
                            <div class="seasonal-service-image">
                                <img src="images/logo-pancake-day.png" alt="foto">
                                <a href="">Подробнее</a>
                            </div>
                            <div class="seasonal-service-text">
                                <h2>Масленица</h2>
                                <p>Свадьба - очень важный день в жизни пары. Часто из-за волнительный подготовки и контроля
                                    всего вокруг день торжества превращается в настоящее испытание. Наша команда возьмёт на
                                    себя координирование всей свадьбы "от и до", чтобы этот день стал для Вас сказкой.</p>
                            </div>
                        </div>

                        <div class="seasonal-service" id="disabled">
                            <div class="seasonal-service-image">
                                <img src="images/logo-first-september.png" alt="foto">
                                <a href="">Подробнее</a>
                            </div>
                            <div class="seasonal-service-text">
                                <h2>День знаний</h2>
                                <p>А Вы знаете, что сплочённость коллектива - один из самых важных факторов его успешного
                                    развития. Такое мероприятие, организованное на природе, даёт намного лучший эффект, чем
                                    застолье, посиделки в офисе, словесные квесты. Это дарит ощущение уверенности в своей
                                    способности решить любые задачи, не самостоятельно – так вместе с товарищами.</p>
                            </div>
                        </div>
                        <div class="seasonal-service">
                            <div class="seasonal-service-image">
                                <img src="images/logo-new-year.png" alt="foto">
                                <a href="https://vk.com/zateyniki_spb">Подробнее</a>
                            </div>
                            <div class="seasonal-service-text">
                                    <h2>Новый год</h2>
                                    <p>Эффектное = эффективное. Это формула успешного корпоративного мероприятия!
                                        В соответствии с заданным и утвержденным бюджетом организация любого праздника в
                                        окружении коллег пройдет идеально! Начиная с разработки концепции и заканчивая контролем
                                        в день самого корпоративного праздника.</p>
                                    <div class="timer">
                                        <h1 class="countdown-title">Осталось:</h1>
                                        <div id="deadline-message" class="deadline-message">
                                            <p>С Новым годом!</p>
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
                        <div class="seasonal-service">
                            <div class="seasonal-service-image">
                                <img src="images/logo-ded-moroz.png" alt="foto">
                                <a href="https://vk.com/zateyniki_spb">Подробнее</a>
                            </div>
                            <div class="seasonal-service-text">
                                <h2>Дед Мороз на дом</h2>
                                <p>Уже не первый год наша команда занимается организацией спортивных и массовых мероприятий
                                    по всему городу и области. Масленицы, спортивные соревнования, ярмарки... У нас за
                                    плечами огромный опыт, гарантирующий отменный результат.</p>
                            </div>
                        </div>
                        <div class="seasonal-service">
                            <div class="seasonal-service-image">
                                <img src="images/logo-goldberg.png" alt="foto">
                                <a href="goldberg-show">Подробнее</a>
                            </div>
                            <div class="seasonal-service-text">
                                <h2>Goldberg team</h2>
                                <p>Что такое машина Голдберга?<br>Это устройство, которое выполняет очень простое действие чрезвычайно сложным образом — как правило, посредством длинной последовательности взаимодействий по «принципу домино». Финальное действие хоть и простое, но сработает только при безупречной работе всех предыдущих шагов. Отличный способ показать, как важен для успеха команды каждый ее участник!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include("blocks/footer.php"); ?>
        
        <script src="js/timer-to-ny.js"></script>

    </body>

</php>