<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @if (app('env')=='production')
  <link rel="stylesheet" href="{{secure_asset('css/reset.css')}}">
  <link rel="stylesheet" href="{{secure_asset('css/detail.css')}}">
  @else
  <link rel="stylesheet" href="{{asset('css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('css/detail.css')}}">
  @endif

  <title>Rese</title>
</head>
<body>
  <x-master>
      <main>
        @section('contents')
        <div class="container">
          <div class="detail">
            <div class="detail-box">
              <button class="detail-back" onclick="location.href='{{url('/')}}'"><</button>
              <h2 class="detail-title">{{$items->name}}</h2>
            </div>
            <div class="detail-info">
              <img class="detail-img" src="{{$items->url}}" alt="">
                <p class="detail-text">＃{{$items->area->name}} ＃{{$items->genre->name}}</p>
              <div class="detail-note">
                {{$items->detail}}
              </div>
            </div>
          </div>
          <div class="reseve-info">
            <div class="reseve-box">
              <h2 class="reseve-title">予約</h2>
              <div class="reseve-group">
                <form action="{{route('reservation',$data)}}" method="POST">
                  @csrf
                  @if($errors->any())
                    <div style="color:#ffffff;">
                        【エラー】<br><br>
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                    <br>
                  @endif
                  @auth
                  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                  @endauth
                  <input type="hidden" name="store_id" value="{{ $items->id }}">
                  <input type="date" class="reseve-date" name="reseve_day" value="<?php echo date('Y-m-d');?>">
                  <input type="time" placeholder="予約時間" class="reseve-time" name="reseve_time" step="3600" min="09:00" max="21:00">
                  <input type="number" list="data1" class="reseve-num" name="people" min="1" max="5" placeholder="予約人数">
                    <datalist id="data1">
                      <option value="1">
                      <option value="2">
                      <option value="3">
                      <option value="4">
                      <option value="5">
                    </datalist>
                    <table class="reseve-table">
                      <tr>
                        <th>Shop</th>
                        <td>{{$items->name}}</td>
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
                  @if (Route::has('login'))
                    @auth
                      <button type="submit" class="reseve-but">予約する</button>
                  @else
                      <button class="reseve-but" onclick="location.href='{{url('/login')}}'">予約する</button>
                  @endauth
                  @endif
                </form>
              </div>
            </div>
          </div>
        </div>
      @endsection
      </main>
    </x-master>
</body>
</html>