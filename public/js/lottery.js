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
        },
        error: function () {
            location.href = '/list';
        }
    });
}

$('#lottery').click(function () {
    console.log(score);
    handleLottery();
});

const shareUrl = window.location.origin;

function fbShare() {
    addRecord();
    window.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(shareUrl)}`, '_blank');
    window.location.href = window.location.origin + '/' + topic + '/form';
}

function lineShare() {
    addRecord();
    window.open(`https://social-plugins.line.me/lineit/share?openExternalBrowser=1&url=${encodeURIComponent(shareUrl)}`, '_blank');
    window.location.href = window.location.origin + '/' + topic + '/form';
}

function playAgain() {
    addRecord();
    location.href = `/${topic}/game`;
}

function addRecord() {
    $.ajax({
        url: '/api/score',
        method: 'POST',
        data: {
            'score': score
        },
        error: function () {
            location.href = '/list';
        }
    });
}