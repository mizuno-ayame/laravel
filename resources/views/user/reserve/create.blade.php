@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">予約申込</div>

                <div class="card-body">
                    {{--  バリデーションエラー--}}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    {{--  処理中のメッセージ  --}}
                    @if (session('error'))
                        <div class="alert alert-danger text-center" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    {{--  <form method="POST" action="{{ route('user.reserve.store') }}">
                        @csrf  --}}
                    <div>
                        <div class="mb-3">
                            <label for="representative" class="form-label">代表者名</label>
                            <input type="text" class="form-control" id="representative" name="representative" value="{{ old('representative') }}">
                        </div>
                        <div class="mb-3">
                            <label for="club_name" class="form-label">団体名</label>
                            <input type="text" class="form-control" id="club_name" name="club_name" value="{{ old('club_name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="check_in" class="form-label">チェックイン日</label>
                            <input type="date" class="form-control" id="check_in" name="check_in" value="{{ old('check_in') }}">
                        </div>
                        <div class="mb-3">
                            <label for="start_at" class="form-label">チェックイン時間</label>
                            <select class="form-control" id="start_at" name="start_at">
                                <option value="18:00" selected>18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="check_out" class="form-label">チェックアウト日</label>
                            <input type="date" class="form-control" id="check_out" name="check_out" value="{{ old('check_out') }}">
                        </div>
                        <div class="mb-3">
                            <label for="end_at" class="form-label">チェックアウト時間</label>
                            <select class="form-control" id="end_at" name="end_at">
                                <option value="10:00" selected>10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="meal" class="form-check-label">朝食</label>
                            <input type="checkbox" class="form-check-input" id="meal" name="meal" value="朝">
                            <label for="meal2" class="form-check-label">昼食</label>
                            <input type="checkbox" class="form-check-input" id="meal2" name="meal" value="昼">
                            <label for="meal3" class="form-check-label">夜食</label>
                            <input type="checkbox" class="form-check-input" id="meal3" name="meal" value="夜">
                        </div>
                        <div class="mb-3">
                            <label for="adult_num" class="form-label">大人人数</label>
                            <input type="number" class="form-control" id="adult_num" name="adult_num" value="{{ old('adult_num') }}" max="100" min="1">*1人以上100人以下
                        </div>
                        <div class="mb-3">
                            <label for="child_num" class="form-label">子供人数</label>
                            <input type="number" class="form-control" id="child_num" name="child_num" value="{{ old('child_num') }}" max="100" min="0">*100人以下
                        </div>
                        <div class="mb-3">
                            <p>利用施設</p>
                            <label for="institution" class="form-check-label">スケートリンク</label>
                            <input type="checkbox" class="form-check-input" id="institution" name="institution" value="スケートリンク">
                            <label for="institution2" class="form-check-label">トレーニングルーム</label>
                            <input type="checkbox" class="form-check-input" id="institution2" name="institution" value="トレーニングルーム">
                            <label for="institution3" class="form-check-label">ミーティングルーム</label>
                            <input type="checkbox" class="form-check-input" id="institution3" name="institution" value="ミーティングルーム">
                            <label for="institution4" class="form-check-label">剣道場</label>
                            <input type="checkbox" class="form-check-input" id="institution4" name="institution" value="剣道場">
                            <label for="institution5" class="form-check-label">弓道場</label>
                            <input type="checkbox" class="form-check-input" id="institution5" name="institution" value="弓道場">
                        </div>
                        <div class="mb-3">
                            <label for="request" class="form-label">要望</label>
                            <textarea class="form-control" id="request" name="request" rows="5">{{ old('request') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="information" class="form-label">備考</label>
                            <textarea class="form-control" id="information" name="information" rows="5">{{ old('information') }}</textarea>
                        </div>

                        <button type="button" class="btn btn-primary form-btn" data-toggle="modal" data-target="#exampleModalCenter">確認</button>
                      {{--  </form>  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    {{--  モーダル  --}}
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">確認画面</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('user.reserve.store') }}">
                    @csrf
                    <div class="form-group row">
                        <p class="col-sm-4 col-form-label">代表者名</p>
                        <div class="col-sm-8">
                            <p class="modal-representative"></p>
                            <input class="modal-representative" type="hidden" name="representative" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <p class="col-sm-4 col-form-label">団体名</p>
                        <div class="col-sm-8">
                            <p class="modal-club_name"></p>
                            <input class="modal-club_name" type="hidden" name="club_name" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <p class="col-sm-4 col-form-label">チェックイン日</p>
                        <div class="col-sm-8">
                            <p class="modal-check_in"></p>
                            <input class="modal-check_in" type="hidden" name="check_in" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <p class="col-sm-4 col-form-label">チェックイン時間</p>
                        <div class="col-sm-8">
                            <p class="modal-start_at"></p>
                            <input class="modal-start_at" type="hidden" name="start_at" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <p class="col-sm-4 col-form-label">チェックアウト日</p>
                        <div class="col-sm-8">
                            <p class="modal-check_out"></p>
                            <input class="modal-check_out" type="hidden" name="check_out" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <p class="col-sm-4 col-form-label">チェックアウト時間</p>
                        <div class="col-sm-8">
                            <p class="modal-end_at"></p>
                            <input class="modal-end_at" type="hidden" name="end_at" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <p class="col-sm-4 col-form-label">食事</p>
                        <div class="col-sm-8">
                            <p class="modal-meal"></p>
                            <input class="modal-meal" type="hidden" name="meal" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <p class="col-sm-4 col-form-label">大人人数</p>
                        <div class="col-sm-8">
                            <p class="modal-adult_num"></p>
                            <input class="modal-adult_num" type="hidden" name="adult_num" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <p class="col-sm-4 col-form-label">子供人数</p>
                        <div class="col-sm-8">
                            <p class="modal-child_num"></p>
                            <input class="modal-child_num" type="hidden" name="child_num" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                    <p class="col-sm-4 col-form-label">利用施設</p>
                        <div class="col-sm-8">
                            <p class="modal-institution"></p>
                            <input class="modal-institution" type="hidden" name="institution" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                    <p class="col-sm-4 col-form-label">要望</p>
                        <div class="col-sm-8">
                            <p class="modal-request"></p>
                            <input class="modal-request" type="hidden" name="request" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                    <p class="col-sm-4 col-form-label">備考</p>
                        <div class="col-sm-8">
                            <p class="modal-information"></p>
                            <input class="modal-information" type="hidden" name="information" value="">
                        </div>
                    </div>
                    <input class="modal-user_id" type="hidden" name="user_id" value="">
                    <div class="text-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">修正する</button>
                        <button type="submit" class="btn btn-primary submitbtn" style="display: none">予約申込</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
$(function(){
    const now = new Date();
    now.setDate(now.getDate()+7);
    $('#exampleModalCenter').on('show.bs.modal', function() {
        const user_id = @json(Auth::id());
        let representative = $('#representative').val();
        let club_name      = $('input[name="club_name"]').val();
        let check_in      = $('input[name="check_in"]').val();
        let checkIn = new Date(check_in);
        let start_at      =$('#start_at option:selected').val();
        let check_out      = $('input[name="check_out"]').val();
        let checkOut = new Date(check_out);
        let end_at      = $('#end_at option:selected').val();
        let adult_num      = $('input[name="adult_num"]').val();
        let child_num      = $('input[name="child_num"]').val();
        let request = $('textarea[name="request"]').val();
        let information = $('textarea[name="information"]').val();

        //バリデーション
        let error = false;

        if(!representative){
            $('.modal-representative').text('お名前が入力されていません').css('color', 'red');
            error = true;
        }else{
            $('.modal-representative').text(representative).val(representative);
        }

        if(!club_name){
            $('.modal-club_name').text('団体名が入力されていません').css('color', 'red');
            error = true;
        }else{
            $('.modal-club_name').text(club_name).val(club_name);
        }

        if(!check_in){
            $('.modal-check_in').text('チェックイン日が入力されていません').css('color', 'red');
            error = true;
        }else if(now > checkIn){
            $('.modal-check_in').text('チェックイン日は1週間以上後でお願い致します').css('color', 'red');
            error = true;
        }
        else{
            $('.modal-check_in').text(check_in).val(check_in);
        }

        if(!start_at){
            $('.modal-start_at').text('チェックイン時間が入力されていません').css('color', 'red');
            error = true;
        }else{
            $('.modal-start_at').text(start_at).val(start_at);
        }

        if(!check_out){
            $('.modal-check_out').text('チェックアウト日が入力されていません').css('color', 'red');
            error = true;
        }else if(now > checkOut){
            $('.modal-check_out').text('チェックアウト日は1週間以上後でお願い致します').css('color', 'red');
            error = true;
        }else{
            $('.modal-check_out').text(check_out).val(check_out);
        }

        if(!end_at){
            $('.modal-end_at').text('チェックアウト時間が入力されていません').css('color', 'red');
            error = true;
        }else{
            $('.modal-end_at').text(end_at).val(end_at);
        }

        if(!adult_num){
            $('.modal-adult_num').text('大人人数が入力されていません').css('color', 'red');
            error = true;
        }else{
            $('.modal-adult_num').text(adult_num).val(adult_num);
        }

        if(!child_num){
            $('.modal-child_num').text('子供人数が入力されていません').css('color', 'red');
            error = true;
        }else{
            $('.modal-child_num').text(child_num).val(child_num);
        }

        $('.modal-request').text(request).val(request);

        $('.modal-user_id').val(user_id);

        $('.modal-information').text(information).val(information);

        let checkMeal = [];
        $('input[name="meal"]:checked').each(function() {
            checkMeal.push($(this).val());
        });
        $('.modal-meal').text(checkMeal);

        let checkInst = [];
        $('input[name="institution"]:checked').each(function() {
            checkInst.push($(this).val());
        });
        $('.modal-institution').text(checkInst);

        if(error)return;

        $('.submitbtn').show();
    });
});
</script>
