function onScrollInit(items, trigger) {
    items.each(function () {
        var osElement = jQuery(this),
            osAnimationClass = osElement.attr('data-os-animation'),
            osAnimationDelay = osElement.attr('data-os-animation-delay');

        osElement.css({
            '-webkit-animation-delay': osAnimationDelay,
            '-moz-animation-delay': osAnimationDelay,
            'animation-delay': osAnimationDelay
        });

        var osTrigger = ( trigger ) ? trigger : osElement;

        osTrigger.waypoint(function () {
            osElement.addClass('animated').addClass(osAnimationClass);
        }, {
            triggerOnce: true,
            offset: '90%'
        });
    });
}

onScrollInit(jQuery('.os-animation'));

(function($){

    $(document).ready(function () {
        var timeout = true;
        var time = 2000; // time wait for continue scroll
        var c = console;
        c.log($(window).height());
        // right menu click
        $('nav#right-menu ul li a').click(function (e) {
            e.preventDefault();

            $('html,body').animate({
                scrollTop: $('#' + $(this).attr('href').replace('#', '')).position().top
            }, 1000);
            $(this).parents('ul').find('li a').removeClass('active');
            $(this).addClass('active');
            document.location.hash = $(this).attr('href').replace('#', '');
        });

        // auto scroll on large devices only
        if($(window).width() > 1200){
            // for Firefox
            $('.section').bind('DOMMouseScroll', function(e){
                if(timeout){
                    timeout = false;
                    if(e.originalEvent.detail > 0) {
                        //scroll down
                        console.log('Down');
                        $('nav#right-menu ul li a.active').parent().next().find('a').click();
                    }else {
                        //scroll up
                        console.log('Up');
                        $('nav#right-menu ul li a.active').parent().prev().find('a').click();
                    }
                    setTimeout(function(){
                        c.log('wait 3s to continue');
                        timeout = true;
                    }, time);
                }

                //prevent page fom scrolling
                return false;

            });

            // for other browsers
            $('.section').bind('mousewheel', function(e){
                if(timeout){
                    timeout = false;
                    if(e.originalEvent.wheelDelta < 0) {
                        //scroll down
                        console.log('Down');
                        $('nav#right-menu ul li a.active').parent().next().find('a').click();
                    }else {
                        //scroll up
                        console.log('Up');
                        $('nav#right-menu ul li a.active').parent().prev().find('a').click();
                    }
                    setTimeout(function(){
                        c.log('Wait %s ms to continue.', time);
                        timeout = true;
                    }, time);
                }

                //prevent page fom scrolling
                return false;
            });
        }

        // scroll
        $(window).on('scroll', function (e, direction) {
            docScroll = $(document).scrollTop();
            $('nav#right-menu ul li a').each(function () {
                if (docScroll >= $('#' + $(this).attr('href').replace('#', '')).position().top) {
                    $(this).parents('ul').find('li a').removeClass('active');
                    $(this).addClass('active');
                }
            });
        });
        $(window).trigger('scroll');
    });

})(jQuery);
