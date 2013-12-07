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
          <div class="page-header">
            <h2>Tambah Data Keluarga</h2>
          </div>
          <div class="row-fluid">
              <div class="breadcrumb span8"><a href="<?php echo base_url();?>">HOME</a><i class="icon-arrow-right"></i><a href="<?php echo base_url();?>index.php/keluarga">Keluarga</a><i class="icon-arrow-right"></i>Tambah Keluarga</div> 
            <ul class="thumbnails">
                 
                <li class="span8">
                    <?php 
                    if(!empty($sukses)){
                        ?>
                    <div class="alert alert-success">Data Berhasil ditambahkan</div>
                    <?php 
                    }
                    ?>
                    <?php echo form_open('','class="form-horizontal"');?>
                    <div class="form-group">
                     
                    <label class="control-label" for="input01">Nama Lengkap <font color="red">*</font></label>
                    <div class="controls">  
                    <input type="text" class="input-xlarge" id="input01" name="nama_lengkap">
                    <input type="hidden" name="id_user" value="<?php echo $dd->id_user;?>"/>
                    </p>
                    </div>
                    <label class="control-label" for="input01">Hubungan Keluarga <font color="red">*</font></label>
                    <div class="controls">  
                        <select name="hubungan_keluarga">
                            <option>Pilih</option>
                            <option value="Ayah Kandung">Ayah Kandung</option>
                            <option value="Ibu Kandung">Ibu Kandung</option>
                            <option value="Suami">Suami</option>
                            <option value="Istri">Istri</option>
                            <option value="Ayah Tiri">Ayah Tiri</option>
                            <option value="Ibu Tiri">Ibu Tiri</option>
                            <option value="Kakek">Kakek</option>
                            <option value="Nenek">Nenek</option>
                            <option value="Anak Kandung">Anak Kandung</option>
                            <option value="Anak Tiri">Anak Tiri</option>
                            <option value="Kakak">Kakak</option>
                            <option value="Adik">Adik</option>
                            
                        </select>
                    </p>
                    </div>
                    
                    
                    <div class="form-actions">  
                        <button type="submit" class="btn btn-primary" >Simpan</button>  
                        <a href="<?php echo base_url();?>index.php/keluarga"><button class="btn" type="button">Batal</button>  </a>
                    </div>
                    </div>
                    
                    
                    
                    <?php echo form_close();?>
                    <?php echo validation_errors();?>
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
              </li>--><!--
              <li class="span4">
                  
                <div class="thumbnail">
                  <img src="<?php echo base_url();?>img/placeholder-360x200.jpg" alt="product name">
                  <div class="caption">
                    <h3></h3>
                    <p>
                      SMK Negeri 1 Kota Bekasi adalah sekolah kejuruan di Kota Bekasi.
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
            </ul>
          </div>
          <div class="page-header">
            
          </div>
          <div class="row-fluid">
            <ul class="thumbnails">
                
              
            </ul>
          </div>-->
        </div>
      <!-- End: PRODUCT LIST -->
    </div>
    <!-- End: MAIN CONTENT -->
