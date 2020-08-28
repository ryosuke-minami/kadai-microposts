@extends('layouts.app')
@section('content')
    <div class="row">
        <aside class="col-sm-4">
            <div class="card">
                <hr class="card-header">
                <h3 clss="card-title">{{$user->name}}</h3>
            </div>
            <div class="card-body">
                {{--ユーザのメールアドレスをもとにGravatarを取得して表示--}}
                <img class="rounded img-fluid" src="{{Gravatar::get($user->email,['size'=>500])}}" alt="">
            </div>
        </aside>
        <div class="col-sm-8">
            <ul class="nav nav-tabs nav-justified mb-3">
                {{--ユーザ詳細タブ--}}
                <li class="nav-item">
                    <a href="{{route('users.show',['user'=>$user->id])}}" class="nav-link{{Request::routeIs('users.show')?'active':''}}">
                        TimeLine
                        <span class="badge badge-secondary">{{$user->microposts_count}}</span>
                    </a>
                </li>
                {{--フォロー一覧タブ--}}
                <li class="nav-item"><a href="#" class="nav-link">Following</a></li>
                {{--フォロワー一覧タブ--}}
                <li class="nav-item"><a href="#" class="nav-link">Followers</a></li>
            </ul>
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