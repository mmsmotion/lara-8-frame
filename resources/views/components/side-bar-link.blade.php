<a href="{{ route($routeName) }}" class="sidebar-link {{ request()->url() == route($routeName) ? 'active' : '' }}">
    <i class="{{ $icon }} fa-fw sidebar-link-icon"></i>
    {{ $name }}
</a>
