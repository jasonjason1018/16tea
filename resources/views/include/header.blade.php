<header class="header">
    <div class="header-wrap">
        <div class="header-logo">

            <a href="/list">
                <img src="/assets/image/layout/logo.png" alt="">
            </a>

        </div>
        @if (in_array(request()->path(), ['morning/game', 'mist/game', 'star/game']))
            <button class="header-btn" data-voice="on">
                <img src="/assets/image/layout/voice-on.svg" alt="">
                <img src="/assets/image/layout/voice-off.svg" alt="">
            </button>
        @endif
        <button class="header-btn" data-burger>
            <img src="/assets/image/layout/menu.svg" alt="">
        </button>
        <div class="header-nav">
            <div class="nav">
                <div class="nav-user">
                    <div class="nav-pic">
                        <!-- 若無圖片請放預設圖：/assets/image/layout/user.svg -->
                        @if (session()->has('user'))
                            <img src="{{ session('user')['picture'] }}" alt="">
                        @else
                            <img src="/assets/image/layout/user.svg" alt="">
                        @endif
                    </div>
                    @if (session()->has('user'))
                        <div class="nav-name">{{ session('user')['name'] }}</div>
                    @else
                        <div class="nav-name">訪客</div>
                    @endif
                </div>
                <div class="nav-content" data-scrollbar>
                    <div class="nav-links">
                        <a href="/list" onclick="atag('click','MENU','back home')">首頁</a>
                        <a href="/video" onclick="atag('click','MENU','CF page')">品牌影片</a>
                        <a href="/record" onclick="atag('click','MENU','Record')">尋穀紀錄</a>
                        <a href="/gift" onclick="atag('click','MENU','my prize')">我的贈品</a>
                        <a href="/rule" onclick="atag('click','MENU','method')">活動辦法</a>
                        <a href="/winners" onclick="atag('click','MENU','Winnerlist')">得獎名單</a>
                        <a href="/sales" onclick="atag('click','MENU','sales channel')">十六茶通路</a>

                    </div>
                    <div class="nav-social">
                        <a href="https://www.facebook.com/tw16asahi" target="_blank" rel="noopener noreferrer" onclick="atag('click','MENU','fb')">
                            <img src="/assets/image/icon/facebook.webp" alt="">
                        </a>
                        <a href="https://www.instagram.com/16cha_tw/" target="_blank" rel="noopener noreferrer" onclick="atag('click','MENU','ig')">
                            <img src="/assets/image/icon/instagram.webp" alt="">
                        </a>
                        <a href="https://asahisoftdrinks.com.tw/16cha/" target="_blank" rel="noopener noreferrer" onclick="atag('click','MENU','Official site')">
                            <img src="/assets/image/icon/16cha.webp" alt="">
                        </a>
                    </div>
                    <div class="nav-logout">
                        @if (session()->has('user'))
                            <a href="/logout" class="btn -lg" onclick="atag('click','MENU','sign out')">登出</a>
                        @else
                            <a href="/login" class="btn -lg" onclick="atag('click','MENU','sign in')">馬上登入</a>
                        @endif
                    </div>
                </div>
                <button class="nav-close" data-burger></button>
            </div>
        </div>
    </div>
</header>
<script>
    function atag(action, pageName, label) {
        $.ajax({
            url: '/api/tag',
            type: 'POST',
            data: {
                action: action,
                page_name: pageName,
                label: label
            }
        })
    }
</script>