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
    });
    //burguer-menu animation
    $(".mob-menu-btn").click(function(){
        $(".burguer-menu-mob").slideToggle();
        
        $(".menu-icon").toggleClass('burger-menu-action');
        
        $(".menu-option").click(function(){
           $(this).siblings().removeClass('menu-sel');
           $(this).addClass('menu-sel');
        });
    });
});