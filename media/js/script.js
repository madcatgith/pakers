/* ======= */
$(document).on('click', 'a[href="#"]', function(e){
    e.preventDefault();
});

// Remove NavBar from iOS
if( !window.location.hash && window.addEventListener ){
    window.addEventListener( "load",function() {
        setTimeout(function(){
            window.scrollTo(0, 0);
        }, 0);
    });
    window.addEventListener( "orientationchange",function() {
        setTimeout(function(){
            window.scrollTo(0, 0);
        }, 0);
    });
}

/************************************   Document Ready  **********************************************************/

$(document).ready(function(){
    var OSName="Unknown OS";
    var Browser="";
    if (navigator.appVersion.indexOf("Win")!=-1) OSName="Windows";
    else if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS";
    else if (navigator.appVersion.indexOf("X11")!=-1) OSName="UNIX";
    else if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux";
    if (navigator.userAgent.indexOf('Firefox') > -1) Browser="Firefox";
    $('html').addClass(OSName).addClass(Browser);

    //  placeholder
    if (navigator.userAgent.indexOf('MSIE') > -1) {
        $('input[placeholder]').each(function(){
            var input = $(this);
            $(input).val(input.attr('placeholder'));
            $(input).focus(function(){
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                }
            });
            $(input).blur(function(){
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.val(input.attr('placeholder'));
                }
            });
        });
    }

    //  data-2x image
    var $images = $("img[data-2x]");

    if (window.devicePixelRatio == 2) {
        $.each($images, function() {
            var $this = $(this);

            $this.attr("src", $this.data("2x"));
        });
    }

    // slider
    var mainSlider = $('.main-slider');
    if (mainSlider.size()){
        mainSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide){
            var
                desc = mainSlider.find('.description').eq(nextSlide+1)
                ,slideDescBlock = $('.slide-description')
                ,delay = parseFloat(slideDescBlock.css('transition-duration').replace('s',''))*1000
                ;
            console.log(currentSlide+' ; '+nextSlide);
            console.log( );
            slideDescBlock.css({opacity: 0, "transform": "translate3d(0, 100px, 0)"});
            setTimeout(function(){
                slideDescBlock.html(desc.html());
                slideDescBlock.css({opacity: 1, "transform": "translate3d(0, 0px, 0)"});
            }, delay);

        });
        mainSlider .on('init', function(event, slick){
            $('.slide-description').html(mainSlider.find('.description').eq(1).html());
			
            console.log('slider was initialized');
        });
        //var bezEasing = [0.19, 1, 0.22, 1];
        mainSlider.slick({
            //slidesToShow: 3,
            infinite: true,
            slidesToScroll: 1,
            variableWidth: true,
            //cssEase: "cubic-bezier(0.755, 0.05, 0.855, 0.06)",
            cssEase: "cubic-bezier(0.755, 0.05, 0.855, 0.06)",
            speed: 500,
            adaptiveHeight: true,
            swipe: true,
            //variableWidth: '80%',
            height: '400px',
            autoplay: true,
            //autoplaySpeed: 1000,
            nextArrow: $('.slider-trigger-next'),
            prevArrow: $('.slider-trigger-prev'),
        });
    }

    $('.b-main-carousel__controls .prev').click(function() {
        news_carousel.slick('slickPrev');
    });
    $('.b-main-carousel__controls .next').click(function() {
        news_carousel.slick('slickNext');
    });

    $('.js-nav-top-show').on('click',function(e){
        e.preventDefault();
        var _this = $(this),
            sidebar =  $('.offcanvas-mobile'),
            section =  $('.l-wrapper')
            ;
        _this.toggleClass('is-active');
        sidebar.toggleClass('is-open');
        section.toggleClass('menu-is-open');
        $('body').toggleClass('no-scroll');
    });

    $('.b-sidebar-trigger').on('click',function(e){
        e.preventDefault();
        var _this = $(this),
            sidebar =  $('.b-sidebar'),
            section =  $('.l-wrapper')
            ;
        _this.toggleClass('is-active');
        sidebar.toggleClass('is-active');
        section.toggleClass('sidebar-is-open');
        //$('body').toggleClass('no-scroll');
    });
    //
    $('.js-product-carousel').owlCarousel({
        margin: 15,
        loop: true,
        //center: true,
        dots: false,
        nav: true,
        //autoWidth: true,
        items: 3,
        responsive: {
            0: {
                //autoWidth: true
                //center: true
            },
            360: {
                //center: true,
                //autoWidth: true
            },
            768: {
                center: false,
                margin: 10,
                autoWidth: true
            },
            1180: {
                margin: 15
            }
        }
    });
    $('.js-product-carousel div a').click(function(){
        var _this = $(this)
            ,_img = _this.find('img')
            ,bigImage = _img.data('big-image') ?  _img.data('big-image') : _img.attr('src')
            ;
        console.log(bigImage);
        $('.b-product .img-wrap img').attr('src',bigImage);
    });
	$('#map').attr('src', 'https://www.google.ru/maps/embed?hl=ru&pb=!1m18!1m12!1m3!1d2575.063332509557!2d30.125155000000014!3d49.80367700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d34216f23546db%3A0xb3e04aceed418d91!2zU1RNINCj0LrRgNCw0ZfQvdCw!5e0!3m2!1suk!2sua!4v1423036577783');
});


/***************************************    Window Resize   ************************/
$(window).resize(function(){});
/***************************************    Window Load   ************************/
$(window).load(function(){});