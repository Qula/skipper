$(document).ready(function() {
    console.log("Gallery");
    $('.popup-video').magnificPopup({
        type: 'iframe'
        // other options
    });

    $('.parent-container').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        gallery: {
            enabled: true
        }
        // other options
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

                    //$("body").append( "<p>"+ folder + val +"</p>" );

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


