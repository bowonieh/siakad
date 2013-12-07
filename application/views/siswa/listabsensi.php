<div class="container">
    <div class="row-fluid">
        <ul class="thumbnails">
            <li class="span8">
                <legend>Absensi Siswa</legend>
                <div class="help-block">
                    Pilih tanggal untuk melihat absensi siswa
                </div>
        <a href="<?php echo base_url();?>index.php/user/absensisiswa"><button class=" btn btn-danger"><i class="icon-glass"></i> Tambah Data Absensi</button></a>
        
    </p>
        <div class="box">
            <div class="boxBody">
                
                <?php echo form_open_multipart('','class="form-horizontal"');?>
                
                <label class="control-label">TANGGAL </label>
                
                <div class="controls">  
               <?php echo form_input('tanggal','','onChange="getHasil(\'../siswa/getabsensiharian/\'+this.value)" id="datepicker"');?>
                </div>
                <div class="help-block"></div>
                
                 
                
                
            <?php echo form_close();?>
            <?php echo validation_errors(); ?>
                
            </div>
        </div>
   
    
    
        <div id="tablehasil">
            
            
        </div>

                
            </li>
        </ul>
    </div>
</div>