<?php $this->load->view('includes/header'); ?>


<div class="container">
<div class="row">
<div class="col-sm-9">
<a href="<?php echo base_url(); ?>index.php/lists/index" class="btn btn-info" role="button">My Lists</a>

<h4>List Actions</h4>
<a href="<?php echo base_url(); ?>index.php/tasks/add/<?php echo $list->id; ?>" class="btn btn-info" role="button">Add Task</a>
<a href="<?php echo base_url(); ?>index.php/lists/edit/<?php echo $list->id; ?>" class="btn btn-info" role="button">Edit List</a>
<a onclick="return confirm('Are you sure?')"href="<?php echo base_url(); ?>index.php/lists/delete/<?php echo $list->id; ?>" class="btn btn-info" role="button">Delete List</a>

<h1><?php echo $list->list_name; ?></h1>
<?php if($this->session->flashdata('task_deleted')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('task_deleted') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('task_created')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('task_created') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('task_updated')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('task_updated') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('marked_complete')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('marked_complete') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('marked_new')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('marked_new') . '</p>'; ?>
<?php endif; ?>
Created on:  <strong><?php echo date("n-j-Y",strtotime($list->create_date)); ?></strong>
<br /><br />
<div class="menjanje"><?php echo $list->list_body; ?></div>
<br /><br />
<h4> Current Open Tasks</h4>
<?php if($completed_tasks) : ?>
    <ul>
    <?php foreach($completed_tasks as $task) : ?>
        <li><a href="<?php echo base_url(); ?>index.php/tasks/show/<?php echo $task->task_id; ?>"><?php echo $task->task_name; ?></a></li>
    <?php endforeach; ?>
    </ul>
<?php else : ?>
    <p>There are no current tasks</p>
<?php endif; ?>
<br />
<h4> Recently Completed</h4>
<?php if($uncompleted_tasks) : ?>
    <ul>
    <?php foreach($uncompleted_tasks as $task) : ?>
        <li><a href="<?php echo base_url(); ?>index.php/tasks/show/<?php echo $task->task_id; ?>"><?php echo $task->task_name; ?></li></a>
    <?php endforeach; ?>
    </ul>
<?php else : ?>
     <p>There are no completed tasks</p>
<?php endif; ?>

</div>
</div>


</div>



<?php $this->load->view('includes/footer'); ?>
