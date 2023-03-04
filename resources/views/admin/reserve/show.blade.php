@extends('layouts.app')

@section('content')
<div class="container mx-auto">
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
    </div>
</div>
@endsection
