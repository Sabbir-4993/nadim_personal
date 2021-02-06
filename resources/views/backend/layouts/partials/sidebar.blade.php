<aside class="sidebar">
    <div class="sidebar__menu-group">
        <ul class="sidebar_nav">
            <li class="menu-title">
                <span>Main menu</span>
            </li>
            <li>
                <a href="{{url('admin/dashboard')}}" class="">
                    <span data-feather="home" class="nav-icon"></span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            <li class="has-child">
                <a href="{{route('admin.portfolio')}}" class="">
                    <span data-feather="grid" class="nav-icon"></span>
                    <span class="menu-text">Portfolio</span>
                    <span class="toggle-icon"></span>
                </a>
                <ul>
                    <li>
                        <a href="{{route('admin.portfolio')}}" class="">Create</a>
                    </li>
                    <li>
                        <a href="#" class="">View</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</aside>
