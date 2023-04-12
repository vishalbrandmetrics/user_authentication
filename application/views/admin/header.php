
<html>
<head>
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
-->
<?= link_tag("assets/css/bootstrap.min (2).css"); ?>
</head>


<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">User Authentication</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
  </div>

<?php
	if($this->session->userdata('id')){
		?>
		<li type="none"><a href="<?php echo base_url('index.php/logout/');?>" class="btn btn-primary" style="margin-right:30px;">Logout</a></li>
		<?php
	}
	?>
	</nav>
</body>
</html>