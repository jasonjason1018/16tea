<!doctype html>
<html class="no-js" lang="zh-Hant-TW">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        十六茶 療癒之森
    </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">


    <link rel="manifest" href="./../site.json" crossorigin="use-credentials">
    <link rel="shortcut icon" href="/src/favicon.ico"/>
    <link rel="apple-touch-icon" href="/assets/image/touch/logo.png">


    <link rel="stylesheet" href="/assets/css/normalize.min.css">
    <link rel="stylesheet" href="/assets/lib/overlayScrollbars/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/assets/css/main.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/form.min.css">

    <meta name="theme-color" content="#ffffff">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GNB1EGND17"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'G-GNB1EGND17');
    </script>

</head>

<body>
<div class="loading -showPc">
    <div class="loading-wrap">
        <div class="loading-dot"></div>
        <div class="loading-dot"></div>
        <div class="loading-dot"></div>
    </div>
</div>
<div class="container">
    @include('include.header')

    <main class="main -f02">
        <div class="main-content -card">
            <div class="card">
                <div class="card-wrap">
                    <div class="form">
                        <div class="form-head">感謝分享！請填寫抽獎資料</div>
                        <div class="form-item">
                            <div class="form-title">請輸入真實姓名</div>
                            <div class="form-val">
                                <input type="text" id="name">
                            </div>
                        </div>
                        <div class="form-item">
                            <div class="form-title">手機號碼</div>
                            <div class="form-val">
                                <input type="tel" id="mobile">
                            </div>
                        </div>
                        <div class="form-item">
                            <div class="form-title">電子信箱</div>
                            <div class="form-val">
                                <input type="email" class="-lg" id="email">
                            </div>
                        </div>
                        <div class="form-item">
                            <div class="form-title">驗證碼</div>
                            <div class="form-val">
                                <input type="text" class="-sm" id="captcha">
                                <div class="form-verify">
                                    <div>
                                        <img id="captcha-img" src="{{ captcha_src() }}" alt="captcha">
                                        {{--                                        <img src="/assets/image/form/verify.png" alt="">--}}
                                    </div>
                                    <button onclick="reloadCaptcha()"></button>
                                </div>
                            </div>
                        </div>
                        <div class="form-agree">
                            <input type="checkbox" name="" id="agree">
                            <label for="agree">
                            <span>
                                我已了解定<a href="/rule#personal" target="_blank" rel="noopener noreferrer">同意個人資料搜集將關規定</a>，且已詳知活動辦法並同意遵守規範若填寫資料錯誤願意放棄得獎資格
                            </span>
                            </label>
                        </div>
                        <div class="form-action">
                            <!-- 可送出請移除disabled屬性 -->
                            <!-- <button class="btn" disabled><span>確認送出</span></button> -->
{{--                            <a href="complete.blade.php" class="btn"><span>確認送出</span></a>--}}
                            <button class="btn" id="form-btn"><span>確認送出</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</div>

<!-- 橫式操作 -->
<div class="landscape">
    為了提升網站使用體驗，<br>請將您的行動裝置轉成直式來操作。
</div>

<!-- 瀏覽器 -->
<div class="browser" data-popup="browser">
    <div class="browser-wrap">
        <div class="browser-title">
            為確保活動順暢進行<br>
            <span class="-browserText">建議使用 Chrome 或 Safari 瀏覽器</span>
        </div>
        <div class="browser-step">
            <div class="browser-item">點擊下方「複製網址」按鈕</div>
            <div class="browser-item">開啟瀏覽器</div>
            <div class="browser-item">貼上連結</div>
            <div class="browser-item">進入網頁</div>
        </div>
        <div class="browser-action">
            <button class="btn -md" data-copy><span>複製網址</span></button>
        </div>
    </div>
</div>

<script src="/assets/lib/jquery-3.7.1.min.js"></script>
<script src="/assets/lib/imagesloaded.pkgd.min.js"></script>
<script src="/assets/lib/ua-parser.min.js"></script>
<script src="/assets/lib/clipboard.min.js"></script>
<script src="/assets/lib/overlayScrollbars/jquery.overlayScrollbars.min.js"></script>

<script src="/assets/js/main.min.js"></script>
<script src="/js/form.js"></script>
<script>
    var topic = 'mist';
    var uid = {{ session('user')['uid'] }};

    function reloadCaptcha() {
        const captcha = document.getElementById('captcha-img');
        captcha.src = '/captcha/default?' + Date.now();
    }
</script>
</body>

</html>