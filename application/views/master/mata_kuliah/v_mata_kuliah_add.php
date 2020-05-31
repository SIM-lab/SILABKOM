<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Kode</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'kode','class'=>'form-control'));?>
            <?php echo form_error('kode');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Mata kuliah</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'mata_kuliah','class'=>'form-control'));?>
            <?php echo form_error('mata_kuliah');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">SKS</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'sks','class'=>'form-control'));?>
            <?php echo form_error('sks');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Simpan</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"master/mata_kuliah/show_addForm/","#divsubcontent")','simpan','btn btn-success')." ";
            ?>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(".select2").select2();
    $('.tutup').click(function(e) {  
        $('#myModal').modal('hide');
    });
</script>