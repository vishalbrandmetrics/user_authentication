<?php include('header.php');?>
<div class="container">

<h1>Login</h1>
	<?php echo form_open('login'); ?>
	<div class="row">
	<div class="col-lg-6">
	<div class="form-group">
		<label for="email">Email :</label>
		<?php if($error=$this->session->flashdata('login-failed')){ 
		?>
		<div class="alert alert-danger"><?php echo $error?></div>
		<?php
		}?>
		<?php echo form_input(['class'=>'form-control','placeholder'=>'User Email ID','name'=>'email','value'=>set_value('email')]); ?>
	</div>
	</div>
	<div class="col-lg-6 my-4"><?php echo form_error('email',"<div class='text-danger'>","</div
	
	>")?></div>
	</div>
	<div class="row">
	<div class="col-lg-6">
	<div class="form-group">
	<label for="pwd">Password:</label>
	<?php echo form_password(['class'=>'form-control','placeholder'=>'Password','name'=>'pass','value'=>set_value('pass')]); ?>
	</div>
	</div>
	<div class="col-lg-6 my-4"><?php echo form_error('pass',"<div class='text-danger'>","</div>")?></div>
	</div>
	
	<?php echo form_submit(['type'=>'submit','class'=>'btn btn-success my-2','value'=>'Login'])?>
	
	
</form>
</div>
<?php include('footer.php');?>