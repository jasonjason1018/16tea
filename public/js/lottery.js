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
            // location.href = '/list';
        }
    });
}

$('#lottery').click(function () {
    addRecord();
    handleLottery();
});

$('#game-lose').click(function () {
    addRecord();
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
    console.log(score);
    $.ajax({
        url: '/api/score',
        method: 'POST',
        data: {
            'score': score
        },
        error: function () {
            // location.href = '/list';
        }
    });
}

$('#audio-off').click(function () {
    const audio_status = 0;
    addAudioLog(audio_status);
});

$('#audio-on').click(function () {
    const audio_status = 1;
    addAudioLog(audio_status);
});

function addAudioLog(audio_status) {
    $.ajax({
        url: '/api/audio_log',
        method: 'POST',
        data: {
            'audio_status': audio_status,
            'levels': levels
        }
    });
}

$(document).ready(function () {
    if (audioStatus == null) {
        return false;
    } else if (audioStatus == 0) {
        $('#audio-off').trigger('click');
    } else {
        $('#audio-on').trigger('click');
    }
});