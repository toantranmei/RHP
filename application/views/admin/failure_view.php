<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fail Action | Social Network RHP Team</title>
	<meta http-equiv=”refresh” content="1;url=<?php echo base_url(); ?>/Blog/manageNews">
	<meta charset="utf-8">
	<meta content="ie=edge" http-equiv="x-ua-compatible">
	<meta content="Add news category RHP Team" name="keywords">
	<meta content="Sky Albert" name="author">
	<meta content="Admin RHP Team" name="description">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="<?php echo base_url(); ?>/favicon.png" rel="shortcut icon">
	<link href="<?php echo base_url(); ?>/apple-touch-icon.png" rel="apple-touch-icon">
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
	<link href="<?php echo base_url(); ?>/vendor/css/select2.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/vendor/css/daterangepicker.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/vendor/css/dropzone.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/vendor/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/vendor/css/fullcalendar.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/vendor/css/perfect-scrollbar.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/assets/css/addCategory.css" rel="stylesheet">

	<style>.cke{visibility:hidden;}</style>
</head>
<body id="addcategory">
	<div class="header-cate">
		<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <a class="navbar-brand" href="#">RHP Adminstrator</a>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="#">Dashbroad <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item dropdown active">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Posts </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item" href="<?php echo base_url(); ?>/Blog">Add New Category</a>
		          <a class="dropdown-item" href="<?php echo base_url(); ?>/Blog/newsPost">Add New Post</a>
		          <a class="dropdown-item" href="<?php echo base_url(); ?>/Blog/manageNews">All Post</a>
		        </div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#">Disabled</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="text" placeholder="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
		</nav>
	</div>
	<div class="content-cate">
		<div class="row">
			<div class="col-md-8 push-md-2">
				<div class="alert alert-success" role="alert">
					<strong>Oh snap!</strong> Change a few things up and try submitting again.
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/perfect-scrollbar.jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>/ckeditor/ckeditor.js"></script>
	<script src="<?php echo base_url(); ?>/ckeditor/ckfinder/ckfinder.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/main.js"></script>
	<script>
		CKEDITOR.replace( 'content_news', {
		    filebrowserBrowseUrl: '<?php echo base_url(); ?>'+'/ckfinder/ckfinder.html',
		    filebrowserImageBrowseUrl: '<?php echo base_url(); ?>'+'/ckfinder/ckfinder.html?Type=Images',
		    filebrowserUploadUrl: '<?php echo base_url(); ?>'+'/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    		filebrowserImageUploadUrl: '<?php echo base_url(); ?>'+'/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    		filebrowserWindowWidth : '1000',
    		filebrowserWindowHeight : '700'
		});
	</script>
</body>
</html>
