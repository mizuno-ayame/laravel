@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success text-center" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('user.events.index') }}">
                        <button type="button" class="btn btn-primary">イベント一覧</button>
                    </a>
                    <a href="{{ route('user.reserve.index') }}">
                        <button type="button" class="btn btn-primary">予約一覧</button>
                    </a>
                    <a href="{{ route('user.reserve.create') }}">
                        <button type="button" class="btn btn-primary">予約登録ページ</button>
                    </a>
                    <a href="{{ route('user.like.index') }}">
                        <button type="button" class="btn btn-primary">お気に入り一覧</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
