console.log("trumb");
$('#tekst').trumbowyg({
    btns: [
        ['viewHTML'],
        ['formatting'],
        'btnGrp-semantic',
        ['superscript', 'subscript'],
        ['link'],
        'btnGrp-justify',
        'btnGrp-lists',
        ['horizontalRule'],
        ['removeformat'],
        'table'
    ],
    lang: 'pl',
    autogrow: true,
    semantic: false,
    removeformatPasted: true
});
