function goBack() {
    window.history.back();
}

function saveData(){
    var title = $("#tytul").val();
    var description = $("#tekst").val();
    var image = $("#obraz").val();
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
