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
        @auth
        <!-- Event.phpに作ったisLikedByメソッドをここで使用 -->
        @if (!$event->isLikedBy(Auth::user()))
            <span class="likes">
                <p class="like-toggle" data-event-id="{{ $event->id }}">
                    <i class="fas fa-heart"></i>
                </p>
                <span class="like-counter">{{$event->likes_count}}</span>
            </span><!-- /.likes -->
        @else
            <span class="likes">
                <p class="like-toggle liked" data-event-id="{{ $event->id }}">
                    <i class="fas fa-heart"></i>
                </p>
                <span class="like-counter">{{$event->likes_count}}</span>
            </span><!-- /.likes -->
        @endif
    @endauth
    </div>
</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>

$(function () {
    let like = $('.like-toggle'); //like-toggleのついたiタグを取得し代入。
    let likeEventId;

    like.on('click', function () { //onはイベントハンドラー
        let $this = $(this); //this=イベントの発火した要素＝iタグを代入
        likeEventId = $this.data('event-id'); //iタグに仕込んだdata-event-idの値を取得

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/user/like', //通信先アドレスで、このURLをあとでルートで設定します
            method: 'POST', //HTTPメソッドの種別を指定します。1.9.0以前の場合はtype:を使用。
            data: { //サーバーに送信するデータ
                'event_id': likeEventId //いいねされた投稿のidを送る
            },
        }).done(function (data) {
            $this.toggleClass('liked'); //likedクラスのON/OFF切り替え。
            $this.next('.like-counter').html(data.event_likes_count);
        }).fail(function () {
            console.log('fail');
        });
    });
});
</script>


<style>
    form {
        margin-block-end: 0;
    }
    .liked {
        color: pink;
    }
</style>

