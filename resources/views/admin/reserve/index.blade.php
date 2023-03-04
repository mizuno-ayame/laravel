@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
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
              <th scope="row">{{ $reserve->id }}</th>
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
      {{ $reserves->links() }}
</div>
@endsection
