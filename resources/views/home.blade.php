<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('css/home.css')}}">

  <title>Rese</title>
</head>
<body>
  <x-master>
      <main>
        @section('contents')
        <div class="container">
          <div class="search">
            <form action="http://www.google.co.jp/search" method="get">
              <input type="search" name="search" value="All area" class="search-area">
              <input type="search" name="search" value="All genre" class="search-genre">
              <input type="search" name="search" placeholder="Search" class="search-key">
            </form>
          </div>
          <div class="favorite">
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
            <div class="card">
              <img class="card-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg" alt="">
              <div class="card-content">
                <p class="card-title">戦慄</p>
                <p class="card-text">＃福岡県 ＃居酒屋</p>
              </div>
              <div class="card-link">
                <button class="shop-detail">詳しくみる</button>
                <button class="favorite-btn">♡</button>
              </div>
            </div>
            <div class="card">
              <img class="card-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg" alt="">
              <div class="card-content">
                <p class="card-title">ルーク</p>
                <p class="card-text">＃東京都 ＃イタリアン</p>
              </div>
              <div class="card-link">
                <button class="shop-detail">詳しくみる</button>
                <button class="favorite-btn">♡</button>
              </div>
            </div>
            <div class="card">
              <img class="card-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg" alt="">
              <div class="card-content">
                <p class="card-title">志摩屋</p>
                <p class="card-text">＃福岡県 ＃ラーメン</p>
              </div>
              <div class="card-link">
                <button class="shop-detail">詳しくみる</button>
                <button class="favorite-btn">♡</button>
              </div>
            </div>
            <div class="card">
              <img class="card-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" alt="">
              <div class="card-content">
                <p class="card-title">香</p>
                <p class="card-text">＃東京都 ＃焼肉</p>
              </div>
              <div class="card-link">
                <button class="shop-detail">詳しくみる</button>
                <button class="favorite-btn">♡</button>
              </div>
            </div>
            <div class="card">
              <img class="card-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg" alt="">
              <div class="card-content">
                <p class="card-title">JJ</p>
                <p class="card-text">＃大阪府 ＃イタリアン</p>
              </div>
              <div class="card-link">
                <button class="shop-detail">詳しくみる</button>
                <button class="favorite-btn">♡</button>
              </div>
            </div>
            <div class="card">
              <img class="card-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg" alt="">
              <div class="card-content">
                <p class="card-title">らーめん極み</p>
                <p class="card-text">＃東京都 ＃ラーメン</p>
              </div>
              <div class="card-link">
                <button class="shop-detail">詳しくみる</button>
                <button class="favorite-btn">♡</button>
              </div>
            </div>
            <div class="card">
              <img class="card-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg" alt="">
              <div class="card-content">
                <p class="card-title">鳥雨</p>
                <p class="card-text">＃大阪府 ＃居酒屋</p>
              </div>
              <div class="card-link">
                <button class="shop-detail">詳しくみる</button>
                <button class="favorite-btn">♡</button>
              </div>
            </div>
            <div class="card">
              <img class="card-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="">
              <div class="card-content">
                <p class="card-title">築地色合</p>
                <p class="card-text">＃東京都 ＃寿司</p>
              </div>
              <div class="card-link">
                <button class="shop-detail">詳しくみる</button>
                <button class="favorite-btn">♡</button>
              </div>
            </div>
            <div class="card">
              <img class="card-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" alt="">
              <div class="card-content">
                <p class="card-title">晴海</p>
                <p class="card-text">＃大阪府 ＃焼肉</p>
              </div>
              <div class="card-link">
                <button class="shop-detail">詳しくみる</button>
                <button class="favorite-btn">♡</button>
              </div>
            </div>
            <div class="card">
              <img class="card-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" alt="">
              <div class="card-content">
                <p class="card-title">三子</p>
                <p class="card-text">＃福岡県 ＃焼肉</p>
              </div>
              <div class="card-link">
                <button class="shop-detail">詳しくみる</button>
                <button class="favorite-btn">♡</button>
              </div>
            </div>
            <div class="card">
              <img class="card-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg" alt="">
              <div class="card-content">
                <p class="card-title">八戒</p>
                <p class="card-text">＃東京都 ＃居酒屋</p>
              </div>
              <div class="card-link">
                <button class="shop-detail">詳しくみる</button>
                <button class="favorite-btn">♡</button>
              </div>
            </div>
            <div class="card">
              <img class="card-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="">
              <div class="card-content">
                <p class="card-title">福助</p>
                <p class="card-text">＃大阪府 ＃寿司</p>
              </div>
              <div class="card-link">
                <button class="shop-detail">詳しくみる</button>
                <button class="favorite-btn">♡</button>
              </div>
            </div>
            <div class="card">
              <img class="card-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg" alt="">
              <div class="card-content">
                <p class="card-title">ラー北</p>
                <p class="card-text">#ラーメン</p>
              </div>
              <div class="card-link">
                <button class="shop-detail">詳しくみる</button>
                <button class="favorite-btn">♡</button>
              </div>
            </div>
            <div class="card">
              <img class="card-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg" alt="">
              <div class="card-content">
                <p class="card-title">翔</p>
                <p class="card-text">＃大阪府 ＃居酒屋</p>
              </div>
              <div class="card-link">
                <button class="shop-detail">詳しくみる</button>
                <button class="favorite-btn">♡</button>
              </div>
            </div>
            <div class="card">
              <img class="card-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="">
              <div class="card-content">
                <p class="card-title">経緯</p>
                <p class="card-text">＃東京都 ＃寿司</p>
              </div>
              <div class="card-link">
                <button class="shop-detail">詳しくみる</button>
                <button class="favorite-btn">♡</button>
              </div>
            </div>
            <div class="card">
              <img class="card-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" alt="">
              <div class="card-content">
                <p class="card-title">漆</p>
                <p class="card-text">＃東京都 ＃焼肉</p>
              </div>
              <div class="card-link">
                <button class="shop-detail">詳しくみる</button>
                <button class="favorite-btn">♡</button>
              </div>
            </div>
            <div class="card">
              <img class="card-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg" alt="">
              <div class="card-content">
                <p class="card-title">THE TOOL</p>
                <p class="card-text">＃福岡県 ＃イタリアン</p>
              </div>
              <div class="card-link">
                <button class="shop-detail">詳しくみる</button>
                <button class="favorite-btn">♡</button>
              </div>
            </div>
            <div class="card">
              <img class="card-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="">
              <div class="card-content">
                <p class="card-title">木船</p>
                <p class="card-text">＃大阪府 ＃寿司</p>
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