<?php $this->load->view('includes/header'); ?>


<div class="container">
<div class="row">
<div class="col-sm-9">



    <h4>Task Actions</h4>  
    <a href="<?php echo base_url(); ?>index.php/tasks/add/<?php echo $task->list_id; ?>" class="btn btn-info" role="button">Add Task</a></li> 
    <a href="<?php echo base_url(); ?>index.php/tasks/edit/<?php echo $task->id; ?>"class="btn btn-info" role="button">Edit Task</a></li> 
    <?php if($is_complete) : ?>
         <a href="<?php echo base_url(); ?>index.php/tasks/mark_new/<?php echo $task->id; ?>"class="btn btn-info" role="button">Mark New</a></li> 
    <?php else : ?>
         <a href="<?php echo base_url(); ?>index.php/tasks/mark_complete/<?php echo $task->id; ?>"class="btn btn-info" role="button">Mark Complete</a></li> 
    <?php endif; ?>
    <a onclick="return confirm('Are you sure?')" href="<?php echo base_url(); ?>index.php/tasks/delete/<?php echo $task->list_id; ?>/<?php echo $this->uri->segment(3); ?>"class="btn btn-info" role="button">Delete Task</a></li>

<h1><?php echo $task->task_name; ?></h1>
<ul id="info">
    <li>Created On: <strong><?php echo date("n-j-Y",strtotime($task->create_date)); ?></strong></li>

<?php if($task->is_complete == 0) : ?>
    <li>Status: <strong>Uncomplete</strong></li>
<?php else : ?>
    <li>Status: <strong>Completed</strong></li>
<?php endif; ?>

<li>Due Date: <strong><?php echo date("n-j-Y",strtotime($task->create_date)); ?></strong></li>
</ul><br />
<div style="max-width:500px;"><?php echo $task->task_body; ?></div>
<br /><hr />
<- Go Back to <a href="<?php echo base_url(); ?>index.php/lists/show/<?php echo $task->list_id; ?>"><?php echo $task->list_name; ?></a>

</div>
</div>


</div>



<?php $this->load->view('includes/footer'); ?>