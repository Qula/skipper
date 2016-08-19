function goBack() {
    window.history.back();
}
var pag = 3;
var allPosts = true;
function getMorePosts(){
    if(allPosts) {
        console.log("ładuje...");
        var dataString = 'action=getMorePosts&pagi=' + pag;
        $.ajax({
            type: "POST",
            url: "ajax-manager.php",
            data: dataString,
            cache: false,
            success: function (result) {
                //console.log(result);
                var resultGet = JSON.parse(result);
                var tabLength = resultGet.length;
                console.log(resultGet.length);
                var html = '';
                if (tabLength > 0) {

                    for (var i = 0; i < resultGet.length; i++) {
                        html +=
                            '<div class="col-md-4 col-sm-6"><div class="col-md-12 post-min">' +
                            '<a href="post.php?id='+resultGet[i].id+'" class="post-title">' + resultGet[i].title + '</a>' +
                            '<div class="post-date"><span class="glyphicon glyphicon glyphicon-calendar" aria-hidden="true"></span> ' + resultGet[i].date + ' / ' + resultGet[i].who + '</div> ' +
                            '<div><img class="img-responsive" src="' + resultGet[i].image + '" alt="Obraz"></div>' +
                            '<div>' + (resultGet[i].text).substring(0, 400) + '...</div>' +
                            '<a class="btn btn-primary read-more" href="post.php?id=' + resultGet[i].id + '">Czytaj więcej <span class="glyphicon glyphicon-chevron-right"></span></a>' +
                            '</div></div>';
                    }
                    $('#posts-load').before(html);

                    console.log("Załadowano!");
                } else {
                    $('#show-more').text("To już wszystko :)")
                    $('#posts-load').before(html);
                    allPosts = false;
                }
                pag = pag + 3;
            },
            error: function () {
                $('#post-load').before('<p>Wystąpił błąd, prosimy sprobować później.</p>')
            }
        });
    }
}

function saveData(){
    var title = $("#tytul").val();
    var description = $("#tekst").val();
    var image = 'pic/'+$(".pic-select").val()+'.jpg';
    var deleted = $(".view-select").val();
    console.log(deleted);
    var dataString = 'action=saveData&title=' + title + '&text=' + description + '&image=' + image + '&deleted=' + deleted;
    $.ajax({
        type: "POST",
        url: "ajax-manager.php",
        data: dataString,
        cache: false,
        success: function(result) {
            var resultGet = JSON.parse(result);
            alert(resultGet[0]);
            window.location.assign('admin.php');
        }
    });
}

function saveRegatta(){
    var name = $("#nazwa").val();
    var type = $("#klasa").val();
    var date = $("#data").val();
    var status = $(".status-select").val();
    var deleted = $(".view-select").val();
    var organizer = $("#organizator").val();
    var dataString = 'action=saveRegatta&name=' + name + '&type=' + type + '&date=' + date + '&organizer=' + organizer +'&status=' + status + '&deleted=' + deleted;
    $.ajax({
        type: "POST",
        url: "ajax-manager.php",
        data: dataString,
        cache: false,
        success: function(result) {
            var resultGet = JSON.parse(result);
            alert(resultGet[0]);
            window.location.assign('admin.php');
        }
    });
}

function saveAsData(){
    var title = $("#tytul").val();
    var description = $("#tekst").val();
    var image = 'pic/'+$(".pic-select").val()+'.jpg';
    console.log(image);
    var id = getUrlVars()["id"];
    var deleted = $(".view-select").val();
    console.log(deleted);
    var dataString = 'action=saveAsData&title=' + title + '&text=' + description + '&image=' + image + '&id=' + id + '&deleted=' + deleted;
    $.ajax({
        type: "POST",
        url: "ajax-manager.php",
        data: dataString,
        cache: false,
        success: function(result) {
            var resultGet = JSON.parse(result);
            alert(resultGet[0]);
            window.location.assign('admin.php');
        }
    });
}

function saveAsRegatta(){
    var name = $("#nazwa").val();
    var type = $("#klasa").val();
    var date = $("#data").val();
    var status = $(".status-select").val();
    var deleted = $(".view-select").val();
    var organizer = $("#organizator").val();
    var id = getUrlVars()["id"];

    var dataString = 'action=saveAsRegatta&name=' + name + '&type=' + type + '&date=' + date + '&organizer=' + organizer + '&status=' + status + '&deleted=' + deleted + '&id=' + id ;
    console.log(dataString)
    $.ajax({
        type: "POST",
        url: "ajax-manager.php",
        data: dataString,
        cache: false,
        success: function(result) {
            var resultGet = JSON.parse(result);
            alert(resultGet[0]);
            window.location.assign('admin.php');
        }
    });
}

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
                html += '<li><a  class="btn btn-link" href="admin-manager.php?command=edit&id=' + resultGet[i]['id'] + '">'+resultGet[i]['title']+'</a></li>';
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
                html += '<li><a  class="btn btn-link" href="admin-manager.php?command=editr&id=' + resultGet[i]['id'] + '">'+resultGet[i]['name']+'</a></li>';
            }
            html += '</ul>';
            $('#admin-regaty').append(html);
        },
        error: function(){
            console.log("error");
        }

    });
}

function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}
