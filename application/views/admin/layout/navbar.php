<nav class="pcoded-navbar menu-light ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div ">

            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="<?= base_url('assets/img/admin.jpg') ?>" alt="User-Profile-Image">
                    <div class="user-details">
                        <div id="more-details"><?= $user['nama'] ?> <i class="fa fa-caret-down"></i></div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#" data-toggle="tooltip" title="View Profile"><i class="feather icon-user"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="feather icon-mail" data-toggle="tooltip" title="Messages"></i><small class="badge badge-pill badge-primary">5</small></a></li>
                        <li class="list-inline-item"><a href="<?= base_url('admin/auth/logout') ?>" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
                    </ul>
                </div>
            </div>

            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?= base_url('admin/dashboard/index') ?>">Dashboard</a></li>
                        <!-- <li><a href="dashboard-sale.html">Sales</a></li>
                        <li><a href="dashboard-crm.html">CRM</a></li>
                        <li><a href="dashboard-analytics.html">Analytics</a></li>
                        <li><a href="dashboard-project.html">Project</a></li> -->
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Produk</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?= base_url('admin/produk') ?>">Produk</a></li>
                        <!-- <li><a href="dashboard-sale.html">Sales</a></li>
                        <li><a href="dashboard-crm.html">CRM</a></li>
                        <li><a href="dashboard-analytics.html">Analytics</a></li>
                        <li><a href="dashboard-project.html">Project</a></li> -->
                    </ul>
                </li>

            </ul>

        </div>
    </div>
</nav>