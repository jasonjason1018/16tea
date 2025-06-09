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
    <meta property="og:title" content="挑戰限時尋16食穀，三種大獎任你抽！">
    <meta property="og:site_name" content="十六茶 療癒之森">
    <meta property="og:url" content="">
    <meta property="og:description" content="限時尋穀十六茶免費送！分享挑戰成績，雲品溫泉住宿等三種大獎任你抽">
    <meta property="og:type" content="website">
    <link rel="image_src" href="/assets/image/share-img.jpg">
    <meta property="og:image" content="/assets/image/share-img.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">



    <link rel="manifest" href="./../site.json" crossorigin="use-credentials">
    <link rel="shortcut icon" href="/src/favicon.ico" />
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
    <script>
        !function (t, a, e, n) {
            if (!t.TNLMGTag) {
                t.TNLMGTag = function () {
                    t.TNLMGTag.dataList.push(Array.prototype.slice.call(arguments));
                }, t.TNLMGTag.dataList = t.TNLMGTag.dataList || [];
                var i = a.getElementsByTagName('script')[0],
                    s = a.createElement('script');
                s.async = !0, s.src = 'https://tnlmgtag.ad2iction.com/sdk/tnlmg-tag.min.js', i.parentNode.insertBefore(s, i);
            }
        }(window, document);
    </script>
    <script>
        // 設定網站序號
        TNLMGTag('config', '80f4a881ca000152628e22ae409c814aac541f8548816e4eb045757159a10923');
        // 全域設定：設定是否允許自動追蹤 engaged 相關事件。
        TNLMGTag('set', 'allow_engaged_events', true);
        // 觸發 page_view 事件
        TNLMGTag('track', 'page_view');
    </script>



    <script>
        TNLMGTag('track', 'Ad2_thankyoupage', {
            event_category: 'ThankYouPage'
        });
    </script>
    @if (session()->has('user'))
        <script>
            !function(b,r,i,d,g,e,w,l){if(b._bw)return;var j=r.createElement(i);j.async=!0;j.src=d;var d=r.getElementsByTagName(i)[0];d.parentNode.insertBefore(j,d)}(window,document,'script','https://img.scupio.com/js/pixel.js');
            (window._bwq = window._bwq || []).push(['init', '1690-12GH447Y1MC9TJ0', {
                ulid: '{{ session('user')['uid'] }}',
            }]);
            (window._bwq = window._bwq || []).push(['trackSingle', '1690-12GH447Y1MC9TJ0', 'PageView']);
        </script>
    @else
        <script>
            !function(b,r,i,d,g,e,w,l){if(b._bw)return;var j=r.createElement(i);j.async=!0;j.src=d;var d=r.getElementsByTagName(i)[0];d.parentNode.insertBefore(j,d)}(window,document,'script','https://img.scupio.com/js/pixel.js');
            (window._bwq = window._bwq || []).push(['init', '1690-12GH447Y1MC9TJ0', {}]);
            (window._bwq = window._bwq || []).push(['trackSingle', '1690-12GH447Y1MC9TJ0', 'PageView']);
        </script>
    @endif
    <script>
        function submitApplication() {
            window._bwq = window._bwq || [];
            window._bwq.push([
                'trackSingle',
                '1690-12GH447Y1MC9TJ0',
                'SubmitApplication',
                {
                    tags: ['submit_application']
                }
            ]);
            atag('click','login page','send')
            console.log("📨 已追蹤 SubmitApplication");
        }
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
                            <div class="form-head">感謝分享！<br>請填寫資料以利得獎通知</div>
                            <div class="form-item">
                                <div class="form-title">請輸入真實姓名</div>
                                <div class="form-val">
                                    <input type="text" id="name" value="{{ $form->name ?? '' }}">
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-title">手機號碼</div>
                                <div class="form-val">
                                    <input type="tel" id="mobile" value="{{ $form->mobile ?? '' }}">
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-title">電子信箱</div>
                                <div class="form-val">
                                    <input type="email" class="-lg" id="email" value="{{ $form->email ?? '' }}">
                                </div>
                            </div>
                            <div class="form-item">
                                <div class="form-title">驗證碼</div>
                                <div class="form-val">
                                    <input type="text" class="-sm" id="captcha">
                                    <div class="form-verify">
                                        <div>
                                            <img id="captcha-img" src="{{ captcha_src() }}" alt="captcha">
                                            {{-- <img src="/assets/image/form/verify.png" alt="">--}}
                                        </div>
                                        <button onclick="reloadCaptcha()"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-agree">
                                <input type="checkbox" name="" id="agree">
                                <label for="agree">
                                    <span>
                                        我已了解並<a href="/rule#personal" target="_blank"
                                            rel="noopener noreferrer">同意個人資料蒐集相關規定</a>，且詳知<a href="/rule"
                                            target="_blank" rel="noopener noreferrer">活動辦法</a>並同意遵守規範；若資料填寫錯誤願意放棄得獎資格。
                                    </span>
                                </label>
                            </div>
                            <div class="form-action">
                                <!-- 可送出請移除disabled屬性 -->
                                <!-- <button class="btn" disabled><span>確認送出</span></button> -->
                                <button class="btn" id="form-btn" data-send
                                    onclick="submitApplication()"><span>確認送出</span></button>
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
                <button class="btn -md" data-copy onclick="atag('click','popup','copy link')"><span>複製網址</span></button>
            </div>
        </div>
    </div>

    <script src="/assets/lib/jquery-3.7.1.min.js"></script>
    <script src="/assets/lib/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/lib/ua-parser.min.js"></script>
    <script src="/assets/lib/clipboard.min.js"></script>
    <script src="/assets/lib/overlayScrollbars/jquery.overlayScrollbars.min.js"></script>
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
    <script>
        function cFTriggerEventCFgeneratelead_Button() {
            console.log('send');
            clickforce_rtid("9766002");
            cft("send", "event", {
                action: "CFgeneratelead_Button",
                category: "generatelead",
                label: "Button"
            });
        }
        ;

        $('[data-send]').on('click.send', cFTriggerEventCFgeneratelead_Button);
    </script>
    @if (session()->has('user'))
        <script>
            !function(b,r,i,d,g,e,w,l){if(b._bw)return;var j=r.createElement(i);j.async=!0;j.src=d;var d=r.getElementsByTagName(i)[0];d.parentNode.insertBefore(j,d)}(window,document,'script','https://img.scupio.com/js/pixel.js');
            (window._bwq = window._bwq || []).push(['init', '1690-12GH447Y1MC9TJ0', {
                ulid: '{{ session('user')['uid'] }}',
            }]);
            (window._bwq = window._bwq || []).push(['trackSingle', '1690-12GH447Y1MC9TJ0', 'PageView']);
        </script>
    @else
        <script>
            !function(b,r,i,d,g,e,w,l){if(b._bw)return;var j=r.createElement(i);j.async=!0;j.src=d;var d=r.getElementsByTagName(i)[0];d.parentNode.insertBefore(j,d)}(window,document,'script','https://img.scupio.com/js/pixel.js');
            (window._bwq = window._bwq || []).push(['init', '1690-12GH447Y1MC9TJ0', {}]);
            (window._bwq = window._bwq || []).push(['trackSingle', '1690-12GH447Y1MC9TJ0', 'PageView']);
        </script>
    @endif

</body>

</html>