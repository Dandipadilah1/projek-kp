

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-book"></i>
            </div>
            
            <div class="sidebar-brand-text mx-3">e-Raport <sup></sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->

        <li class="nav-item active">
            <a class="nav-link" href="<?= site_url('Index');?>">
                <i class="fas fa-address-card"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            menu
        </div>

        <!-- Nav Item - Pages Collapse Menu -->        
        <li class="nav-item active">
            <a class="nav-link" href="<?= site_url('user/index');?>">
                <i class="fas fa-user"></i>
                <span>Pengguna</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="<?= site_url('main');?>">
                <i class="fas fa-download"></i>
                <span>Upload File</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-server"></i>
                <span>Data Sekolah</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">custom data :</h6>
                    <a class="collapse-item" href="<?= site_url('Siswaindex');?>">Data Siswa</a>
                    <a class="collapse-item" href="<?= site_url('guru/index');?>">Data Guru</a>
                    <a class="collapse-item" href="<?= site_url('mapel/index');?>">Mata Pelajaran</a>
                    <a class="collapse-item" href="<?= site_url('tahun_ajar/index');?>">Tahun Ajar</a>
                    <a class="collapse-item" href="<?= site_url('kelas/index');?>">Kelas</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-server"></i>
                <span>Data Raport</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="<?= site_url('rapor/kelas_10');?>">Rapor Kelas 10</a>
                    <a class="collapse-item" href="<?= site_url('rapor/kelas_11');?>">Rapor Kelas 11</a>
                    <a class="collapse-item" href="<?= site_url('rapor/kelas_12');?>">Rapor Kelas 12</a>
                </div>
            </div>
        </li>

        <hr class="sidebar-divider d-none d-md-block">
        <!-- Nav Item - log out -->
        <li class="nav-item">
            <a class="nav-link" href="tables.html" >
                <i class="fas fa-sign-out-alt"></i>
                <span>log out</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                            aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Search for..." aria-label="Search"
                                        aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <ul class=" py-2 px-4 d-none d-lg-block">
                            <?php if($this->session->userdata('username')) { ?>
                            <li><div>Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
                            <li><?php echo anchor('auth/logout','logout')  ?></li>
                            <?php } else {?>
                            <li><?php echo anchor('auth/login','login') ?></li>
                            <?php } ?>
                        </ul>


                    <div class="topbar-divider d-none d-sm-block"></div>

                </ul>

            </nav>
            <!-- End of Topbar -->