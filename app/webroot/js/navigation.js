$(function () {
    $('.ajaxreq').click(function () {
        $.get($(this).attr('href'), {}, function (data) {
            $('#content').empty().append(data);
        });
        return false;
    });
});