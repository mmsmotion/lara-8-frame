<div class="sidebar min-vh-100  " >
    <ul>
        <li class="my-3">
            <a href="{{ route('home') }}" >
                <img src="{{ asset('images/logos/logo.png') }}" class="brand-logo" height="50" alt="">
            </a>
        </li>
        <li class="sidebar-spacer"></li>
        <li>
            <a href="{{ route('home') }}" class="sidebar-link {{ request()->url() == route('home') ? 'active' : '' }}">
                <i class="fas fa-home fa-fw sidebar-link-icon"></i>
                Home
            </a>
        </li>
        <li>
            <a href="{{ route('test') }}" class="sidebar-link {{ request()->url() == route('test') ? 'active' : '' }}">
                <i class="fas fa-envelope fa-fw sidebar-link-icon"></i>
                Test
            </a>
        </li>
        <li class="sidebar-spacer"></li>
        <li>
            <p class="sidebar-group-title">Manage Article</p>
        </li>
        <li>
            <a href="article-create.html" class="sidebar-link">
                <i class="fas fa-plus-circle fa-fw sidebar-link-icon"></i>
                Create Article
            </a>
        </li>
        <li>
            <a href="article-list.html" class="sidebar-link">
                <i class="fas fa-list fa-fw sidebar-link-icon"></i>
                Article Lists
            </a>
        </li>
        <li class="sidebar-spacer"></li>
        <li>
            <p class="sidebar-group-title">Manage Article</p>
        </li>
        <li>
            <a href="" class="sidebar-link">
                <i class="fas fa-plus-circle fa-fw sidebar-link-icon"></i>
                Create Article
            </a>
        </li>
        <li>
            <a href="" class="sidebar-link">
                <i class="fas fa-list fa-fw sidebar-link-icon"></i>
                Article Lists
            </a>
        </li>
        <li class="sidebar-spacer"></li>
        <li>
            <p class="sidebar-group-title">Manage Article</p>
        </li>
        <li>
            <a href="" class="sidebar-link">
                <i class="fas fa-plus-circle fa-fw sidebar-link-icon"></i>
                Create Article
            </a>
        </li>
        <li>
            <a href="" class="sidebar-link">
                <i class="fas fa-list fa-fw sidebar-link-icon"></i>
                Article Lists
            </a>
        </li>
        <li class="sidebar-spacer"></li>
        <li>
            <a href="#" class="sidebar-link bg-light" onclick="document.getElementById('logoutForm').submit()">
                <i class="fas fa-unlock fa-fw sidebar-link-icon"></i>
                Logout
            </a>
        </li>
    </ul>
</div>
