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
    </div>
</div>
@endsection
