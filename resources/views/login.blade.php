<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('css/login.css')}}">

  <title>Rese</title>
</head>
<body>
  <x-master>
      <main>
        @section('contents')
        <div class="container">
          <div class="card">
            <p class="login-bar">Login</p>
            <form action="{{route('login')}}" method="POST" class="form-box">
              @csrf
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{$error}}</li>
                    @endforeach

                    @if (session('loguin_error'))
                        <div class="alert-danger">
                          {{session('loguin_error')}}
                        </div>
                    @endif

                    @if (session('logout'))
                        <div class="alert-danger">
                          {{session('logout')}}
                        </div>
                    @endif
                  </ul>
                </div>
              @endif
              <div class="mail-box">
                <input type="email" class="mail-bar" name="email" placeholder="Email">
              </div>
              <div class="pass-box">
                <input type="password" class="pass-bar" name="password" placeholder="Password">
              </div>
              <button class="li-btn" type="submit">ログイン</button>
            </form>
          </div>
        </div>
        @endsection
      </main>
    </x-master>
</body>
</html>