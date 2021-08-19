<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('css/mypage.css')}}">

  <title>Rese</title>
</head>
<body>
  <x-master>
      <main>
        @section('contents')
        <div class="container">
          <div class="user-box">
            <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="logout-btn">ログアウト</button>
            </form>
            @if (session('success'))
                <div class="alert-success">
                  {{session('success')}}
                </div>
            @endif
            <h1 class="user-name">{{Auth::user()->name}}さん</h1>
          </div>
          <div class="reseve-info">
            <h2 class="reseve-title">予約状況</h2>
            <div class="reseve-box">
              <div class="table-title">
                <p class="reseve-num">予約1</p>
                <button class="deleat-btn">×</button>
              </div>
              <table class="reseve-table">
                <tr>
                  <th>Shop</th>
                  <td>仙人</td>
                </tr>
                <tr>
                  <th>Date</th>
                  <td>2021-04-01</td>
                </tr>
                <tr>
                  <th>Time</th>
                  <td>17:00</td>
                </tr>
                <tr>
                  <th>Number</th>
                  <td>1人</td>
                </tr>
              </table>
            </div>
          </div>
          <div class="favorite">
            <h2 class="favorite-title">お気に入り店舗</h2>
            <div class="card">
              <img class="card-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="">
              <div class="card-content">
                <p class="card-title">仙人</p>
                <p class="card-text">＃東京都 ＃寿司</p>
              </div>
              <div class="card-link">
                <button class="shop-detail" onclick="location.href='http://127.0.0.1:8000/detail'">詳しくみる</button>
                <button class="favorite-btn">♡</button>
              </div>
            </div>
            <div class="card">
              <img class="card-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" alt="">
              <div class="card-content">
                <p class="card-title">牛助</p>
                <p class="card-text">＃大阪府 ＃焼き肉</p>
              </div>
              <div class="card-link">
                <button class="shop-detail">詳しくみる</button>
                <button class="favorite-btn">♡</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection
      </main>
    </x-master>
</body>
</html>