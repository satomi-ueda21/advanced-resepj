<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('css/detail.css')}}">

  <title>Rese</title>
</head>
<body>
  <x-master>
      <main>
        @section('contents')
        <div class="container">
          <div class="detail">
            <div class="detail-box">
              <button class="detail-back" onclick="location.href='http://127.0.0.1:8000/'"><</button>
              <h2 class="detail-title">仙人</h2>
            </div>
            <div class="detail-info">
              <img class="detail-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="">
                <p class="detail-text">＃東京都 ＃寿司</p>
              <div class="detail-note">
                料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日のお食事、ビジネス接待まで気軽に使用することができます。
              </div>
            </div>
          </div>
          <div class="reseve-info">
            <div class="reseve-box">
              <h2 class="reseve-title">予約</h2>
              <div class="reseve-group">
                <input type="date" value="2021-04-01" class="reseve-date">
                <input type="time" value="17:00" class="reseve-time">
                <input type="number" list="data1" class="reseve-num">
                  <datalist id="data1">
                    <option value="1人"></option>
                    <option value="2人"></option>
                    <option value="3人"></option>
                  </datalist>
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
            <a href="http://127.0.0.1:8000/done" class="reseve-buta"><p class="reseve-but">予約する</p></a>
          </div>
        </div>
      </div>
       @endsection
      </main>
    </x-master>
</body>
</html>