require('./bootstrap');


$(function () {

    const ctpHidden = $('.categories-picker__hidden')
    const tgpHidden = $('.tags-picker__hidden')

    if (ctpHidden.val()) {
        const ctVal = ctpHidden.val().split(',');

        $('.categories-picker').selectpicker('val', ctVal)
    } else {
        $('.categories-picker').selectpicker();
    }

    if (tgpHidden.val()) {
        const tgVal = tgpHidden.val().split(',');
        $('.tags-picker').selectpicker('val', tgVal)
    } else {
        $('.tags-picker').selectpicker();
    }

    $('.selectpicker').selectpicker();
});
