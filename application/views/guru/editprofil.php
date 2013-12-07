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
                    
                        <tr><td>NAMA LENGKAP</td><td>:</td><td><input type="text" name="nama_guru" value="<?php echo $isi->nama_guru;?>" /></td></tr>
                        <tr><td>NIP</td><td>:</td><td><input type="text" name="nip" value="<?php echo $isi->nip;?>" class="input-xlarge"/></td></tr>
                        <tr><td>Golongan Jabatan</td><td>:</td><td><input type="text" name="gol" value="<?php echo $isi->gol;?>" class="input-small"/></td></tr>
                        <tr><td>NUPTK</td><td>:</td><td><input type="text" name="nuptk" class="input-xlarge" value="<?php echo $isi->nuptk;?>"/></td></tr>
                        <tr><td>Tempat Tanggal Lahir</td><td>:</td><td><input type="text" name="tempat" value="<?php echo $isi->tempat;?>" class="input-medium"/>, <input type="text" name="tgl_lahir" class="input-medium" value="<?php echo $isi->tgl_lahir;?>"/></td></tr>
                        <tr><td>Alamat</td><td>:</td><td>
                                <textarea name="alamat" class="textarea form-inline" >
                                <?php echo $isi->alamat;?>
                                </textarea>
                            
                            </td></tr>
                        <tr><td>Email</td><td>:</td><td><input name="email" type="text" value="<?php echo $isi->email;?>"/></td></tr>
                        <tr><td>TMT</td><td>:</td><td><input type="text" name="tmt" value="<?php echo $isi->tmt;?>" class="input-medium"/></td></tr>
                     
                    
                    
                   
                    </table>
                    <div class="form-actions">
                        <a href="<?php echo base_url();?>index.php/profil"><button type="button" class="btn btn-success" >Simpan</button></a>
                    </div>
                    <?php echo form_close();?>
                </li>
            </ul>
          </div>
    
    
</div>