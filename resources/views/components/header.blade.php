<header>
    <div class="header-flex">
        <img class="logo" src="{{asset('img/logo.png')}}" alt="">
        <a href="{{url('/')}}"><h1 class="header-title">Rese</h1></a>
        @if (Route::has('login'))
            @auth
                <form action="{{route('logout')}}" method="POST">
                @csrf
                    <button class="logout-btn">ログアウト</button>
                </form>
                    <button class="home-btn" onclick="location.href='{{url('/')}}'">ホーム</button>
        @else
                <button class="login-btn" onclick="location.href='{{url('/login')}}'">ログイン</button>
            @if (Route::has('register'))
                    <button class="register-btn" onclick="location.href='{{url('/register')}}'">会員登録</button>
            @endif
            @endauth
        @endif
    </div>
</header>

<style>
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
</style>