<header class="site-header fixed-header" style="">
    <div class="header_container">
        <div class="header_logo" style="">
            <a href="{{ route('home') }}"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
        </div>
        <div class="header_menu">
            <ul>
                <li>
                    <a href="?lang=id"><img width="14" src="{{asset('images/flag-id.png')}}" alt=""></a> | 
                    <a href="?lang=en"><img width="14" src="{{asset('images/flag-en.png')}}" alt=""></a>
                </li>
                @if(\Session::get('locale') == 'en_US')
                <li><a  href="{{ route('home') }}">Home</a></li>
                <li><a class="{{(!empty($active) && $active == 'about') ? 'header-active' : ''}}"href="{{ route('about') }}">About Us</a></li>
                <li><a class="{{(!empty($active) && $active == 'article') ? 'header-active' : ''}}"href="{{ route('articles.index') }}">News & Events</a></li>
                <li><a class="{{(!empty($active) && $active == 'member') ? 'header-active' : ''}}"href="{{ route('members.index') }}">Member</a></li>
                <li><a class="{{(!empty($active) && $active == 'contact') ? 'header-active' : ''}}"href="{{ route('contacts.index') }}">Contact</a></li>
                @else
                <li><a  href="{{ route('home') }}">Beranda</a></li>
                <li><a class="{{(!empty($active) && $active == 'about') ? 'header-active' : ''}}"href="{{ route('about') }}">Tentang Kami</a></li>
                <li><a class="{{(!empty($active) && $active == 'article') ? 'header-active' : ''}}"href="{{ route('articles.index') }}">Berita</a></li>
                <li><a class="{{(!empty($active) && $active == 'member') ? 'header-active' : ''}}"href="{{ route('members.index') }}">Anggota</a></li>
                <li><a class="{{(!empty($active) && $active == 'contact') ? 'header-active' : ''}}"href="{{ route('contacts.index') }}">Kontak</a></li>
                @endif
            </ul>
        </div>        
    </div>
    <div class="header_container--mobile">
        <div class="header_logo--mobile">
            <a href="{{ route('home') }}">
                <img src="{{asset('images/logo.png')}}" alt="izasi-logo" class="home_logo__image">
            </a>
        </div>
    </div>
    <div class="header_nav--mobile" style="position: fixed; left:0; top:0;">
        <div class="hamburger">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </div>
</header>

<div class="header_nav-menu--mobile">
    <ul>
        <li>
            <a href="?lang=id"><img width="20" src="{{asset('images/flag-id.png')}}" alt=""></a> | 
            <a href="?lang=en"><img width="20" src="{{asset('images/flag-en.png')}}" alt=""></a>
        </li>
        @if(\Session::get('locale') == 'en_US')
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About Us</a></li>
        <li><a href="{{ route('articles.index') }}">News & Events</a></li>
        <li><a href="{{ route('members.index') }}">Member</a></li>
        <li><a href="{{ route('contacts.index') }}">Contact</a></li>
        @else
        <li><a href="{{ route('home') }}">Beranda</a></li>
        <li><a href="{{ route('about') }}">Tentang Kami</a></li>
        <li><a href="{{ route('articles.index') }}">Berita</a></li>
        <li><a href="{{ route('members.index') }}">Keanggotaan</a></li>
        <li><a href="{{ route('contacts.index') }}">Kontak</a></li>
        @endif
    </ul>
</div>