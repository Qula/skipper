$(document).ready(function() {
    var pathname = this.location.pathname;
    console.log(pathname);
    if(pathname == "/skipper/sklep.php" || pathname == "/skipper/kasy.php"){
        $('a[href="/skipper/sklep.php"]').parent().addClass('active');
    }else{
        $('a[href="/skipper/zeglarstwo.php"]').parent().addClass('active');
    }

    var docHeight = $(window).height();
    var footerHeight = $('#footer').outerHeight();
    var footerTop = $('#footer').position().top + footerHeight;

    if (footerTop < docHeight) {
        $('#footer').css('margin-top',  (docHeight - footerTop) + footerHeight - 2 + 'px');
    }

    mapResize();
    doladuj();

    var $recaptcha = document.querySelector('#g-recaptcha');
    if($recaptcha) {
        $recaptcha.setAttribute("required", "required");
    }
});

function goBack() {
    window.history.back();
}

$(".head-desc").hover(function() {
    $(this).children().stop().animate({"backgroundColor":"#193d5b"},200);
    $(this).stop().animate({"borderColor":"#193d5b"},200);
}, function() {
    $(this).children().stop().animate({"backgroundColor":"rgb(51, 122, 183)"}, 600);
    $(this).stop().animate({"borderColor": "rgb(51, 122, 183)"}, 600);
});

$(".scroll").on("click", function(){
    $(window).scrollTo(this.dataset.target, 800);
});
$(".scrollToTop").on("click", function() {
    $(window).scrollTo(".navbar", 500);
});

var scrollHeight, scrollPosition;
$(window).on('scroll', function () {
    if ($(this).scrollTop() > 300) {
        $(".scrollToTop").stop().animate({ bottom: 10}, 300);
        scrollHeight = $(document).height();
        scrollPosition = $(window).height() + $(window).scrollTop();
        if ((scrollHeight - scrollPosition) / scrollHeight === 0) {
            $(".scrollToTop").stop().animate({ bottom: $(".foot").height()}, 300);
        }
    } else {
        $(".scrollToTop").stop().animate({ bottom: -100}, 300);
    }
});


$(window).resize(function(){
    mapResize();
});

var cardClick = false;
var mapHeight = 0;
function mapResize(){
    if(!cardClick){
        mapHeight = $('#card img').height();
        $('.before-card').css('height',mapHeight+10);
    }else{
        mapHeight = $('.embed-responsive-item').height();
        $('.before-card').css('height',mapHeight+5);
    }
}

function doladuj(){
    var src = "https://www.google.com/maps/d/embed?ll=49.619997%2C20.697234&spn=0.005144%2C0.01178&output=embed&hl=pl&t=h&msa=0&z=16&ie=UTF8&mid=1BXXAadxShwIur62uwPIPNgs6U20";
    var width = $(".front img").width() || 640;
    var height = $(".front img").height() || 360;

    $("iframe").attr({
        'src': src,
        'height': height,
        'width': width,
        'allowfullscreen':''
    });

    setTimeout(function() {
        $('.embed-responsive').removeClass('hidden');
        cardClick = true;
        mapResize();
        $('#card img').remove();

    }, 600);
}

var aktynActive ;
var flipped;
$("#asprzedaz, #afinanse, #aplace, #aksiega, #asrodki, #acennik").on("click", function(){
    $("#"+flipped).flip(false);
    $("."+aktynActive).fadeOut("slow", function() {
        $(this).addClass("hidden");
    });

    aktynActive = $(this).attr("data-name");
    flipped = $(this).attr("id");
    $("."+aktynActive).fadeIn("slow", function() {
        $(this).removeClass("hidden");
    });

}).flip();

$('.panel-title .pull-right, .panel-title a').on('click', function(){
   $(this).find('.pull-right').toggleClass("glyphicon glyphicon-chevron-down glyphicon glyphicon-chevron-up");
});

