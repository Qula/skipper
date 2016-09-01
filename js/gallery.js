$(document).ready(function() {
    $('.popup-video').magnificPopup({
        type: 'iframe'
    });

    $('.parent-container').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    $('.popup-img').magnificPopup({
        type: 'image'
    });

});


$('.galbut').on('click', function(){
    var dataurl = $(this).attr('data-url');
    getPic(dataurl);
});

function getPic(dataurl){
    var folder = dataurl;
    var items = [];

    $.ajax({
        url : folder,
        success: function (data) {
            $(data).find("a").attr("href", function (i, val) {
                if( val.toLowerCase().match(/\.(jpe?g|png|gif)$/) ) {
                    items.push({src: folder+val});
                }
            });
        },
        complete: function() {
            $.magnificPopup.open({
                items: items,
                type: 'image',
                gallery: { enabled: true }
            });
        }
    });

}


