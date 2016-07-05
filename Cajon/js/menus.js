$(document).ready(function () {
    //starting function
    $(".lang-menu-mob").hide();
    $(".lang-menu").hide();
    $(".burguer-menu-mob").hide();

    //lang-btn animation
    $(".lang").click(function () {
        $(".lang-menu").slideToggle();
        $(".lang-menu-mob").slideToggle();

        $(".lang-icon").toggleClass('lang-menu-action');

        $(".lang-option").click(function () {
            $(this).siblings().removeClass('lang-sel');
            $(this).addClass('lang-sel');
        });

        /*hide-burguer*/
        $(".burguer-menu-mob").slideUp();
        $(".menu-icon").removeClass('burger-menu-action');

        footerZ();
    });
    //burguer-menu animation
    $(".mob-menu-btn").click(function () {
        $(".burguer-menu-mob").slideToggle();

        $(".menu-icon").toggleClass('burger-menu-action');

        /*hide-lang*/
        $(".lang-menu-mob").slideUp();
        $(".lang-icon").removeClass('burger-menu-action');
        footerZ();
    });

    //text area autosize general
    //http://stackoverflow.com/a/25621277/5490481
    function h(e) {
        $(e).css({
            'height': 'auto',
            'overflow-y': 'hidden'
        }).height(e.scrollHeight);
    };
    $('textarea').each(function () {
        h(this);
    }).on('input', function () {
        h(this);
    });
});


/*fix the z-index footer elements problem*/
function footerZ() {
    $("footer").toggleClass("z-footer");
};