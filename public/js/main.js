$(document).ready(function(){

    $(".navbar-burger").on('click',function(event){
        if($(".navbar-burger").hasClass('is-active')){
            $(".navbar-burger").removeClass('is-active');
            $(".navbar-menu").css('display','none');
        }else{
            $(".navbar-burger").addClass('is-active');
            $(".navbar-menu").css('display','block');
        }
    });
    $(window).resize(function () {
        if (jQuery(window).width() > 1087) {
            $(".navbar-burger").removeClass('is-active');
        }else{
        }
    });
});