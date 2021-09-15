<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/mypage.css')}}">

  <title>Rese</title>
</head>
<body>
  @php
    dd($favorite);
@endphp
  <x-master>
      <main>
        @section('contents')
        <div class="container is-fluid">
          <div class="user-box">
            <h1 class="user-name">{{Auth::user()->name}}さん</h1>
          </div>
          <div class="reseve-info">
            <div class="reseve-now">
              <h2 class="reseve-title">予約状況</h2>
                @foreach ($reserve_new as $key=>$item)
                <div class="reseve-box">
                  <div class="table-title">
                    <p class="reseve-num">予約{{$key+1}}</p>
                    <form action="{{route('reserve_delete')}}" method="POST">
                      @csrf
                      @method('delete')
                      <input type="hidden" name="id" value="{{ $item->id }}">
                      <button class="deleat-btn" onclick="return confirm('予約をキャンセルしますか？')">×</button>
                    </form>
                  </div>
                  <table class="reseve-table">
                    <tr>
                      <th>Shop</th>
                      <td>{{$item->store->name}}</td>
                    </tr>
                    <tr>
                      <th>Date</th>
                      <td>{{$item->reserve_date->format('Y年m月d日')}}</td>
                    </tr>
                    <tr>
                      <th>Time</th>
                      <td>{{$item->reserve_date->format('H時i分')}}</td>
                    </tr>
                    <tr>
                      <th>Number</th>
                      <td>{{$item->people}}人</td>
                    </tr>
                  </table>
                </div>
                @endforeach
            </div>
            <div class="reseve-old">
              <h2 class="reseve-title">終了した予約</h2>
                @foreach ($reserve_old as $key=>$old)
                <div class="reseve-box">
                  <div class="table-title">
                    <p class="reseve-num">予約{{$key+1}}</p>
                    <form action="{{route('reserve_delete')}}" method="POST">
                      @csrf
                      @method('delete')
                      <input type="hidden" name="id" value="{{ $old->id }}">
                      <button class="deleat-btn" onclick="return confirm('予約をキャンセルしますか？')">×</button>
                    </form>
                  </div>
                  <table class="reseve-table">
                    <tr>
                      <th>Shop</th>
                      <td>{{$old->store->name}}</td>
                    </tr>
                    <tr>
                      <th>Date</th>
                      <td>{{$old->reserve_date->format('Y年m月d日')}}</td>
                    </tr>
                    <tr>
                      <th>Time</th>
                      <td>{{$old->reserve_date->format('H時i分')}}</td>
                    </tr>
                    <tr>
                      <th>Number</th>
                      <td>{{$old->people}}人</td>
                    </tr>
                  </table>
                </div>
                @endforeach
            </div>
          </div>

          <div class="favorite">
            <h2 class="favorite-title">お気に入り店舗</h2>
            @foreach ($favorite as $like)
            <div class="card">
              <img class="card-img" src="{{$like->store->url}}" alt="">
              <div class="card-content">
                <p class="card-title">{{$store[$loop->iteration]->name}}</p>
                <p class="card-text">＃{{$store[$loop->iteration]->area->name}} ＃{{$store[$loop->iteration]->genre->name}}</p>
              </div>
              <div class="card-link">
                <button class="shop-detail" onclick="location.href='{{route('detail',$favorite->store_id)}}'">詳しくみる</button>
                <div class="fav-button">
                    <a href="{{route('fav_off',$like->store_id)}}"><img src="{{asset('img/heart-pink.png')}}" alt="お気に入り削除" class="heart"></a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      @endsection
      </main>
    </x-master>
</body>
</html>