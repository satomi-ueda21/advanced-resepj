<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/thanks.css')}}">

  <title>Rese</title>
</head>
<body>
  <x-master>
      <main>
        @section('contents')
        <div class="container is-fluid">
          <div class="card">
            <p class="title is-4">会員登録ありがとうございます</p>
            <button class="li-btn button is-info" onclick="location.href='{{route('login')}}'">ログインする</button>
          </div>
        </div>
        @endsection
      </main>
    </x-master>
</body>
</html>