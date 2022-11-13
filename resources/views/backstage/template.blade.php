<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>

    @yield('css')

    <link rel="stylesheet" href="{{asset('/css/backstage/nav.css')}}">
    {{-- favicon --}}
    <link rel="icon" type="image/svg" href="{{ asset('/img/index/shen57-favicon.svg') }}"
        media="(prefers-color-scheme: light)">
    <link rel="icon" type="image/svg" href="{{ asset('/img/index/shen57-favicon-w.svg') }}"
        media="(prefers-color-scheme: dark)">
</head>

<body>
    <nav class="nav">
        <ul>
            <li class="ul-title">最新消息管理
                <ul>
                    <li class="li-title">主要消息
                        <ul>
                            <a href="/admin/main-news-list">
                                <li class="li-link">管理列表</li>
                            </a>
                            <a href="/admin/add-main-news">
                                <li class="li-link">新增消息</li>
                            </a>
                        </ul>
                    </li>
                    <li class="li-title">一般消息
                        <ul>
                            <a href="/admin/news-list">
                                <li class="li-link">管理列表</li>
                            </a>
                            <a href="/admin/add-news">
                                <li class="li-link">新增消息</li>
                            </a>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="logOut">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit">登出</button>
            </form>
        </div>
    </nav>
    @yield('main')
    @yield('js')
</body>

</html>
