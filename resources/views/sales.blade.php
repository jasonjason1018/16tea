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


    <link rel="manifest" href="./site.json" crossorigin="use-credentials">
    <link rel="shortcut icon" href="/src/favicon.ico"/>
    <link rel="apple-touch-icon" href="./assets/image/touch/logo.png">


    <link rel="stylesheet" href="./assets/css/normalize.min.css">
    <link rel="stylesheet" href="./assets/lib/overlayScrollbars/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="./assets/css/main.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/sales.min.css">

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

    <main class="main -scroll">
        <div class="main-wrap">
            <div class="main-tit"><b>十六茶購買通路</b></div>
            <div class="main-content" data-scrollbar>
                <div class="sales">
                    <div class="sales-group">
                        <div class="sales-head">實體通路</div>
                        <div class="sales-content">
                            <div class="sales-item">
                                <div class="sales-pic">
                                    <img src="./assets/image/product/16cha.webp" alt="">
                                </div>
                                <div class="sales-content">
                                    <div class="sales-name">十六茶經典無糖 PET530ml：</div>
                                    <div class="sales-location">
                                        7-11、全聯、全家、寶雅、美廉社、家樂福、CitySuper、唐吉訶德、大潤發、愛買
                                    </div>
                                </div>
                            </div>
                            <div class="sales-item">
                                <div class="sales-pic">
                                    <img src="./assets/image/product/16chaSm.webp" alt="">
                                </div>
                                <div class="sales-content">
                                    <div class="sales-name">十六茶經典無糖 鋁箔包330ml：</div>
                                    <div class="sales-location">全聯</div>
                                </div>
                            </div>
                            <div class="sales-item -last">
                                <div class="sales-pic">
                                    <img src="./assets/image/product/16chaLg.webp" alt="">
                                </div>
                                <div class="sales-content">
                                    <div class="sales-name">十六茶經典無糖 PET990ml：</div>
                                    <div class="sales-location">家樂福、大潤發、愛買、餐飲通路</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sales-group">
                        <div class="sales-head">線上通路</div>
                        <div class="sales-action">
                            <a href="https://bit.ly/3PmsQKm" target="_blank" rel="noopener noreferrer">
                                <img src="./assets/image/other/pchome.png" alt="">
                            </a>
                            <a href="https://bit.ly/3Oic921" target="_blank" rel="noopener noreferrer">
                                <img src="./assets/image/other/momo.png" alt="">
                            </a>
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

<script src="./assets/lib/jquery-3.7.1.min.js"></script>
<script src="./assets/lib/imagesloaded.pkgd.min.js"></script>
<script src="./assets/lib/ua-parser.min.js"></script>
<script src="./assets/lib/clipboard.min.js"></script>
<script src="./assets/lib/overlayScrollbars/jquery.overlayScrollbars.min.js"></script>
<script src="https://cdn.holmesmind.com/js/rtid.js"></script>
<script src="https://cdn.holmesmind.com/dmp/cft/triggerTracker.js"></script>
<script async src="https://cdn.holmesmind.com/dmp/cft/tracker.js"></script>

<script>
    clickforce_rtid("9766001");
    /* Website track (tracker.js) - B.I.DMP By ClickForce */
    window.cft = window.cft || function () {
        (cft.q = cft.q || []).push([].slice.call(arguments));
    };
    function clickForceMyyCFT() {
        cft("setSiteId", "CF-220600115987");
        cft("setViewPercentage");
    }
    ;
    clickForceDelayLoading();
</script>

<script src="./assets/js/main.min.js"></script>

</body>

</html>