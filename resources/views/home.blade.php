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
  {{-- <x-master> --}}
    <main>
      <div class="container">
        <div class="search">
            <form action="http://www.google.co.jp/search" method="get">
              <input type="search" name="search" value="All area" class="search-area">
              <input type="search" name="search" value="All genre" class="search-genre">
              <input type="search" name="search" placeholder="Search" class="search-key">
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
                <button class="shop-detail" onclick="location.href='http://127.0.0.1:8000/detail/{{$item->id}}'">詳しくみる</button>
                {{-- @if ($fav_model->fav_exist(Auth::user()->id,$store_id))
                  <a href="{{route('fav_off',['id'=>$items->id])}}"><img src="{{asset('img/heart-pink.png')}}" alt="お気に入り削除" class="heart"></a>
                @else
                  <a href="{{route('fav_on',['id'=>$items->id])}}"><img src="{{asset('img/heart-gray.png')}}" alt="お気に入り追加" class="heart"></a>
                @endif --}}
              </div>
            </div>
            @endforeach
          </div>
      </div>
    </main>
  {{-- </x-master> --}}
</body>
</html>