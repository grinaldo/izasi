<header class="site-header fixed-header" style="">
    <div class="header_container">
        <div class="header_logo" style="">
            <a href="{{ route('home') }}"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
        </div>
        <div class="header_menu">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('articles.index') }}">News & Events</a></li>
                <li><a href="{{ route('members.index') }}">Member</a></li>
                <li><a href="{{ route('contacts.index') }}">Contact</a></li>
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
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About Us</a></li>
        <li><a href="{{ route('articles.index') }}">News & Events</a></li>
        <li><a href="{{ route('members.index') }}">Member</a></li>
        <li><a href="{{ route('contacts.index') }}">Contact</a></li>
    </ul>
</div>