<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Hapus Produk</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url('admin/produk') ?>">Produk</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url('admin/produk/hapus') ?>">Hapus Produk</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hapus Produk</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <input type="hidden" name="id" id="id" value="<?= $produk['id'] ?>">
                                    <div class="form-group">
                                        <h5 class="text-semi-bold text-center">Apakah Anda yakin menghapus data <strong class="badge badge-pill-margin-center badge-danger badge-center text-semi-bold "><?= $produk['nama'] ?></strong> dengan foto
                                            <br>
                                            <img class="img-thumbnail mt-3" style="height: 150px;" src="<?= base_url('assets/img/upload/produk/') . $produk['foto'] ?>" alt="" srcset="">
                                        </h5>
                                        <br>
                                        <h5 class="text-semi-bold text-center">
                                            Data yang dihapus <strong class="badge badge-pill badge-danger">tidak dapat dikembalikan!</strong>
                                        </h5>
                                    </div>
                                    <a href="<?= base_url('admin/produk') ?>" type="submit" class="btn btn-secondary">Batal</a>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- [ Main Content ] end -->

    </div>
</section>