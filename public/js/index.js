document.addEventListener('DOMContentLoaded', function() {
    var $preloader = $('#page-preloader'),
        $spinner   = $preloader.find('.spinner');
    $spinner.fadeOut();
    $preloader.delay(200).fadeOut('slow');
});

let clear_msg = function (e) {
    let path = e.path || (e.composedPath && e.composedPath()) || composedPath(e.target);
    let current_div = path[1];
    current_div.remove();
    console.log('CLEAR', e);
}
$('document').ready(function() {
    console.log('HEIGHT', $(document).height(), $(window).height());
    if ($(document).height() - $(window).height() < 80)
    {
        document.querySelector('#drop_up_notifications').style.bottom = $(document).height() - $(window).height() + 'px';
        console.log("ALL");
    }
    $(window).scroll(function () {
        if ($(window).scrollTop() == $(document).height() - $(window).height()) {
            document.querySelector('#drop_up_notifications').style.bottom = '80px';
            console.log('#app');
        } else {
            if ($(document).height() - $(window).height() >= 80)
                document.querySelector('#drop_up_notifications').style.bottom = '';
            else {
                document.querySelector('#drop_up_notifications').style.bottom = $(document).height() - $(window).height() + 'px';
            }
        }
    });
})
