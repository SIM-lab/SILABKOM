<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
    $row = fetch_single_row($edit);
?> 

<div class="box-body big">
    <?php echo form_open('',array('name'=>'feditmenugrup','class'=>'form-horizontal','role'=>'form'));?>
    <?php echo form_hidden('id',$row->id); ?>
    <div class="form-group">
    
            <label class="col-sm-4 control-label">Kode</label>
            <div class="col-sm-8">
         
            <?php echo form_input(array('name'=>'kode','value'=>$row->kode,'class'=>'form-control'));?>
            <?php echo form_error('kode');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Nama Alat</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'nama_alat','value'=>$row->nama_alat,'class'=>'form-control'));?>
            <?php echo form_error('nama_alat');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Keterangan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'keterangan','value'=>$row->keterangan,'class'=>'form-control'));?>
            <?php echo form_error('keterangan');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Jumlah</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'jumlah','value'=>$row->jumlah,'class'=>'form-control'));?>
            <?php echo form_error('jumlah');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Simpan</label>
            <div class="col-sm-8 Tutup">
            <?php
            echo button('send_form(document.feditmenugrup,"master/nama_alat/show_editForm/","#divsubcontent")','Simpan','btn btn-success')." ";
            ?>
            </div>
        </div>
    </form>
</div>


<script type="text/javascript">
$(document).ready(function() {
    $('.Tutup').click(function(e) {  
        $('#myModal').modal('hide');
    });
});
</script>