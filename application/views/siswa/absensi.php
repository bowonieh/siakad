<div class="container">
     
    <div class="row">
        
    </div>
    <div class="row">
        
        <ul class="thumbnails">
    <li class="span8">
<legend>ABSENSI SISWA</legend>
<div class="form-actions rightalign">
                    <a href="<?php echo base_url();?>index.php/user/listabsensi"><button class="btn btn-twitter"><i class="icon-eye-open icon-white"></i> Lihat Data Absensi</button></a>
                        </div>
    </p>
                
                <?php echo form_open('','class="form-horizontal"');?>
                <div class="form-group">
                    
                <label class="control-label">NIS </label>
                
                <div class="controls">  
                <input type="hidden" name="id_tahun" value="<?php echo $isi->id_tahun; ?>" />
               
                <?php echo form_input('nis','','onChange="getHasil(\'../siswa/getsiswaabsen/\'+this.value)" class="input-xlarge"');?>
                
                </div>
                <br>
                <label class="control-label">TANGGAL </label>
                   
                <div class="controls">  
                
                    <input type="text" name="tanggal" class="input-medium" id="datepicker" value="<?php echo date('Y-m-d');?>"/> 
                </div>
                <div class="help-block"></div>
                <br>
                <div class="controls">
                    
                <label class="radio">
                <input type="radio" name="alasan" id="optionsRadios1" value="Sakit" checked> Sakit
               
                </label>
                    <label class="radio">
                <input type="radio" name="alasan" id="optionsRadios1" value="Tanpa Keterengan"> Tanpa Keterangan
               
                </label>
                    <label class="radio">
                <input type="radio" name="alasan" id="optionsRadios1" value="Ijin"> Ijin
               
                </label>
                </div>
                
                 <div class="form-actions">  
                    <button type="submit" class="btn btn-primary" data-loading-text="Sedang Menyimpan" >Simpan</button>  
                    <button type="reset" class="btn">Batal</button>  
                </div>
                
                </div>
            <?php echo form_close();?>
            <?php echo validation_errors(); ?>
                
    </li>
    <li class="span4">
        
        
    </li>
    </ul>
        <div class="row-fluid">
        <div class="span8" id="tablehasil">
            
            
        </div>
        </div>
        </div>
</div>