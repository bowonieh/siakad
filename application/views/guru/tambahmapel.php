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
            <h2>Tambah Mata Pelajaran</h2>
          </div>
          <div class="row-fluid">
            <ul class="thumbnails">
                
                <li class="span8">
                    <?php echo form_open_multipart('','class="form-horizontal"');?>
        <div class="form-group">
            <legend><i class="icon-plus-sign"></i> Tambah Mata Pelajaran</legend>
            <label class="control-label" for="input01">Kode Mata Pelajaran <font color="red">*</font></label>
            <div class="controls">  
              <input type="text" class="input-xlarge" id="input01" name="kode_mapel">  
              </p>
            </div>
            <label class="control-label" for="input02">Nama Mata Pelajaran<font color="red">*</font></label>
            <div class="controls">  
              <input type="text" class="input-xlarge" id="input02" name="mapel">
              <input type="hidden" name="id_guru" value="<?php echo $row->id_guru; ?>">
              </p>
            </div>
            <label class="control-label" for="input03">Jenis Mata Pelajaran</label>
            <div class="controls">  
              <?php echo form_dropdown('id_jenismapel',$jns,'','class="selectpicker"'); ?>  
              </p>
            </div>
            <label class="control-label" for="input03">Tahun Pelajaran</label>
            <div class="controls">  
              <?php echo form_dropdown('id_tahun',$isi,'','class="selectpicker"'); ?>  
              </p>
            </div>
            <label class="control-label" for="input04">KKM</label>
            <div class="controls">  
                <input type="text" class="input-xlarge" id="input02" name="kkm">
              </p>
            </div>
            
            <label class="control-label" for="input06">Deskripsi<font color="red">*</font></label>
            <div class="controls">  
                <textarea class="textarea" id="wysiwyg" name="deskripsi" style="WIDTH:100%;"></textarea>
            </p>
            </div>
            <!-- <label class="control-label" for="input07">FOTO</label>
            <div class="controls">  
              <?php echo form_upload('foto','','id="input07"'); ?>
              </p>
            </div> -->
            
               <div class="form-actions">  
            <button type="submit" class="btn btn-primary" >Simpan</button>  
            <a href="<?php echo base_url();?>index.php/mapel"><button class="btn" type="button">Batal</button>  </a>
          </div>

            
        </div>
        <?php echo validation_errors(); ?>
        <?php echo form_close(); ?>
    
                    
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
                  
                <div class="thumbnail">
                  <img src="<?php echo base_url();?>img/placeholder-360x200.jpg" alt="product name">
                  <div class="caption">
                    <h3></h3>
                    <p>
                      Untuk Menambahkan Mata Pelajaran, silahkan untuk mengisi form di samping
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <!-- <a href="#" class="btn btn-primary">Buy now</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>-->
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
          </div>
        </div>
      <!-- End: PRODUCT LIST -->
    </div>
    <!-- End: MAIN CONTENT -->
    