
<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/zadaciheader'); ?>

<!--Display Messages-->
<?php if($this->session->flashdata('registered')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('registered') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('logged_out')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('logged_out') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('need_login')) : ?>
    <?php echo '<p class="text-error">' .$this->session->flashdata('need_login') . '</p>'; ?>
<?php endif; ?>

<?php if($this->session->userdata('logged_in')) : ?>
<br />


<div class="container">
<div class="row">
<div class="col-sm-4">



<!--Display Errors-->
<?php echo validation_errors('<p class="text-error">'); ?>

<p>
    <?php echo form_open('lists/quickadd'); ?>
     <?php $data = array("placeholder" => "Add a New List",
                         "name" => "list_name"); ?>
    <?php echo form_input($data); ?>
     <!--Submit Buttons-->
    <?php $data = array("value" => "add",
                    "name" => "submit",
                    "style"=> "vertical-align:top;",
                    "class" => "btn btn-info"); ?>
    <?php echo form_submit($data); ?>
     <?php echo form_close(); ?>
</p>
</div>
</div>

<div class="row">
<div class="col-sm-6">

<h3>My Latest Lists</h3>
<table class="table table-striped" width="50%" cellspacing="5" cellpadding="5">
    <tr>
        <th>List Name</th>
        <th>Created On</th>
        <th>View</th>
    </tr>
    <?php if(isset($lists)) : ?>
    <?php foreach($lists as $list) : ?>
    <tr>
        <td><?php echo $list->list_name; ?></td>
        <td><?php echo $list->create_date; ?></td>
        <td><a href="<?php echo base_url(); ?>index.php/lists/show/<?php echo $list->id; ?>">View List</a></td>
    </tr>
    <?php endforeach; ?>
    <?php endif; ?>
</table>
</div>




<div class="col-sm-6">

<h3>Latest Tasks</h3>
<table class="table table-striped" width="50%" cellspacing="5" cellpadding="5">
    <tr>
        <th>Task Name</th>
        <th>List Name</th>
        <th>Created On</th>
        <th>View</th>
    </tr>
    <?php if(isset($tasks)) : ?>
<?php foreach($tasks as $task) : ?>
     <tr>
        <td> <?php echo $task->task_name; ?></td>
         <td><?php echo $task->list_name; ?></td>
        <td><?php echo $task->create_date; ?></td>
        <td><a href="<?php echo base_url(); ?>index.php/tasks/show/<?php echo $task->id; ?>">View Task</a></td>

    </tr>
<?php endforeach; ?>
     <?php endif;?>
</table>
<?php endif; ?>

</div>
</div>
</div>



<?php $this->load->view('includes/footer'); ?>



