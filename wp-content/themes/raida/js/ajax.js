$(function() {
    $("#email-btn").click(function () {
        $.post(MyAjax.ajaxurl, {action: "send_email", name: $("#contact_name").val(), email: $("#contact_email").val(), text: $("#contact_text").val()})
            .done(function (data) {
                $("#contact_name").val('');
                $("#contact_email").val('');
                $("#contact_text").val('');
                alert( data )
            });
    });
});