<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Blog_model');
	}

	public function index()
	{
      	$results = $this->Blog_model->loadCategory();
		$results = array('dataCategory' => $results );
		$this->load->view('admin/addCategory_view',$results);
	}

	/*
  	* Func: category controllers from model
  	*
  	* Param: $results
  	*/
	public function category()
	{
		$results = $this->Blog_model->loadCategory();
		$results = array('dataCategory' => $results );
		$this->load->view('admin/addCategory_view',$results);
	}

	/*
  	* Func: 
  	*
  	* Param: $results
  	*/
	public function editCategory($idcate)
	{
		$data = $this->Blog_model->getDataById($idcate);


	}

	/*
  	* Func: 
  	*
  	* Param: $results
  	*/
	public function updateCategory()
	{
		$id = $this->input->post('id');
		$name_cate = $this->input->post('name_cate');
		$desc_cate = $this->input->post('desc_cate');
		$this->Blog_model->updateCategoryById($id,$name_cate,$desc_cate);
	}

	/*
  	* Func: Get Data From View Add Category
  	*
  	* Param: $name_cate, $desc_cate
  	*/
	public function addCategory()
	{
		$name_cate = $this->input->post('name_cate');
		$desc_cate = $this->input->post('desc_cate');
		$this->Blog_model->insertCategory($name_cate, $desc_cate);
		echo json_encode($this->db->insert_id());
	}

	/*
  	* Func: 
  	*
  	* Param: $results
  	*/
	public function deleteCategory($iddel)
	{
		$this->Blog_model->deleteById($iddel);
	}




	

	public function manageNews()
	{
		$data1 = $this->Blog_model->loadCategory();
		$data2 = $this->Blog_model->loadNews();
		$data = array(
			'datacate'=> $data1,
			'dataNews'=> $data2
		);
		$this->load->view('admin/manageNews_view',$data);
	}

	public function addNews()
	{
		$target_dir = "assets/uploads/";
		$target_file = $target_dir . basename($_FILES["image_news"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["image_news"]["tmp_name"]);
		    if($check !== false) {
		        //echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        //echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
		    //echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["image_news"]["size"] > 500000) {
		    //echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    //echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["image_news"]["tmp_name"], $target_file)) {
		        //echo "The file ". basename( $_FILES["image_news"]["name"]). " has been uploaded.";
		    } else {
		        //echo "Sorry, there was an error uploading your file.";
		    }
		}

		$image_news = base_url().'assets/uploads/' .basename( $_FILES["image_news"]["name"]);
		$name_news = $this->input->post('name_news');
		$desc_news = $this->input->post('desc_news');
		$id_cate = $this->input->post('id_cate');
		$content_news = $this->input->post('content_news');
		$this->Blog_model->insertNews($name_news,$desc_news,$id_cate,$content_news,$image_news);
	}
}

/* End of file  */
/* Location: ./application/controllers/ */
