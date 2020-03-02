function jsoxModal(message, title = null) {
    var jsoxModal = $('<div>', {
        style: 'position: fixed;top: 0;right: 0;bottom: 0;left: 0;width: 100%;height: 100%;overflow: auto;z-index: 99998;padding: 20px;box-sizing: border-box;background-image: url(images/white-fon.png);text-align: center;display: flex;align-items: center;justify-content: center;',
        class: 'jsoxModal',
        click: function () {
            $('.jsoxModal').fadeOut(200, function () {
                $(this).remove()
            })
        },
        append: $('<div>', {
            style: 'display:inline-block;vertical-align: middle;position: relative;z-index: 99999;max-width: 500px;box-sizing: border-box;width: 90%;background: #6d5383; padding: 15px; font-size: 25px;font-family: sans-serif; color: #fff;-webkit-border-radius: 15px;-moz-border-radius: 15px;-o-border-radius: 15px;-ms-border-radius: 15px;border-radius: 15px;text-align: center;',
            html: title ? '<h3>' + title + '</h3><p>' + message + '</p>' : '<p>' + message + '</p>',
            click: function () {
                event.stopPropagation();
            },
            append: $('<a>', {
                style: 'cursor: pointer; position: absolute;top: -12.5px;right: -12.5px;display: block;width: 30px;height: 30px;text-indent: -9999px;background-size: contain;background-repeat: no-repeat;background-position: center center;',
                click: function () {
                    $('.jsoxModal').fadeOut(200, function () {
                        $(this).remove()
                    })
                }
            }),
        }),
    });
    $('body').append(jsoxModal);
    jsoxModal.fadeIn(200)
}
$('#show-masha').on('click', function () {
    jsoxModal(
        '<p>С любым ребенком Маша и её верный спутник Медведь – найдут общий язык. Искренность и отзывчивость отличает наших артистов от прочих мастеров жанра, мы действительно ценим интересы ребенка. Сценарии наших выступлений постоянно обновляются. Также быстро, как появляются новые идеи для очередного приключения у неутомимых персонажей любимого мультфильма.</p><p class="text-right"></p>',
        'Маша и Медведь')
})
$('#show-fiksiki').on('click', function () {
    jsoxModal(
        '<p>Симка и Нолик объявляют настоящий протест... Протест против скучных праздников Они собрали все самые интересные и познавательные игры, флэшмобы и викторины, чтобы доказать всему миру, что их праздник самый весёлый. Ребята перевоплотятся в морских существ, поохотятся на льва, станут настоящими хоккеистами и даже попробуют себя в роли профессиональных актёров. Конечно же наши яркие Фиксик и Нолик никогда не откажутся сфотографироваться со своими новыми друзьями, а иногда даже покривляться на камеру</p><p class="text-right"></p>',
        'А кто такие Фиксики?')
})
$('#show-pirates').on('click', function () {
    jsoxModal(
        '<p>Много лет назад капитан Флинт и его команда спрятали свои величайшие сокровища, оставив кладоискателям лишь одну подсказку. Но бутылка с картой блуждает по мировому океану и еще никому не удалось найти её... Постойте, что это? Неужели это она?! Ребятам ничего не остается, кроме как собрать экспедицию из надежных товарищей и отправиться на поиски клада. Но задания не так просты! Помимо логики и внимательности юным пиратам необходим командный дух, ведь некоторые испытания можно пройти исключительно сообща. После долгих поисков ответов на загадки старого пирата ребятам удаётся найти заветное место. Но где же клад? Даже самые маленькие знают, что любой уважающий себя пират не оставил бы клад в кустах, а закопал бы поглубже. Жажда сокровищ и лопата в руках - вот он залог успеха! Как принято на корабле, добычу делим поровну, и каждый уйдет с подарком и яркими воспоминаниями! Ваша команда уже готова? Поднять паруса!😃⛵💰',
        'Пиратская вечеринка')
})
$('#show-minute').on('click', function () {
    jsoxModal(
        '<p>На этой вечеринке все смогут почувствовать себя настоящими звёздами! Как же иначе? Ведь модная программа "Минута славы" шагнула с экранов телевизоров прямо к ним на праздник! Гостей ждут перевоплощения, яркие костюмы, фееричные выступления, громкие овации, самые крутые и стильные конкурсы, чумовая дискотека и флеш-моб! В стоимость программы входит мобильная костюмерная, музыкальное оформление праздника, невероятно модный ведущий и многое другое! Ведь без всего этого на таком празднике не обойтись!',
        'Минута славы')
})
$('#show-bloger').on('click', function () {
    jsoxModal(
        '<p>Описание появится позже, спасибо за ожидание</p><p class="text-right"></p>',
        'Блогерская вечеринка')
})
$('#show-spy').on('click', function () {
    jsoxModal(
        '<p>Описание появится позже, спасибо за ожидание</p><p class="text-right"></p>',
        'Тайные агенты')
})
$('#show-science').on('click', function () {
    jsoxModal(
        '<p>Описание появится позже, спасибо за ожидание</p><p class="text-right"></p>',
        'Научное шоу')
})
$('#show-100-in-1').on('click', function () {
    jsoxModal(
        '<p>Описание появится позже, спасибо за ожидание</p><p class="text-right"></p>',
        '100 к 1')
})
$('#show-classic').on('click', function () {
    jsoxModal(
        '<p>Описание появится позже, спасибо за ожидание</p><p class="text-right"></p>',
        'Классика')
})
$('#show-oscar').on('click', function () {
    jsoxModal(
        '<p>Описание появится позже, спасибо за ожидание</p><p class="text-right"></p>',
        'Вручение премии Оскар')
})
$('#navbar-mobile').on('click', function () {
    jsoxModal(
        '<ul><li><a href="index">Главная</a></li><li><a href="stocks">Акции</a></li><li><a href="services">Услуги</a></li><li><a href="seasonal">Сезонное</a></li><li><a href="contacts">Контакты</a></li></ul><p class="text-right"></p>',
        'Затейники-СПб')
})