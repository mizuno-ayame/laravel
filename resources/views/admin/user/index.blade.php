@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">名前</th>
            <th scope="col">電話番号</th>
            <th scope="col">メールアドレス</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
              <th scope="row">{{ $user->id }}</th>
              <td>{{ $user->name }}</td>
              <td>{{ $user->tel }}</td>
              <td>{{ $user->email }}</td>
              <td>
                <a href="{{ route('admin.user.show', ['id' => $user->id]) }}">詳細リンク</a>
              </td>
            </tr>
            @endforeach

        </tbody>
      </table>
      {{ $users->links() }}
</div>
@endsection
