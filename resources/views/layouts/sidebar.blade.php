<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img
            src="{{ asset('assets/img/AdminLTELogo.png') }}"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
        />
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img
                    src="{{ asset('assets/img/user2-160x160.jpg') }}"
                    class="img-circle elevation-2"
                    alt="User Image"
                />
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul
                class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false"
            >
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Beranda</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Tahun Ajaran
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Tahun Ajaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Tahun Ajaran</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item {{ (request()->routeIs('jurusan.index') || request()->routeIs('jurusan.create')) ? 'menu-open' : '' }}"
                >
                    <a
                        href="#"
                        class="nav-link {{ (request()->routeIs('jurusan.index') || request()->routeIs('jurusan.create')) ? 'active' : '' }}"
                    >
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Jurusan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a
                                href="{{ route('jurusan.create') }}"
                                class="nav-link {{ request()->routeIs('jurusan.create') ? 'active' : '' }}"
                            >
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Jurusan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="{{ route('jurusan.index') }}"
                                class="nav-link {{ request()->routeIs('jurusan.index') ? 'active' : '' }}"
                            >
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Jurusan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Kelas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Kelas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Kelas</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Guru
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Guru</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Guru</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Siswa
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Siswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Siswa</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a
                        href="#"
                        class="nav-link"
                        onclick="event.preventDefault(); 
                        document.getElementById('logout-form').submit();"
                    >
                        <form
                            id="logout-form"
                            action="{{ route('logout') }}"
                            method="post"
                        >
                            @csrf

                            <i class="nav-icon fas fa-th"></i>
                            <p>Keluar</p>
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
