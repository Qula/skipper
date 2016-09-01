$(function() {

    var form = $('#ajax-contact');
    var formMessages = $('#form-messages');

    $(form).submit(function(e) {
        e.preventDefault();

        var formData = $(form).serialize();

        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })
            .done(function(response) {
                $(formMessages).removeClass('error');
                $(formMessages).addClass('success');
                $(formMessages).text(response);

                $('#name').val('');
                $('#email').val('');
                $('#telephone').val('');
                $('#message').val('');
                grecaptcha.reset();
            })
            .fail(function(data) {
                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');

                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('Oops! Napotkano bład i Twoja widomość nie zostanie wysłana.');
                }
            });
    });
});
