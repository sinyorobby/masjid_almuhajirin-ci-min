<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Ubah Produk</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url('admin/produk') ?>">Produk</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url('admin/produk/ubah') ?>">Ubah Produk</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Ubah Produk</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <input type="hidden" name="id" id="id" value="<?= $produk['id'] ?>">
                                    <div class="form-group">
                                        <label for="nama">Nama Produk</label>
                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Produk" value="<?= $produk['nama'] ?>">
                                        <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis">Jenis Produk</label>
                                        <input type="text" class="form-control" name="jenis" id="jenis" placeholder="Jenis Produk" value="<?= $produk['jenis'] ?>">
                                        <?= form_error('jenis', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Stok Produk</label>
                                        <input type="text" class="form-control" name="stok" id="stok" placeholder="Jenis Produk" aria-describedby="stok" value="<?= $produk['stok'] ?>">
                                        <?= form_error('stok', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga_beli">Harga Beli</label>
                                        <input type="number" class="form-control" name="harga_beli" id="harga_beli" placeholder="Harga Beli Produk" aria-describedby="harga_beli" value="<?= $produk['harga_beli'] ?>">
                                        <small id="harga_beli" class="form-text text-muted">Berisikan Angka</small>
                                        <?= form_error('harga_beli', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga_jual">Harga jual</label>
                                        <input type="number" class="form-control" name="harga_jual" id="harga_jual" placeholder="Harga jual Produk" aria-describedby="harga_jual" value="<?= $produk['harga_jual'] ?>">
                                        <small id="harga_jual" class="form-text text-muted">Berisikan Angka</small>
                                        <?= form_error('harga_jual', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi Produk</label>
                                        <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi Produk" aria-describedby="deskripsi" cols="30" rows="10" value="<?= $produk['deskripsi'] ?>">
                                        <?= form_error('deskripsi', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="file_image">Foto Produk Sekarang</label>
                                        <br>
                                        <img class="img-thumbnail" style="height: 150px;" src="<?= base_url('assets/img/upload/produk/') . $produk['foto'] ?>" alt="" srcset="">
                                        <br>
                                        <label for="file_image">Upload File Gambar untuk memperbaharui</label>
                                        <input type="file" class="dropify" name="file_image" data-max-file-size="1M" data-allowed-file-extensions="jpeg jpg png" aria-describedby="file" />
                                        <small id="file_image" class="form-text text-muted">File dengan format JPG, JPEG, PNG</small>
                                    </div>

                                    <a href="<?= base_url('admin/produk') ?>" class="btn btn-secondary">Batal</a>
                                    <button type="submit" class="btn btn-warning">Ubah</button>
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