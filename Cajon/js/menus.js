$(document).ready(function(){
    //starting function
    $(".lang-menu").hide();
    $(".lang-menu-mob").hide();
    $(".burguer-menu-mob").hide();
    
    //lang-btn animation
    $(".lang").click(function(){
        $(".lang-menu").slideToggle();
        $(".lang-menu-mob").slideToggle();
        
        $(".lang-icon").toggleClass('lang-menu-action');
        
        $(".lang-option").click(function(){
           $(this).siblings().removeClass('lang-sel');
           $(this).addClass('lang-sel');
        });
        
        /*hide-burguer*/
        $(".burguer-menu-mob").slideUp();
        $(".menu-icon").removeClass('burger-menu-action');
        
        footerZ();
    });
    //burguer-menu animation
    $(".mob-menu-btn").click(function(){
        $(".burguer-menu-mob").slideToggle();
        
        $(".menu-icon").toggleClass('burger-menu-action');
        
        /*hide-lang*/
        $(".lang-menu-mob").slideUp();
        $(".lang-icon").removeClass('burger-menu-action');
        footerZ();
    });
});


/*fix the z-index footer elements problem*/
function footerZ(){
    $("footer").toggleClass("z-footer");
};