<!doctype html>
<html lang="en">
<head>
    {{ HTML::style('assets/css/stylesheet.css') }}
    {{ HTML::style('assets/css/bootstrap.min.css') }}
    {{ HTML::style('assets/css/bootstrap-theme.min.css') }}
    <meta charset="UTF-8">
</head>
<body>
    <header>
        <div id="logo">
            <a href="{{URL::route('concerts.index')}}">{{HTML::image('assets/images/logo_codepi.png')}}
        </div>
        <div id="header-menu">
            <ul>
                <li><a href="{{URL::route('concerts.index')}}">Acceuil</a></li>
                @if(!Auth::check())
                    <li><a href="{{URL::route('concerts.login')}}">Connecter vous</a></li>
                @else
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href="{{URL::route('concerts.logout')}}">Vous Deconnecter</a></li>
                @endif
            </ul>
        </div>
    </header>
    @yield('content')
</body>