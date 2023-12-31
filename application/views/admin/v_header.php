<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $this->m_dah->get_option('blog_name'); ?></title>
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>upload/logo/1106_logo.png">
	<!-- Global stylesheets -->
	<link href="<?php echo base_url(); ?>assets_f/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo base_url(); ?>assets_f/css/sb-admin-2.css" rel="stylesheet">
	<!-- <link href="<?php echo base_url(); ?>assets_f/css/bootstrap.min.css" rel="stylesheet"> -->
	
	<link href="<?php echo base_url(); ?>assets_f/css/bootstrap-select.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css"> -->
	<link href="<?php echo base_url(); ?>assets_f/css/custom.css" rel="stylesheet">
	
	<!-- /global stylesheets -->
<script src="<?php echo base_url(); ?>assets_f/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_f/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


	<!-- /theme JS files -->
</head>

<body id="page-top">

<div id="wrapper">


    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion side_custom hidden-toggled" 
    id="accordionSidebar"
   
    >

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        
        <div class="d-block  sidebar-brand-text mx-3" >
         <i class="fa fa-envelope"></i> 
          <!-- <p style="font-size:10px"><?php echo $this->m_dah->status_login($this->session->userdata('level')) ?> </p> -->
          
        </div>

      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
	  <?php if($this->session->userdata('level') == "admin"){?>
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
      Admin	
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fa fa-archive" aria-hidden="true"></i>
          <span>Master Data </span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Semua Data:</h6>
            <a class="collapse-item" href="<?php echo base_url().'admin/penduduk'?>">Penduduk</a>
            <a class="collapse-item" href="<?php echo base_url().'admin/agama'?>">Agama</a>
            <a class="collapse-item" href="<?php echo base_url().'admin/pendidikan'?>">Pendidikan</a>
            <a class="collapse-item" href="<?php echo base_url().'admin/pekerjaan'?>">Pekerjaan</a>
            <a class="collapse-item" href="<?php echo base_url().'admin/jabatan'?>">Jabatan</a>
          
		  </div>
        </div>
      </li>

	  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#surat-colaps" aria-expanded="true" aria-controls="surat-colaps">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>Data Surat </span>
        </a>
         <div id="surat-colaps" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Semua Data Surat:</h6>
            <a class="collapse-item" href="<?php echo base_url().'admin/permohonan_surat'?>">Permohonan Surat</a>
            <a class="collapse-item" href="<?php echo base_url().'admin/arsip_surat'?>">Arsip Surat</a>
            <a class="collapse-item" href="<?php echo base_url().'admin/data_surat'?>">Tambah Surat</a>
            <a class="collapse-item" href="<?php echo base_url().'admin/atur_surat'?>">Pengaturan Surat</a>
          
      </div>
      </li>

     <hr class="sidebar-divider">
    <div class="sidebar-heading">
       Sekretaris
      </div>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/data_pribadi/'.$this->session->userdata('penduduk_id');?>">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <span>Data Pribadi</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <!-- Divider -->
<!--       <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Menu
      </div>

      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fa fa-list-ol" aria-hidden="true"></i>
          <span>Menu Management</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-table"></i>
          <span>Sub Menu Management</span></a>
      </li> -->
	<?php }?>

	<!------------------------ 
	|	end admin sidebar 
	|------------------------>

	<!------------------------ 
	|	start lurah sidebar 
	|------------------------>
	<?php if($this->session->userdata('level')== "lurah"){?>
		<hr class="sidebar-divider">
			<div class="sidebar-heading">
				Geuchik 
			</div>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/data_pribadi/'.$this->session->userdata('penduduk_id');?>">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <span>Data Pribadi</span></a>
      </li>

    <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        Laporan
      </div>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/penduduk/'.$this->session->userdata('penduduk_id');?>">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <span>Data Penduduk</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/arsip_surat_lurah/';?>">
          <i class="fas fa-mail-bulk    "></i>
          <span>Data Pengajuan Surat</span></a>
      </li>
      

      
	<?php }?>	

	<!------------------------ 
	|	end lurah sidebar 
	|------------------------>

	<!------------------------ 
	|	start rakyat sidebar 
	|------------------------>
	<?php if($this->session->userdata('level')== "rakyat"){?>

	<!-- <hr class="sidebar-divider"> -->
	 <!--  <div class="sidebar-heading">
        Sesi Penduduk
      </div> -->
        <hr class="sidebar-divider">
    <div class="sidebar-heading">
       Penduduk
      </div>
	  <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/data_pribadi/'.$this->session->userdata('penduduk_id');?>">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <span>Data Pribadi</span></a>
      </li>
      <hr class="sidebar-divider">
    <div class="sidebar-heading">
       Pengajuan Surat Pribadi
      </div>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/sesi_surat/';?>">
          <i class="fas fa-mail-bulk    "></i>
          <span>Ajukan Surat</span></a>
      </li>

         <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'user/arsip_surat/';?>">
          <i class="fas fa-archive"></i>
          <span>Riwayat Pengajuan Surat</span></a>
      </li>
	<?php }?>
	<!------------------------ 
	|	end rakyat sidebar 
	|------------------------>

      <hr class="sidebar-divider">
	  <div class="sidebar-heading">
        Pengaturan
      </div>

	  <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/user_edit/'.$this->session->userdata('id');?>">
          <i class="fa fa-user" aria-hidden="true"></i>
          <span>Profil Saya</span></a>
      </li>
	  
	  
	  <?php if($this->session->userdata('level') == "admin"){?>
	  
     

    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/settings'?>">
          <i class="fa fa-cog" aria-hidden="true"></i>
          <span>Pengaturan Web</span></a>
      </li>


    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/struktur_jabatan'?>">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <span>Hak Akses</span></a>
      </li>


	  <?php }?>
   <!--  <hr class="sidebar-divider">
	  <div class="sidebar-heading">
        Tentang
      </div>

	  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tentang" aria-expanded="true" aria-controls="tentang">
          <i class="fa fa-qrcode" aria-hidden="true"></i>
          <span>Tentang</span>
        </a>
        <div id="tentang" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Semua Data:</h6>
            <a class="collapse-item" href="<?php echo base_url().'admin/umum'?>">Umum</a>
            <a class="collapse-item" href="<?php echo base_url().'admin/struktur_organisasi'?>">Struktur Organisasi</a>
            <a class="collapse-item" href="<?php echo base_url().'admin/pelayanan_surat'?>">Pelayanan Surat</a>
            <a class="collapse-item" href="<?php echo base_url().'admin/developer'?>">Pengembang</a>

		  </div>
        </div>
      </li> -->
      <hr class="sidebar-divider">
	
	  <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/logout'?>">
        <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->	
	
	<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

	<!-- Sidebar Toggle (Topbar) -->
	<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3 buka">
	  <i class="fa fa-bars"></i>
	</button>
