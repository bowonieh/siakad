<div class="content">
      <!-- Start: slider -->
      <!--<div class="slider">
        <div class="container-fluid">
          <div id="heroSlider" class="carousel slide">
            <div class="carousel-inner">
              <div class="active item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span7 marketting-info">
                      <h1>TELL ABOUT YOUR BUSINESS AND CORPORATE.</h1>
                      <p>
                        We are Bootbusiness and we are awesome.We solve your technology problems by our awesome products.
                        We are Bootbusiness and we are awesome.We solve your technology problems by our awesome products.
                      </p>
                      <h3>
                        <a href="product.html" class="btn">Learn more</a>
                      </h3>                      
                    </div>
                    <div class="span5">
                      <img src="<?php echo base_url();?>img/placeholder.jpg" class="thumbnail">
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span7 marketting-info">
                      <h1>TELL ABOUT YOUR NATURE OF WORK</h1>
                      <p>
                        We are Bootbusiness and we design ultimate website applications.
                        We are Bootbusiness and we design ultimate website applications.
                      </p>
                      <h3>
                        <a href="service.html" class="btn">Learn more</a>
                      </h3>                      
                    </div>
                    <div class="span5">
                      <img src="<?php echo base_url();?>img/placeholder.jpg" class="thumbnail">
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span7 marketting-info">
                      <h1>TELL ABOUT YOUR PRODUCT</h1>
                      <p>
                        Get excited about our products.We build awesome products in mobile.
                        We build awesome products in mobile.We build awesome products in mobile.
                      </p>
                      <h3>
                        <a href="#" class="btn btn-primary">Buy now</a>
                        <a href="product.html" class="btn">Learn more</a>
                      </h3>                      
                    </div>
                    <div class="span5">
                      <img src="<?php echo base_url();?>img/placeholder.jpg" class="thumbnail">
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span7 marketting-info">
                      <h1>TELL ABOUT YOUR ANOTHER PRODUCT</h1>
                      <p>
                        Get excited about our products.We build awesome products in mobile.
                        We build awesome products in mobile.We build awesome products in mobile.
                      </p>
                      <h3>
                        <a href="#" class="btn btn-primary">Buy now</a>
                        <a href="product.html" class="btn">Learn more</a>
                      </h3>                      
                    </div>
                    <div class="span5">
                      <img src="<?php echo base_url();?>img/placeholder.jpg" class="thumbnail">
                    </div>
                  </div>                  
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#heroSlider" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#heroSlider" data-slide="next">›</a>
          </div>
        </div>
      </div> -->
      <!-- End: slider -->
      <!-- Start: PRODUCT LIST -->
        <div class="container">
          
              <div class="page-header span8"><h3>Berita Sekolah</h3></div>
            <div class="page-header span4"><h3>Agenda Sekolah</h3></div>
          
          <div class="row-fluid">
            <ul class="thumbnails">
                <li class="span8">
                    <?php
                    foreach($berita as $bb){
                        ?>
                    
                <article class="post-row article">
                    <h3><a href="<?php echo base_url();?>index.php/berita/baca/<?php echo $bb->id_berita;?>"><?php echo $bb->judul;?></a></h3>
                </p>
                <i class="icon-tags"></i> <?php echo $bb->kategori;?>  
                | 
                <i class="icon-calendar"></i> <?php echo $bb->tanggal;?> 
                <hr>
                <p>
                    <?php echo word_limiter($bb->ISI,40);?>
                </p>
                <a class="link" href="<?php echo base_url();?>index.php/berita/baca/<?php echo $bb->id_berita;?>"><button class="btn btn-primary">READ MORE</button></a>
                
                    </article>
                    <?php
                    }
                    
                    ?>
                    
                </li>
              <!-- <li class="span4">
                <div class="thumbnail">
                  <img src="img/placeholder-360x200.jpg" alt="product name">
                  <div class="caption">
                    <h3>Product name</h3>
                    <p>
                      Few attractive words about your product.Few attractive words about your product.
                      Few attractive words about your product.Few attractive words about your product.
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Buy now</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
              <li class="span4">
                <div class="thumbnail">
                  <img src="img/placeholder-360x200.jpg" alt="product name">
                  <div class="caption">
                    <h3>Product name</h3>
                    <p>
                      Few attractive words about your product.Few attractive words about your product.
                      Few attractive words about your product.Few attractive words about your product.
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Buy now</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>-->
              <li class="span4">
                  <div class="box">
                  <?php 
                  foreach($isi AS $aa){
                      ?>
                  
                      <div class="caption">
                      <div class="circle-big circle<?php echo rand(1, 3);?>">
                
                          <span class="event-date"><?php echo date('M',strtotime($aa->tanggal));?><br><?php echo date('d',strtotime($aa->tanggal));?></span>
                
                
                </div>
                          <h4><?php echo $aa->judul;?></h4>
                    <p>
                      <?php echo word_limiter($aa->isi,10);?>
                    </p>
                      </div>
            
                  
                  <?php
                  }
                  ?></div>
                  
                  
                  
                <!-- <div class="thumbnail">
                  <img src="<?php echo base_url();?>img/placeholder-360x200.jpg" alt="product name">
                  <div class="caption">
                    <h3>Product name</h3>
                    <p>
                      Few attractive words about your product.Few attractive words about your product.
                      Few attractive words about your product.Few attractive words about your product.
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Buy now</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>-->
              </li>
            </ul>
          </div>
            
          <div class="page-header">
            <h2>Berita Akademik</h2>
          </div>
          <div class="row-fluid">
            <ul class="thumbnails">
                <?php foreach($akdm as $kk){
                    ?>
                <li class="span4">
                <div class="caption">
                    <h3><a href="<?php echo base_url();?>index.php/berita/baca/<?php echo $kk->id_berita;?>"><?php echo $kk->judul;?></a></h3>
                    <p>
                        <?php echo word_limiter($kk->ISI,20);?>
                    </p>
                </div>
                <div class="widget-footer">
                    <a href="<?php echo base_url();?>index.php/berita/baca/<?php echo $kk->id_berita;?>" class="btn btn-primary">Read More</a>&nbsp;
                    
                </div>
                </li>
                <?php 
                }
                ?>
              
            </ul>
          </div>
        </div>
      <!-- End: PRODUCT LIST -->
    </div>
    <!-- End: MAIN CONTENT -->
    