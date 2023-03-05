@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="card">
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">名前:{{ $user->name }}</h5>
                <p class="card-text">電話番号:{{ $user->tel }}</p>
                <p class="card-text">メールアドレス:{{ $user->email }}</p>
            </div>
        </div>
        {{--  予約一覧  --}}
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">名前</th>
                <th scope="col">団体名</th>
                <th scope="col">チェックイン</th>
                <th scope="col">チェックアウト</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach($user->reserves as $reserve)
                <tr>
                  <td>{{ $reserve->representative }}</td>
                  <td>{{ $reserve->club_name }}</td>
                  <td>{{ $reserve->check_in->format('Y年m月d日') }} {{ $reserve->start_at }}</td>
                  <td>{{ $reserve->check_out->format('Y年m月d日') }} {{ $reserve->end_at }}</td>
                  <td>
                    <a href="{{ route('admin.reserve.show', ['reserve' => $reserve->id]) }}">詳細リンク</a>
                  </td>
                </tr>
                @endforeach

            </tbody>
          </table>
    </div>
</div>
@endsection
