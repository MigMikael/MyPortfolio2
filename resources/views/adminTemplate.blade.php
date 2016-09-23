<!doctype html>
<html lang="en">
<head>
    @include('_header')
</head>
<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
                mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">@yield('title')</span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation">
                    @if (Auth::guest())
                        {{-- if user is not login --}}
                        <a class="mdl-navigation__link" id="admin-menu" href="{{ url('login') }}">
                            Login
                        </a>
                    @else
                        <a class="mdl-navigation__link" id="admin-menu" href="{{ url('logout') }}">
                            Logout
                        </a>
                    @endif
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title"><a href="{{ url('admin') }}"><b>Dashboard</b></a></span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="{{ url('admin/post') }}">Blog</a>
                <a class="mdl-navigation__link" href="{{ url('admin/category') }}">Category</a>
                <a class="mdl-navigation__link" href="">Contact</a>
                <a class="mdl-navigation__link" href="">User</a>
                <a class="mdl-navigation__link" href="{{ url('post') }}">View Blog</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="mdl-grid">
                @yield('content')
            </div>
        </main>
    </div>
</body>