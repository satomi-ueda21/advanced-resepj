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
            <p class="title is-4">ご予約ありがとうございます</p>
            <button type="button is-info" class="li-btn" onclick="history.back()">戻る</button>
          </div>
        </div>
        @endsection
      </main>
    </x-master>
</body>
</html>