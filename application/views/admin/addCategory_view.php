<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add News Category | Social Network RHP Team</title>
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
		          <a class="dropdown-item" href="<?php echo base_url(); ?>/Blog">Manage Category</a>
		          <a class="dropdown-item" href="<?php echo base_url(); ?>/Blog/manageNews">Manage Post</a>
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
			<div class="col-md-3">
				<div class="container">
					<div class="card">
						<div class="card-block">
							<h4>Add new categories</h4>
							<form action="">
								<div class="form-group">
								    <label for="formGroupExampleInput">Name Category</label>
								    <input type="text" name="name-cate" class="form-control" id="name_cate" placeholder="Please your category...">
							  	</div>
							  	<div class="form-group">
								    <label for="formGroupExampleInput">Description Category</label>
								    <input type="text" name="desc-cate" class="form-control" id="desc_cate" placeholder="Please your description...">
							  	</div>
							  	<div class="form-group">
							  		<button type="button" class="col-md-12 btn btn-outline-warning btnAddCate" id="btnAddCate">Add News</button>
							  	</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="box-content-cate">
					<div class="container">
						<!-- ================================================
								Start: Card Category data
						================================================ -->
						<?php foreach ($dataCategory as $value): ?>
						<div class="card card-inverse card-info mb-3 text-left">
						  	<div class="card-block">
						    	<div class="row">
						    		<div class="col-md-8 text-left databox">
							    		<blockquote class="card-blockquote">
								      		<div class="edit-after" style="display: none;">
								      			<fieldset class="form-group">
								      				<input type="hidden" class="form-control idCategory" value="<?php echo $value['id']; ?>">
								      				<input type="text" class="form-control" name="name-cate-update" id="name_cate_update" value="<?php echo $value['name_cate'] ?>">
								      			</fieldset>
								      			<fieldset class="form-group" style="margin-bottom: 0;">
								      				<input type="text" class="form-control" id="desc_cate_update" name="desc-cate-update" value="<?php echo $value['desc_cate'] ?>">
								      			</fieldset>
								      		</div>
								      		<div class="data-category">
								      			<h3>
									      			<?php echo $value['name_cate'] ?>	
									      		</h3>
									      		<footer><?php echo $value['desc_cate'] ?></footer>
								      		</div>
								    	</blockquote>
							    	</div>
							    	<?php if($value['id'] == 32){ ?>
							    	<?php } else{ ?>
							    		<div class="col-md-4 text-right actionbtn">
								    		<ul class="list-inline">
								    			<li class="list-inline-item defaultbtn">
								    				<a data-href="<?php echo $value['id'] ?>" class="btn btn-warning btnEditCategory">
								    					<i class="fa fa-pencil"></i>
								    				</a>
								    			</li>
								    			<li class="list-inline-item defaultbtn">
								    				<a data-href="<?php echo $value['id'] ?>" class="btn btn-danger btnDeleteCategory">
								    					<i class="fa fa-remove"></i>
								    				</a>
								    			</li>
								    			<li class="list-inline-item accept-edit" style="display: none;">
								    				<a data-href="<?php echo $value['id'] ?>" class="saveEditCate btn btn-success">
								    					<i class="fa fa-check" aria-hidden="true"></i>
								    				</a>
								    			</li>
								    		</ul>
							    		</div>
									<?php } ?>
						    	</div>
						  </div>
						</div>
						<?php endforeach ?>
						<!-- ================================================
								End: Card Category data
						================================================ -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/perfect-scrollbar.jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/main.js"></script>
	<script type="text/javascript">
		$(function(){
			urlroot = '<?php echo base_url(); ?>';
			$('#btnAddCate').click(function(event){
				$.ajax({
					url: urlroot + 'Blog/addCategory',
					type: 'POST',
					dataType: 'json',
					data: {
						name_cate: $('#name_cate').val(),
						desc_cate: $('#desc_cate').val()
					}
				})
				.done(function() {
					// console.log("success");
				})
				.fail(function() {
					// console.log("error");
				})
				.always(function(res) {
					// console.log("complete");
					results  = '<div class="card card-inverse card-info mb-3 text-left">';
					results += '<div class="card-block">';
					results += '<div class="row">';
					results += '<div class="col-md-8 text-left databox">';
					results += '<blockquote class="card-blockquote">';
					results += '<div class="edit-after" style="display: none;">';
					results += '<fieldset class="form-group">';
					results += '<input type="hidden" class="form-control idCategory" value="'+res+'">';
					results += '<input type="text" class="form-control" name="name-cate-update" id="name_cate_update" value="'+$('#name_cate').val()+'">';
					results += '</fieldset>';
					results += '<fieldset class="form-group" style="margin-bottom: 0;">';
					results += '<input type="text" class="form-control" id="desc_cate_update" name="desc-cate-update" value="'+$('#desc_cate').val()+'">';
					results += '</fieldset>';
					results += '</div>';
					results += '<div class="data-category">';
					results += '<h3>';
					results += $('#name_cate').val();
					results += '</h3>';
					results += '<footer>';
					results += $('#desc_cate').val();
					results += '</footer>';
					results += '</div>';
					results += '</blockquote>';
					results += '</div>';
					results += '<div class="col-md-4 text-right actionbtn">';
					results += '<ul class="list-inline">';
					results += '<li class="list-inline-item defaultbtn"><a data-href="'+res+'" class="btn btn-warning btnEditCategory"><i class="fa fa-pencil"></i></a></li>';
					results += '<li class="list-inline-item defaultbtn"><a data-href="'+res+'" class="btn btn-danger btnDeleteCategory"><i class="fa fa-remove"></i></a></li>';
					results += '<li class="list-inline-item accept-edit" style="display: none;"><a data-href="'+res+'" class="btn btn-success saveEditCate"><i class="fa fa-check" aria-hidden="true"></i></a></li>';
					results += '</ul>';
					results += '</div>';
					results += '</div>';
					results += '</div>';
					results += '</div>';
					$('.box-content-cate .container').append(results);
				});

			});

			$('body').on('click', '.btnDeleteCategory', function() {
				id = $(this).data('href');
				cardsDel = $(this).parents().parents().parents().parents().parents().parents('.card'); 
				$.ajax({
					url: urlroot + 'Blog/deleteCategory/' + id,
					type: 'POST',
					dataType: 'json'
				})
				.done(function() {
					//console.log("success");
				})
				.fail(function() {
					//console.log("error");
				})
				.always(function() {
					//console.log("complete");
					cardsDel.remove();
				});
			});

			$('body').on('click', '.btnEditCategory', function(event) {
				event.preventDefault();
				elementafter = $(this).parents().parents().parents().prev('.databox').find('.edit-after');
				element = $(this).parents().parents().parents().prev('.databox').find('.data-category');
				elementactionafter = $(this).parents().parents('.actionbtn').find('.accept-edit');
				element.hide();
				elementafter.show();
				$(this).parents('.defaultbtn').hide();
				$(this).parents('.defaultbtn').next().hide();
				elementactionafter.show();
			});

			$('body').on('click', '.saveEditCate', function(event) {
				event.preventDefault();
				id_cate = $(this).parents().parents().parents().prev('.databox').find('.idCategory').val();
				name_cate_update = $(this).parents().parents().parents().prev('.databox').find('#name_cate_update').val();
				desc_cate_update = $(this).parents().parents().parents().prev('.databox').find('#desc_cate_update').val();

				actionafter = $(this).parents('.accept-edit');
				actiondefault = $(this).parents().parents().parents('.actionbtn').find('.defaultbtn');
				forminputdefault = $(this).parents().parents().parents().prev('.databox').find('.data-category');
				forminputafter = $(this).parents().parents().parents().prev('.databox').find('.edit-after');

				value_name_update = $(this).parents().parents().parents().prev('.databox').find('#name_cate_update').val();
				value_desc_update = $(this).parents().parents().parents().prev('.databox').find('#desc_cate_update').val();
				actionafter.hide();
				forminputafter.hide();

				value_name_old = $(this).parents().parents().parents().prev('.databox').find('.data-category h3');
				value_desc_old = $(this).parents().parents().parents().prev('.databox').find('.data-category footer');
				value_name_old.html(value_name_update);
				value_desc_old.html(value_desc_update);
				actiondefault.show();
				forminputdefault.show();
				
				$.ajax({
					url: urlroot + 'Blog/updateCategory/' + id_cate,
					type: 'POST',
					dataType: 'json',
					data: {
						id: id_cate,
						name_cate: name_cate_update,
						desc_cate: desc_cate_update
					},
				})
				.done(function() {
					//console.log("success");
				})
				.fail(function() {
					// console.log("error");
				})
				.always(function() {
					// console.log("complete");
					
				});
				
			});
		});
	</script>
</body>
</html>
