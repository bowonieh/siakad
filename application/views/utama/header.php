<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Siakad | Sistem Informasi Akademik SMK Negeri 1 Kota Bekasi">
    <meta name="author" content="Agus Wibowo">
    <title>Sistem Informasi Akademik Versi 1.2</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="<?php echo base_url();?>css/bootstrap-responsive.min.css" rel="stylesheet">
   
    <link href="<?php echo base_url();?>css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="<?php echo base_url();?>css/boot-business.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/datepicker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/normalize.css" rel="stylesheet">
     <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script>
$(function() {
$( "#datepicker" ).datepicker({dateFormat:'yy-mm-dd'});
});
</script>
  </head>
  <body>
    <!-- Start: HEADER -->
    <header>
        <?php if ($this->session->userdata('level')==='1'){
            ?>
            <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
              <span class="row">
                  <span class="span8">
                  <a href="<?php echo base_url();?>index.php/user" class="brand brand-bootbus">SIAKAD V1.2</a>
                     
                  </span>
                  <span class="span8">
                      <font class="header_label">Sistem Informasi Akademik SMK Negeri 1 Kota Bekasi (admin area)</font>
                     
                  </span>
              </span>
            
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">ADMINISTRASI SISTEM<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="nav-header">MENU</li>
                    <li><a href="product.html">JURUSAN</a></li>
                    <li><a href="<?php echo base_url();?>index.php/user/kelas">KELAS</a></li>
                    <li><a href="<?php echo base_url();?>index.php/guru">GURU</a></li>
                    <li><a href="all_products.html">SISWA</a></li>             
                    <li class="divider"></li>
                    <li class="nav-header">SERVICES</li>
                    <li><a href="service.html">Service1</a></li>
                    <li><a href="service.html">Service2</a></li>
                    <li><a href="service.html">Service3</a></li>
                    <li><a href="all_services.html">All services</a></li>
                  </ul>                  
                </li>
                <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="our_works.html">Our works</a></li>
                    <li><a href="patnerships.html">Parnerships</a></li>
                    <li><a href="leadership.html">Leadership</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="blog.html">Blog</a></li>
                  </ul>
                </li>-->
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="contact_us.html">Contact us</a></li>
                <li><a href="<?php echo base_url();?>index.php/user/keluar">Keluar</a></li>
                <li><a href="signin.html">Sign in</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Navigation wrapper -->   
  
    <!-- End: HEADER -->
                <?php 
        }elseif($this->session->userdata('level')==='2'){
            
            $id = $this->session->userdata('username');
            $walas = $this->mguru->getidguru($id);
            $id_kelas = $walas->row('id_kelas');
        ?>
             <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <span class="row">
                  <span class="span8">
                  <a href="<?php echo base_url();?>index.php/user" class="brand brand-bootbus">SIAKAD V 1.2</a>
                     
                  </span>
                  <span class="span8">
                      <font class="header_label">Sistem Informasi Akademik SMK Negeri 1 Kota Bekasi</font>
                     
                  </span>
              </span>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu Guru<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="nav-header">MENU</li>
                    <li><a href="">JURUSAN</a></li>
                    <li><a href="<?php echo base_url();?>index.php/user/kelas">KELAS</a></li>
                    <!-- <li><a href="product.html">GURU</a></li> -->
                    <li><a href="">SISWA</a></li>             
                    <li class="divider"></li>
                    <li class="nav-header">Akademik</li>
                    <li><a href="<?php echo base_url();?>index.php/mapel">Mata Pelajaran Saya</a></li>
                    
                    <?php
                    if (!empty($id_kelas)){
                        ?>
                    <li class="nav-header">Wali Kelas</li>
                    <li><a href="<?php echo base_url();?>index.php/walas/<?php echo $id_kelas;?>">Kelas</a></li>
                    <?php
                    }
                    
                    ?>
                    <!-- <li><a href="service.html">Service2</a></li>
                    <li><a href="service.html">Service3</a></li>
                    <li><a href="all_services.html">All services</a></li>-->
                  </ul>                  
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Pribadi Pendidik<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="nav-header">Profil Pendidik</li>
                        <li><a href="<?php echo base_url();?>index.php/profil">Profil Saya</a></li>
                        <li><a href="<?php echo base_url();?>index.php/keluarga">Data Keluarga</a></li>
                        
                        <li><a href="<?php echo base_url();?>index.php/rpendidikan">Riwayat Pendidikan</a></li>
                        <!--<li><a href="<?php echo base_url();?>index.php/rpelatihan">Riwayat Pelatihan</a></li>-->
                        <li><a href="<?php echo base_url();?>index.php/password">Password</a></li>
                    </ul>
                </li>
                <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="our_works.html">Our works</a></li>
                    <li><a href="patnerships.html">Parnerships</a></li>
                    <li><a href="leadership.html">Leadership</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="blog.html">Blog</a></li>
                  </ul>
                </li>-->
                
                <li><a href="<?php echo base_url();?>index.php/user/keluar">Keluar</a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    
    
    <?php
        }elseif($this->session->userdata('level')==7){
            ?>

        <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
              <span class="span8">
                  <a href="<?php echo base_url();?>index.php/user" class="brand brand-bootbus">SIAKAD V1.2</a>
                     
                  </span>
                  <span class="span8">
                      <font class="header_label">Sistem Informasi Akademik SMK Negeri 1 Kota Bekasi</font>
                     
                  </span>
            
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu Siswa<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="nav-header">MENU</li>
                    <li><a href="<?php echo base_url();?>index.php/user/kelas">KELAS</a></li>
                    <!-- <li><a href="product.html">GURU</a></li>
                    <li><a href="all_products.html">SISWA</a></li>-->
                    <li><a href="<?php echo base_url();?>index.php/profil">PROFIL SAYA</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Akademik</li>
                    <li><a href="<?php echo base_url();?>index.php/siswa/rencanabelajar">Rencana Belajar</a></li>
                    <li><a href="<?php echo base_url();?>index.php/siswa/mapelsaya">Mata Pelajaran Saya</a></li>
                    <li><a href="<?php echo base_url();?>index.php/siswa/hasilbelajar">Hasil Belajar</a></li>
                    <li><a href="all_services.html">All services</a></li>
                  </ul>                  
                </li>
                <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="our_works.html">Our works</a></li>
                    <li><a href="patnerships.html">Parnerships</a></li>
                    <li><a href="leadership.html">Leadership</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="blog.html">Blog</a></li>
                  </ul>
                </li>-->
                
                <li><a href="<?php echo base_url();?>index.php/user/keluar">Keluar</a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>

    
    
    <?php 
    
        }elseif($this->session->userdata('level')==='10'){
            
            ?>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a href="<?php echo base_url();?>index.php/user" class="brand brand-bootbus">SIAKAD V1.2</a>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu Absensi<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="nav-header">MENU</li>
                    <li><a href="product.html">JURUSAN</a></li>
                    <li><a href="<?php echo base_url();?>index.php/user/kelas">KELAS</a></li>
                    <!--<li><a href="product.html">GURU</a></li>
                    <li><a href="all_products.html">SISWA</a></li>              -->
                    <li class="divider"></li>
                    <li class="nav-header">Absensi Harian</li>
                    <li><a href="<?php echo base_url();?>index.php/user/absensisiswa">Absensi Siswa</a></li>
                    <li><a href="<?php echo base_url();?>index.php/jurnalkbm">Jurnal Harian</a></li>
                    
                  </ul>                  
                </li>
                <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="our_works.html">Our works</a></li>
                    <li><a href="patnerships.html">Parnerships</a></li>
                    <li><a href="leadership.html">Leadership</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="blog.html">Blog</a></li>
                  </ul>
                </li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="contact_us.html">Contact us</a></li> -->
                <li><a href="<?php echo base_url();?>index.php/user/keluar">Keluar</a></li>
                <!-- <li><a href="signin.html">Sign in</a></li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Navigation wrapper -->   
  
    <!-- End: HEADER -->
    
    <?php
        }
        
        ?>
    </header>  
      <!-- Start: Navigation wrapper -->
      