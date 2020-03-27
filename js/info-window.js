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
            style: 'display:inline-block;vertical-align: middle;position: relative;z-index: 99999;max-width: 500px;box-sizing: border-box;width: 90%; background: #6d5383; padding: 15px; font-size: 25px;font-family: sans-serif; color: #fff;-webkit-border-radius: 15px;-moz-border-radius: 15px;-o-border-radius: 15px;-ms-border-radius: 15px;border-radius: 15px;text-align: center;',
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
                },
            }),
        }),
    });
    $('body').append(jsoxModal);
    jsoxModal.fadeIn(200)
}
$('#disco-90').on('click', function () {
    jsoxModal(
        '<p>Описание появится позже, спасибо за ожидание</p>',
        'Дискотека-90-х')
})
