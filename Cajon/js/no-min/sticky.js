$(document).ready(function(){
    //sticky header call
    stickyHeader();
});

function stickyHeader(){
    var tope = 2; /*from top*/
      $(window).scroll(function() {
        var scroll = posActual(); /*posicion actual*/
        if(scroll >= tope){ 
               $('header').addClass('sticky-header');/*añadir clase si sobrepasa */
            }
            else {
                $('header').removeClass('sticky-header');
            }
      });
    function posActual  () {
        return window.pageYOffset || document.documentElement.scrollTop;
    };
};

