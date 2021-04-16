<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?= base_url() ?>asset/image/logo.jfif"  class="img-circle" width="100" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Administrator</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
            
                <a href="index.html">
                  <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
           
              </li>
        
        
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Master Data</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= base_url('C_Hasil_bumi') ?>"><i class="fa fa-circle-o"></i> Hasil Bumi </a></li>
                <li><a href="<?= base_url('C_Komoditas') ?>"><i class="fa fa-circle-o"></i> Komoditas </a></li>
                <li><a href="<?= base_url('C_Produksi') ?>"><i class="fa fa-circle-o"></i> Produksi </a></li>
                <li><a href="<?= base_url('C_Perintah_desa') ?>"><i class="fa fa-circle-o"></i> Perintah Desa </a></li>
                   </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-print"></i>
                <span>Laporan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Data Anggota </a></li>
                    </ul>
            </li>
           
         
            <li class="treeview">
              <a href="#">
                <i class="fa fa-money"></i>
                <span>Data Keuangan KAS</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> KAS Masuk </a></li>
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Kas Keluar </a></li>
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-print"></i> Laporan Kas </a></li>
             
              </ul>
            </li>
            <li>
              <a href="pages/calendar.html">
                <i class="fa fa-map"></i> <span>GIS</span>
                    </a>
            </li>

            <li>
              <a href="pages/calendar.html">
                <i class="fa fa-money"></i> <span>Transaksi</span>
                    </a>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-database"></i>
                <span>Database Backup</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Import </a></li>
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> export </a></li>
                    </ul>
            </li>
           
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cog"></i>
                <span>Pengaturan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Profil </a></li>
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Pengaturan Sistem </a></li>
                    </ul>
            </li>
      
            <li>
              <a href="pages/calendar.html">
                <i class="fa fa-sign-out"></i> <span>Keluar</span>
                    </a>
            </li>
        </section>
        <!-- /.sidebar -->
      </aside>