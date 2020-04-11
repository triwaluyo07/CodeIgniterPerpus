<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('home') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Perpustakaan <sup>V 2.0</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('home') ?>">
            <i class="fas fa-home"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
        <a class="nav-link" href="<?php echo site_url('Buku') ?>">
            <i class="fas fa-list text-white"></i>
            <span>Buku</span>
        </a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <?php if ($this->session->userdata('level') === '1') : ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Member') ?>">
                <i class="fas fa-fw fa-users text-white"></i>
                <span>Member</span></a>
        </li>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <?php if ($this->session->userdata('level') === '1') : ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo site_url('Peminjam') ?>">
                <i class="fas fa-fw fa-folder text-white"></i>
                <span>Peminjaman</span>
            </a>
        </li>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>