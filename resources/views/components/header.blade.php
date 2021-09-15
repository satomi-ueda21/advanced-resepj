<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
    @if (app('env')=='production')
    <link rel="stylesheet" href="{{secure_asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{secure_asset('css/header.css')}}">
    @else
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    @endif
</head>
<header>
    <div class="header-flex">
        <div class="header-left">
            <a href="{{url('/')}}"><img class="logo image is-inline-block" src="{{asset('img/logo.png')}}" alt=""></a>
            <a href="{{url('/')}}"><h1 class="header-title">Rese</h1></a>
        </div>
        <div class="header-right">
            <a href="{{url('/')}}"><img class="home-btn" src="{{asset('img/house1.png')}}" alt=""></a>
            @if (Route::has('login'))
                @auth
                    <button class="mypage-btn button is-small is-rounded" onclick="location.href='{{url('/mypage')}}'">マイページ</button>
                    <form action="{{route('logout')}}" method="POST">
                    @csrf
                        <button class="logout-btn button is-small is-rounded">ログアウト</button>
                    </form>
            @else
                    <button class="login-btn button is-small is-rounded" onclick="location.href='{{url('/login')}}'">ログイン</button>
                @if (Route::has('register'))
                        <button class="register-btn button is-small is-rounded" onclick="location.href='{{url('/register')}}'">会員登録</button>
                @endif
                @endauth
            @endif
        </div>
    </div>
</header>
