

<?php $this->load->view('includes/header'); ?>

<div class="container-fluid">
  <div class="row content" id="red">
    <div class="col-sm-3 sidenav">
      <h4 id="fontovi">Gallery</h4>
      <ul class="nav nav-pills nav-stacked" id="fontovi">
        <li class="active"><a href="#section1">Movies</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/gallery1/index">Movies 2</a></li>
      </ul>
    </div>

    <div class="col-sm-9" id="aaa">
      <h4 id="fontovi">RECENT POSTS</h4>
      
	   
      <div>
	     <a href="<?php echo base_url()?>public/img/Beautiful Girls.JPG" data-title="My caption" data-lightbox="roadtrip">
	     <img src="<?php echo base_url()?>public/img/Beautiful Girls.JPG" class="thumbnail img-responsive"/>
		 </a>
      </div>
	  <div>
	     <a href="<?php echo base_url()?>public/img/Jean de florette.jpg" data-title="My caption" data-lightbox="roadtrip">
	 	 <img src="<?php echo base_url()?>public/img/Jean de florette.jpg" class="thumbnail img-responsive"/>
		 </a>
	  </div>
	  <div>
	     <a href="<?php echo base_url()?>public/img/Monsters Ball.jpg" data-title="My caption" data-lightbox="roadtrip">
	     <img src="<?php echo base_url()?>public/img/Monsters Ball.jpg" class="thumbnail img-responsive"/>
		 </a>
	  </div>
	   <div>
	     <a href="<?php echo base_url()?>public/img/Vatel.JPG" data-title="My caption" data-lightbox="roadtrip">
	     <img src="<?php echo base_url()?>public/img/Vatel.JPG" class="thumbnail img-responsive"/>
		 </a>
	  </div>
	   <div>
	     <a href="<?php echo base_url()?>public/img/YTuMamaTambien.bmp" data-title="My caption" data-lightbox="roadtrip">
	     <img src="<?php echo base_url()?>public/img/YTuMamaTambien.bmp" class="thumbnail img-responsive"/>
		 </a>
	  </div>
	  <div>
	     <a href="<?php echo base_url()?>public/img/Carne Tremula.jpg" data-title="My caption" data-lightbox="roadtrip">
	     <img src="<?php echo base_url()?>public/img/Carne Tremula.jpg" class="thumbnail img-responsive"/>
		 </a>
	  </div>
	  <div>
	     <a href="<?php echo base_url()?>public/img/Angel Heart.jpg" data-title="My caption" data-lightbox="roadtrip">
	     <img src="<?php echo base_url()?>public/img/Angel Heart.jpg" class="thumbnail img-responsive"/>
		 </a>
	  </div>
	  <div>
	     <a href="<?php echo base_url()?>public/img/Taxi Driver.jpg" data-title="My caption" data-lightbox="roadtrip">
	     <img src="<?php echo base_url()?>public/img/Taxi Driver.jpg" class="thumbnail img-responsive"/>
		 </a>
	  </div>
       <div>
	     <a href="<?php echo base_url()?>public/img/Raging Bull.jpg" data-title="My caption" data-lightbox="roadtrip">
	     <img src="<?php echo base_url()?>public/img/Raging Bull.jpg" class="thumbnail img-responsive"/>
		 </a>
	  </div>    
      
    </div>
  </div>
  
    
</div>


<?php $this->load->view('includes/footer'); ?>


