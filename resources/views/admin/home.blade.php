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

                    <a href="{{ route('admin.events.index') }}">
                        <button type="button" class="btn btn-primary">イベント一覧</button>
                    </a>
                    <a href="{{ route('admin.users.index') }}">
                        <button type="button" class="btn btn-primary">ユーザー一覧</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
