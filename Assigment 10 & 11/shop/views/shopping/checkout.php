<!-- BILLING ADDRESS-->
<section class="py-5">
  <h2 class="h5 text-uppercase mb-4">Billing details</h2>
  <div class="row">
    <div class="col-lg-8">


      <form action="<?php echo base_url() ?>shop/shopping/proses_order" method="post" name="frmCO" id="frmCO">
        <div class="row">
          <div class="col-lg-12 form-group">
            <label class="text-small text-uppercase" for="firstName">Nama Pelanggan</label>
            <input class="form-control form-control-lg" id="nama" name="nama" type="text" placeholder="Enter your full name">
          </div>
          <div class="col-lg-12 form-group">
            <label class="text-small text-uppercase" for="email">Kecamatan</label>
            <input class="form-control form-control-lg" id="email" name="kecamatan" type="kecamatan" placeholder="Kecamatan">
          </div>
          <div class=" col-lg-12 form-group">
            <label class="text-small text-uppercase" for="email">Alamat</label>
            <input class="form-control form-control-lg" id="email" name="email" type="email" placeholder="e.g Jl Mawat No.57">
          </div>
          <div class=" col-lg-12 form-group">
            <label class="text-small text-uppercase" for="kecamatan">Layanan Jasa</label>
            <input class="form-control form-control-lg" id="kec" name="kec" type="text">
          </div>
          <div class="col-lg-12 form-group">
            <label class="text-small text-uppercase" for="phone">No. Hp</label>
            <input class="form-control form-control-lg" id="telp" name="telp" type="tel" placeholder="e.g. +62 81234567890">
          </div>
          <div class="col-lg-12 form-group">
            <label class="text-small text-uppercase" for="kodepos">Tanggal Order</label>
            <input class="form-control form-control-lg" id="kodepos" name="kodepos" type="date">
          </div>
          <div class="col-lg-12 form-group">
            <button class="btn btn-dark" type="submit">Place order</button>
          </div>
        </div>
      </form>


    </div>
    
        </div>
      </div>
    </div>
  </div>
</section>
</div>