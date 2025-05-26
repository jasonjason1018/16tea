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

    <link rel="stylesheet" href="./assets/css/record.min.css">

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

    <main class="main">
        <div class="main-wrap">
            <div class="record">
                <div class="record-bg">
                    <img src="./assets/image/other/map.png" alt="">
                </div>
                <div class="record-content">
                    <div class="record-head">快來看看你的尋穀成續如何 !</div>
                    <div class="record-legend">
                        <div>
                            <img src="./assets/image/record/sun.png" alt="">
                            <p>／晨光森林</p>
                        </div>
                        <div>
                            <img src="./assets/image/record/cloud.png" alt="">
                            <p>／霧影森林</p>
                        </div>
                        <div>
                            <img src="./assets/image/record/star.png" alt="">
                            <p>／星語森林</p>
                        </div>
                    </div>
                    <div class="record-table">

                        @foreach($recordItem as $item)
                            <div class="record-item">
                                <!-- 若尚未收集到請修改圖片檔名，例如1.png -> 1-off.png -->
                                <img src="{{ asset($item->image_path) }}" alt="">
                                <div class="record-txt">
                                    <div class="record-name">{{ $item->name }}</div>
                                </div>
                            </div>
                        @endforeach

{{--                        <div class="record-item">--}}
{{--                            <img src="./assets/image/record/2.png" alt="">--}}
{{--                            <div class="record-txt">--}}
{{--                                <div class="record-name">大麥</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="record-item">--}}
{{--                            <img src="./assets/image/record/3.png" alt="">--}}
{{--                            <div class="record-txt">--}}
{{--                                <div class="record-name">柿葉</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="record-item">--}}
{{--                            <img src="./assets/image/record/4.png" alt="">--}}
{{--                            <div class="record-txt">--}}
{{--                                <div class="record-name">玄米</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="record-item">--}}
{{--                            <img src="./assets/image/record/5.png" alt="">--}}
{{--                            <div class="record-txt">--}}
{{--                                <div class="record-name">麥芽</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="record-item">--}}
{{--                            <img src="./assets/image/record/6.png" alt="">--}}
{{--                            <div class="record-txt">--}}
{{--                                <div class="record-name">決明子</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="record-item">--}}
{{--                            <img src="./assets/image/record/7.png" alt="">--}}
{{--                            <div class="record-txt">--}}
{{--                                <div class="record-name">薏仁</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="record-item">--}}
{{--                            <img src="./assets/image/record/8.png" alt="">--}}
{{--                            <div class="record-txt">--}}
{{--                                <div class="record-name">粟米</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="record-item">--}}
{{--                            <img src="./assets/image/record/9.png" alt="">--}}
{{--                            <div class="record-txt">--}}
{{--                                <div class="record-name">香菇</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="record-item">--}}
{{--                            <img src="./assets/image/record/10.png" alt="">--}}
{{--                            <div class="record-txt">--}}
{{--                                <div class="record-name">黑豆</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="record-item">--}}
{{--                            <img src="./assets/image/record/11.png" alt="">--}}
{{--                            <div class="record-txt">--}}
{{--                                <div class="record-name">枇杷葉</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="record-item">--}}
{{--                            <img src="./assets/image/record/12.png" alt="">--}}
{{--                            <div class="record-txt">--}}
{{--                                <div class="record-name">紅豆</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="record-item">--}}
{{--                            <img src="./assets/image/record/13.png" alt="">--}}
{{--                            <div class="record-txt">--}}
{{--                                <div class="record-name">黍米</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="record-item">--}}
{{--                            <img src="./assets/image/record/14.png" alt="">--}}
{{--                            <div class="record-txt">--}}
{{--                                <div class="record-name">桑葉</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="record-item">--}}
{{--                            <img src="./assets/image/record/15.png" alt="">--}}
{{--                            <div class="record-txt">--}}
{{--                                <div class="record-name">黑米</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="record-item">--}}
{{--                            <img src="./assets/image/record/16.png" alt="">--}}
{{--                            <div class="record-txt">--}}
{{--                                <div class="record-name">玉蜀黍</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

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

<script src="./assets/js/main.min.js"></script>

</body>

</html>