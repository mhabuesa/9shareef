<nav id="sidebar" aria-label="Main Navigation">
    <div class="content-header">
        <a class="fw-semibold text-dual" href="{{ route('admin.dashboard') }}">
            <span class="smini-visible">
                <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide fs-5 tracking-wider">OneUI</span>
        </a>
        <div>
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout"
                data-action="dark_mode_toggle">
                <i class="far fa-moon"></i>
            </button>
            <div class="dropdown d-inline-block ms-1">
                <button type="button" class="btn btn-sm btn-alt-secondary" id="sidebar-themes-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-brush"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0"
                    aria-labelledby="sidebar-themes-dropdown">
                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_light"
                        href="javascript:void(0)">
                        <span>Sidebar Light</span>
                    </a>
                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_dark"
                        href="javascript:void(0)">
                        <span>Sidebar Dark</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_light"
                        href="javascript:void(0)">
                        <span>Header Light</span>
                    </a>
                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_dark"
                        href="javascript:void(0)">
                        <span>Header Dark</span>
                    </a>
                </div>
            </div>
            <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close"
                href="javascript:void(0)">
                <i class="fa fa-fw fa-times"></i>
            </a>
        </div>
    </div>
    <div class="js-sidebar-scroll">
        <div class="content-side">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                        href="{{ route('admin.dashboard') }}">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-main-heading">Category Management</li>
                <li
                    class="nav-main-item {{ request()->routeIs('admin.category.*') ? 'open' : (request()->routeIs('admin.subcategory.*') ? 'open' : '') }}">
                    <a class="nav-main-link nav-main-link-submenu {{ request()->routeIs('admin.category.*') ? 'active' : '' }}"
                        data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fas fa-file-invoice-dollar"></i>
                        <span class="nav-main-link-name">Categories</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link {{ request()->routeIs('admin.category.index') ? 'active' : '' }}"
                                href="{{ route('admin.category.index') }}">
                                <span class="nav-main-link-name">
                                    <i class="fas fa-layer-group me-2"></i>Categories
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-heading">
                    </i> Post Management
                </li>
                <li class="nav-main-item {{ request()->routeIs('admin.posts.*') ? 'open' : '' }}">
                    <a class="nav-main-link nav-main-link-submenu {{ request()->routeIs('admin.posts.*') ? 'active' : '' }}"
                        data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">

                        <i class="nav-main-link-icon fas fa-newspaper"></i>
                        <span class="nav-main-link-name">Posts</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link {{ request()->routeIs('admin.posts.create') ? 'active' : '' }}"
                                href="{{ route('admin.posts.create') }}">
                                <span class="nav-main-link-name">
                                    <i class="fas fa-circle-plus me-2"></i> Add New Post
                                </span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link {{ request()->routeIs('admin.posts.index') ? 'active' : (request()->routeIs('admin.posts.show') ? 'active' : '') }}"
                                href="{{ route('admin.posts.index') }}">
                                <span class="nav-main-link-name">
                                    <i class="fas fa-file-invoice me-2"></i> Post List
                                </span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link {{ request()->routeIs('admin.posts.trash') ? 'active' : '' }}"
                                href="{{ route('admin.posts.trash') }}">
                                <span class="nav-main-link-name">
                                    <i class="fas fa-trash me-2"></i>Trash
                                </span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link {{ request()->routeIs('admin.posts.featured') ? 'active' : '' }}"
                                href="{{ route('admin.posts.featured') }}">
                                <span class="nav-main-link-name">
                                    <i class="fas fa-star me-2"></i>Featured Posts
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link {{ request()->routeIs('admin.banner.*') ? 'active' : '' }}"
                        href="{{ route('admin.banner.index') }}">
                        <span class="nav-main-link-name">
                            <i class="fas fa-bullhorn me-2"></i>Banner Management
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
