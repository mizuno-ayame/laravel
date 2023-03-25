@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    @if (session('status'))
        <div class="alert alert-success text-center" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <p>過去の予約一覧</p>
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
      <a href="{{ route('user.reserve.index') }}">
        <button type="button" class="btn btn-primary">一覧に戻る</button>
    </a>
</div>
@endsection
