
<div class="container">
<div class="row" id="whatwe1">

  <div class="col-sm-9">
    <div >
	   <h3>Welcome to Lists and Tasks!</h3>
	    <p>Lists and Tasks is a simple and helpful application to help you manage your day to day tasks. You can add as many list and task as you want. Lists and Tasks is absolutely free! Have fun.</p>
    </div>
  </div>
  
  <div class="col-sm-3">
    <div class="well">
	
      <p><?php if($this->session->userdata('logged_in')) : ?>
          Welcome
         <?php else : ?>
          <a href="<?php echo base_url(); ?>index.php/users/register" class="btn btn-danger" role="button">Register</a>
         <?php endif; ?></p>
	  
	     <?php if($this->session->flashdata('registered')) : ?>
         <?php echo '<p class="text-success">' .$this->session->flashdata('registered') . '</p>'; ?>
         <?php endif; ?>
	
      <p><?php $this->load->view('users/login'); ?></p>
	  	  
    </div>
  </div>
</div>

</div>







