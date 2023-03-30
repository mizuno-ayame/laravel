@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">イベント編集</div>

                <div class="card-body">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger text-center" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.events.update', ['event' => $event->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="event_name" class="form-label">イベント名</label>
                            <input type="text" class="form-control" id="event_name" name="event_name" value="{{ old('event_name', $event->event_name) }}">
                        </div>
                        <div class="mb-3">
                            <label for="sports" class="form-label">スポーツ</label>
                            <input type="text" class="form-control" id="sports" name="sports" value="{{ old('sports', $event->sports) }}">
                        </div>
                        <div class="mb-3">
                            <label for="detail" class="form-label">イベントの詳細情報</label>
                            <textarea class="form-control" id="detail" name="detail" rows="5">{{ old('event_name', $event->event_name) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image1" class="form-label">画像１</label>
                            <div class="">
                                <img class="border" src="{{ asset('storage/images/' . $event->image1) }}" alt="">
                            </div>
                            <input type="file" class="form-control" id="image1" name="image1" value="{{ old('image1') }}">
                        </div>
                        <div class="mb-3">
                            <label for="image2" class="form-label">画像2</label>
                            <div>
                                <img class="border" src="{{ asset('storage/images/' . $event->image2) }}" alt="">
                            </div>
                            <input type="file" class="form-control" id="image2" name="image2" value="{{ old('image2') }}">
                        </div>
                        <div class="mb-3">
                            <label for="image3" class="form-label">画像3</label>
                            <div>
                                <img class="border" src="{{ asset('storage/images/' . $event->image3) }}" alt="">
                            </div>
                            <input type="file" class="form-control" id="image3" name="image3" value="{{ old('image3') }}">
                        </div>
                        <div class="mb-3">
                            <label for="image4" class="form-label">画像4</label>
                            <div>
                                <img class="border" src="{{ asset('storage/images/' . $event->image4) }}" alt="">
                            </div>
                            <input type="file" class="form-control" id="image4" name="image4" value="{{ old('image4') }}">
                        </div>
                        <button type="submit" class="btn btn-primary" onclick="return confirm('内容を変更します。よろしいですか？')">編集完了</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
