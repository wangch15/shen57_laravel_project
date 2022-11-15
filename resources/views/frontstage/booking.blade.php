@extends('frontstage.template')

@section('meta')
<meta property="og:url" content="https://wangch15.github.io/shen57web/booking">
<meta property="og:image" content="https://wangch15.github.io/shen57web/img/index/banner.jpg">
<meta property="og:description" content="訂房流程、注意事項、訂房須知、退訂說明">
<meta property="og:title" content="森五七行館 / 訂房須知">
<meta name="description" content="墾丁民宿、四人包棟、屏東住宿 - 訂房流程、注意事項、訂房須知、退訂說明"/>

@endsection

@section('title')
森五七行館 - 訂 Booking
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('/css/booking.css')}}">
@endsection


@section('main')
    <main id="booking">
        <!-- 訂-預約 -->
        <div class="b-reserve">
            <!-- 訂-流程區塊 -->
            <div class="b-step">
                <div class="b-step-card">
                    <div class="b-step-bg-left">
                        <div class="b-step-left-box">
                            <img src="{{asset('/img/booking/booking--01-icon.svg')}}" alt="屏東-恆春民宿-墾丁民宿-森五七行館-來電預約">
                            <!-- 訂-流程-內容 -->
                            <div class="b-step-content">
                                <div>
                                    <!-- 訂-流程-來電預約 -->
                                    <h4>來電預約</h4>
                                    <div id="b-step-contact">
                                        <div class="b-step-contact-name">
                                            <div>
                                                <span>電話預約</span>
                                            </div>
                                            <div>
                                                <span>Line ID</span>
                                            </div>
                                            <div>
                                                <span>Facebook</span>
                                            </div>
                                        </div>
                                        <div class="b-step-contact-message">
                                            <div>
                                                <span>0961-333-857</span>
                                            </div>
                                            <div class="message-line">
                                                <span>
                                                    shen57hostel
                                                </span>
                                                <div>
                                                    <button class="community-line qr-open" onclick="openwindow()"><img src="{{asset('/img/booking/line-white.svg')}}"
                                                            alt="屏東-恆春民宿-墾丁民宿-森五七行館-line"></button>
                                                </div>
                                            </div>
                                            <div class="message-facebook">
                                                <span><a href="htts://zh-tw.facebook.com/shen57hostel2016/"
                                                        target="_blank">森˙五七行館</a></span>
                                                <div class="message-facebook-triangle">
                                                    <img src="{{asset('/img/booking/triangle-white-right.svg')}}" alt="屏東-恆春民宿-森五七行館">
                                                    <img src="{{asset('/img/booking/triangle-white-right.svg')}}" alt="屏東-恆春民宿-森五七行館">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b-step-contact-time">
                                    <span>訂房時間</span><span>每日9:00am-9:00pm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="b-step-card">
                    <div class="b-step-bg-middle">
                        <div class="b-step-middle-box">
                            <img src="{{asset('/img/booking/booking--02-icon.svg')}}" alt="屏東-恆春民宿-墾丁民宿-森五七行館-確認資訊">
                            <!-- 訂-流程-內容 -->
                            <div class="b-step-content">
                                <!-- 訂-流程-內容-確認資訊 -->
                                <div>
                                    <h4>確認資訊</h4>
                                    <p class="step-content-text">確認入住日期、房型有無空缺<br>經確認資料後，請再進行匯訂</p>
                                </div>
                                <div class="b-step-check">
                                    <p>【匯款帳號】</p>
                                    <p>台北富邦台中分行 012</p>
                                    <p>戶名 / 洪秀慧</p>
                                    <p>帳號 / 707168 761577</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="b-step-card">
                    <div class="b-step-bg-right">
                        <div class="b-step-right-box">
                            <img src="{{asset('/img/booking/booking--03-icon.svg')}}" alt="屏東-恆春民宿-墾丁民宿-森五七行館-訂金付款">
                            <!-- 訂-流程-內容 -->
                            <div class="b-step-content">
                                <!-- 訂-流程-內容-訂金付款 -->
                                <div>
                                    <h4>訂金付款</h4>
                                    <p class="step-content-text">3日內匯30%訂金至指定帳戶<br>餘額於當天CHECK IN時付現</p>
                                </div>
                                <div class="b-step-deposit">
                                    <p>務必來電告知</p>
                                    <p>匯款金額及帳戶後五碼</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 訂-注意事項 -->
            <div class="b-precautions">
                <h4>【注意事項】</h4>
                <ol>
                    <li>3天內未預付訂金則恕不保留原預訂房間，亦不另行通知取消訂房。</li>
                    <li>訂金收取標準：訂金為總房價之30%。(遇農曆過年、特殊節日或連續假日例外，以現場公告為主)</li>
                    <li>更改訂房：入住日前3天內（不包含入住當天），恕不接受更改住宿日期、房間數。</li>
                    <li>單筆訂房欲延期僅限1次，保留訂金期限為6個月，選擇保留訂金之訂房恕不再接受改為退款。若未能於期限內擇期入住，視同放棄住宿權利，恕不再退還訂金。</li>
                </ol>
            </div>
        </div>
        <!-- 訂-訂房須知(頁籤) -->
        <div class="b-tabs">
            <input type="radio" class="b-tabs-radio" name="tabs-1" id="b-tabs-1" checked>
            <label for="b-tabs-1" class="b-tabs-label">訂房須知</label>
            <div class="b-tabs-content">
                <span>【入住與退房】</span>
                <ol>
                    <li>
                        <p>入住( check in )時間 15:00 ~ 20:30</p>
                        <p>辦理登記時，請出示證件</p>
                        <p>非規定時間入住，敬請來電告知</p>
                    </li>
                    <li>
                        <p>退房( check out )時間 11:00 前</p>
                        <p>延後退房費用為 1000元 / 小時</p>
                    </li>
                </ol>
                <span>【禁止事項】</span>
                <ol>
                    <li>室內禁煙，如有需要請至戶外。</li>
                    <li>禁止攜帶寵物入住，違者強制退房不退費。</li>
                    <li>嚴禁煙火，國家公園內不可燃放沖天炮、煙火等。</li>
                    <li>晚間10點後請降低音量，維護居住品質，共享美好寧靜的休憩環境。</li>
                    <li>禁止破壞或偷盜，行館內部設施、裝飾及毛巾、浴巾等，若有短少或損壞，需照價賠償。</li>
                    <li>嚴禁違反善良風俗之行為，請勿大聲喧嘩、飲酒、轟趴等，違者經勸導無效，則強制退房不退費。</li>
                </ol>
                <span>【補充事項】</span>
                <ol>
                    <li>貴重物品 請自行保管，行館不負保管責任，貴重財物 建議隨身攜帶。</li>
                    <li>隨手關閉電源，響應節能減碳，離開房間時請關閉空調等電器電源。</li>
                    <li>若需 旅遊 或 其他相關資訊 及 服務 請告訴我們。</li>
                    <li>
                        <p>民宿 各物品、裝飾配件及毛巾、浴巾請勿攜回，如有短少者，需原費收費；</p>
                        <p>若有需求要帶回，請洽管家以貴賓價購買，毛巾每條 100 元，浴巾每條 200 元。</p>
                    </li>
                    <li>
                        <p>本行館為合法登記民宿，敬請遵守相關法規</p>
                        <p>交通部觀光局「民宿管理辦法」第二十九條：</p>
                        <ol class="b-tabs-subol">
                            <li>有危害國家安全之嫌疑者。</li>
                            <li>攜帶槍械、危險物品或其他違禁物品者。</li>
                            <li>施用煙毒或其他麻醉藥品者。</li>
                            <li>有自殺跡象或死亡者。</li>
                            <li>有喧嘩、聚賭或其他妨害公眾安寧、公共秩序及善良風俗之行為者。</li>
                            <li>未攜帶身分證明文件或拒絕住宿登記而強行住宿者。</li>
                            <li>有公共危險之虞或其他犯罪嫌疑者。</li>
                        </ol>
                    </li>
                </ol>
            </div>
            <input type="radio" class="b-tabs-radio" name="tabs-1" id="b-tabs-2">
            <label for="b-tabs-2" class="b-tabs-label">退訂說明</label>
            <div class="b-tabs-content">
                <ol>
                    <li>
                        <p>欲取消訂房請務必來電告知，根據交通部觀光局定型化契約標準，取消規範如下：</p>
                        <ol class="b-tabs-subol">
                            <li>旅客於預定住宿日14日前取消者，民宿退還已付訂金100%。</li>
                            <li>旅客於預定住宿日10-13日前取消者，民宿退還已付訂金70%。</li>
                            <li>旅客於預定住宿日7-9日前取消者，民宿退還已付訂金50%。</li>
                            <li>旅客於預定住宿日4-6日前取消者，民宿退還已付訂金40%。</li>
                            <li>旅客於預定住宿日2-3日前取消者，民宿退還已付訂金30%。</li>
                            <li>旅客於預定住宿日1日前取消者，民宿退還已付訂金20%。</li>
                            <li>旅客於預定住宿日當日取消者，已付訂金全部不得請求退還。</li>
                        </ol>
                    </li>
                    <li>備註：<br>住房當日若逢颱風或地震等不可抗力因素，依中央氣象局針對 恆春地區 或 旅客居住地
                        發佈陸上颱風警報、地震、天災等不可抗拒因素無法前往，可選擇保留訂金(6個月)或退還訂金全額。凡退款則須酌收NT$ 30元手續費，扣除後餘額再行退還。</li>
                </ol>
            </div>
        </div>
        <!-- 訂-其他房型 -->
        <div class="b-rooms">
            <a href="/room5" class="b-rooms-shen5">
                <div class="b-rooms-shen-text">
                    <div class="b-rooms-shen-text-top">
                        <span>參考其他房型</span>
                        <span>森5 / 時尚館</span>
                    </div>
                    <div class="b-rooms-shen-text-bottom">
                        <span>本房型為 <b>獨棟別墅</b> ， <br>室內坪數 <b>50</b> 坪，室外約 <b>150</b> 坪</span>
                        <div class="b-shen-left-arrow"></div>
                    </div>
                </div>
            </a>
            <a href="/room7" class="b-rooms-shen7">
                <div class="b-rooms-shen-text">
                    <div class="b-rooms-shen-text-top">
                        <span>參考其他房型</span>
                        <span>森7 / 和風館</span>
                    </div>
                    <div class="b-rooms-shen-text-bottom">
                        <span>本房型為 <b>獨棟別墅</b> ， <br>室內坪數 <b>50</b> 坪，室外約 <b>150</b> 坪</span>
                        <div class="b-shen-right-arrow"></div>
                    </div>
                </div>
            </a>
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
