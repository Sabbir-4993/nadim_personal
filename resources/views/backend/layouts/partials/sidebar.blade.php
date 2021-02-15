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
                <a href="{{route('admin.portfolio.index')}}" class="">
                    <span data-feather="grid" class="nav-icon"></span>
                    <span class="menu-text">Portfolio</span>
                    <span class="toggle-icon"></span>
                </a>
                <ul>
                    <li>
                        <a href="{{route('admin.portfolio.index')}}" class="">
                            <span data-feather="plus-circle" class="nav-icon"></span>
                            <span class="menu-text">Create</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.portfolio.details')}}" class="">
                            <span data-feather="plus-circle" class="nav-icon"></span>
                            <span class="menu-text">Add Image</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.gallery')}}" class="">
                            <span data-feather="image" class="nav-icon"></span>
                            <span class="menu-text">View</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('admin.team.index')}}" class="">
                    <span data-feather="users" class="nav-icon"></span>
                    <span class="menu-text">Team</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.client.index')}}" class="">
                    <span data-feather="pocket" class="nav-icon"></span>
                    <span class="menu-text">Client</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.feedback.index')}}" class="">
                    <span data-feather="info" class="nav-icon"></span>
                    <span class="menu-text">Feedback</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.newsletter.index')}}" class="">
                    <span data-feather="mail" class="nav-icon"></span>
                    <span class="menu-text">Newsletter</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.career.index')}}" class="">
                    <span data-feather="mail" class="nav-icon"></span>
                    <span class="menu-text">Career</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.contact.index')}}" class="">
                    <span data-feather="phone-call" class="nav-icon"></span>
                    <span class="menu-text">Contact</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
