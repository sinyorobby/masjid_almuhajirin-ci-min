<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Produk</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Produk</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- Config table start -->

            <div class="col-sm-12">
                <?php if ($this->session->flashdata('produk')) : ?>
                    <div class="alert alert-success alert-dismissible fade show " role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>Data <strong>Produk </strong>Berhasil <?= $this->session->flashdata('produk') ?>
                    </div>
                <?php endif ?>
                <div class="card">
                    <div class="card-header">
                        <h5>Data Produk</h5>
                        <a href="<?= base_url('admin/produk/tambah') ?>" class="btn btn-primary float-right my-auto">Tambah</a>
                    </div>
                    <div class="card-body">
                        <table id="res-config" class="display table table-striped table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis</th>
                                    <th>Stok</th>
                                    <th>Harga Beli</th>
                                    <th>Harga Jual</th>
                                    <th>Foto</th>
                                    <th>Ubah</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                ?>
                                <?php foreach ($produk as $p) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $p['nama'] ?></td>
                                        <td><?= $p['jenis'] ?></td>
                                        <td><?= $p['stok'] ?></td>
                                        <td><?= $p['harga_beli'] ?></td>
                                        <td><?= $p['harga_jual'] ?></td>
                                        <td><img class="img-thumbnail" style="height: 150px;" src="<?= base_url('assets/img/upload/produk/') . $p['foto'] ?>" alt="" srcset=""></td>
                                        <td> <a href="<?= base_url('admin/produk/ubah/') ?><?= $p['id'] ?>" class="btn btn-warning">UBAH</a></td>
                                        <td> <a href="<?= base_url('admin/produk/hapus/') ?><?= $p['id'] ?>" class="btn btn-danger">HAPUS</a></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Config table end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>