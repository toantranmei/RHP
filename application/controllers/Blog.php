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

}

/* End of file  */
/* Location: ./application/controllers/ */
