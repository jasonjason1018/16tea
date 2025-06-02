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
    <link rel="shortcut icon" href="/src/favicon.ico"/>
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

    <main class="main -f03">
        <div class="step">
            <div class="step-item -active" data-step="intro">
                <div class="intro">
                    <div class="intro-wrap">
                        <div class="intro-tit">星語森林</div>
                        <div class="intro-txt">
                            夜幕低垂，柔和月光灑滿林間<br>
                            輕柔夜風帶來靜謐療癒<br>
                            這裡藏有放鬆身心、舒緩好眠的食穀<br>
                            一起來探索吧！
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
                    <button class="intro-btn" data-step-btn="task" onclick="atag('click','star page','enter star')"></button>
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
                                    <img class="task-pic" src="/assets/image/map3/1.png" alt="">
                                    <div class="task-txt">
                                        <div class="task-name">決明子</div>
                                        <div class="task-desc">舒緩疲憊視線，讓眼神亮回來 </div>
                                    </div>
                                    <div class="task-num" data-task-num="cassiaSeed"></div>
                                </div>
                                <div class="task-item">
                                    <img class="task-pic" src="/assets/image/map3/2.png" alt="">
                                    <div class="task-txt">
                                        <div class="task-name">黍米</div>
                                        <div class="task-desc">哄睡它在行，睡好也睡飽</div>
                                    </div>
                                    <div class="task-num" data-task-num="millet"></div>
                                </div>
                                <div class="task-item">
                                    <img class="task-pic" src="/assets/image/map3/3.png" alt="">
                                    <div class="task-txt">
                                        <div class="task-name">玄米</div>
                                        <div class="task-desc">天然情緒紓緩劑，心情鬆了身體也鬆了</div>
                                    </div>
                                    <div class="task-num" data-task-num="brownRice"></div>
                                </div>
                                <div class="task-item">
                                    <img class="task-pic" src="/assets/image/map3/4.png" alt="">
                                    <div class="task-txt">
                                        <div class="task-name">枇杷葉</div>
                                        <div class="task-desc">喉嚨不卡卡，好眠不受擾</div>
                                    </div>
                                    <div class="task-num" data-task-num="loquatLeaf"></div>
                                </div>
                                <div class="task-item">
                                    <img class="task-pic" src="/assets/image/map3/5.png" alt="">
                                    <div class="task-txt">
                                        <div class="task-name">粟米</div>
                                        <div class="task-desc">舒緩緊繃情緒，不知不覺自然<br>登出</div>
                                    </div>
                                    <div class="task-num" data-task-num="corn"></div>
                                </div>
                            </div>
                            <div class="task-action">
                                <button class="btn" data-step-btn="instruction" onclick="atag('click','star page','go')">開始挑戰</button>
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
                                <img src="/assets/image/map3/instruction/item.png" alt="">
                                <div class="instruction-finger -c">
                                    <div></div>
                                </div>
                            </div>
                            <div class="instruction-txt -c">
                                <img src="/assets/image/map3/instruction/txt-click.png" alt="">
                            </div>
                            <div class="instruction-leaf">
                                <img src="/assets/image/map3/instruction/leaf.png" alt="">
                                <div class="instruction-finger -l">
                                    <div></div>
                                </div>
                            </div>
                            <div class="instruction-txt -l">
                                <img src="/assets/image/map3/instruction/txt-leaf.png" alt="">
                            </div>
                            <div class="instruction-list">
                                <span>食穀收集清單</span>
                                <div class="instruction-triangle -down"></div>
                            </div>
                        </div>
                        <div class="game-time"><span>30</span></div>
                    </div>
                    <div class="game-task">
                        <img src="/assets/image/map3/instruction/task.png" alt="">
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
                        <div data-item="cassiaSeed">
                            <img src="/assets/image/map3/1.png" alt="">
                            <div>
                                決明子
                                <p><span data-num>0</span>/<span data-target></span></p>
                            </div>
                        </div>
                        <div data-item="millet">
                            <img src="/assets/image/map3/2.png" alt="">
                            <div>
                                黍米
                                <p><span data-num>0</span>/<span data-target></span></p>
                            </div>
                        </div>
                        <div data-item="brownRice">
                            <img src="/assets/image/map3/3.png" alt="">
                            <div>
                                玄米
                                <p><span data-num>0</span>/<span data-target></span></p>
                            </div>
                        </div>
                        <div data-item="loquatLeaf">
                            <img src="/assets/image/map3/4.png" alt="">
                            <div>
                                枇杷葉
                                <p><span data-num>0</span>/<span data-target></span></p>
                            </div>
                        </div>
                        <div data-item="corn">
                            <img src="/assets/image/map3/5.png" alt="">
                            <div>
                                粟米
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
{{--                                <a href="./game.html" class="btn">重玩一次</a>--}}
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
<audio id="audio" src="/assets/audio/star.mp4" loop></audio>
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
            <button class="btn" id="lottery" data-popup-close onclick="atag('click','popup','victory_draw')">立即抽</button>
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
            <button class="btn" data-step-btn="level" data-popup-close id="game-lose" onclick="atag('click','popup','defeat_next step')">下一步</button>
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
            <button class="btn" data-step-btn="level" data-popup-close onclick="atag('click','popup','win_next step')">下一步</button>
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
            <button class="btn" data-step-btn="level" data-popup-close onclick="atag('click','popup','fail_try again')">下一步</button>
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
        // 決明子
        cassiaSeed: 0,
        // 黍米
        millet: 0,
        // 玄米
        brownRice: 0,
        // 枇杷葉
        loquatLeaf: 0,
        // 粟米
        corn: 0
    };
    var mapNum = 3;
    var scoreLevel = '';
</script>

{{--<script src="/assets/js/game.min.js"></script>--}}
<script src="/assets/js/game.js"></script>
<script src="/js/lottery.js"></script>
<script>
    var topic = 'star';
    var levels = @json($levels);
    var audioStatus = @json($audioStatus);
</script>
</body>

</html>