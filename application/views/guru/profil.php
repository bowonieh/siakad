<div class="content">
    <div class="container">
          <div class="page-header">
            <h2>Profil Saya</h2>
          </div>
          <div class="row-fluid">
              <ul>
                
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
                    
                        <tr><td>NAMA LENGKAP</td><td>:</td><td><?php echo $isi->nama_guru;?></td></tr>
                        <tr><td>NIP</td><td>:</td><td><?php echo $isi->nip;?></td></tr>
                        <tr><td>Golongan Jabatan</td><td>:</td><td><?php echo $isi->gol;?></td></tr>
                        <tr><td>NUPTK</td><td>:</td><td><?php echo $isi->nuptk;?></td></tr>
                        <tr><td>Tempat Tanggal Lahir</td><td>:</td><td><?php echo $isi->tempat;?>, <?php echo $isi->tgl_lahir;?></td></tr>
                        <tr><td>Alamat</td><td>:</td><td><?php echo $isi->alamat;?></td></tr>
                        <tr><td>Email</td><td>:</td><td><?php echo $isi->email;?></td></tr>
                        <tr><td>TMT</td><td>:</td><td><?php echo $isi->tmt;?></td></tr>
                        
                    
                    
                   
                    </table>
                    <div class="form-actions">
                        <a href="<?php echo base_url();?>index.php/profil/edit"><button class="btn btn-primary">Perbarui</button></a>
                    </div>
                </li>
                <li class="span4">
                    <h3>Data Keluarga <?php echo $isi->nama_guru;?></h3>
                    <table class="table table-hover table-bordered" id="t12">
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Status</th>
                        </tr>
                        <?php
                        if(empty($kel)){
                            
                        }else{
                        $no = 1;
                        foreach ($kel as $bb){
                          ?>
                        <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $bb->nama_lengkap;?></td>
                            <td><?php echo $bb->hubungan_keluarga;?></td>
                        </tr>
                        <?php 
                            }
                        }
                        ?>
                    </table>
                </li>
            </ul>
          </div>
    
    
</div>