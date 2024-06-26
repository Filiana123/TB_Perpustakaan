<aside class="left-sidebar">
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <h3 class="text-center">Perpustakaan</h3>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->is('admin/dashboard*') ? 'active' : '' }}"
                        href="{{ route('dashboard.admin') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">UI COMPONENTS</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->is('admin/category-book*') ? 'active' : '' }}"
                        href="{{ route('category-book.index') }}" aria-expanded="false">
                        <span>
                            <i class="fa-solid fa-bookmark fs-5"></i>
                        </span>
                        <span class="hide-menu">Kategori Buku</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->is('admin/book*') ? 'active' : '' }}"
                        href="{{ route('book.index') }}" aria-expanded="false">
                        <span>
                            <i class="fa-solid fa-book fs-5"></i>
                        </span>
                        <span class="hide-menu">Buku</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->is('admin/student*') ? 'active' : '' }}"
                        href="{{ route('student.index') }}" aria-expanded="false">
                        <span>
                            <i class="fa-solid fa-user fs-5"></i>
                        </span>
                        <span class="hide-menu">Siswa</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->is('admin/borrow*') ? 'active' : '' }}"
                        href="{{ route('borrow.index') }}" aria-expanded="false">
                        <span>
                            <i class="fa-solid fa-hand-point-right fs-5"></i>
                        </span>
                        <span class="hide-menu">Peminjaman</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->is('admin/return*') ? 'active' : '' }}"
                        href="{{ route('return.index') }}" aria-expanded="false">
                        <span>
                            <i class="fa-solid fa-hand-point-left fs-5"></i>
                        </span>
                        <span class="hide-menu">Pengembalian</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">AUTH</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->is('admin/user*') ? 'active' : '' }}"
                        href="{{ route('user.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-login"></i>
                        </span>
                        <span class="hide-menu">Akun</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
