@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">イベント名</th>
            <th scope="col">スポーツ名</th>
            <th scope="col">詳細</th>
          </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
              <th scope="row">{{ $event->id }}</th>
              <td>{{ $event->event_name }}</td>
              <td>{{ $event->sports }}</td>
              <td>
                <a href="{{ route('user.events.show', ['event' => $event->id]) }}">詳細リンク</a>
              </td>
            </tr>
            @endforeach

        </tbody>
      </table>
      {{ $events->links() }}
</div>
@endsection
