@extends('frontstage.template')

@section('meta')
<meta property="og:url" content="https://wangch15.github.io/shen57web/story">
<meta property="og:image" content="https://wangch15.github.io/shen57web/img/index/banner.jpg">
<meta property="og:description" content="
有人說，人生就像是一場旅行，
旅途中所有「無期而遇」的美好，串起了我們的一生。
而在炙熱的沙漠中，意外現身的一片 森林，
『 森．五七行館 』之名便由此而生。">
<meta property="og:title" content="森五七行館 / 故事起源">
@endsection

@section('title')
森五七行館 - 源 Story
@endsection

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="{{ asset('css/story.css') }}">
<link rel="stylesheet" href="{{ asset('css/story-swiper.css') }}">
@endsection

@section('main')
    <main id="story">
        <!-- Swiper -->
        <div class="swiper-Area">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper swiper-mine">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/story/story-1.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide gridbox">
                        <div class="left-side" alt=""
                            style="background-image: url({{ asset('img/story/story-2.jpg') }});"></div>
                        <div class="right-side-top" alt=""
                            style="background-image: url({{ asset('img/story/story-3.jpg') }});">
                        </div>
                        <div class="right-side-bottom" alt=""
                            style="background-image: url({{ asset('img/story/story-4.jpg') }});">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/story/story-5.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <!-- 點點進度條 -->
        <div class="pagination-box">
            <div class="swiper-pagination"></div>
        </div>

        <!-- 主要源頁面 -->
        <div class="container">
            <div class="s-intro">
                <p>
                    有人說，人生就像是一場旅行，<br>
                    旅途中所有<span>「無期而遇」</span>的美好，串起了我們的一生。<br>
                    <br>
                    而在炙熱的沙漠中，意外現身的一片 森林，<br>
                    『 <span>森．五七行館</span> 』之名便由此而生。
                </p>
            </div>

            <div class="s-text">
                <div class="s-text-left">
                    <div class="t-1">
                        <p>
                            在森．五七，每一天都值得期待。<br>
                            <br>
                            早晨過後，大冠鷲嘹亮悠遠的鳴聲，充滿了湛藍的天空，<br>
                            碩大的身影滑翔於天際，「忽悠、忽悠」地彼此呼喚，<br>
                            並巡視著地面富饒的生態系中，天然豐沛的食物蹤跡；<br>
                            當牠們乘著熱氣流升起，盤旋於行館上空時，<br>
                            上揚的雙翼，為天空勾勒起一個大微笑，也悄悄牽動你的嘴角…<br>
                        </p>

                    </div>
                    <div class="t-2">
                        <p>
                            停駐庭園一角的烏頭翁，是獨屬台灣花東及恆春半島的特有種，<br>
                            白色臉頰留著八字鬍，點上兩顆橘紅的美人痣，與你一同享受陽光；<br>
                            迎面有風吹來，靜靜傾聽，就知道海洋在不遠處；<br>
                            搖擺的稻浪使你嗅到天晴，腳下柔軟的綠草，蘊藏土地溫暖的能量；<br>
                            大自然的氣息使你分外安心，在南台灣炙熱燦爛的異地，<br>
                            你聽見了微小溫柔的召喚，找到心靈深處再熟悉不過的寧靜美好。<br>
                        </p>
                    </div>
                    <div class="t-3">
                        <p>
                            熱愛生態攝影的民宿主人，名字裡有個「森」，<br>
                            似乎早預見了他喜愛與大自然為伍的性格，<br>
                            森哥以妻子的生日「五月七日」，將人生中的摯愛與夢想結合，<br>
                            在墾丁國家公園區裡的一方靜謐角落，安頓一個家，<br>
                            在線條俐落的現代清水模質感裡，牽手展開新的旅程，<br>
                            用心當主人，邀請各地的家人，回到這個溫暖的地方，<br>
                            森五七，因此而生。<br>
                        </p>

                    </div>

                </div>
                <div class="s-text-right">
                    <div class="s-word">
                        <img src="{{ asset('img/story/calligraphy-story.svg') }}" alt="">
                    </div>
                    <div class="s-word-en">
                        <span>Story</span>
                    </div>
                </div>
            </div>

        </div>
    </main>

       <!-- Messenger 洽談外掛程式 Code -->
   <div id="fb-root"></div>

   <!-- Your 洽談外掛程式 code -->
   <div id="fb-customer-chat" class="fb-customerchat">
   </div>

   <script>
     var chatbox = document.getElementById('fb-customer-chat');
     chatbox.setAttribute("page_id", "148570588837035");
     chatbox.setAttribute("attribution", "biz_inbox");
   </script>

   <!-- Your SDK code -->
   <script>
     window.fbAsyncInit = function() {
       FB.init({
         xfbml            : true,
         version          : 'v15.0'
       });
     };

     (function(d, s, id) {
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) return;
       js = d.createElement(s); js.id = id;
       js.src = 'https://connect.facebook.net/zh_TW/sdk/xfbml.customerchat.js';
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
   </script>

@endsection

@section('js')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/story.js') }}"></script>
@endsection

