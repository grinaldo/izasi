<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li>
                <a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                </ul>
            </li>
            <li>
                <a><i class="fa fa-user"></i> Users <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('backend.users.index') }}">User Data</a></li>
                </ul>
            </li>
            <li>
                <a><i class="fa fa-file-o"></i> Articles <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('backend.articles.index') }}">Article</a></li>
                </ul>
            </li>
            <li>
                <a><i class="fa fa-building"></i> Companies <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('backend.companies.index') }}">Subsidiary</a></li>
                    <li><a href="{{ route('backend.visions.index') }}">Vision</a></li>
                    <li><a href="{{ route('backend.missions.index') }}">Mission</a></li>
                    <li><a href="{{ route('backend.initiatives.index') }}">Initiative</a></li>
                </ul>
            </li>
            <li>
                <a><i class="fa fa-phone"></i> Contacts <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('backend.contacts.index') }}">Contact Data</a></li>
                </ul>
            </li>
            <li>
                <a><i class="fa fa-file-o"></i> Pages <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('backend.banners.index') }}">Banners</a></li>
                    <li><a href="{{ route('backend.pages.index') }}">Static Data</a></li>
                </ul>
            </li>
            <li>
                <a><i class="fa fa-facebook"></i> Social Medias <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('backend.social-media.index') }}">Social Media Data</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /sidebar menu -->
