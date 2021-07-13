 <!-- PRODUCT -->
 <?php
    foreach ($produk as $brg) {
    ?>
     <div class="col-lg-4 col-sm-6">
         <form method="post" action="<?php echo base_url(); ?>shop/shopping/tambah" accept-charset="utf-8" id="result">
             <div class="product text-center">
                 <div class="mb-3 position-relative">
                     <div class="badge text-white badge"></div>
                     <a class="d-block">
                         <img class="img-fluid w-100" src="<?php echo base_url() . 'assets/gambar/' . $brg['foto_produk'] ?>">
                     </a>
                     <div class="product-overlay">
                         <ul class="mb-0 list-inline">
                             <li class="list-inline-item m-0 p-0"><a href="<?php echo base_url('shop/shopping/checkout') ?>" class="btn btn-sm btn-dark">Pesan Sekarang</a></li>
                             <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="<?php echo base_url(); ?>shop/shopping/detail/<?php echo $brg['id_produk']; ?>"><i class="fas fa-expand"></i></a></li>
                         </ul>
                     </div>
                 </div>
                 <h6><a class="reset-anchor"><?php echo $brg['nama_produk']; ?></a></h6>
                 <p>Rp.<?php echo number_format($brg['harga']) ?></p>
             </div>
         </form>
     </div>
 <?php
    }
    ?>
 <?php echo $this->pagination->create_links(); ?>