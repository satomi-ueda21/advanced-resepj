<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
  @if (app('env')=='production')
  <link rel="stylesheet" href="{{secure_asset('css/home.css')}}">
  @else
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
          // dd(session('search')['area']);
      @endphp
      <div class="contain">
        <div class="search">
            <form action="{{url('/')}}" method="get">
              @csrf
              <select name="area" class="search-area" >
                <option>All area</option>
                <option value="13" <?php if ( session('search')['area'] == 13 ) { echo ( 'selected' ); } ?>>東京都</option>
                <option value="27" <?php if ( session('search')['area'] == 27 ) { echo ( 'selected' ); } ?>>大阪府</option>
                <option value="40" <?php if ( session('search')['area'] == 40 ) { echo ( 'selected' ); } ?>>福岡県</option>
              </select><!----
          -----><select name="genre" class="search-genre" >
                  <option>All genre</option>
                  <option value="1" <?php if ( session('search')['genre'] == 1 ) { echo ( 'selected' ); } ?>>寿司</option>
                  <option value="2" <?php if ( session('search')['genre'] == 2 ) { echo ( 'selected' ); } ?>>焼肉</option>
                  <option value="3" <?php if ( session('search')['genre'] == 3 ) { echo ( 'selected' ); } ?>>居酒屋</option>
                  <option value="4" <?php if ( session('search')['genre'] == 4 ) { echo ( 'selected' ); } ?>>イタリアン</option>
                  <option value="5" <?php if ( session('search')['genre'] == 5 ) { echo ( 'selected' ); } ?>>ラーメン</option>
                </select><!----
        -----><input type="search" class="search-box" name="keyword" value="<?php if ( ! empty( session('search')['keyword'] ) ) { echo ( session('search')['keyword']  ); } ?>"><!---
          ---><input type="submit" class="submit-btn" value="&#xf002">
            </form>
        </div>
        <div class="favorite">
            @foreach ($items as $item)
            <div class="card">
              <img class="card-img" src="{{$item->url}}" alt="">
              <div class="card-contents">
                <p class="card-title">{{$item->name}}</p>
                <p class="card-text">＃{{$item->area->name}} ＃{{$item->genre->name}}</p>
              </div>
              <div class="card-link">
                <button class="shop-detail button is-info" onclick="location.href='{{route('detail',$item->id)}}'">詳しくみる</button>
                <div class="fav-button">
                  @if ($favorites[$loop->iteration]==1)
                    <a href="{{route('fav_off',$item->id)}}"><img src="{{asset('img/heart-pink.png')}}" alt="お気に入り削除" class="heart image is-inline-block"></a>
                  @else
                    <a href="{{route('fav_on',$item->id)}}"><img src="{{asset('img/heart-gray.png')}}" alt="お気に入り追加" class="heart image is-inline-block"></a>
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