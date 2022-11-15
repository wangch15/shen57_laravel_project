 <!-- 頁腳 -->
   <footer>
      <div id="footer">
         <div class="footer-nav">
            <!-- 頁腳-logo -->
            <div class="footer-logo">
               <a href="/home"><img src="{{asset('/img/footer/footer-logo.svg')}}" alt="屏東-恆春民宿-森五七行館"></a>
            </div>
            <!-- 頁腳-選單盒子 -->
            <div class="footer-menu">
               <!-- 頁腳-分頁欄 -->
               <ul>
                  <a href="/news"><li >訊 News</li></a>
                  <button type="button" class="rooms-boxbtn" onclick="openrooms()"><li >宿 Rooms</li></button>
                  <a href="/booking"><li >訂 Booking</li></a>
                  <a href="/story"><li >源 Story</li></a>
                  <a href="/location"><li id="footer-menu-lastli">行 Location</li></a>
               </ul>
               <!-- 頁腳-聯絡資訊 -->
               <div class="footer-contact">
                  <div class="footer-text">
                     <p>屏東縣恆春鎮大光里砂尾路68-2號</p><span>|</span><p>(08) 886-7658 / 0961-333-857</p><span>|</span><p>shen57hostel@gmail.com</p>
                  </div>
                  <div class="footer-community">
                     <!-- LINE-QRcode按鈕 -->
                     <button type="button" class="community-line qrcode-open" onclick="openwindow()"><img src="{{asset('/img/footer/line.svg')}}" alt="屏東-恆春民宿-墾丁民宿-森五七行館-line"></button>
                        <!-- LINE-QRcode彈跳視窗 -->
                        <div class="linebox show-dialog">
                           <!-- linebox-bg 視窗內背景 -->
                           <div class="linebox-bg">
                              <img src="{{asset('/img/footer/shen57-line-link.jpg')}}" alt="">
                              <h4>透過行動條碼加入LINE好友</h4>
                              <div class="linebox-text">
                                 <p>請在LINE應用程式上開啟「好友」分頁，點選畫面右上方用來加入好友的圖示，</p>
                                 <p>接著點選「行動條碼」，然後掃描此行動條碼。</p>
                              </div>
                              <h5>透過LINE ID新增LINE好友：shen57hostel</h5>
                              <button type="button" class="qrcode-close" onclick="closewindow()">關閉視窗</button>
                           </div>
                        </div>
                     <a href="https://www.instagram.com/shen57hostel/" target="_blank"><img src="{{asset('/img/footer/instagram.svg')}}" alt="屏東-恆春民宿-墾丁民宿-森五七行館-instagram"></a>
                     <a href="https://www.facebook.com/shen57hostel2016" target="_blank"><img src="{{asset('/img/footer/facebook.svg')}}" alt="屏東-恆春民宿-墾丁民宿-森五七行館-facebook"></a>
                  </div>
               </div>
            </div>
         </div>
         <!-- 分隔線 -->
         <div id="footer-line"></div>
         <!-- 頁腳-copyright -->
         <div class="footer-copyright">
            <span>Copyright © 2022, Shen57 Hostel , All Rights Reserved.</span>
            <span>Website designed by FiveMinusOne & DreamCenter</span>
         </div>
      </div>
   </footer>
