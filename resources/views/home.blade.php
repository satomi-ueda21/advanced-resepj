<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
  @if (app('env')=='production')
  <link rel="stylesheet" href="{{secure_asset('css/reset.css')}}">
  <link rel="stylesheet" href="{{secure_asset('css/home.css')}}">
  @else
  <link rel="stylesheet" href="{{asset('css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('css/home.css')}}">
  @endif
  <title>Rese</title>
</head>
<body>
  <x-master />
  @section('contents')
  @endsection
    <main>
      @php
          // dd($items);
          // dd($favorites);
          // dd($fav_counts);
      @endphp
      <div class="container">
        <div class="search">
            <form action="{{url('/')}}" method="get">
              @csrf
              <select name="area" class="search-area" >
                <option>All area</option>
                <option value="13">東京都</option>
                <option value="27">大阪府</option>
                <option value="40">福岡県</option>
              </select><!----
          -----><select name="genre" class="search-genre" >
                <option>All genre</option>
                <option value="1">寿司</option>
                <option value="2">焼肉</option>
                <option value="3">居酒屋</option>
                <option value="4">イタリアン</option>
                <option value="5">ラーメン</option>
              </select><!----
        -----><input type="search" class="search-box" name="keyword" value=""><!---
          ---><input type="submit" class="submit-btn" value="&#xf002">
            </form>
        </div>
        <div class="favorite">
            @foreach ($items as $item)
            <div class="card">
              <img class="card-img" src="{{$item->url}}" alt="">
              <div class="card-content">
                <p class="card-title">{{$item->name}}</p>
                <p class="card-text">＃{{$item->area->name}} ＃{{$item->genre->name}}</p>
              </div>
              <div class="card-link">
                <button class="shop-detail" onclick="location.href='{{route('detail',$item->id)}}'">詳しくみる</button>
                <div class="fav-button">
                  @if ($favorites[$loop->iteration]==1)
                    <a href="{{route('fav_off',$item->id)}}"><img src="{{asset('img/heart-pink.png')}}" alt="お気に入り削除" class="heart"></a>
                  @else
                    <a href="{{route('fav_on',$item->id)}}"><img src="{{asset('img/heart-gray.png')}}" alt="お気に入り追加" class="heart"></a>
                  @endif
                  <em class="fav-count">{{$fav_counts[$loop->iteration]}}</em>
                </div>
              </div>
            </div>
            @endforeach
          </div>
      </div>
    </main>
</body>
</html>