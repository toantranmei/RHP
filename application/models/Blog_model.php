<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function index(){

  }

  /*
  * Func: Load Category from database to view
  *
  * Param: $data
  */
  public function loadCategory()
  {
    $this->db->select('*');
    $data = $this->db->get('category');
    $data = $data->result_array();
    return $data;
  }

  /*
  * Func: Insert Category to database
  *
  * Param: Array
  */
  public function insertCategory($name_cate, $desc_cate)
  {
    $data = array(
      'name_cate' => $name_cate,
      'desc_cate' => $desc_cate
    );
    $this->db->insert('category', $data);
  }

  /*
  * Func: Delete element for id from database
  *
  * Param: $id
  */
  public function deleteById($id){
    $this->db->where('id', $id);
    $this->db->delete('category');
  }

  /*
  * Func: Update Data to Database
  *
  * Param: Array
  */
  public function updateCategoryById($id, $name_cate,$desc_cate){
    $dataupdate = array(
      'id' => $id,
      'name_cate' => $name_cate,
      'desc_cate' => $desc_cate
    );
    $this->db->where('id', $id);
    $this->db->update('category', $dataupdate);

  }

}
