<div class="col-md-12">
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-blue">
		<div class="inner">
		<h3><?php $var  = $this->db->get('master_tipe_laboratorium')->num_rows(); echo $var; ?></h3>
		<p>Data Laboratorium</p>
		</div>
		<div class="icon">
		<i class ="fa fa-desktop"></i>
		</div>
		<h5 class="small-box-footer"<?php echo button('load_silent("master/tipe_laboratorium","#content")','' ,'  ');?>More info <i class="fa fa-arrow-circle-right"></i></h5>
		</div>
		</div>
		
    <!-- Small boxes (Stat box) --> 
		<div class="col-lg-3 col-xs-6">
		<!-- small box --> 
		<div class="small-box bg-green">
		<div class="inner">
		<h3><?php $var  = $this->db->get('master_nama_alat')->num_rows(); echo $var; ?></h3>
		<p>Data Alat</p>
		</div>		
		<div class="icon">
		<i class="fa fa-wrench fa-rotate-270 fa-hammer "> </i>
		<!--🛠&nbsp;
	  
	  <!--☭ &nbsp; -->
    <!--<i class="fa fa-cogs"> </i> BISA DIGANTI INI JIKA EMANG  JELEK ICONNYA-->
</div>
		<h5 class="small-box-footer"<?php echo button('load_silent("master/nama_alat","#content")','','');?>More info <i class="fa fa-arrow-circle-right"></i></h5>
		</div>
		</div>

		<!-- ./col --> 
		<div class="col-lg-3 col-xs-6">
		<!-- small box --> 
		<div class="small-box bg-yellow">
		<div class="inner">
		<h3><?php $var  = $this->db->get('master_bahan')->num_rows(); echo $var; ?></h3>
		<p>Data Bahan</p>
		</div>
		<div class="icon">
		<i class="fa fa-flask"></i>
		</div>
		<h5 class="small-box-footer"<?php echo button('load_silent("master/master_bahan","#content")','' ,' ');?>More info <i class="fa fa-arrow-circle-right"></i></h5>
		</div>
    </div>

		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
		<!-- small box --> 
		<div class="small-box bg-red">
		<div class="inner">
		<h3><?php $var  = $this->db->get('master_modul')->num_rows(); echo $var; ?></h3> 
		<p>Data modul</p>
		</div>
		<div class="icon">
		<i class="fa fa-book"></i>
		</div>
		<h5 class="small-box-footer"<?php echo button('load_silent("master/modul","#content")','' ,'  ');?>More info <i class="fa fa-arrow-circle-right"></i></h5>
		</div>
		</div>
          <!-- ./col -->
        </div>
      </div>
</section>
</div>