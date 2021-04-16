<?php $this->load->view('Admin/template/head') ?>
<?php $this->load->view('Admin/template/nav') ?>
<?php $this->load->view('Admin/template/slid') ?>


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Produksi
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Data</a></li>
            <li class="active">Data Produksi</li>
          </ol>
        </section>
        <!-- Tambah Data -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="<?= base_url('C_Produksi/simpan') ?>" method="post">
       <div>
           <label for=""><b>Kode Komoditas :</b></label>
           <input type="text" class="form-control"  name="kd_komoditas" id="">
         </div>

       

         <div>
           <label for=""><b>Nama Komoditas :</b></label>
           <input type="text" class="form-control"  name="nama_komoditas" id="">
         </div>
         <div>
           <label for=""><b>Usia :</b></label>
           <input type="text" class="form-control"  name="usia" id="">
         </div>
         <div>
           <label for=""><b>Hasil :</b></label>
           <input type="text" class="form-control"  name="hasil" id="">
         </div>
         <div>
           <label for=""><b>Durasi :</b></label>
           <input type="text" class="form-control"  name="durasi" id="">
         </div>
        
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
    </form>
  </div>
</div>
<!-- Tutup Tambah Data -->
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i><span> Tambah Data</span></a></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead >
                      <tr >
                        
                        <th>No</th>
                        <th>Kode Komoditas</th>
                        <th>Nama Komoditas </th>
                        <th>Usia</th>
                        <th class="text-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?php
      $no=0;
            foreach($produksi as $a):?>
              
                 <td><?=$no++?></td>
                 <td><?=$a->kd_komoditas?></td>
				         <td><?=$a->nama_komoditas?></td>
                  <td><?=$a->usia?></td>
               
                  <td align="center">
                  <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                  <a href="<?php echo site_url('C_Komoditas/edit/'.$a->id) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                  <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                  
                  </td>
              			</tr>
       <?php endforeach;?>
                      </tr>
                    
                      
                    </tbody>
                   
                  </table>
                  </div>
                 
                </div><!-- /.box-body -->
              </div><!-- /.box -->

             
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


<?php $this->load->view('Admin/template/foot') ?> 