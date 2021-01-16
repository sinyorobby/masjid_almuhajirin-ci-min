<header id="header" class="d-flex flex-column justify-content-center">

    <nav class="nav-menu">
        <ul>
            <li class="<?php if ($this->uri->segment(1) == "home") {
                            echo "active";
                        } elseif ($this->uri->segment(1) == "") {
                            echo "active";
                        } ?>"><a href="<?= base_url('home') ?>"><i class="bx bx-home"></i> <span>Home</span></a></li>

            <li class="<?php if ($this->uri->segment(1) == "profile") {
                            echo "active";
                        } ?>"><a href="<?= base_url('profile') ?>"><i class="bx bx-user"></i> <span>Profile</span></a></li>

            <li class="<?php if ($this->uri->segment(1) == "produk") {
                            echo "active";
                        } ?>"><a href="<?= base_url('produk') ?>"><i class="bx bx-grid-alt"></i> <span>Produk</span></a></li>
            <li class="<?php if ($this->uri->segment(1) == "kontak") {
                            echo "active";
                        } ?>"><a href="<?= base_url('kontak') ?>"><i class="bx bx-phone-call"></i> <span>Kontak</span></a></li>
            <li><a href="<?= base_url('admin/auth') ?>"><i class="bx bx-server"></i> <span>Login</span></a></li>
            <!-- <li><a href="#portfolio"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
            <li><a href="#services"><i class="bx bx-server"></i> <span>Services</span></a></li> -->
        </ul>
    </nav><!-- .nav-menu -->

</header><!-- End Header -->