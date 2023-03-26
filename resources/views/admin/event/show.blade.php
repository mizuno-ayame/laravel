@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-center">
                <img class="border" src="{{ asset('storage/images/' . $event->image1) }}" alt="">
                <img class="border" src="{{ asset('storage/images/' . $event->image2) }}" alt="">
                <img class="border" src="{{ asset('storage/images/' . $event->image3) }}" alt="">
                <img class="border" src="{{ asset('storage/images/' . $event->image4) }}" alt="">
            </div>
            <div class="card-body">
                <h5 class="card-title">イベント名:{{ $event->event_name }}</h5>
                <p class="card-text">スポーツ名:{{ $event->sports }}</p>
                <p class="card-text">詳細:{{ $event->detail }}</p>
            </div>
        </div>
        <div>
            <a class="btn btn-warning m-0" role="button" href="{{ route('admin.events.edit', ['event' => $event->id]) }}">編集する</a>
        </div>
        <form class="m-2" action="{{ route('admin.events.destroy', ['event' => $event->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" class=" btn btn-danger btn-dell" onClick="delete_alert(event);return false;">
        </form>
    </div>
</div>
@endsection

<script>

    function delete_alert(e){
        if(!window.confirm('本当に削除しますか？')){
            return false;
        }
        document.deleteform.submit();
    };
    </script>

    <style>
        form {
            margin-block-end: 0;
        }
    </style>
