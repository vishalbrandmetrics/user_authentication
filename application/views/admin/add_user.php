<?php include('header.php');?>
<div class="container">

<h1>User Details</h1>
	<?php echo form_open('admin/uservalidation'); ?>
	<?php if($error=$this->session->flashdata('date_error')){ 
		
		echo '<div class="text-danger">'.$error.'</div>';
		}
		?>
		
	<div class="row">
	<div class="col-lg-6">
	<div class="form-group">
		<label for="">Name</label>
		
		<?php echo form_input(['class'=>'form-control','placeholder'=>'User Name','name'=>'name','value'=>set_value('name')]); ?>
	</div>
	</div>
	<div class="col-lg-6 my-4"><?php echo form_error('name',"<div class='text-danger'>","</div>")?></div>
	</div>
	<div class="row">
	<div class="col-lg-6">
	<div class="form-group">
		<label for="">Email</label>
		
		<?php echo form_input(['class'=>'form-control','placeholder'=>'User Email','name'=>'email','value'=>set_value('email')]); ?>
	</div>
	</div>
	<div class="col-lg-6 my-4"><?php echo form_error('email',"<div class='text-danger'>","</div>")?></div>
	</div>
	<div class="row">
	<div class="col-lg-6">
	<div class="form-group">
		<label for="">Create Password</label>
		
		<?php echo form_input(['class'=>'form-control','placeholder'=>'Create Password','name'=>'password','value'=>set_value('password')]); ?>
	</div>
	</div>
	<div class="col-lg-6 my-4"><?php echo form_error('password',"<div class='text-danger'>","</div>")?></div>
	</div>

	<div class="row">
	<div class="col-lg-6">
	<div class="form-group">
		<label for="">Confirn Password</label>
		
		<?php echo form_input(['class'=>'form-control','placeholder'=>'Confirm Password','name'=>'c_password','value'=>set_value('c_password')]); ?>
	</div>
	</div>
	<div class="col-lg-6 my-4"><?php echo form_error('c_password',"<div class='text-danger'>","</div>")?></div>
	</div>
		
	

	
	<?php echo form_submit(['type'=>'submit','class'=>'btn btn-success my-2','value'=>'Register'])?>
	<?php echo form_reset(['type'=>'reset','class'=>'btn btn-danger my-2','value'=>'reset'])?>
</div>
</form>
</div>
<?php include('footer.php');?>