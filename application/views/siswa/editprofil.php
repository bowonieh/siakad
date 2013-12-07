<div class="content">
    <div class="container">
          <div class="page-header">
            <h2>Update Profil Saya</h2>
          </div>
          <div class="row-fluid">
            <ul class="thumbnails">
                
                <li class="span8">
                    <?php echo form_open_multipart('profil/aksieditprofil','class="form-horizontal" id="ajaxform"'); ?>
                    <table class="table table-hover table-striped">
                    
                        <tr><td>NIS</td><td>:</td><td><input type="text" name="nis" disabled value="<?php echo $isi->nis;?>" /></td></tr>
                        <tr><td>NISN</td><td>:</td><td><input type="text" name="nisn" value="<?php echo $isi->nisn;?>" class="input-xlarge"/></td></tr>
                        <tr><td>NO PESERTA UN SMP</td><td>:</td><td><input type="text" name="no_un_smp" value="<?php echo $isi->no_un_smp;?>" class="input-small"/></td></tr>
                        <tr><td>NAMA LENGKAP</td><td>:</td><td><input type="text" name="nama" class="input-xlarge" value="<?php echo $isi->nama;?>"/></td></tr>
                        <tr><td>JENIS KELAMIN</td><td>:</td><td>
                                <select name="jenkel">
                                    <option value="L" <?php if($isi->jenkel==='L'){
                                    ?>
                                            selected
                                            <?php 
                                    }
?>>Laki-Laki</option>
                                    <option value="P" <?php if($isi->jenkel==='P'){
                                    ?>
                                            selected
                                            <?php 
                                    }
?>>Perempuan</option>
                                </select>
                                
                                
                        <tr><td>TTL</td><td>:</td><td><input type="text" name="tempat_lahir" value="<?php echo $isi->tempat_lahir;?>" class="input-medium"/>, <input type="text" name="tgl_lahir" class="input-medium" value="<?php echo $isi->tgl_lahir;?>"/></td></tr>
                        <tr><td>Alamat</td><td>:</td><td>
                                <textarea name="alamat" class="textarea form-inline" >
                                <?php echo $isi->alamat;?>
                                </textarea>
                            
                            </td></tr>
                        <tr><td>AGAMA</td><td>:</td><td>
                                <select name="agama">
                                    <option value="Islam" <?php if($isi->agama==='Islam'){
                                    ?>
                                            selected
                                            <?php 
                                    }
?>>Islam</option>
                                    <option value="Katolik" <?php if($isi->agama==='Katolik'){
                                    ?>
                                            selected
                                            <?php 
                                    }
?>>Katolik</option>
                                    <option value="Protestan" <?php if($isi->agama==='Protestan'){
                                    ?>
                                            selected
                                            <?php 
                                    }
?>>Protestan</option>
                                    <option value="Hindu" <?php if($isi->agama==='Hindu'){
                                    ?>
                                            selected
                                            <?php 
                                    }
?>>Hindu</option>
                                    <option value="Budha" <?php if($isi->agama==='Budha'){
                                    ?>
                                            selected
                                            <?php 
                                    }
?>>Budha</option>
                                    <option value="Konghucu" <?php if($isi->agama==='Konghucu'){
                                    ?>
                                            selected
                                            <?php 
                                    }
?>>Konghucu</option>
                                </select>
                            </td></tr>
                        
                     
                    
                    
                   
                    </table>
                    <div class="form-actions">
                        <a href="<?php echo base_url();?>index.php/profil"><button type="button" class="btn btn-success" >Simpan</button></a>
                    </div>
                    <?php echo form_close();?>
                </li>
            </ul>
          </div>
    
    
</div>