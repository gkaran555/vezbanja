<?php $this->load->view('includes/header'); ?>

<div class="container-fluid text-center">
<div class="row" id="whatwe">
<div class="col-sm-12">
   
    <div id="source">
	  <button class="btn btn-small" data-toggle="portfilter" data-target="all">
	   All
	  </button>
	  <button class="btn btn-small" data-toggle="portfilter" data-target="art">
	   Art
	  </button>
	  <button class="btn btn-small" data-toggle="portfilter" data-target="media">
	   Media
	  </button>
	  <button class="btn btn-small" data-toggle="portfilter" data-target="brand">
	   Brand
	  </button>
    </div>
	<div class="clearfix"></div>
   
</div>
</div>
   
<div class="row" id="whatwe1">
<div class="col-sm-12">
   
    
        <div class="img22" data-tag='brand'>
          <img src="<?php echo base_url()?>public/img/thumb_london.jpg"/>
          <div class="overlay">
		   <a href="#"><h3>Hello!</h3></a>
		   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
		  </div>
        </div>
		
        <div class="img22" data-tag='brand'>
          <img src="<?php echo base_url()?>public/img/John Pototschnik - Beyhood dreams.jpg" />
          <div class="overlay">
		   <a href="#"><h3>Hello!</h3></a>
		   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
		  </div>
        </div>
		
   		<div class="img22" data-tag='art'>
          <img src="<?php echo base_url()?>public/img/op_blackness.jpg" />
          <div class="overlay">
		   <a href="#"><h3>Hello!</h3></a>
		   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
		  </div>
        </div>
				
		<div class="img22" data-tag='art'>
          <img src="<?php echo base_url()?>public/img/op_thetower.jpg" />
          <div class="overlay">
		   <a href="#"><h3>Hello!</h3></a>
		   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
		  </div>
        </div>
		<div class="img22" data-tag='art'>
          <img src="<?php echo base_url()?>public/img/op_urbanlandscape.jpg" />
          <div class="overlay">
		   <a href="#"><h3>Hello!</h3></a>
		   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
		  </div>
        </div>
        
		<div class="img22" data-tag='media'>
          <img src="<?php echo base_url()?>public/img/thumb_industry.jpg" />
          <div class="overlay">
		   <a href="#"><h3>Hello!</h3></a>
		   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
		  </div>
        </div>
	
</div>
</div>

</div>


<?php $this->load->view('includes/footer'); ?>