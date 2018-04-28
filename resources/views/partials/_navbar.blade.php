<!-- Default navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Post Mortem</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <li class="nav-item {{ Request::is('posts') ? "active" : "" }}">
                <a class="nav-link" href="/posts">Posty</a>
            </li>
        </ul>
    </div>
</nav>