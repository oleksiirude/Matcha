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
    let childs = Array.from(document.getElementById('drop_up_notifications_body').children);
    if (childs && childs.length <= 1)
    {
        document.getElementById('clear_all').hidden = true;
    }
}

let clear_all = function() {
    let childs = Array.from(document.getElementById('drop_up_notifications_body').children);
    if (childs && childs.length > 0)
    {
        childs.forEach(function(item) {
            item.remove();
            }
        );
        document.getElementById('clear_all').hidden = true;
    }
}

$('document').ready(function() {
    if ($(document).height() - $(window).height() < 40)
    {
        if (document.querySelector('#drop_up_notifications') != undefined)
            document.querySelector('#drop_up_notifications').style.bottom = $(document).height() - $(window).height() + 'px';
    }
    $(window).scroll(function () {
        if ($(window).scrollTop() == $(document).height() - $(window).height()) {
            if (document.querySelector('#drop_up_notifications') != undefined)
                document.querySelector('#drop_up_notifications').style.bottom = '80px';
        } else {
            if ($(document).height() - $(window).height() >= 40){
                if (document.querySelector('#drop_up_notifications') != undefined)
                    document.querySelector('#drop_up_notifications').style.bottom = '';}
            else {
                if (document.querySelector('#drop_up_notifications') != undefined)
                    document.querySelector('#drop_up_notifications').style.bottom = $(document).height() - $(window).height() + 'px';
            }
        }
    });
    window.onresize = function(event) {
        let menu = document.getElementById('navbarSupportedContent');
        menu.classList.value = "collapse navbar-collapse";
    };

})
