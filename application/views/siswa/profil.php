<div class="content">
    <div class="container">
          <div class="page-header">
            <h2>Profil Saya</h2>
          </div>
          <div class="row-fluid">
            <ul class="thumbnails">
                
                <li class="span8">
                    <?php
                    if(empty($isi->foto)){
                        ?>
                    <img width="120px" src="<?php echo base_url();?>img/upload/icon-user.png" class="img-rounded image"/></p>
                    <a href="<?php echo base_url();?>index.php/profil/uploadfoto"><button class="btn btn-primary"><i class="icon-upload icon-white"></i> Ganti Foto</button></a></p>
                    <?php 
                    }else{
                        ?>
                    <img width="120px" src="<?php echo base_url();?>img/upload/<?php echo $isi->foto;?>" class="img-rounded image"/></p>
                    <a href="<?php echo base_url();?>index.php/profil/uploadfoto"><button class="btn btn-primary"><i class="icon-upload icon-white"></i> Ganti Foto</button></a></p>
                    <?php 
                    }
                    ?>
                    <table class="table table-hover table-striped">
                    
                        <tr><td>NIS</td><td>:</td><td><?php echo $isi->nis;?></td></tr>
                        <tr><td>NISN</td><td>:</td><td><?php echo $isi->nisn;?></td></tr>
                        <tr><td>NO UN SMP</td><td>:</td><td><?php echo $isi->no_un_smp;?></td></tr>
                        <tr><td>NAMA LENGKAP</td><td>:</td><td><?php echo $isi->nama;?></td></tr>
                        <tr><td>JENIS KELAMIN</td><td>:</td><td><?php 
                        if($isi->jenkel=='L'){
                            echo "Laki-Laki";
                        }elseif($isi->jenkel=='P'){
                            echo "Perempuan";
                        }else{
                            echo "Belum update Data Jenis Kelamin";
                        }
                        
                        
                        ?></td></tr>
                        <tr><td>TEMPAT TANGGAL LAHIR</td><td>:</td><td><?php echo $isi->tempat_lahir;?>, <?php echo $isi->tgl_lahir;?></td></tr>
                        <tr><td>ALAMAT</td><td>:</td><td><?php echo $isi->alamat;?></td></tr>
                        <tr><td>AGAMA</td><td>:</td><td><?php echo $isi->agama;?></td></tr>
                        
                        
                    
                    
                   
                    </table>
                    <div class="form-actions">
                        <a href="<?php echo base_url();?>index.php/profil/edit"><button class="btn btn-primary">Perbarui</button></a>
                    </div>
                </li>
            </ul>
          </div>
    
    
</div>