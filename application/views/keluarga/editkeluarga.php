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
            <h2>Update Data Keluarga : <?php echo $isi->nama_lengkap;?></h2>
          </div>
          <div class="row-fluid">
              <div class="breadcrumb span8"><a href="<?php echo base_url();?>">HOME</a><i class="icon-arrow-right"></i><a href="<?php echo base_url();?>index.php/keluarga">Keluarga</a><i class="icon-arrow-right"></i>Update Keluarga</div> 
            <ul class="thumbnails">
                 
                <li class="span8">
                    <?php 
                    if(!empty($sukses)){
                        ?>
                    <div class="alert alert-success">Data Berhasil di Updaten</div>
                    <?php 
                    }
                    ?>
                    <?php echo form_open('','class="form-horizontal"');?>
                    <div class="form-group">
                     
                    <label class="control-label" for="input01">Nama Lengkap <font color="red">*</font></label>
                    <div class="controls">  
                    <input type="text" class="input-xlarge" id="input01" name="nama_lengkap" value="<?php echo $isi->nama_lengkap;?>"/>
                    <input type="hidden" name="id_user" value="<?php echo $isi->id_user;?>"/>
                    <input type="hidden" name="id_keluarga" value="<?php echo $isi->id_keluarga;?>"/>
                    </p>
                    </div>
                    <label class="control-label" for="input01">Hubungan Keluarga <font color="red">*</font></label>
                    <div class="controls">  
                        <select name="hubungan_keluarga">
                            <option>Pilih</option>
                            <option value="Ayah Kandung" <?php if($isi->hubungan_keluarga==='Ayah Kandung'){echo "selected";}?>>Ayah Kandung</option>
                            <option value="Ibu Kandung" <?php if($isi->hubungan_keluarga==='Ibu Kandung'){echo "selected";}?>>Ibu Kandung</option>
                            <option value="Suami" <?php if($isi->hubungan_keluarga==='Suami'){echo "selected";}?>>Suami</option>
                            <option value="Istri" <?php if($isi->hubungan_keluarga==='Istri'){echo "selected";}?>>Istri</option>
                            <option value="Ayah Tiri" <?php if($isi->hubungan_keluarga==='Ayah Tiri'){echo "selected";}?>>Ayah Tiri</option>
                            <option value="Ibu Tiri" <?php if($isi->hubungan_keluarga==='Ibu Tiri'){echo "selected";}?>>Ibu Tiri</option>
                            <option value="Kakek" <?php if($isi->hubungan_keluarga==='Kakek'){echo "selected";}?>>Kakek</option>
                            <option value="Nenek" <?php if($isi->hubungan_keluarga==='Nenek'){echo "selected";}?>>Nenek</option>
                            <option value="Anak Kandung" <?php if($isi->hubungan_keluarga==='Anak Kandung'){echo "selected";}?>>Anak Kandung</option>
                            <option value="Anak Tiri" <?php if($isi->hubungan_keluarga==='Anak Tiri'){echo "selected";}?>>Anak Tiri</option>
                            <option value="Kakak" <?php if($isi->hubungan_keluarga==='Kakak'){echo "selected";}?>>Kakak</option>
                            <option value="Adik" <?php if($isi->hubungan_keluarga==='Adik'){echo "selected";}?>>Adik</option>
                            
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
