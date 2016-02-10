<?php $this->load->view('includes/header'); ?>

<div class="container">
<div class="row" id="whatwe1">
<div class="col-sm-9">
<a href="<?php echo base_url(); ?>index.php/lists/index" class="btn btn-danger" role="button">My Lists</a>

<h1>Edit List</h1>
<!--Display Errors-->
<?php echo validation_errors('<p class="text-error">'); ?>
 <?php echo form_open('lists/edit/'.$this_list->id.''); ?>
<!--Field: First Name-->
<p>
<?php echo form_label('List Name:'); ?>
<?php
$data = array(
              'name'        => 'list_name',
              'value'       => $this_list->list_name
            );
?>
<?php echo form_input($data); ?>
</p>
<!--Field: Last Name-->
<p>
<?php echo form_label('List Body:'); ?>
<?php
$data = array(
              'name'        => 'list_body',
              'value'       => $this_list->list_body
            );
?>
<?php echo form_textarea($data); ?>
</p>

<!--Submit Buttons-->
<?php $data = array("value" => "Update List",
                    "name" => "submit",
                    "class" => "btn btn-danger"); ?>
<p>
    <?php echo form_submit($data); ?>
</p>
<?php echo form_close(); ?>

</div>
</div>


</div>


<?php $this->load->view('includes/footer'); ?>