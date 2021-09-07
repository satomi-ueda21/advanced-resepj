<head>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
</head>
<header>
    <div class="header-flex">
        <div class="header-left">
            <a href="{{url('/')}}"><img class="logo" src="{{asset('img/logo.png')}}" alt=""></a>
            <a href="{{url('/')}}"><h1 class="header-title">Rese</h1></a>
        </div>
        <div class="header-right">
            <a href="{{url('/')}}"><img class="home-btn" src="{{asset('img/house1.png')}}" alt=""></a>
            @if (Route::has('login'))
                @auth
                    <button class="mypage-btn" onclick="location.href='{{url('/mypage')}}'">マイページ</button>
                    <form action="{{route('logout')}}" method="POST">
                    @csrf
                        <button class="logout-btn">ログアウト</button>
                    </form>
            @else
                    <button class="login-btn" onclick="location.href='{{url('/login')}}'">ログイン</button>
                @if (Route::has('register'))
                        <button class="register-btn" onclick="location.href='{{url('/register')}}'">会員登録</button>
                @endif
                @endauth
            @endif
        </div>
    </div>
</header>

{{-- <style>
    .header-flex{
        display: flex;
        height: 55px;
        align-items: center;
        background-color: #6ef3d6;
    }

    .logo{
        width: 50px;
        margin-left: 8%;
    }

    .header-title{
        font-family: Helvetica , "Meiryo", sans-serif;
        font-weight: bold;
        color:#3560f6;
        font-size: 32px;
        margin-left: 30px;
    }

    a{text-decoration: none;}
</style> --}}