<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>森五七網頁管理系統</title>
    <link rel="stylesheet" href="{{asset('/css/login.css')}}">
</head>
<body>
    <main id="login">
        <section class="login-area">
            <div class="logobox">
                <svg id="圖層_1" data-name="圖層 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100.1 100"><defs><style>.cls-1{fill:#25282b;}</style></defs><path class="cls-1" d="M84,21.6a1.4,1.4,0,0,0-1.4-1.4H51.5V13.5a1.4,1.4,0,1,0-2.8,0v6.7H17.6a1.4,1.4,0,0,0,0,2.8h29L32.8,36.9h0L16.6,53.1a1.4,1.4,0,0,0-.3,1.5,1.4,1.4,0,0,0,1.3.9H30.4L16.6,69.3a1.4,1.4,0,0,0,2,2L32.4,57.6v29a1.7,1.7,0,0,0,.9,1.3h.6a2.1,2.1,0,0,0,1-.4L50.1,72.3,65.3,87.6a2.1,2.1,0,0,0,1,.4h.6a1.7,1.7,0,0,0,.9-1.3V57.5L81.6,71.3a1.4,1.4,0,0,0,2-2L69.8,55.5H82.6a1.4,1.4,0,0,0,1.3-.9,1.4,1.4,0,0,0-.3-1.5L53.6,23h29A1.4,1.4,0,0,0,84,21.6Zm-48.7,31V38.5L48.7,25V52.6Zm27.6,2.9L50.1,68.3,37.3,55.5ZM51.5,52.6V25L64.9,38.4V52.6ZM32.4,41.3V52.6H21.1Zm2.9,41.8V57.5L48.1,70.3ZM52.1,70.3,64.9,57.5V83.1ZM67.8,52.6V41.3L79.1,52.6Z"/><path class="cls-1" d="M50.1,0a50,50,0,1,0,50,50A50,50,0,0,0,50.1,0Zm0,97.8A47.8,47.8,0,1,1,97.9,50,47.8,47.8,0,0,1,50.1,97.8Z"/></svg>
                <h4>森五七行館</h4>
            </div>
            <form class="formbox" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="inputbox">
                        <input type="text" placeholder="請輸入帳號" name="email">
                        <input type="password" placeholder="請輸入密碼" name="password">
                </div>
                <div class="btnbox">
                    <input type="submit" value="登入" class="submitBtn">
                </div>
            </form>
        </section>
    </main>
</body>
</html>
