<!doctype html>
<html lang="en">
<head>
    @include('_header')
</head>
<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header mdl-layout__header--waterfall portfolio-header">
            <div class="mdl-layout__header-row portfolio-logo-row">
                <span class="mdl-layout__title">
                    <div class="portfolio-logo"></div>
                    <span class="mdl-layout__title">Mig Mikael website</span>
                </span>
            </div>
            <div class="mdl-layout__header-row portfolio-navigation-row mdl-layout--large-screen-only">
                <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                    {{--<a class="mdl-navigation__link" href="">Portfolio</a>--}}
                    <a class="mdl-navigation__link @if(isset($posts)) is-active @endif" href="{{ url('post') }}">Blog</a>
                    <a class="mdl-navigation__link @if(isset($categories)) is-active @endif" href="{{ url('category') }}">Category</a>
                    <a class="mdl-navigation__link @if(isset($contacts)) is-active @endif" href="{{ url('contact') }}">About</a>
                    @if (Auth::guest())
                        {{-- if user is not login --}}
                        <a class="mdl-navigation__link" id="admin-menu" href="{{ url('login') }}">
                            Login
                        </a>
                    @else
                        @if(Auth::user()->id == 1)
                            <a class="mdl-navigation__link" id="admin-menu" href="{{ url('') }}">
                                Profile
                            </a>
                            <a class="mdl-navigation__link" id="admin-menu" href="{{ url('logout') }}">
                                Logout
                            </a>
                        @else
                            <a class="mdl-navigation__link" id="admin-menu" href="{{ url('') }}">
                                Profile
                            </a>
                            <a class="mdl-navigation__link" id="admin-menu" href="{{ url('logout') }}">
                                Logout
                            </a>
                        @endif
                    @endif
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer mdl-layout--small-screen-only">
            <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                {{--<a class="mdl-navigation__link" href="">Portfolio</a>--}}
                <a class="mdl-navigation__link @if(isset($posts)) is-active @endif" href="{{ url('post') }}">Blog</a>
                <a class="mdl-navigation__link @if(isset($categories)) is-active @endif" href="{{ url('category') }}">Category</a>
                <a class="mdl-navigation__link @if(isset($contacts)) is-active @endif" href="{{ url('contact') }}">About</a>
                @if (Auth::guest())
                    {{-- if user is not login --}}
                    <a class="mdl-navigation__link" id="admin-menu" href="{{ url('login') }}">
                        Login
                    </a>
                @else
                    @if(Auth::user()->id == 1)
                        <a class="mdl-navigation__link" id="admin-menu" href="{{ url('') }}">
                            Profile
                        </a>
                        <a class="mdl-navigation__link" id="admin-menu" href="{{ url('logout') }}">
                            Logout
                        </a>
                    @else
                        <a class="mdl-navigation__link" id="admin-menu" href="{{ url('') }}">
                            Profile
                        </a>
                        <a class="mdl-navigation__link" id="admin-menu" href="{{ url('logout') }}">
                            Logout
                        </a>
                    @endif
                @endif
            </nav>
        </div>

        <main class="mdl-layout__content">
            <div class="mdl-grid portfolio-max-width portfolio-contact">
                @yield('content')
            </div>

            <footer class="mdl-mini-footer">
                <div class="mdl-mini-footer__left-section">
                    <div class="mdl-logo">Mig Mikael Website</div>
                </div>
                <div class="mdl-mini-footer__right-section">
                    <ul class="mdl-mini-footer__link-list">
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Privacy & Terms</a></li>
                    </ul>
                </div>
            </footer>
        </main>
    </div>
</body>
</html>