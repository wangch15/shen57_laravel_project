@extends('frontstage.template')

@section('meta')
    <meta property="og:url" content="https://www.shen57.com/">
    <meta property="og:image" content="https://www.shen57.com/img/index/banner.jpg">
    <meta property="og:description"
        content="來自無期而遇的歸宿，它就像是走在炙熱沙漠中，意外現身的一片森林，給予驚喜和轉折；又像是在下一個轉角處，突如其來遇見的幸福，這個家不是別人，它是「森・五七行館」。">
    <meta property="og:title" content="森五七行館 / 墾丁民宿、四人包棟">
    <meta name="description" content="來自無期而遇的歸宿，它就像是走在炙熱沙漠中，意外現身的一片森林，給予驚喜和轉折；又像是在下一個轉角處，突如其來遇見的幸福，這個家不是別人，它是「森・五七行館」。"/>
@endsection

@section('title')
    森五七行館 - Shen57 hostel
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/intro.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
@endsection

@section('main')
    <!-- intro animation-->
    <!-- GRADIENT SPINNER -->
    <div id="intro" @if (Route::is('home')) class="noact" @endif>
        <div class="spinner-box">
            <div class="logo-box">
                <div class="circle-border">
                    <div class="circle-core">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 57">
                            <title>intro-shen57-logo</title>
                            <g id="圖層_1" data-name="圖層 1">
                                <path
                                    d="M50.72,8.69a1.51,1.51,0,1,0-.49-3L27.5,5.78V1.27a1.52,1.52,0,0,0-3,0V5.82L1.77,5.89a1.35,1.35,0,0,0-.49,0,1.51,1.51,0,1,0,.49,3l20.58-.06-9.54,9.53-12,12a1.5,1.5,0,0,0-.45,1.08A1.52,1.52,0,0,0,1.86,33h8.46L.82,42.44A1.47,1.47,0,0,0,.37,43.5a1.44,1.44,0,0,0,.45,1.07A1.48,1.48,0,0,0,1.89,45,1.52,1.52,0,0,0,3,44.57l9.49-9.46.1,20.39a1.5,1.5,0,0,0,.94,1.39,1.56,1.56,0,0,0,.57.11,1.49,1.49,0,0,0,1.11-.45l11-11,11,11a1.44,1.44,0,0,0,1.07.44,1.62,1.62,0,0,0,.58-.11,1.5,1.5,0,0,0,.93-1.4L39.75,35l9.56,9.43a1.45,1.45,0,0,0,1.08.44,1.43,1.43,0,0,0,1.46-1.6,1.49,1.49,0,0,0-.45-1.07l-9.55-9.42H50.3a1.54,1.54,0,0,0,1.06-.44,1.51,1.51,0,0,0,0-2.14L29.65,8.76l20.58-.07A1.35,1.35,0,0,0,50.72,8.69ZM5.52,30l6.88-6.88,0,6.86Zm41.15-.13-6.94,0,0-6.89ZM15.42,20.05,24.52,11l.06,18.93-9.12,0Zm.13,31.8L15.48,35,24,43.43ZM26.13,41.3l-8.47-8.37,16.9,0ZM36.77,51.78l-8.48-8.36L36.72,35ZM36.67,20l0,9.9-9.09,0L27.55,11Z" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="words-box">
                <img src="{{ asset('/img/intro/intro-fonts.svg') }}" alt="屏東-恆春民宿-墾丁民宿-森五七行館-logo">
                <!-- SPINNING SQUARES -->
                <div class="spinner-box2">
                    <div class="pulse-container">
                        <div class="pulse-bubble pulse-bubble-1"></div>
                        <div class="pulse-bubble pulse-bubble-2"></div>
                        <div class="pulse-bubble pulse-bubble-3"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <main id="index">
        <section class="banner">
            <nav>
                <ul class="index-menu">
                    <li><a href="/news">訊 News</a></li>
                    <li><a onclick="openrooms()">宿 Rooms</a></li>
                    <li><a href="/booking">訂 Booking</a></li>
                    <li><a href="/story">源 Story</a></li>
                    <li><a href="/location">行 Location</a></li>
                </ul>
            </nav>
            <div class="logo">
                <img src="{{ asset('/img/index/index-banner-logo4-01.svg') }}" alt="屏東-恆春民宿-墾丁民宿-森五七行館-logo">
            </div>
            <a href="#index-intro" class="scroll-btn">
                <img src="{{ asset('/img/index/scroll.svg') }}" alt="屏東-恆春民宿-墾丁民宿-森五七行館-scroll">
            </a>
        </section>

        <section class="intro" id="index-intro">
            <div class="intro-content">
                <div class="intro-top">
                    <div class="intro-en" data-aos="fade-right">Shen 57 hostel</div>
                    <div class="intro-logo" data-aos="fade-left">
                        <img src="{{ asset('/img/index/shen-logo.svg') }}" alt="屏東-恆春民宿-墾丁民宿-森五七行館-logo">
                    </div>
                </div>
                <div class="intro-text">
                    <p data-aos="fade-up" data-aos-delay="400">
                        人在一生旅程中，擁有三個家<br>
                        ​第一個家，來自原來的歸屬；<br>
                        ​第二個家，來自後來的歸處；<br>
                        ​第三個家，則是 <span>無期而遇</span> 的歸宿，​
                    </p>
                    <p data-aos="fade-up" data-aos-delay="800">
                        它就像是走在炙熱沙漠中，<br>
                        ​意外現身的一片 <span>森林</span> ，<br>
                        ​給予驚喜和轉折；​<br>
                        又像是在下一個轉角處，<br>
                        ​突如其來遇見的幸福，
                    </p>
                    <p data-aos="fade-up" data-aos-delay="1200">
                        這個家…不是別人，<br>
                        它是『 <span>森．五七行館</span> 』。​
                    </p>
                </div>
            </div>
        </section>

        <section class="rooms" id="index-rooms">
            <div class="wrap-1440">
                <div class="rooms-intro" data-aos="fade-left">
                    <div class="wrap">
                        <div class="rooms-top">
                            <div class="rooms-logo">
                                <img src="{{ asset('/img/index/rooms.svg') }}" alt="屏東-恆春民宿-墾丁民宿-森五七行館-房型介紹">
                            </div>
                            <div class="rooms-text">
                                <span>將手輕輕撫在耳邊，聆聽貝殼捎來的私密話語，</span>
                                <span>溫暖的白砂，調皮地搔弄我的腳底，</span>
                                <span>而陣陣的海風 ，引領我前往那名為「無期而遇」的美好 。</span>
                                <br><br>
                                <span>在這熱情的墾丁 ，所有的平行線開始交會 ，</span>
                                <span>儼然成了故事的下一篇章 。</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rooms-content">
                    <div class="rooms-color-bg" data-aos="fade-up" data-aos-delay="200"></div>
                    <div class="wrap">
                        <div class="rooms-list">
                            <div class="rooms-main" data-aos="fade-up" data-aos-delay="400">
                                <div class="rooms-title">森5 / 時尚館</div>
                                <div class="rooms-spec-mobile">
                                    本房型為 <span>獨棟別墅</span><br>
                                    室內坪數 <span>50</span> 坪，室外約 <span>150</span> 坪
                                </div>
                                <div class="rooms-arrow"></div>
                                <img src="{{ asset('/img/index/shen-five.jpg') }}" alt="屏東-恆春民宿-墾丁民宿-森五七行館-時尚館房型介紹">

                                <div class="rooms-hover-bg">
                                    <div class="rooms-hover">
                                        <div class="rooms-spec">
                                            本房型為 <span>獨棟別墅</span><br>
                                            室內坪數 <span>50</span> 坪，室外約 <span>150</span> 坪
                                        </div>
                                        <div class="rooms-poem">
                                            品嘗一絲和煦的暖陽<br>
                                            追逐一片星空的心動<br>
                                            這裡，有我們朝思暮想的恬靜<br>
                                            也有我們探尋期待的光景<br>
                                            我，與你，相會在大地的時尚中
                                        </div>
                                    </div>
                                </div>
                                <a href="/room5" class="rooms-link"></a>
                            </div>

                            <div class="rooms-main" data-aos="fade-up" data-aos-delay="800">
                                <div class="rooms-title">森7 / 和風館</div>
                                <div class="rooms-spec-mobile">
                                    本房型為 <span>獨棟別墅</span><br>
                                    室內坪數 <span>50</span> 坪，室外約 <span>150</span> 坪
                                </div>
                                <div class="rooms-arrow"></div>
                                <img src="{{ asset('/img/index/shen-seven.jpg') }}" alt="屏東-恆春民宿-墾丁民宿-森五七行館-和風館房型介紹">

                                <div class="rooms-hover-bg">
                                    <div class="rooms-hover">
                                        <div class="rooms-spec">
                                            本房型為 <span>獨棟別墅</span><br>
                                            室內坪數 <span>50</span> 坪，室外約 <span>150</span> 坪
                                        </div>
                                        <div class="rooms-poem">
                                            小酌一口寧靜的甘甜<br>
                                            暢快一身煩亂的憂慮<br>
                                            這裡，有我們會心一笑的幸福<br>
                                            也有我們眷戀沉溺的時光<br>
                                            我，與你，相約在原野的和風中
                                        </div>
                                    </div>
                                </div>
                                <a href="/room7" class="rooms-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="news" data-aos="fade-up">
            <div class="wrap">
                <div class="news-content-main">
                    <div class="left">
                        <div class="news-title">
                            <div class="news-title-pic">
                                <img src="{{ asset('/img/index/news.svg') }}" alt="屏東-恆春民宿-墾丁民宿-森五七行館-最新消息">
                            </div>
                            <div class="news-title-text">​最新消息•活動訊息•優惠專案</div>
                        </div>
                        <div class="news-content">
                            <div>
                                <div class="news-date">{{ $mainnews[0]->date }}</div>
                                <div class="news-name">{{ $mainnews[0]->title }}</div>
                            </div>
                            <div class="news-intro">
                                {!! $mainnews[0]->content !!}
                            </div>
                            <a href="/news" class="more-btn news-more-btn">查看更多</a>
                        </div>
                    </div>
                    <div class="news-content-pic">
                        <img src="{{ $mainnews[0]->img_path }}" alt="屏東-恆春民宿-墾丁民宿-森五七行館-主要消息">
                    </div>
                </div>
            </div>
        </section>

        <section class="story">
            <div class="story-bg" data-aos="fade-right">
                <img src="{{ asset('/img/index/index02.png') }}" alt="屏東-恆春民宿-墾丁民宿-森五七行館-起源">
            </div>
            <div class="wrap-1440" data-aos="fade-left" data-aos-delay="400">
                <div class="story-content">
                    <div class="story-title">
                        <div class="story-title-pic">
                            <img src="{{ asset('/img/index/story.svg') }}" alt="屏東-恆春民宿-墾丁民宿-森五七行館-民宿故事">
                        </div>
                        <div class="story-text">
                            <p>
                                <span>有人說，人生就像是一場旅行，</span>
                                <span>旅途中所有「<b>無期而遇</b>」的美好，</span><br>
                                <span>串起了我們的一生。</span><br><br>
                                <span>而在炙熱的沙漠中，意外現身的一片森林，</span><br>
                                <span>『 <b>森．五七行館</b> 』之名便由此而生。</span>
                            </p>
                        </div>
                        <a href="/story" class="more-btn story-more-btn">查看更多</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="location" data-aos="fade-up">
            <div class="wrap">
                <div class="location-content-main">
                    <div class="left">
                        <div class="location-title">
                            <div class="location-title-pic">
                                <img src="{{ asset('/img/index/location.svg') }}" alt="屏東-恆春民宿-墾丁民宿-森五七行館-交通指引">
                            </div>
                            <div class="location-title-text">行館資訊•交通指引</div>
                        </div>
                        <div class="location-info-main">
                            <div class="location-content">
                                <div class="location-info">
                                    <div class="info-title">行館地址</div>
                                    <div class="info-text info-text-map">
                                        946 屏東縣恆春鎮大光里砂尾路68-2號
                                        <a href="https://goo.gl/maps/bhtTUXBBiVBUe52m9" class="info-map-link"
                                            target="_blank"><span>開始</span>導航</a>
                                    </div>
                                </div>
                                <div class="location-info">
                                    <div class="info-title">聯絡電話</div>
                                    <div class="info-text">(08) 886-7658 / 0961-333-857</div>
                                </div>
                                <div class="location-info">
                                    <div class="info-title">電子信箱</div>
                                    <div class="info-text"><a
                                            href="mailto:shen57hostel@gmail.com">shen57hostel@gmail.com</a></div>
                                </div>
                                <div class="location-info">
                                    <div class="info-title">訂房時段</div>
                                    <div class="info-text">每日 09 : 00 am ~ 09 : 00 pm</div>
                                </div>
                                <div class="location-info">
                                    <div class="info-title">服　　務</div>
                                    <div class="info-text">
                                        提供優惠汽機車租賃、包車旅遊導覽服務資訊。<br>
                                        提供旅遊資訊及諮詢服務。
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="location-info-pic">
                        <img srcset="/img/index/map@1x.png 1x,/img/index/map@2x.png 2x"
                            src="{{ asset('/img/index/map@1x.png') }}" alt="屏東-恆春民宿-墾丁民宿-森五七行館-指引地圖">
                    </div>
                </div>
        </section>
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
                xfbml: true,
                version: 'v15.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/zh_TW/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
@endsection

@section('js')
    <link rel="stylesheet" href="{{ asset('js/aos/aos.css') }}">
    <script src="{{ asset('js/aos/aos.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script>
        AOS.init({
            easing: 'ease-in-out-sine',
            offset: 100,
            duration: 1000,
            once: true,
        });
    </script>
@endsection
