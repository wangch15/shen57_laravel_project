<!DOCTYPE html>
<html lang="zh-tw">

<head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KCXC8NV7YX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-KCXC8NV7YX');
    </script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    {{-- meta --}}
    @yield('meta')
    {{-- title --}}
    <title>
        @yield('title')
    </title>
    {{-- 全部模板用CSS --}}
    <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
    {{-- 個別CSS --}}
    @yield('css')
    {{-- favicon --}}
    <link rel="icon" type="image/svg" href="{{ asset('/img/index/shen57-favicon.svg') }}"
        media="(prefers-color-scheme: light)">
    <link rel="icon" type="image/svg" href="{{ asset('/img/index/shen57-favicon-w.svg') }}"
        media="(prefers-color-scheme: dark)">
</head>

<body>
    {{-- header引入 --}}
    @include('frontstage.navbar')

    @yield('main')

    {{-- footer 引入 --}}
    @include('frontstage.footer')

    {{-- 大家都有的js --}}
    <script src="{{ asset('/js/hambtn.js') }}"></script>
    <script src="{{ asset('/js/line.js') }}"></script>
    {{-- js --}}
    @yield('js')

    {{-- 偵測視窗尺寸 --}}
    <?php
    use App\Models\Screensizes;
    if (!isset($_COOKIE['screen_resolution'])) {
        echo '<script type="text/javascript">width = screen.width; height=screen.height; document.cookie="screen_resolution="+width+"X"+height;document.cookie="screen_id="+Math.random().toString(36).substring(0,15).substr(2);</script>';
    } else {
        //Since Cookie is found so get the screen resolution from  this cookie
        $screen_id = $_COOKIE['screen_id'];
        $screen_size = $_COOKIE['screen_resolution'];

        $data = Screensizes::where('screenid', $screen_id)->get();
        $dataCount = count($data);

        if ($dataCount == 0) {
            $screen_size = explode('X', $screen_size);
            $screen_width = $screen_size[0];
            $screen_height = $screen_size[1];
            $screensize = $screen_width . 'x' . $screen_height;
            $result = Screensizes::create([
                'size' => $screensize,
                'screenid' => $screen_id,
            ]);
        }
    }
    ?>

</body>

</html>
