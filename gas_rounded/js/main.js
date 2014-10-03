jQuery(document).ready(function(){

    /*------------------------------------------------------------------*/
        // клик по блоку - показать форму авторизации
    jQuery('.login_href').click(function(){
        var f = jQuery('#login_form');
        if (f.css('display') == 'none') {
            f.show();
            // f.css('-o-animation', 'anim_login .8s 1');
            f.css('-webkit-animation', 'anim_login .8s 1');
            f.css('animation', 'anim_login .8s 1');
            jQuery(this).addClass('open');
        } else {

            jQuery(this).removeClass('open');
            f.css('-webkit-animation', 'anim_login_hide .8s 1');
            f.css('animation', 'anim_login_hide .8s 1');
            //f.hide();
            setTimeout(function(){f.hide()}, 700);
            // f.css('-webkit-animation', 'none');
            // f.css('animation', 'none');
        }
    })
        // спрятать форму авторизации по клику в не формы
    jQuery(document).click(function(event) {
        if (jQuery(event.target).closest('.login_href, #login_form').length) {
            return;
        }

        var f = jQuery('#login_form');
        //f.hide();
        jQuery('.login_href').removeClass('open');
        f.css('-webkit-animation', 'anim_login_hide .8s 1');
        f.css('animation', 'anim_login_hide .8s 1');
            //f.hide();
        setTimeout(function(){f.hide()}, 700);
       // f.css('-webkit-animation', 'none');
       // f.css('animation', 'none');
        event.stopPropagation();
    });

    /*------------------------------------------------------------------*/
    // спрятать #to_top
    jQuery("#to_top").hide();
        // если документ не больше окна браузера
    if (jQuery(window).innerHeight()-jQuery(document).innerHeight()>-100) {
        jQuery("#to_bottom").hide();
    }
            // событие прокрутки документа
        jQuery(window).scroll(function () {
            //alert('sdf');
                // если прокрутили вниз на 150 и более пикселей от верха
            if (jQuery(this).scrollTop() > 150) {
                jQuery('#to_top').fadeIn();
            } else {
                jQuery('#to_top').fadeOut();
            }
                // если прокрутили вниз на 150 и более пикселей от низа
            if (jQuery(window).scrollTop()+jQuery(window).innerHeight()-jQuery(document).innerHeight()>-150) {
                jQuery("#to_bottom").fadeOut();
            } else {
                jQuery("#to_bottom").fadeIn();
            }
        });

        // при изменениии высоты документа во время просмотра
    OnResizeElement(document, function(el){
            if (jQuery(window).scrollTop()+jQuery(window).innerHeight()-jQuery(document).innerHeight()>-150) {
                jQuery("#to_bottom").fadeOut();
            } else {
                jQuery("#to_bottom").fadeIn();
            }
    }, 300);

    /*------------------------------------------------------------------*/
    /*------------------------------------------------------------------*/
    /*------------------------------------------------------------------*/

});
//////
/*--------------------------------------------------------------------------*/

function OnResizeElement(element, handler, time){
    var id = null;
    var _constructor = function(){
        var WIDTH = jQuery(element).outerWidth(),
            HEIGHT = jQuery(element).outerHeight();
        id = setInterval(function(){
            if(WIDTH != jQuery(element).outerWidth() || HEIGHT != jQuery(element).outerHeight()){
                WIDTH = jQuery(element).outerWidth(), HEIGHT = jQuery(element).outerHeight();
                handler(element);
            };
        }, time);
    };
    var _destructor = function(){
        clearInterval(id);
    };
    this.Destroy = function(){
        _destructor();
    };
    _constructor();
};