<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('Grocery_CRUD');

		if(!$this->ion_auth->is_admin()){
			redirect('auth/login');
			die();
		}
		$this->load->library('grocery_CRUD');
		$this->load->library('image_CRUD');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('session');

	}

	public function index(){
		$this->load->view('admin/dashboard');
	}
    
    public function programs(){
		$crud = new grocery_CRUD('default');
		$crud->set_theme('datatables');
	    $crud->set_table('programs');
		$crud->set_subject('programs');
		$crud->unset_columns('created_date');
		$crud->set_field_upload('image','assets/uploads');
		$crud->unset_edit_fields('created_date');
		$crud->unset_add_fields('created_date');
		// $crud->unset_edit();
		// $crud->unset_delete();
		// $crud->unset_add();
		
		$data = $crud->render();
		$this->load->view('admin/crud_view',$data);
	}

	public function testimonies(){
		$crud = new grocery_CRUD('default');
		$crud->set_theme('datatables');
	    $crud->set_table('testimonies');
		$crud->set_subject('testimonies');
		$crud->unset_columns('created_date');
		$crud->set_field_upload('image','assets/uploads');
		$crud->unset_edit_fields('created_date');
		$crud->unset_add_fields('created_date');
		// $crud->unset_edit();
		// $crud->unset_delete();
		// $crud->unset_add();
		
		$data = $crud->render();
		$this->load->view('admin/crud_view',$data);
	}

	
}
/* End of file welcome.php */
/* Location: ./application/controllers/Admin.php */
