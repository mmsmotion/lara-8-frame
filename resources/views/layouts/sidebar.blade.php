<div class="sidebar min-vh-100  " >
    <ul>
        <li class="my-3">
            <a href="{{ route('home') }}" >
                <img src="{{ asset('images/logos/logo.png') }}" class="brand-logo" height="50" alt="">
            </a>
        </li>
        <li class="sidebar-spacer"></li>
        <li>
            <x-side-bar-link name="home" routeName="home" icon="fas fa-home"></x-side-bar-link>
        </li>
        <li>
            <x-side-bar-link name="test" routeName="test" icon="fas fa-car"></x-side-bar-link>
        </li>

        <li class="sidebar-spacer"></li>
        <li>
            <p class="sidebar-group-title">Manage Profile</p>
        </li>
        <li>
            <x-side-bar-link name="Change Password" routeName="profile.change-password" icon="fas fa-user"></x-side-bar-link>
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
