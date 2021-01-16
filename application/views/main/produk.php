<main id="main">
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>GALERI PRODUK</h2>
                <p>Berikut Adalah Produk kami</p>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <?php foreach ($produk as $p) : ?>
                        <div class="col mb-4 ">
                            <div class="card" style="width: 18rem;">
                                <img src="<?= base_url('assets/img/upload/produk/') . $p['foto'] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $p['nama'] ?></h5>
                                    <p class="card-text"><?= $p['deskripsi'] ?></p>
                                    <a href="https://wa.me/+6281234532144?text=Assalammu'alaikum%20Saya%20Ingin%20membeli%20Produk%20<?= $p['nama'] ?>%20dengan%20harga%20<?= $p['harga_jual'] ?>" class="btn btn-success">Beli</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>






                <!-- START PRODUK LAMA -->
                <!-- <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-pills card-header-pills" id="jadwal" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#sembako" role="tab" aria-controls="harian" aria-selected="true">Sembako</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#perabot" role="tab" aria-controls="bulanan" aria-selected="false">Perabot Rumah Tangga</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#kesehatan" role="tab" aria-controls="comingsoon" aria-selected="false">Kesehatan</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Galeri Produk</h4>
                        <h6 class="card-subtitle mb-2">Masjid Al-Muhajirin</h6>

                        <div class="tab-content mt-3">
                            <div class="tab-pane active" id="sembako" role="tabpanel" aria-labelledby="harian-tab">
                                <table class="table table-bordered col-md-auto col-sm-auto">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Deskripsi</th>
                                            <th>Harga</th>
                                            <th>Gambar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Beras Pandan Wangi</td>
                                            <td>beras pandan wangi punya aroma khas yang membuat nafsu makan bertambah. Varian beras ini pun juga akan sangat pulen setelah ditanak. Beras pandan wangi tidak berwarna putih bersih, tapi sedikit kekuningan.</td>
                                            <td>Rp.63.000/5Kg</td>
                                            <td>
                                                <div class="portfolio-item filter-app">
                                                    <div class="portfolio-wrap">
                                                        <img src="<?= base_url('assets') ?>/img/beras1.jpg" class="img-fluid" alt="">
                                                        <div class="portfolio-info">
                                                            <p>Beras Pandan Wangi</p>
                                                            <div class="portfolio-links">
                                                                <a href="<?= base_url('assets') ?>/img/beras1.jpg" data-gall="portfolioGallery" class="venobox" title="Beras Pandan Wangi"><i class="bx bx-search-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-success">Beli</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Beras Rojo Lele</td>
                                            <td>Varian beras yang ini juga sangat pulen setelah ditanak. Beras rojolele juga punya aroma yang harum meskipun tidak seharum pandan wangi. Bentuk dari beras ini bulat dan sedikit memanjang</td>
                                            <td>Rp.56.000/5Kg</td>
                                            <td>
                                                <div class="portfolio-item filter-web">
                                                    <div class="portfolio-wrap">
                                                        <img src="<?= base_url('assets') ?>/img/beras2.jpg" class="img-fluid" alt="">
                                                        <div class="portfolio-info">
                                                            <p>Beras Rojo Lele</p>
                                                            <div class="portfolio-links">
                                                                <a href="<?= base_url('assets') ?>/img/beras2.jpg" data-gall="portfolioGallery" class="venobox" title="Beras Pandan Wangi"><i class="bx bx-search-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-success">Beli</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Beras Setra Ramos</td>
                                            <td>Beras ini juga sering jadi pilihan karena harganya yang sangat terjangkau. Ada baiknya juga tidak terlalu banyak memasaknya karena varian beras ini lebih cepat basi. Beras Setra Ramos sama sekali tidak punya aroma. Bentuknya pun seperti beras pada umumnya, panjang dan lonjong</td>
                                            <td>Rp.50.000/5Kg</td>
                                            <td>
                                                <div class="portfolio-item filter-card">
                                                    <div class="portfolio-wrap">
                                                        <img src="<?= base_url('assets') ?>/img/beras3.jpg" class="img-fluid" alt="">
                                                        <div class="portfolio-info">
                                                            <p>Beras Setra Ramos</p>
                                                            <div class="portfolio-links">
                                                                <a href="<?= base_url('assets') ?>/img/beras3.jpg" data-gall="portfolioGallery" class="venobox" title="Beras Pandan Wangi"><i class="bx bx-search-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-success">Beli</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane" id="perabot" role="tabpanel" aria-labelledby="bulanan-tab">
                                <p class="card-text">Coming Soon
                                </p>
                                <a href="#" class="card-link text-danger">Coming Soon</a>
                            </div>

                            <div class="tab-pane" id="kesehatan" role="tabpanel" aria-labelledby="deals-tab">
                                <p class="card-text">Coming Soon</p>
                                <a href="#" class="btn btn-danger btn-sm">Coming Soon</a>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- END PRODUK LAMA -->
            </div>

            <!-- KUDU DIHAPUS -->



        </div>

        </div>
    </section>
</main>