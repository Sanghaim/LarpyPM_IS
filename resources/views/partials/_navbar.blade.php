<!-- Default navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Post Mortem</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Request::is('/') ? "active" : "" }}">
                <a class="nav-link" href="/">Domů</a>
            </li>
            <li class="nav-item {{ Request::is('about') ? "active" : "" }}">
                <a class="nav-link" href="/about">Informace o aplikaci</a>
            </li>
            <li class="nav-item {{ Request::is('contact') ? "active" : "" }}">
                <a class="nav-link" href="/contact">Kontakty</a>
            </li>
            <li class="nav-item {{ Request::is('blog') ? "active" : "" }}">
                <a class="nav-link" href="{{ route('blog.index') }}">Blogy</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('posts.index') }}">Posty</a>
                        <a class="dropdown-item" href="{{ route('categories.index') }}">Kategorie</a>
                        <a class="dropdown-item" href="{{ route('tags.index') }}">Tagy</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>

