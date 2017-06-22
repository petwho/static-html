$(function () {
    $('.carousel-indexes li').click(function (e) {
        e.preventDefault();
        $('.carousel-indexes li').removeClass('active');
        $(this).addClass('active');
        var index = $(this).data('item');
        $('h1.item-heading').addClass('hidden');
        $('h1.item-heading[data-item="' + index + '"]').removeClass('hidden');

        $('.item').addClass('hidden');
        $('.item-' + index).removeClass('hidden');
        $('.arrow-down a').data('item', ++index);

    });
    $('.arrow-down a').click(function (e) {
        e.preventDefault();
        var index = $(this).data('item');
        $('.carousel-indexes li[data-item="' + index + '"]').trigger('click');
    });
    $('.dropdown-toggle').click(function (e) {
        e.preventDefault();
        location.href = $(this).data('filename');
    });
});
