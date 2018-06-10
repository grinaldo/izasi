<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_includes._head-meta')
        @include('_includes._head-style')
        @include('_includes._head-script')
        @yield('page-style')
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ $googleGtm->description ?? '' }}"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div class="overlay"></div>
        @include('_includes._header')
        @include('_includes._sidebar')
        
        <div id="app"></div> 
        @include('_includes._notification')
        <div class="site-content">
            @yield('content')  
        </div>

        @include('_includes._footer')
        @include('_includes._foot-script')
        @yield('page-script')
    </body>
</html>