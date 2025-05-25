function handleLottery () {
    $.ajax({
        url: '/api/lottery',
        type: 'GET',
        success: function(response) {
            $('#lottery').off('click');

            popupBtn = 'sad'
            if (response.isWin) {
                popupBtn = 'win';
                $('#serial_number').text(response.serial_number);
            }

            $('#lottery').attr('data-popup-btn', popupBtn);
            $('#lottery').trigger('click');
        }
    });
}

$('#lottery').click(function () {
    console.log(score);
    handleLottery();
});

function fbShare() {
    const shareUrl = window.location.origin;
    window.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(shareUrl)}`, '_blank');
}

function lineShare() {
    const shareUrl = window.location.origin;
    window.open(`https://social-plugins.line.me/lineit/share?openExternalBrowser=1&url=${encodeURIComponent(shareUrl)}`, '_blank');
}