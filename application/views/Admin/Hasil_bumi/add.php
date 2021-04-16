<?php $this->load->view('Admin/template/head') ?>
<?php $this->load->view('Admin/template/nav') ?>
<?php $this->load->view('Admin/template/slid') ?>


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Tambah Data Hasil Bumi

          </h1>
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
            
                <?php 
			if(validation_errors() != false)
			{
				?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
				<?php
			}
			?>
      <form action="<?php base_url() ?>Simpan" method="POST">

   
         <div>
           <label for=""><b>Provinsi :</b></label>
           <select name="kd_provinsi" class="form-control" id="">
             <option value="">--Pilih Provinsi--</option>
           </select>
         </div>

         <div>
           <label for=""><b>Kota :</b></label>
           <select name="kd_kota" class="form-control" id="">
             <option value="">--Pilih kota--</option>
           </select>
         </div>

         <div>
           <label for=""><b>Nama Desa :</b></label>
           <input type="text" class="form-control" placeholder="Enter Nama Desa" name="nam_desa" id="">
         </div>
         <div>
           <label for=""><b>Nama Petani :</b></label>
           <input type="text" class="form-control" placeholder="Enter Nama Perani" name="nama_petani" id="">
         </div>

         
         <div>
           <label for=""><b>Swidaya :</b></label>
           <input type="text" class="form-control" placeholder="Enter Swidaya" name="swadaya" id="">
         </div>

         
         <div>
           <label for=""><b>Alamat Petani :</b></label>
          <textarea name="alamat_petani" class="form-control" id="" placeholder="Enter Alamat Petani" cols="5" rows="2"></textarea>
         </div>

         <div>
           <label for=""><b>Nomor HP PIC :</b></label>
          <input type="text" name="hp_pic" class="form-control " placeholder="087-863-301-421" id="">
          </div>

          <div>
           <label for=""><b>Email PIC :</b></label>
          <input type="email" name="email_pic" class="form-control " placeholder="Enter @gmail.com" id="">
          </div>

          <div>
           <label for=""><b>Luas Tanah :</b></label>
          <input type="number" name="luas_lahan" class="form-control " placeholder="Enter 100m" id="">
          </div>

          <div>
           <label for=""><b>Komoditas :</b></label>
          <select name="kd_komoditas" class="form-control" id="">
            <option value="">--Pilih Komoditas--</option>
          </select>
          </div>

          <div>
           <label for=""><b>Sub Komoditas :</b></label>
          <select name="kd_subkomoditas" class="form-control" id="">
            <option value="">--Pilih SubKomoditas--</option>
          </select>
          </div>

          <div>
           <label for=""><b>Tanggal Tanam :</b></label>
          <input type="date" name="tgl_tanam" class="form-control " placeholder="Enter Tanggal Tanam" id="">
          </div>

          <div>
           <label for=""><b>Estimasi Tanggal Panen :</b></label>
          <input type="date" name="estimasi_tgl_panen" class="form-control " placeholder="Enter Tanggal Tanam" id="">
          </div>

          <div>
           <label for=""><b>Estimasi Hasil Panen :</b></label>
          <input type="number" name="estimasi_hasil_panen" class="form-control " placeholder="Enter Berapa Hasil Panen" id="">
          </div>

          <div>
           <label for=""><b>Hasil Produksi :</b></label>
          <input type="text" name="hasil_produksi" class="form-control " placeholder="Enter Hasil Produksi" id="">
          </div>

          <div>
           <label for=""><b>Durasi :</b></label>
          <input type="number" name="durasi" class="form-control " placeholder="Enter Durasi Produksi" id="">
          </div>

          <div>
           <label for=""><b>Perusahaan Binaan :</b></label>
          <input type="text" name="perusahaan_binaan" class="form-control " placeholder="Enter Perusahaan Binaan" id="">
          </div>

          <div>
           <label for=""><b>Alamat Perusahaan Binaan :</b></label>
          <input type="text" name="alamat_perusahaan_binaan" class="form-control " placeholder="Enter Alamat Perusahaan Binaan" id="">
          </div>

          <div>
           <label for=""><b>No Hp PIC Perusahaan :</b></label>
          <input type="text" name="hp_pic_perusahaan" class="form-control " placeholder="Enter Nomor Telepon PIC Perusahaan binaan" id="">
          </div>

          <div>
           <label for=""><b>Email PIC Perusahaan :</b></label>
          <input type="email" name="email_pic_perusahaan" class="form-control " placeholder="Enter Email PIC Perusahaan binaan" id="">
          </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
</form>
      
   

       
              </div><!-- /.box -->

             
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


<?php $this->load->view('Admin/template/foot') ?> 