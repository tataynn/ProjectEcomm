<!-- NOTIFICATION -->
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
<!-- HERO SECTION-->
<div class="container">
    <section class="hero pb-3 bg-cover  d-flex align-items-center" style="background-image: url(<?php echo base_url('assets/gambar/img2/motor.jpg') ?>); background-position: 0 -50px;">
        <div class="container py-5">
            <div class="row px-4 px-lg-5">
                <div class="col-lg-6">
                    <p class="text-white small text-uppercase mb-2">Bengkel Online</p>
                    <h1 class="h2 text-uppercase mb-3 text-white">Selamat Datang </h1><a class="btn btn-dark" href="shop.html">Browse collections</a>
                </div>
            </div>
        </div>
    </section>
    <!-- CATEGORIES SECTION-->
    <section class="pt-5">
        <header class="text-center">
            <p class="small text-muted small text-uppercase mb-1">Carefully created collections</p>
            <h2 class="h5 text-uppercase mb-4">Browse our categories</h2>
        </header>
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0"><a class="category-item" href="<?php echo base_url('service/index') ?>"><img src="<?php echo base_url('assets/gambar/mubeng/montir.jpg') ?>" width="500" height="530"><strong class="category-item-title">Service</strong></a></div>
            <div class="col-md-6"><a class="category-item" href="<?php echo base_url('shop/shopping') ?>"><img src="<?php echo base_url('assets/gambar/mubeng/place.jpg') ?>" width="530" height="570"><strong class="category-item-title">MarketPlace</strong></a></div>
        </div>
    </section>
    <!-- NEWSLETTER-->
    <section class="py-5">
        <div class="container p-0">
            <div class="text-center">
                <h5 class="text-uppercase">Ingin Bergabung?</h5>
                <p class="text-small text-muted mb-0">Jadilah salah satu montir kami</p>
            </div>
            <div style="margin-left: 505px; margin-top:5px;">
                <form action="#">
                    <div class="input-group flex-column flex-sm-row mb-3">
                        <div class="input-group-append">
                            <button class="btn btn-dark btn-block" id="button-addon2" data-toggle="modal" data-target="#exampleModal">Daftar </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Pendaftaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('/login/produk/tambah_aksi'); ?>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input class="form-control" placeholder="Nama Produk" type="text" name="nama">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input class="form-control" placeholder="Alamat" type="text" name="alamat">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" placeholder="Email" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="username" name="username" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="password" name="password" />
                    </div>
                    <div class="form-group">
                        <label>Keahlian</label>
                        <select name="keahlian" class="form-control">
                            <option value="">--Pilih--</option>
                            <option value="">Tune Up</option>
                            <option value="">Check Up</option>
                            <option value="">Service Ringan</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label>No HP</label>
                        <input type="text" class="form-control" placeholder="No HP" name="nohp" />
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" class="form-control" name="foto" />
                    </div>

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-info">Daftar</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>