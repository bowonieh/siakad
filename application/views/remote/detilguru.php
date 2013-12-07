<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Data Guru SMK Negeri 1 Kota Bekasi">
    <meta name="author" content="Agus Wibowo">
    <title>Data Guru SMK Negeri 1 Kota Bekasi</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="<?php echo base_url();?>css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="<?php echo base_url();?>css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="<?php echo base_url();?>css/boot-business.css" rel="stylesheet">
  </head>
  <body>
    <!-- Start: HEADER -->
    <!--<header>
      <!-- Start: Navigation wrapper -->
      <!--<div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a href="index.html" class="brand brand-bootbus">Bootbusiness</a>
            <!-- Below button used for responsive navigation
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle active-link" data-toggle="dropdown">Products and Services<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="nav-header">PRODUCTS</li>
                    <li><a href="product.html">Product1</a></li>
                    <li><a href="product.html">Product2</a></li>
                    <li><a href="product.html">Product3</a></li>
                    <li><a href="all_products.html">All products</a></li>             
                    <li class="divider"></li>
                    <li class="nav-header">SERVICES</li>
                    <li><a href="service.html">Service1</a></li>
                    <li><a href="service.html">Service2</a></li>
                    <li><a href="service.html">Service3</a></li>
                    <li><a href="all_services.html">All services</a></li>
                  </ul>                  
                </li>
                <li class="dropdown">
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
                <li><a href="contact_us.html">Contact us</a></li>
                <li><a href="signup.html">Sign up</a></li>
                <li><a href="signin.html">Sign in</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Navigation wrapper 
    </header>-->
    <!-- End: HEADER -->
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <!-- Start: SERVICE LIST -->
        <div class="container">
            <?php if (empty($isi)){
                
            }else{
                
            ?>
            <div class="span12">
          <div class="row">
              <div class="span2">
                  
              </div><div class="span8 thumbnail">
                  
                  <div class="widget-header">
                      <h4>Profil <?php echo $isi->nama_guru; ?></h4>
                  </div></p>
                  
                  <div class="span3">
                      
                      <?php 
                      if(empty($isi->foto)){
                          echo '<img src="'.base_url().'img/upload/icon-user.png" class="image"/>';
                      }else{
                      echo '<img src="'.base_url().'img/upload/'.$isi->foto.'" class="image"/>';
                      
                      
                      }?>
                          
                  </div>
                  
                  <div class="span4">
                      
                      <table class="table table-condensed table-hover table-striped">
                          <tr><td>NAMA LENGKAP</td><td>:</td><td><?php echo $isi->nama_guru;?></td></tr>
                          <tr><td>NUPTK</td><td>:</td><td><?php echo $isi->nuptk;?></td></tr>
                          <tr><td>NIP</td><td>:</td><td><?php echo $isi->nip;?></td></tr>
                          <tr><td>Tempat Tanggal Lahir</td><td>:</td><td><?php echo $isi->tempat;?>,<?php echo $isi->tgl_lahir;?></td></tr>
                          <tr><td>Alamat</td><td>:</td><td><?php echo $isi->alamat;?></td></tr>
                      </table>
                  </div>
                  <div class="span7"></p>
                      <table class="table-hover table-striped table">
                          <tr><th>NO</th><th>NAMA SEKOLAH</th><th>JENJANG</th><th>Tahun Masuk</th><th>Tahun Lulus</th></tr>
                  <?php 
                  if(empty($pdk)){
                      
                  }else{
                      $no=1;
                  foreach($pdk as $pnd){
                      ?>
                          <tr><td><?php echo $no++;?></td><td><?php echo $pnd->nama_pendidikan;?></td><td><?php echo $pnd->jenjang;?></td><td><?php echo $pnd->thn_masuk;?></td><td><?php echo $pnd->thn_lulus;?></td></tr>
                          
                          <?php 
                    }
                  }
                  ?>
                  </table>
                  </div>
                  <div class="span7 form-actions"> 
                      <button class="btn btn-primary"><i class="icon-backward"></i> Kembali</button>
                      <button class="btn btn-success"><i class="icon-print"></i> Cetak</button>
                      
              </div>
              </div>
              
          </div>
            </div>
          
        </div>
      <!-- End: SERVICE LIST -->
    </div>
    <?php 
            }
            ?>
    <!-- End: MAIN CONTENT -->
    <!-- Start: FOOTER 
    <footer>
      <!-- <div class="container">
        <div class="row">
          <div class="span2">
            <h4><i class="icon-star icon-white"></i> Products</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="product.html">Product1</a></li>
                <li><a href="product.html">Product2</a></li>
                <li><a href="product.html">Product3</a></li>
                <li><a href="all_products.html">All products</a></li>
              </ul>
            </nav>
            <h4><i class="icon-cogs icon-white"></i> Services</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="service.html">Service1</a></li>
                <li><a href="service.html">Service2</a></li>
                <li><a href="service.html">Service3</a></li>
                <li><a href="all_services.html">All services</a></li>              
              </ul>
            </nav>
          </div>
          <div class="span2">
            <h4><i class="icon-beaker icon-white"></i> About</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="our_works.html">Our works</a></li>
                <li><a href="patnerships.html">Patnerships</a></li>
                <li><a href="leadership.html">Leadership</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="events.html">Events</a></li>
                <li><a href="blog.html">Blog</a></li>
              <ul>
            </nav>          
          </div>
          <div class="span2">
            <h4><i class="icon-thumbs-up icon-white"></i> Support</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="contact_us.html">Contact us</a></li>            
              </ul>
            </nav>
            <h4><i class="icon-legal icon-white"></i> Legal</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="#">License</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Security</a></li>      
              </ul>
            </nav>            
          </div>
          <div class="span3">
            <h4>Get in touch</h4>
            <div class="social-icons-row">
              <a href="#"><i class="icon-twitter"></i></a>
              <a href="#"><i class="icon-facebook"></i></a>
              <a href="#"><i class="icon-linkedin"></i></a>                                         
            </div>
            <div class="social-icons-row">
              <a href="#"><i class="icon-google-plus"></i></a>              
              <a href="#"><i class="icon-github"></i></a>
              <a href="mailto:soundar.rathinasamy@gmail.com"><i class="icon-envelope"></i></a>        
            </div>
            <div class="social-icons-row">
              <i class="icon-phone icon-large phone-number"></i> +919750227877
            </div>
          </div>      
          <div class="span3">
            <h4>Get updated by email</h4>
            <form>
              <input type="text" name="email" placeholder="Email address">
              <input type="submit" class="btn btn-primary" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
      <hr class="footer-divider">
      <div class="container">
        <p>
          &copy; 2012-3000 Bootbusiness, Inc. All Rights Reserved.
        </p>
      </div>
    </footer>
    <!-- End: FOOTER -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/boot-business.js"></script>
  </body>
</html>
