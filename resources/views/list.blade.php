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
    <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />


    <link rel="manifest" href="./site.json" crossorigin="use-credentials">
    <link rel="shortcut icon" href="./favicon.ico"/>
    <link rel="apple-touch-icon" href="/assets/image/touch/logo.png">


    <link rel="stylesheet" href="/assets/css/normalize.min.css">
    <link rel="stylesheet" href="/assets/lib/overlayScrollbars/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/assets/css/main.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/list.min.css">

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
            <div class="list">
                <div class="list-bg">
                    <img src="/assets/image/other/map.png" alt="">
                </div>
                <div class="list-content">
                    <div class="list-head">
                        <span class="-gnT">3款</span>森林地圖分別有<span class="-gnT -xlT">３</span><span
                                class="-gnT -lgT">種大獎</span><br>
                        等你來探索、放鬆身心，收穫驚喜！
                    </div>
                    @foreach($games as $index => $game)
                        <div class="list-item -f0{{ $index + 1 }} {{ $game['isOpen'] }}">
                            @if($game['style'] == 1)
                                <div class="list-name">
                                    <img src="{{ $game['tree_image'] }}" alt="">
                                    <p>{!! $game['name'] !!}</p>
                                </div>
                            @endif
                            <a href="/{{ $game['topic'] }}/game" class="list-pic">
                                <img class="-off" src="{{ $game['off_image'] }}" alt="">
                                <img class="-on" src="{{ $game['on_image'] }}" alt="">
                                <div>
                                    <div class="list-date">{{ $game['start_month'] }}<span>/</span>{{ $game['start_day'] }}</div>
                                    <div class="list-txt">開啟森林</div>
                                </div>
                            </a>
                            @if($game['style'] == 2)
                                <div class="list-name">
                                    <img src="{{ $game['tree_image'] }}" alt="">
                                    <p>{!! $game['name'] !!}</p>
                                </div>
                            @endif
                        </div>
                    @endforeach
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

</body>

</html>