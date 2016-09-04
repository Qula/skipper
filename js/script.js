
$(".pic-select").change(function (){
    var regaty = "";

    var selected = $(".pic-select").val();
    if(selected === "zawiadomienie"){
        $(".zawiadomienie").remove();
        $(".dodatkowe-opcje").after("<div class='form-group zawiadomienie'>" +
            "<div class='col-md-12'>" +
            "<label for='link'>Link do zawiadomienia:</label>" +
            "<textarea id='link' class='form-control zawiadomienie add-url' rows='1' name='url' placeholder='zawiadomienia/V%20Regaty%20o%20Puchar%20Gumowego%20Ryjka.jpg' ></textarea></div></div>");
        getRegattaListAd();
    }else if(selected == "wyniki"){
        $(".zawiadomienie").remove();
        getRegattaListAd();
    }else if(selected === "galeria"){
        $(".zawiadomienie").remove();
        getRegattaListAd();
        $(".dodatkowe-opcje").after("<div class='form-group zawiadomienie'>" +
            "<div class='col-md-12'>" +
            "<label for='link'>Link do galerii:</label>" +
            "<textarea id='link' class='form-control zawiadomienie add-url' rows='1' name='url' placeholder='galeria/Puchar Wojta Gminy Grodek nad Dunajcem/' required></textarea></div></div>");


    }else if(selected === "inne"){
        $(".zawiadomienie").remove();
    }
});
function getRegattaListAd() {
    var dataString = 'action=getRegattaList';
    $.ajax({
        type: "POST",
        url: "ajax-user.php",
        data: dataString,
        cache: false,
        success: function(result) {
            var resultGet = JSON.parse(result);
            var html = '<div class="form-group zawiadomienie"><div class="col-md-12"><label for="regaty">Regaty:</label><br><select id="regaty" name="rid" class="regaty-select zawiadomienie" required>';
            for (var i = 0; i < resultGet.length; i++) {
                html += '<option value="'+ resultGet[i].id +'">'+resultGet[i].name +'</option>';
            }
            html += '</select></div></div>';
            $('.dodatkowe-opcje').after(html);
        },
        error: function(){
            console.log("error");
        }

    });
}

var pag = 6;
var allPosts = true;
function getMorePosts(){
    if(allPosts) {
        var dataString = 'action=getMorePosts&pagi=' + pag;
        $.ajax({
            type: "POST",
            url: "ajax-user.php",
            data: dataString,
            cache: false,
            success: function (result) {
                var resultGet = JSON.parse(result);
                var tabLength = resultGet.length;
                var html = '';
                if (tabLength > 0) {

                    for (var i = 0; i < resultGet.length; i++) {
                        html +=
                            '<div class="col-md-4 col-sm-6"><div class="col-md-12 post-min">' +
                            '<a href="post.php?id='+resultGet[i].id+'" class="post-title">' + resultGet[i].title + '</a>' +
                            '<div class="post-date"><span class="glyphicon glyphicon glyphicon-calendar" aria-hidden="true"></span> ' + resultGet[i].date + ' / ' + resultGet[i].who + '</div> ' +
                            '<div><img class="img-responsive" src="' + resultGet[i].image + '" alt="Obraz"></div>' +
                            '<div>' + (resultGet[i].textmin).substring(0, 400) + '...</div>' +
                            '<a class="btn btn-primary read-more" href="post.php?id=' + resultGet[i].id + '">Czytaj więcej <span class="glyphicon glyphicon-chevron-right"></span></a>' +
                            '</div></div>';
                    }
                    $('#posts-load').before(html);
                } else {
                    $('#show-more').text("To już wszystko :)");
                    $('#posts-load').before(html);
                    allPosts = false;
                }
                pag = pag + 6;
            },
            error: function () {
                $('#post-load').before('<p>Wystąpił błąd, prosimy sprobować później.</p>');
            }
        });
    }
}

$(function() {

    var form = $('#ajax-add');
    var formMessages = $('#form-messages');
    var formType = $(form).attr('data-type');

    $(form).submit(function(e) {
        e.preventDefault();

        var disabled = form.find('select').removeAttr('disabled');
        var formData = $(form).serialize() + "&action=" + formType;
        console.log(formData);
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })
            .done(function(response) {
                $(formMessages).removeClass('error');
                $(formMessages).addClass('success');

                $(formMessages).text('Zapis zakończony! Automatyczny powrót do panelu admina za 3s.');

                window.setTimeout(function(){
                    window.location.href = "admin.php";
                }, 3000);
            })
            .fail(function(data) {
                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');

                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('Oops! Napotkano bład i wpis nie został zapisany.');
                }
            });
    });
});

function getPostList() {
    var dataString = 'action=getPostList';
    $("#admin-op ul").remove();
    $.ajax({
        type: "POST",
        url: "ajax-manager.php",
        data: dataString,
        cache: false,
        success: function(result) {
            var resultGet = JSON.parse(result);
            var html = '<ul>';
            for (var i = 0; i < resultGet.length; i++) {
                html += '<li><a  class="btn btn-link" href="admin-manager.php?command=edit&id=' + resultGet[i].id + '">'+resultGet[i].title+'</a></li>';
            }
            html += '</ul>';
            $('#admin-op').append(html);
        },
        error: function(){
            console.log("error");
        }

    });
}

function getRegattaList() {
    var dataString = 'action=getRegattaList';
    $("#admin-regaty ul").remove();
    $.ajax({
        type: "POST",
        url: "ajax-manager.php",
        data: dataString,
        cache: false,
        success: function(result) {
            var resultGet = JSON.parse(result);
            var html = '<ul>';
            for (var i = 0; i < resultGet.length; i++) {
                html += '<li><a  class="btn btn-link" href="admin-manager.php?command=editr&id=' + resultGet[i].id + '">'+resultGet[i].name+'</a></li>';
            }
            html += '</ul>';
            $('#admin-regaty').append(html);
        },
        error: function(){
            console.log("error");
        }

    });
}


