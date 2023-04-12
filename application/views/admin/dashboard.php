<?php include('header.php');?>

<div class="container" style="margin-top:20px">
<h1>Welcome , 

<?php 
$this->load->library('session');
echo $this->session->userdata('name'); ?></h1>
<br>
<?php echo anchor('admin/add_user','Add User','class="btn btn-primary"')?>
<br>
<?php //print_r($articles);?>
<?php if($success = $this->session->flashdata('del_success')){
	?>
	<div class="alert alert-success"><?php echo $success?></div>
	<?php
} ?>
<?php if($error = $this->session->flashdata('del_error')){
	?>
	<div class="alert alert-danger"><?php echo $error?></div>
	<?php
} ?>
<?php if($edit_success = $this->session->flashdata('edit_success')){
	?>
	<div class="alert alert-success"><?php echo $edit_success?></div>
	<?php
} ?>
<?php if($success=$this->session->flashdata('add_success')){ 
		?>
		<div class="alert alert-success">
		<?php 
		echo $success;
		?>
		</div>
		<?php
		}?>

<br>
<div class="table">
<table cellpadding="10" cellspacing="">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>


</tr>
<?php if(count($user_list)){?>
<?php foreach($user_list as $users){ ?>
<tr>
<td><?php echo $users->id; ?></td>
<td><?php echo $users->name; ?></td>
<td align=""><?php echo $users->email; ?></td>
</tr>
<?php
}
}
else{
	?>
	<tr>
	<td colspan="3" align="center" style="color:red;">No Data Availabe</td>
	</tr>
	<?php
}
?>

</table>
</div>


<?php include('footer.php');?>