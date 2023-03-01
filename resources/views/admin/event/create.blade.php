@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">イベント登録</div>

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

                    <form method="POST" action="{{ route('admin.events.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="event_name" class="form-label">イベント名</label>
                            <input type="text" class="form-control" id="event_name" name="event_name" value="{{ old('event_name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="sports" class="form-label">スポーツ</label>
                            <input type="text" class="form-control" id="sports" name="sports" value="{{ old('sports') }}">
                        </div>
                        <div class="mb-3">
                            <label for="detail" class="form-label">イベントの詳細情報</label>
                            <textarea class="form-control" id="detail" name="detail" rows="5">{{ old('event_name') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image1" class="form-label">画像１</label>
                            <input type="file" class="form-control" id="image1" name="image1" value="{{ old('image1') }}">
                        </div>
                        <div class="mb-3">
                            <label for="image2" class="form-label">画像2</label>
                            <input type="file" class="form-control" id="image2" name="image2" value="{{ old('image2') }}">
                        </div>
                        <div class="mb-3">
                            <label for="image3" class="form-label">画像3</label>
                            <input type="file" class="form-control" id="image3" name="image3" value="{{ old('image3') }}">
                        </div>
                        <div class="mb-3">
                            <label for="image4" class="form-label">画像4</label>
                            <input type="file" class="form-control" id="image4" name="image4" value="{{ old('image4') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
