console.log('Testing console');

$(".head-desc").hover(function() {
    $(this).children().stop().animate({"backgroundColor":"#efbe5c"},200);
    $(this).stop().animate({"borderColor":"#efbe5c"},200);
}, function() {
    $(this).children().stop().animate({"backgroundColor":"rgb(51, 122, 183)"}, 600);
    $(this).stop().animate({"borderColor": "rgb(51, 122, 183)"}, 600);
});


function iframeModalOpen(){

    // impostiamo gli attributi da aggiungere all'iframe es: data-src andrà ad impostare l'url dell'iframe
    $('.modalButton').on('click', function(e) {
        var src = $(this).attr('data-src');
        var width = $(this).attr('data-width') || 640; // larghezza dell'iframe se non impostato usa 640
        var height = $(this).attr('data-height') || 360; // altezza dell'iframe se non impostato usa 360



        // stampiamo i nostri dati nell'iframe
        $("#myModal iframe").attr({
            'src': src,
            'height': height,
            'width': width,
            'allowfullscreen':''
        });
    });

    // se si chiude la modale resettiamo i dati dell'iframe per impedire ad un video di continuare a riprodursi anche quando la modale è chiusa
    $('#myModal').on('hidden.bs.modal', function(){
        $(this).find('iframe').html("");
        $(this).find('iframe').attr("src", "");
    });
}

$(document).ready(function(){
    iframeModalOpen();
});

$(".scroll").on("click", function(){
    $(window).scrollTo(this.dataset.target, 800);
});



$(window).on('scroll', function () {

    console.log(isScrolledIntoView("#sprzetkomputerowy"));
    if(isScrolledIntoView("#sprzetkomputerowy")){
        $("#sp").css({opacity: 1.0, visibility: "visible"}).stop().animate({opacity: 0}, 200);
    }
});

function isScrolledIntoView(elem) {
    if ($(elem).length == 0) {
        return false;
    }
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();
    //  return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop)); //try it, will only work for text
    return (docViewBottom >= elemTop && docViewTop <= elemBottom);
}