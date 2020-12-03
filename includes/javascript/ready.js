$(document).ready(function () {
    $('.chooselanguage').click((e) => {
        $.ajax({
            url: 'ajax.php',
            data: 'action=setLang&lang=' + $(e.target).data('lang'),
            success: function (data) {
                window.location.href= '/index.html?lang=' + $(e.target).data('lang').toUpperCase()
            }
        })
    })
})