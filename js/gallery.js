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
    var id = $(this).attr('data-id');
    getPic(dataurl, id);
});

function getPic(dataurl, id){

    var items = [];

    var dataString = 'action=authGallery&path=' + dataurl + '&id=' + id;
    console.log(dataString);
    $.ajax({
        type: "POST",
        url: "ajax-user.php",
        data: dataString,
        cache: false,
        success: function (data) {
            data = JSON.parse(data);
            for(var i=0; i< data.length; i++){
                console.log(data[i]);
                items.push({src: data[i]});
                console.log('-');
                console.log(items[i]);
            }

        },
        complete: function() {
            console.log("complete");
            $.magnificPopup.open({
                items: items,
                type: 'image',
                gallery: { enabled: true }
            });
        }
    });


}



