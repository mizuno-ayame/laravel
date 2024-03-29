@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    @if (session('status'))
        <div class="alert alert-success text-center" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <p>1週間以内の予約はキャンセルができません</p>
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
            @foreach($reserves as $reserve)
            <tr>
              <td>{{ $reserve->representative }}</td>
              <td>{{ $reserve->club_name }}</td>
              <td>{{ $reserve->check_in->format('Y年m月d日') }} {{ $reserve->start_at }}</td>
              <td>{{ $reserve->check_out->format('Y年m月d日') }} {{ $reserve->end_at }}</td>
              <td>
                <a href="{{ route('user.reserve.show', ['reserve' => $reserve->id]) }}">詳細リンク</a>
              </td>
            </tr>
            @endforeach

        </tbody>
      </table>
      <a href="/user/home">
        <button type="button" class="btn btn-primary">TOPへ戻る</button>
    </a>
    <a href="{{ route('user.reserve.index.past') }}">
        <button type="button" class="btn btn-primary">過去の一覧</button>
    </a>
</div>
@endsection
