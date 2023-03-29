@extends('layouts.app')
<link href="{{ asset('css/img3.css') }}" rel="stylesheet">
@section('content')
<div class="back-img"></div>
<div class="container mx-auto">
    @if (session('error'))
        <div class="alert alert-danger text-center" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <div class="card">
        <table class="table table-hover">
            <tr>
                <th scope="col">id</th>
                <td>{{ $reserve->id }}</td>
            </tr>
            <tr>
                <th scope="col">名前</th>
                <td>{{ $reserve->representative }}</td>
            </tr>
            <tr>
                <th scope="col">団体名</th>
                <td>{{ $reserve->club_name }}</td>
            </tr>
            <tr>
                <th scope="col">チェックイン</th>
                <td>{{ $reserve->check_in->format('Y年m月d日') }} {{ $reserve->start_at }}</td>
            </tr>
            <tr>
                <th scope="col">チェックアウト</th>
                <td>{{ $reserve->check_out->format('Y年m月d日') }} {{ $reserve->end_at }}</td>
            </tr>
            <tr>
                <th scope="col">食事</th>
                <td>{{ $reserve->meal }}</td>
            </tr>
            <tr>
                <th scope="col">要望</th>
                <td>{{ $reserve->request }}</td>
            </tr>
            <tr>
                <th scope="col">大人人数</th>
                <td>{{ $reserve->adult_num }}</td>
            </tr>
            <tr>
                <th scope="col">子供人数</th>
                <td>{{ $reserve->child_num }}</td>
            </tr>
            <tr>
                <th scope="col">使用施設</th>
                <td>{{ $reserve->institution }}</td>
            </tr>
            <tr>
                <th scope="col">備考</th>
                <td>{{ $reserve->infomation }}</td>
            </tr>
          </table>
          <a href="{{ route('user.reserve.index') }}">
            <button type="button" class="btn btn-primary">予約一覧へ戻る</button>
        </a>
        @if(!$bool)
          <form method="POST" action="{{ route('user.reserve.destroy', ['reserve'=>$reserve->id]) }}">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger" onclick="return confirm('予約をキャンセルします。よろしいですか？')">キャンセル</button>
          </form>
        @endif
    </div>
</div>
@endsection
