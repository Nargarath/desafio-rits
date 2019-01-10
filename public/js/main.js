$(document).ready(function(){

    $(".navbar-burger").on('click',function(event){
        if($(".navbar-burger").hasClass('is-active')){
            $(".navbar-burger").removeClass('is-active');
            $(".navbar-menu").css('display','none');
            $(".navbar-menu").removeClass('navbar-rits');
        }else{
            $(".navbar-burger").addClass('is-active');
            $(".navbar-menu").css('display','block');
            $(".navbar-menu").addClass('navbar-rits');
        }
    });
    $(window).resize(function () {
        if (jQuery(window).width() > 1087) {
            $(".navbar-burger").removeClass('is-active');
            $(".navbar-menu").removeClass('navbar-rits');
        }else{
            $(".navbar-menu").css('display','none');
        }
    });
});