<div class="content">
    <div class="container">
          <div class="page-header">
            <h2>Upload Foto Profil </h2>
          </div>
          <div class="row-fluid">
              <ul>
                
                <li class="span8">
                    <div class="alert alert-info"><?php echo $error;?></div>
                   <?php echo form_open_multipart('','class="form-horizontal"');?>
                    <div class="form-group">
                        <label class="control-label" for="input02">Pilih file</label>
                        <div class="controls">  
                        <!--<input type="file" name="userfile" multiple="false"/>-->
                        <?php echo form_upload('userfile');?>
                        </p>
                        </div>
                        <div class="form-actions">
                            <input class="btn btn-primary" type="submit" value="upload" />
                        </div>
                    </div>   
                    <?php echo form_close();?>
                    
                </li>
            </ul>
          </div>
    
    
</div>