function goBack() {
    window.history.back();
}

function saveData(){
    var title = $("#tytul").val();
    var description = $("#tekst").val();
    var image = 'pic/'+$(".pic-select").val()+'.jpg';
    console.log(title);
    var dataString = 'action=saveData&title=' + title + '&text=' + description + '&image=' + image;
    $.ajax({
        type: "POST",
        url: "ajax-manager.php",
        data: dataString,
        cache: false,
        success: function(result) {
            var resultGet = JSON.parse(result);
            alert(resultGet[0]);
        }
    });
}

function saveAsData(){
    var title = $("#tytul").val();
    var description = $("#tekst").val();
    var image = 'pic/'+$(".pic-select").val()+'.jpg';
    console.log(image);
    var id = getUrlVars()["id"];
    console.log(id);
    var dataString = 'action=saveAsData&title=' + title + '&text=' + description + '&image=' + image + '&id=' + id;
    $.ajax({
        type: "POST",
        url: "ajax-manager.php",
        data: dataString,
        cache: false,
        success: function(result) {
            var resultGet = JSON.parse(result);
            alert(resultGet[0]);
        }
    });
}


function getPostList() {
    var dataString = 'action=getPostList';
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
        }
    });
}

function getPostListDelete() {
    var dataString = 'action=getPostListDelete';
    $.ajax({
        type: "POST",
        url: "ajax-manager.php",
        data: dataString,
        cache: false,
        success: function(result) {
            var resultGet = JSON.parse(result);
            var html = '<ul>';
            for (var i = 0; i < resultGet.length; i++) {
                html += '<li><a  class="btn btn-link" href="admin-manager.php?command=delete&id=' + resultGet[i]['id'] + '">'+resultGet[i]['id']+') '+resultGet[i]['title']+'</a>' +
                    '' +' <button class="btn btn-danger-">Pokaż</button> '+
                    '</li>';
            }
            html += '</ul>';
            $('#admin-op').append(html);
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