<?php $this->load->view('includes/header'); ?>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h5 id="fontovi">Gallery</h5>
      <ul class="nav nav-pills nav-stacked" id="fontovi">
        <li><a href="<?php echo base_url(); ?>index.php/gallery/index">Movies</a></li>
        <li class="active"><a href="<?php echo base_url(); ?>index.php/gallery1/index">Movies 2</a></li>
        <li><a href="#section3">Family</a></li>
        <li><a href="#section3">Nature</a></li>
      </ul>
    </div>

    <div class="col-sm-9" id="aaa">
      <h5 id="fontovi">RECENT POSTS</h5>
      
	   
      <div>
	     <a href="<?php echo base_url()?>public/img/ESCAPE FROM ALCATRAZ.jpg" data-title="My caption" data-lightbox="roadtrip">
	     <img src="<?php echo base_url()?>public/img/ESCAPE FROM ALCATRAZ.jpg" class="thumbnail img-responsive"/>
		 </a>
      </div>
	  <div>
	     <a href="<?php echo base_url()?>public/img/Pulp Fiction.jpg" data-title="My caption" data-lightbox="roadtrip">
	 	 <img src="<?php echo base_url()?>public/img/Pulp Fiction.jpg" class="thumbnail img-responsive"/>
		 </a>
	  </div>
	  <div>
	     <a href="<?php echo base_url()?>public/img/Dirty Harry.jpg" data-title="My caption" data-lightbox="roadtrip">
	     <img src="<?php echo base_url()?>public/img/Dirty Harry.jpg" class="thumbnail img-responsive"/>
		 </a>
	  </div>
	   <div>
	     <a href="<?php echo base_url()?>public/img/The Lost Highway.jpg" data-title="My caption" data-lightbox="roadtrip">
	     <img src="<?php echo base_url()?>public/img/The Lost Highway.jpg" class="thumbnail img-responsive"/>
		 </a>
	  </div>
	   <div>
	     <a href="<?php echo base_url()?>public/img/THE THING.jpg" data-title="My caption" data-lightbox="roadtrip">
	     <img src="<?php echo base_url()?>public/img/THE THING.jpg" class="thumbnail img-responsive"/>
		 </a>
	  </div>
	  <div>
	     <a href="<?php echo base_url()?>public/img/Point Break.jpg" data-title="My caption" data-lightbox="roadtrip">
	     <img src="<?php echo base_url()?>public/img/Point Break.jpg" class="thumbnail img-responsive"/>
		 </a>
	  </div>
	  <div>
	     <a href="<?php echo base_url()?>public/img/Seven Samurai.jpg" data-title="My caption" data-lightbox="roadtrip">
	     <img src="<?php echo base_url()?>public/img/Seven Samurai.jpg" class="thumbnail img-responsive"/>
		 </a>
	  </div>
	  <div>
	     <a href="<?php echo base_url()?>public/img/Mad Max 2_2.jpg" data-title="My caption" data-lightbox="roadtrip">
	     <img src="<?php echo base_url()?>public/img/Mad Max 2_2.jpg" class="thumbnail img-responsive"/>
		 </a>
	  </div>
       <div>
	     <a href="<?php echo base_url()?>public/img/Ghost In The Shell MOVIE.jpg" data-title="My caption" data-lightbox="roadtrip">
	     <img src="<?php echo base_url()?>public/img/Ghost In The Shell MOVIE.jpg" class="thumbnail img-responsive"/>
		 </a>
	  </div>    
      
    </div>
  </div>
  
    
</div>


<?php $this->load->view('includes/footer'); ?>
