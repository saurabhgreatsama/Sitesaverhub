<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function adminlogin()
	{
		$this->load->view("admindash/superlogin");
	}

	public function admin()
	{
		$this->load->view("admindash/header");
		$this->load->model('Getting_model');
		$this->load->model('Input_model');
		$data['extcategorylists'] = $this->Input_model->extcatdata();
		$data['sitelists'] = $this->Input_model->sitedata();
		$data['extlists'] = $this->Input_model->extdata();
		$data['contactlist'] = $this->Getting_model->contactrequest();
		$data['categorylist'] = $this->Getting_model->sitecategory();
		$this->load->view("admindash/admin",$data);
		$this->load->view("admindash/footer");
	}

	public function categorylist()
	{
		$this->load->view("admindash/header");
		$this->load->model('Getting_model');
		$data['categorylist'] = $this->Getting_model->sitecategory();
		$this->load->view("admindash/categorylist",$data);
		$this->load->view("admindash/footer");
	}

	public function categoryadding()
	{
		$this->load->view("admindash/header");
		$this->load->view("admindash/categoryadding");
		$this->load->view("admindash/footer");
	}


	public function contactlist()
	{
		$this->load->view("admindash/header");
		$this->load->model('Getting_model');
		$data['contactlist'] = $this->Getting_model->contactrequest();
		$this->load->view("admindash/contactlist",$data);
		$this->load->view("admindash/footer");
	}

	public function userlists()
	{
		$this->load->view("admindash/header");
		$this->load->model('Getting_model');
		$data['userlists'] = $this->Getting_model->userlist();
		$this->load->view("admindash/userlist",$data);
		$this->load->view("admindash/footer");
	}

	public function suggestlist()
	{
		$this->load->view("admindash/header");
		$this->load->model('Getting_model');
		$data['suggestlists'] = $this->Getting_model->suggestreq();
		$this->load->view("admindash/suggestlist",$data);
		$this->load->view("admindash/footer");
	}

	public function siteadding()
	{
		$this->load->view("admindash/header");
		$this->load->model('Getting_model');
		$data['categorylist'] = $this->Getting_model->sitecategory();
		$this->load->view("admindash/siteadding",$data);
		$this->load->view("admindash/footer");
	}

	public function sitelist()
	{
		$this->load->view("admindash/header");
		$this->load->model('Input_model');
		$data['sitelists'] = $this->Input_model->sitedata();
		$this->load->view("admindash/sitelist",$data);
		$this->load->view("admindash/footer");
	}

	public function extensionadding()
	{
		$this->load->view("admindash/header");
		$this->load->model('Getting_model');
		$data['extcategorylist'] = $this->Getting_model->extsitecategory();
		$this->load->view("admindash/extensionadding",$data);
		$this->load->view("admindash/footer");
	}

	public function extensioncategory()
	{
		$this->load->view("admindash/header");
		$this->load->view("admindash/extcategoryadding");
		$this->load->view("admindash/footer");
	}

	public function extensionlist()
	{
		$this->load->view("admindash/header");
		$this->load->model('Input_model');
		$data['extlists'] = $this->Input_model->extdata();
		$this->load->view("admindash/extensionlist",$data);
		$this->load->view("admindash/footer");
	}

	public function extcategorylist()
	{
		$this->load->view("admindash/header");
		$this->load->model('Input_model');
		$data['extcategorylists'] = $this->Input_model->extcatdata();
		$this->load->view("admindash/extcategorylist",$data);
		$this->load->view("admindash/footer");
	}
	
	public function viewsite()
	{
		$sid = $this->input->get("sid");
       $this->load->view('admindash/header');
	   $this->load->model('Input_model');
	   $data['sitelists'] = $this->Input_model->sitesdata($sid);
	   $this->load->view('admindash/viewsitedetails',$data);
	   $this->load->view('admindash/footer');
	}
}
