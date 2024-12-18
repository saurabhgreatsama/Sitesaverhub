<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
        
        $this->load->helper('url');
		$this->load->library('pagination');

    }

	public function index()
	{
		$data['title'] = "Sitesaverhub"; 
		$this->load->view('header', $data);
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function thankyou()
	{
		$this->load->view('thankyou');
	}

	public function about()
	{
		$data['title'] = "Aboutpage"; 
		$this->load->view('header', $data);
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function extensionlist()
	{
		$data['title'] = "Extension List"; 
		$this->load->view('header',$data);
		$this->load->model('Getting_model');
		$this->load->model('Input_model');
		$data['extlists'] = $this->Input_model->extdata();
		$data['extcategorylist'] = $this->Getting_model->extsitecategory();
		$this->load->view('extlist',$data);
		$this->load->view('footer');
	}

	public function find()
	{
		$this->load->view('header');
		$this->load->view('search');
		$this->load->view('footer');
	}

	public function contact()
	{
		$data['title'] = "Contact"; 
		$this->load->view('header',$data);
		$this->load->view('contact');
		$this->load->view('footer');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function siteEntrys()
	{
		$this->load->view('siteentry');
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function viewinsidesite()
	{
	    $data['title'] = "Website List"; 
		$sid = $this->input->get("sid");     
		$this->load->view('header',$data);
		$this->load->model('Input_model');
		$this->load->model('Getting_model');
		$cat['categorylist'] = $this->Getting_model->allcategory();

		$data['sitecat'] = $this->Getting_model->sitecategory();
		$data['sitedeep'] = $this->Input_model->viewsite($sid);
		$this->load->view('sitedetails',$data);
		$this->load->view('footer',$cat);
	}

	public function viewextinside()
	{
	     $data['title'] = "Extension List";
		$eid = $this->input->get("eid");     
		$this->load->view('header',$data);
		$this->load->model('Input_model');
		$this->load->model('Getting_model');
		$cat['categorylist'] = $this->Getting_model->allcategory();
		$data['extcat'] = $this->Getting_model->extsitecategory();
		$data['extdeep'] = $this->Input_model->viewext($eid);
		$this->load->view('extdetails',$data);
		$this->load->view('footer',$cat);
	}

    public function sitelist()
     {
		$data['title'] = "Website List"; 
    $this->load->view('header',$data);
    $this->load->model('Input_model');
    $this->load->model('Getting_model');
    $data['sitelists'] = $this->Input_model->getSitedata();
	$data['sitecat'] = $this->Getting_model->sitecategory();
    $this->load->view('blog', $data);
    $this->load->view('footer');
}

	public function cats(){
	    $data['title'] = "Website Category"; 
		$id = $this->input->get("id");
		$this->load->view('header',$data);
		$this->load->model('Getting_model');
		$data['sitelists'] = $this->Getting_model->catfilter($id);
			$data['specificategoryname'] = $this->Getting_model->specificat($id);
		$data['sitecat'] = $this->Getting_model->sitecategory();
		$this->load->view('category',$data);
		$this->load->view('footer');
	}

	public function extcats(){
	    	$data['title'] = "Extension Category"; 
		$id = $this->input->get("id");
		$this->load->view('header',$data);
		$this->load->model('Getting_model');
		$data['extlist'] = $this->Getting_model->catfilters($id);
		$data['extcat'] = $this->Getting_model->extsitecategory();
		$this->load->view('extcategory',$data);
		$this->load->view('footer');
	}

	public function userlogs($x)
	{
		$sid = 0;
		$sess = array(
			'sid' => $x,
		);
		$this->session->set_userdata($sess);
		$this->load->view('login');
	}		


}
