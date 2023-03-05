@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <form action="{{ route('admin.search.period') }}" method="post">
        @csrf
        <div class="card-body">
            <div class="card-body d-flex px-0 py-1">
                <div>
                    <label for="representative">代表者名</label>
                    <input type="text" name="representative" id="representative" value="{{ $representative ?? null }}">
                </div>
                <div>
                    <label for="club_name">団体名</label>
                    <input type="text" name="club_name" id="club_name" value="{{ $club_name ?? null }}">
                </div>
            </div>
            <div class="card-body d-flex px-0 py-1">
                <div>
                    <label for="from">From</label>
                    <input type="date" name="from" id="from" value="{{ $date1 ?? null }}">
                </div>
                <div>
                    <label for="to">To</label>
                    <input type="date" name="to" id="to" value="{{ $date2 ?? null }}">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">検索</button>
            </div>
        </div>
    </form>
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
