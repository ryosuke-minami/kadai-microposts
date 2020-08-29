@extends('layouts.app')
@section('content')
    <div class="row">
        <aside class="col-sm-4">
            {{--ユーザ情報--}}
            @include('users.card')
        </aside>
        <div class="col-sm-8">
            {{- タブ -}}
            @include('users.card')
            {{-- ユーザ一覧 --}}
            @include('users.users')
            @if(Auth::id()==$user->id)
                {{-- 投稿フォーム --}}
                @include('microposts.form')
            @endif
            {{-- 投稿一覧 --}}
            @include('microposts.microposts')
        </div>
    </div>
@endsection
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>