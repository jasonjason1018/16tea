<!doctype html>
<html class="no-js" lang="zh-Hant-TW">

<head>
    <meta property="og:title" content="這是一篇超棒的文章" />
    <meta property="og:description" content="Laravel + Facebook 分享技巧，一看就會！" />
    <meta property="og:image" content="https://yourwebsite.com/images/share.jpg" />
    <meta property="og:url"
        content="https://63e1-2001-b400-e287-7a40-54fa-49af-379a-5f8d.ngrok-free.app/morning/game" />
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

    <link rel="stylesheet" href="/assets/css/game.min.css">

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
        TNLMGTag('track', 'view_site');
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
        function lead() {
            window._bwq = window._bwq || [];
            window._bwq.push([
                'trackSingle',
                '1690-12GH447Y1MC9TJ0',
                'Lead',
                {
                    tags: ['lead']
                }
            ]);
            atag('click','sunrise page','go')
            console.log("🎯 Lead tracking sent");
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

        <main class="main -f01">
            <div class="step">
                <div class="step-item -active" data-step="intro">
                    <div class="intro">
                        <div class="intro-wrap">
                            <div class="intro-tit">晨光森林</div>
                            <div class="intro-txt">
                                晨曦透過樹梢灑下溫暖光芒<br>
                                讓療癒之森充滿寧靜與能量<br>
                                這裡藏著能喚醒活力、帶來好氣色的食穀<br>
                                快來一起尋找吧！
                            </div>
                            <div class="intro-16">
                                <img src="/assets/image/other/16/1.png" class="intro-item" alt="">
                                <img src="/assets/image/other/16/2.png" class="intro-item" alt="">
                                <img src="/assets/image/other/16/3.png" class="intro-item" alt="">
                                <img src="/assets/image/other/16/4.png" class="intro-item" alt="">
                                <img src="/assets/image/other/16/5.png" class="intro-item" alt="">
                                <img src="/assets/image/other/16/6.png" class="intro-item" alt="">
                                <img src="/assets/image/other/16/7.png" class="intro-item" alt="">
                                <img src="/assets/image/other/16/8.png" class="intro-item" alt="">
                                <img src="/assets/image/other/16/9.png" class="intro-item" alt="">
                                <img src="/assets/image/other/16/10.png" class="intro-item" alt="">
                                <img src="/assets/image/other/16/11.png" class="intro-item" alt="">
                                <img src="/assets/image/other/16/12.png" class="intro-item" alt="">
                                <img src="/assets/image/other/16/13.png" class="intro-item" alt="">
                                <img src="/assets/image/other/16/14.png" class="intro-item" alt="">
                                <img src="/assets/image/other/16/15.png" class="intro-item" alt="">
                                <img src="/assets/image/other/16/16.png" class="intro-item" alt="">
                            </div>
                        </div>
                        <button class="intro-btn" data-step-btn="task"
                            onclick="atag('click','sunrise page','enter s')"></button>
                    </div>
                </div>
                <div class="step-item" data-step="task">
                    <div class="card -task">
                        <div class="card-wrap">
                            <div class="task">
                                <div class="task-tit">
                                    請在限時30秒內<br>
                                    完成收集以下食穀與數量
                                </div>
                                <div class="task-content">
                                    <div class="task-item">
                                        <img class="task-pic" src="/assets/image/map1/1.png" alt="">
                                        <div class="task-txt">
                                            <div class="task-name">紅豆</div>
                                            <div class="task-desc">不靠戀愛氣色好，靠紅豆剛剛好</div>
                                        </div>
                                        <div class="task-num" data-task-num="redBean"></div>
                                    </div>
                                    <div class="task-item">
                                        <img class="task-pic" src="/assets/image/map1/2.png" alt="">
                                        <div class="task-txt">
                                            <div class="task-name">桑葉</div>
                                            <div class="task-desc">痘走元氣來，桑葉最可以</div>
                                        </div>
                                        <div class="task-num" data-task-num="mulberryLeaf"></div>
                                    </div>
                                    <div class="task-item">
                                        <img class="task-pic" src="/assets/image/map1/3.png" alt="">
                                        <div class="task-txt">
                                            <div class="task-name">薏仁</div>
                                            <div class="task-desc">白得自然，靠薏仁養出來</div>
                                        </div>
                                        <div class="task-num" data-task-num="jobsTears"></div>
                                    </div>
                                    <div class="task-item">
                                        <img class="task-pic" src="/assets/image/map1/4.png" alt="">
                                        <div class="task-txt">
                                            <div class="task-name">紅棗</div>
                                            <div class="task-desc">棗回好氣色，自帶美顏濾鏡</div>
                                        </div>
                                        <div class="task-num" data-task-num="redDate"></div>
                                    </div>
                                    <div class="task-item">
                                        <img class="task-pic" src="/assets/image/map1/5.png" alt="">
                                        <div class="task-txt">
                                            <div class="task-name">黑豆</div>
                                            <div class="task-desc">吃豆不會老，元氣滿點不顯老</div>
                                        </div>
                                        <div class="task-num" data-task-num="blackBean"></div>
                                    </div>
                                </div>
                                <div class="task-action">
                                    <button class="btn" data-step-btn="instruction"
                                        onclick="lead()">開始挑戰</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step-item" data-step="instruction">
                    <div class="game -instruction" data-step-btn="game">
                        <div class="game-content">
                            <div class="instruction">
                                <div class="instruction-time">
                                    <div class="instruction-triangle"></div>
                                    <span>限時30秒</span>
                                </div>
                                <div class="instruction-click">
                                    <img src="/assets/image/map1/instruction/item.png" alt="">
                                    <div class="instruction-finger -c">
                                        <div></div>
                                    </div>
                                </div>
                                <div class="instruction-txt -c">
                                    <img src="/assets/image/map1/instruction/txt-click.png" alt="">
                                </div>
                                <div class="instruction-leaf">
                                    <img src="/assets/image/map1/instruction/leaf.png" alt="">
                                    <div class="instruction-finger -l">
                                        <div></div>
                                    </div>
                                </div>
                                <div class="instruction-txt -l">
                                    <img src="/assets/image/map1/instruction/txt-leaf.png" alt="">
                                </div>
                                <div class="instruction-list">
                                    <span>食穀收集清單</span>
                                    <div class="instruction-triangle -down"></div>
                                </div>
                            </div>
                            <div class="game-time"><span>30</span></div>
                        </div>
                        <div class="game-task">
                            <img src="/assets/image/map1/instruction/task.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="step-item" data-step="game">
                    <div class="game">
                        <div class="game-content">
                            <div class="game-stage" id="canvas-container"></div>
                            <div class="game-time"><span data-second>30</span></div>
                        </div>
                        <div class="game-task">
                            <div data-item="redBean">
                                <img src="/assets/image/map1/1.png" alt="">
                                <div>
                                    紅豆
                                    <p><span data-num>0</span>/<span data-target></span></p>
                                </div>
                            </div>
                            <div data-item="mulberryLeaf">
                                <img src="/assets/image/map1/2.png" alt="">
                                <div>
                                    桑葉
                                    <p><span data-num>0</span>/<span data-target></span></p>
                                </div>
                            </div>
                            <div data-item="jobsTears">
                                <img src="/assets/image/map1/3.png" alt="">
                                <div>
                                    薏仁
                                    <p><span data-num>0</span>/<span data-target></span></p>
                                </div>
                            </div>
                            <div data-item="redDate">
                                <img src="/assets/image/map1/4.png" alt="">
                                <div>
                                    紅棗
                                    <p><span data-num>0</span>/<span data-target></span></p>
                                </div>
                            </div>
                            <div data-item="blackBean">
                                <img src="/assets/image/map1/5.png" alt="">
                                <div>
                                    黑豆
                                    <p><span data-num>0</span>/<span data-target></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step-item" data-step="level">
                    <div class="card -score">
                        <div class="card-wrap">
                            <div class="score">
                                <div class="score-tit">挑戰成績</div>
                                <div class="score-level">
                                    <div>
                                    </div>
                                </div>
                                <div class="score-desc"></div>
                                <div class="score-action">
                                    <!-- 挑戰失敗無法抽“立即抽”與“大獎” -->
                                    <button onclick="fbShare()" class="btn">分享至FB</button>
                                    <button onclick="lineShare()" class="btn">分享至Line</button>
                                    <button onclick="playAgain()" class="btn">重玩一次</button>
                                </div>
                                <div class="score-fbError">
                                    若FB分享畫面錯誤，可能因系統更新，請至FB個人頁面確認分享是否成功。
                                </div>
                                <div class="score-note">分享成績&填寫資料，事後抽大獎喔 !</div>
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

    <!-- 音效popup -->
    <div class="popup {{ $audioPopup }}" data-popup="music">
        <div class="popup-wrap">
            <div class="popup-content">
                <div class="music">
                    請開啟音效<br>
                    以獲得最佳遊戲體驗
                </div>
            </div>
            <div class="popup-action">
                <button class="btn" data-popup-close data-voice="off" id="audio-off">關閉</button>
                <button class="btn" data-popup-close data-voice="on" id="audio-on">開啟</button>
            </div>
        </div>
    </div>
    <audio id="audio" src="/assets/audio/morning-mist.mp4" loop></audio>
    <!-- 挑戰成功popup -->
    <div class="popup" data-popup="success">
        <div class="popup-wrap">
            <div class="popup-tit">挑戰成功</div>
            <div class="popup-content">
                <div class="result">
                    <div class="result-tit">
                        <span>找到</span>
                        <div class="result-num">
                            <span data-found></span>
                        </div>
                        <span>個食穀</span>
                    </div>
                    <div class="result-txt">
                        恭喜獲得立即抽一瓶<br>
                        零咖啡因十六茶的機會，<br>
                        今晚伴你安心好眠！
                    </div>
                </div>
            </div>
            <div class="popup-action">
                <!-- 流程示意用，實際請移除[data-popup-btn="win"] -->
                <button class="btn" id="lottery" data-popup-close
                    onclick="atag('click','popup','victory_draw')">立即抽</button>
            </div>
        </div>
    </div>
    <!-- 挑戰失敗popup -->
    <div class="popup" data-popup="fail">
        <div class="popup-wrap">
            <div class="popup-tit -dark">挑戰失敗</div>
            <div class="popup-content">
                <div class="result">
                    <div class="result-tit">
                        <span>還差</span>
                        <div class="result-num">
                            <span data-notfound></span>
                        </div>
                        <span>個食穀</span>
                    </div>
                    <div class="result-txt">
                        別氣餒！<br>
                        來罐天然零咖啡因十六茶，<br>
                        清香回甘帶走壞心情，<br>
                        陪你再戰一局！
                    </div>
                </div>
            </div>
            <div class="popup-action">
                <button class="btn" data-step-btn="level" data-popup-close id="game-lose"
                    onclick="atag('click','popup','defeat_next step')">下一步</button>
            </div>
        </div>
    </div>
    <!-- 請依照實際抽獎結果顯示相對應popup -->
    <!-- 中獎popup -->
    <!-- 若中獎，
    請在[data-popup="win"]加上class .-show 以顯示popup，
    以及<body>加上class .-isPopupOpen
-->
    <div class="popup" data-popup="win">
        <div class="popup-wrap">
            <div class="popup-tit">恭喜中獎</div>
            <div class="popup-content">
                <div class="lottery">
                    <div class="lottery-name">獲得十六茶乙瓶</div>
                    <div class="lottery-pic">
                        <img src="/assets/image/product/16cha.webp" alt="">
                    </div>
                    <div class="lottery-code">
                        兌換序號
                        <p id="serial_number"></p>
                    </div>
                    <div class="lottery-note">請至「我的贈品」查詢獎品喔 !</div>
                </div>
            </div>
            <div class="popup-action">
                <button class="btn" data-step-btn="level" data-popup-close
                    onclick="atag('click','popup','win_next step')">下一步</button>
            </div>
        </div>
    </div>
    <!-- 沒中獎popup -->
    <!-- 若沒中獎，
    請在[data-popup="sad"]加上class .-show 以顯示popup，
    以及<body>加上class .-isPopupOpen
-->
    <div class="popup" data-popup="sad">
        <div class="popup-wrap">
            <div class="popup-tit -fail">殘念&nbsp;&nbsp;&nbsp;沒中獎</div>
            <div class="popup-content">
                <div class="fail">
                    可惜！這次沒中獎~<br>
                    再試一次，好運就會降臨！
                </div>
            </div>
            <div class="popup-action">
                <button class="btn" data-step-btn="level" data-popup-close
                    onclick="atag('click','popup','fail_try again')">下一步</button>
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

    <script src="/assets/lib/gsap.min.js"></script>
    <script src="/assets/lib/pixi.min.js"></script>

    <script src="/assets/js/main.min.js"></script>


    <script>
        // 這邊可以取得使用者蒐集到的各個數量
        // 若有需要得知挑戰結果來做一些事，可參考<body>上的class，成功會加上.-success，失敗會加上.-fail
        var score = {
            // 紅豆
            redBean: 0,
            // 桑葉
            mulberryLeaf: 0,
            // 薏仁
            jobsTears: 0,
            // 紅棗
            redDate: 0,
            // 黑豆
            blackBean: 0
        };
        var mapNum = 1;
        var scoreLevel = '';
        $('[data-step-btn="task"]').on('click.track', function () {
            TNLMGTag('track', 'Ad2_start', {
                event_category: '開始挑戰'
            });
        });

    </script>

    {{--
    <script src="/assets/js/game.min.js"></script>--}}
    <script src="/assets/js/game.js"></script>
    <script src="/js/lottery.js"></script>
    <script>
        var topic = 'morning';
        var levels = @json($levels);
        var audioStatus = @json($audioStatus);
    </script>
</body>

</html>