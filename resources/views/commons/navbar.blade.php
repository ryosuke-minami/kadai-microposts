<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{--トップページへのリンク--}}
        <a class="navbar-brand" href="/">Microposts</a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    {{--ユーザー一覧ページへのリンク--}}
                    <li class="nav-item">{!! link_to_route('users.index','Users',[],['class'=>'nav-link']) !!}</li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            {{--ユーザー詳細ページへのリンク--}}
                            <li class="dropdown-item">{!! link_to_route('users.show','My profile',['users'=>Auth::id()]) !!}</li>
                            <li class="dropdown-divider"></li>
                            {{--ログアウトへのリンク--}}
                            <li class="dropdown-item">{!! link_to_route('logout.get','Logout') !!}</li>
                        </ul>
                    </li>
                @else
                    {{--ユーザー登録ページへのリンク--}}
                    <li class="nav-item">{!! link_to_route('signup.get','Signup',[],['class'=>'nav-link']) !!}</li>
                    {{--ログインページへのリンク--}}
                    <li class="nav-item">{!! link_to_route('login','Login',[],['class'=>'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>