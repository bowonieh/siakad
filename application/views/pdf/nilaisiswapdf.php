<style>
    h3{
        margin:2px;
    }
    h5{
        margin:2px;
    }
    
    /*table */
    .nilai table {
        width: 100%;
        
    }
    .nilai thead{
        border-bottom: 1px dashed;
        font-weight: bold;
        padding:2px 0px 0px 10px;
       
    }
    .nilai tbody tr{
        margin:0px;
        padding:0px;
    }
    .nilai tbody td{
        padding:5px;
        border-bottom: 1px dotted;
        
        margin:0px;
    }
    
    
</style>
<h3>Laporan Nilai Siswa Tahun Pelajaran <?php echo $th->tahun;?></h3>
<h3>SMK Negeri 1 Kota Bekasi</h3>
<h5>Jl. Bintara VIII No 2 Kelurahan Bintara, Kecamatan Bekasi Barat</h5>
<h5>Telp. (021) 88951151 Email: info@smkn1kotabekasi.sch.id</h5>
<hr>

    <table width="100%" border="0">
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td colspan="5"><?php echo $row->nis;?></td>
        </tr>
        <tr>
            <td>NISN</td>
            <td>:</td>
            <td colspan="5"><?php echo $row->nisn;?></td>
        </tr>
        <tr>
            
            <td>NAMA LENGKAP</td>
            <td>:</td>
            <td colspan="2"><?php echo $row->nama;?></td>
            <td>Kelas</td>
            <td>:</td>
            <td><?php echo $row->nama_kelas;?></td>
        </tr>
    </table>
</p>

<div >
    <br>
    <table class="nilai">
    <thead>
    <tr><td>NO</td><td>Mata Pelajaran</td><td>Nilai UTS</td><td>Terbilang</td><td>NILAI RAPORT</td><td>Terbilang</td></tr>
    </thead>
    <tbody>
    <?php
    $no = 1;
    if(!empty($isi)){
    foreach($isi as $d){
      ?>
    <tr><td><?php echo $no++;?></td><td><?php echo $d['mapel'];?></td><td><?php echo $d['nilai_uts'];?></td><td><?php echo terbilang($d['nilai_uts']);?></td><td><?php echo $d['nilai_raport'];?></td><td><?php echo terbilang($d['nilai_raport']);?></td></tr>
    <?php 
    }
    }
    ?>
    </tbody>
</table>
    </div>