<div 
class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100  navbar-search"
style="width:85%!important"
>
<!-- <marquee behavior="scroll" direction="left" style="font-size:16px;font-weight:600;color:#6a1b9a;">
Selamat Datang <?php echo $this->m_dah->status_login($this->session->userdata('level')) ?>
&nbsp;Di Sistem Informasi Pelayanan Administrasi Kependudukan Desa Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara
</marquee> -->
</div>

	<!-- Topbar Navbar -->
	<ul class="navbar-nav ml-auto">

	  <!-- Nav Item - Search Dropdown (Visible Only XS) -->
	
	  <!-- Nav Item - Alerts -->
	  

	  <!-- Nav Item - Messages -->
    <?php if($this->session->userdata('level') == "rakyat"){?>
	  <li class="nav-item dropdown no-arrow mx-1" id="update_notif">
     <?php }else{ ?>
    <li class="nav-item dropdown no-arrow mx-1" >
    <?php } ?>  
		<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		  <i class="fas fa-envelope fa-fw"></i>
      <!-- Counter - Messages -->
      <?php if($this->session->userdata('level') == "admin"){?>
		  <span class="badge badge-danger badge-counter">
        <?php 
         $wh=array('status_surat' => "review");
         $total_review=$this->m_dah->edit_data($wh,'surat_mohon')->num_rows();
         echo $total_review;
         ?>
      </span>

      <?php }?>
      <!-- end total notifikasi admin -->

      <!-- start total notifkasi rakyat -->
      <?php if($this->session->userdata('level') == "rakyat"){?>
        <?php 
          $tot_not=$this->m_dah->cek_notif_user($this->session->userdata('penduduk_id'), 2)->num_rows();
          if($tot_not > 0 ){
         ?>  
		    <span class="badge badge-danger badge-counter" style="margin-right:-7px!important">
           cek
        </span>
         <?php }else{}?>

      <?php }?>
      <!-- end total notifikasi rakyat -->

      <!-- start total notifkasi lurah -->
      <?php if($this->session->userdata('level') == "lurah"){?>
		  <span class="badge badge-danger badge-counter">
        
      </span>
      <?php }?>
      <!-- end total notifikasi lurah -->

		</a>

    <!-- Dropdown - Messages -->
    <?php if($this->session->userdata('level') == "admin"){?>
		<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
		  <h6 class="dropdown-header">
			Notifikasi 
      </h6>
      <?php 
         $review=$this->m_dah->get_surat_limit('review',5)->result();
        foreach($review as $rv){
      ?>
      <a class="dropdown-item d-flex align-items-center" href="#">
        
        <div>
          <div class="small text-gray-500"><?php echo $rv->surat_mohon_id?></div>
          <span class="font-weight-bold"><?php echo $rv->ket_surat?></span>
        </div>
      </a>
        <?php } ?>
		  <a class="dropdown-item text-center small text-gray-500" href="<?php echo base_url().'admin/permohonan_surat'?>">Lihat selengkapnya</a>
    </div>
    <?php }?>

    <?php if($this->session->userdata('level') == "rakyat"){?>
		<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown" >
		  <h6 class="dropdown-header">
			Notifikasi
		  </h6>
      <?php
        $idx=$this->session->userdata('penduduk_id');
        $rakyat_notif=$this->m_dah->pilih_surat_limit($idx,6,'surat_mohon')->result();
        foreach ($rakyat_notif as $rdt) { 
      ?>
		    <?php 
          if($rdt->notif == "2"){
        ?>
           <a class="dropdown-item d-flex align-items-center" >
           <div>

          <div class="small text-gray-500"><?php echo $rdt->surat_mohon_id?></div>
          <span class="font-weight-bold"><?php echo $rdt->ket_surat?></span> 
          <div>
            <?php if($rdt->status_surat =="diterima"){?>
            <label class="labil labil-success small">Diterima</label>
            <?php }elseif($rdt->status_surat =="ditolak"){?>
            <label class="labil labil-danger small">Ditolak</label>

           <?php }?> 

          </div>
        </div>
      </a>
      
      <?php }}?>
      <a class="dropdown-item text-center small text-gray-500" href="<?php echo base_url().'admin/sesi_surat'?>">Lihat selengkapnya</a>

    </div>
    <?php }?>
	  </li>

    <!-- end notifkasi rakyat -->

	  <div class="topbar-divider d-none d-sm-block"></div>

	  <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow" style="text-transform: uppercase;font-size: 12px!important">
      
      <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     <?php echo $this->m_dah->status_login($this->session->userdata('level'));?>
      </a>
    </li>
    <div class="topbar-divider d-none d-sm-block"></div>
	  <li class="nav-item dropdown no-arrow">
		<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('name');?></span>
		  <i class="fa fa-user"></i>
		</a>
		<!-- Dropdown - User Information -->
		<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
		 
      <a class="dropdown-item" href="<?php echo base_url().'admin/user_edit/'.$this->session->userdata('id');?>">
			<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
			Profil
		  </a>
		<!--   <a class="dropdown-item" href="#">
			<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
			Settings
		  </a>
		  <a class="dropdown-item" href="#">
			<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
			Activity Log
		  </a> -->
		  <!-- <div class="dropdown-divider"></div> -->
		  <a class="dropdown-item" href="<?php echo base_url().'admin/logout' ?>" >
			<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
			Logout
		  </a>
		</div>
	  </li>

	</ul>

  </nav>
  <!-- End of Topbar -->


		