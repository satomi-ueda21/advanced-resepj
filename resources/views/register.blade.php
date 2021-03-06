<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/register.css')}}">

  <title>Rese</title>
</head>
<body>
  <x-master>
      <main>
        @section('contents')
        <div class="container is-fluid">
          <div class="card">
            <p class="login-bar">Register</p>
            <form action="{{route('register')}}" method="POST" class="form-box">
              @csrf
              @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
              <div class="user-box">
                <input type="text" class="user-bar" placeholder="Username" name="name">
              </div>
              <div class="mail-box">
                <input type="email" class="mail-bar" placeholder="Email" name="email">
              </div>
              <div class="pass-box">
                <input type="password" class="pass-bar" placeholder="Password" name="password">
              </div>
              <button class="li-btn button is-info" type="submit">登録</button>
            </form>
          </div>
        </div>
        @endsection
      </main>
    </x-master>
</body>
</html>