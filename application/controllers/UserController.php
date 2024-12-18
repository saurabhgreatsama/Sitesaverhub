<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

     public function userview()
	 {
		$this->load->view('users/header');
		$this->load->model('Getting_model');
		$data['categorylist'] = $this->Getting_model->allcategory();
		$data['usersitelist'] = $this->Getting_model->allusersitelist();
		$data['savesitelists'] = $this->Getting_model->allsavedlist();
		$this->load->view('users/userdash',$data);
		$this->load->view('users/footer');
	 }

	 public function usercategory()
	 {
		$this->load->view('users/header');
		$this->load->view('users/categoryadding');
		$this->load->view('users/footer');
	 }
	 
	 public function testings()
	 {
		$this->load->model('Getting_model');
		$data['testlist'] = $this->Getting_model->testinglist();
		$this->load->view('testing',$data);
	 }

	 public function successpage()
	 {
		$this->load->view('success');
	 }

	 public function notfounds()
	 {
		$this->load->view('notfound');
	 }

	 public function usersite()
	 {
		$this->load->view('users/header');
		$this->load->model('Getting_model');
		$data['categorylist'] = $this->Getting_model->allcategory();
		$this->load->view('users/siteadding',$data);
		$this->load->view('users/footer');
	 }

	 public function usersitesuggestion()
	 {
		$this->load->view('users/header');
		$this->load->view('users/sitesuggestion');
		$this->load->view('users/footer');
	 }
	 
	 public function externallink()
	 {
		$this->load->view('users/header');
		$this->load->model('Getting_model');
		$data['externaldata'] = $this->Getting_model->allexternal();
		$this->load->view('users/external',$data);
		$this->load->view('users/footer');
	 }

	 public function usersiteaddinglist()
	 {
		$this->load->view('users/header');
		$this->load->model('Getting_model');
		$data['usersitelist'] = $this->Getting_model->allusersitelist();
		$this->load->view('users/usersiteaddinglist',$data);
		$this->load->view('users/footer');
	 }

	 public function usercategorylist()
	 {
		$this->load->view('users/header');
		$this->load->model('Getting_model');
		$data['categorylist'] = $this->Getting_model->allcategory();
		$this->load->view('users/categorylistpage',$data);
		$this->load->view('users/footer');
	 }

	 public function savesiteextlist()
	 {
		$this->load->view('users/header');
		$this->load->model('Getting_model');
		$data['savesitelists'] = $this->Getting_model->allsavesiteext();
		$this->load->view('users/savesiteext',$data);
		$this->load->view('users/footer');
	 }

	//  user template start from here

	public function usersites()
	{
		$this->load->model('Getting_model');
		$data['categorylist'] = $this->Getting_model->allcategory();
		$this->load->view('users/usertemplate',$data);
	}
	 
public function saved_list($custom_username) {
		// Now you can use the $custom_username here
		$this->load->model('Input_model','im');
		$data['saved_list'] = $this->im->get_saved_list_by_username($custom_username);
		$data['external_list'] = $this->im->get_external_list_by_username($custom_username);
	
		if (isset($data['saved_list']) || isset($data['external_list'])) {
			// At least one of them exists
		
			// Load the view to display the saved list
			$this->load->view('users/usertemplate', $data);
		} else {
			// If neither 'saved_list' nor 'external_list' is available, show an error or redirect
			echo "<center>No saved list found for this user. Check External links</center>";

		}
	}

	public function verify_identity($custom_username) {
		// Pass the username to the view for form submission
		$data['custom_username'] = $custom_username;
		$this->load->view('users/verify', $data);
	}

	public function forwards() {
		$custom_username = $this->input->post('custom_username');
		$password = $this->input->post('password');
	
		// Add your logic to verify the password here
		$this->load->model('Input_model','im');
		$is_valid_password = $this->im->verify_password($custom_username, $password);

		// print_r($custom_username);
	
		if ($is_valid_password) {
			// Load the user's saved list page
			$this->saved_list($custom_username);
		} else {
			echo "hhhh";
		}
	}
	
	
	
	public function process_form() {
		$user_id = $this->input->post('user_id');
		$url = $this->input->post('url');
		$sitename = $this->input->post('sitename');
		$details = $this->input->post('details');

		$this->load->model('Getting_model');
		$result = $this->Getting_model->save_url_to_dashboard($user_id, $url, $sitename, $details);

		
		if ($result) {
			redirect(base_url() . 'savedpage');
		} else {
			echo "Error saving URL!";
		}
	}
	
	public function save_url($x, $custom_name) {
		// Get the full URL from the URI
		$url = $this->uri->uri_string();
	// echo $url;
	$test = explode('ver',$url);
	$data['test'] = $test;
	
		// Get the user's ID using their custom name
		$this->load->model('Input_model','im');
		$user_id = $this->im->get_user_id_by_custom_name($x);
		// echo $user_id;
		$data['test1'] = $user_id;
		
	
		if ($user_id) {
			$this->load->view('testing',$data);
		} else {
			redirect(base_url() . 'notofundpage');
		}
	}

}
