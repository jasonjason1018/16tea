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