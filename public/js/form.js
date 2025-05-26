$('#form-btn').click(function () {
    name = $("#name").val();
    mobile = $("#mobile").val();
    email = $("#email").val();
    captch = $("#captcha").val();
    agree = $("#agree").is(':checked');

    if (!name) {
        alert('請輸入姓名');
        return false;
    }

    if (!mobile) {
        alert('請輸入手機號碼');
        return false;
    }

    if (!email) {
        alert('請輸入電子信箱');
        return false;
    }

    if (!captch) {
        alert('請輸入驗證碼');
        return false;
    }

    if (!agree) {
        alert('請同意遵守規範');
        return false;
    }

    if (!validatePhone(mobile)) {
        alert('手機號碼格式錯誤');
        return false;
    }

    if (!validateEmail(email)) {
        alert('email 格式錯誤');
        return false;
    }

    $.ajax({
        url: '/api/form',
        method: 'POST',
        data: {
            'topic': topic,
            'name': name,
            'mobile': mobile,
            'email': email,
            'captcha': captch,
            'uid': uid
        },
        success: function(response) {
            location.href = `/${topic}/complete`;
        },
        error: function () {
            location.href = '/list';
        }
    });
});

function validatePhone(phone) {
    const phoneRegex = /^09\d{8}$/;
    return phoneRegex.test(phone);
}

function validateEmail(email) {
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return emailRegex.test(email);
}