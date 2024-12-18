<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        // Load necessary libraries and models
        $this->load->library('form_validation');
		$this->load->model('Input_model', 'im');
	
    }
    
	
public function logins() {
    // Validate the form data
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() == FALSE) {
        // Display the login form
        $this->load->view('login');
    } else {
        // Check if the user exists in the database
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->im->get_user_by_email($email);

        if ($user) {
            if ($user->is_verified == 1 && password_verify($password, $user->password)) {
                // Set user session data
                $user_data = array(
                    'uid' => $user->uid,
                    'email' => $user->email,
                    'custom_username' => $user->custom_username,
                    'sitename' => $user->sitename,
                    'logged_in' => TRUE
                );

                $this->session->set_userdata($user_data);

                if (!empty($this->session->userdata('sid'))) {
                    $t = $this->session->userdata('sid');
                    $this->session->unset_userdata($t);
                    redirect(base_url() . 'sitedetails?sid=' . $t);
                } else {
                    redirect(base_url() . '/');
                }
            } elseif ($user->is_verified == 0) {
                // User is not verified
                $this->session->set_flashdata('message', 'Please verify your email address before logging in.');
                redirect(base_url() . 'loginpage');
            } else {
                // Invalid password
                $this->session->set_flashdata('message', 'Please check your email and password.');
                redirect(base_url() . 'loginpage');
            }
        } else {
            // User not found
            $this->session->set_flashdata('message', 'User not found.');
            redirect(base_url() . 'loginpage');
        }
    }
}


	

	
    
    public function logout() {
        // Destroy user session data
        $this->session->sess_destroy();
        
        // Redirect to the login page
        redirect('../');
    }

	public function checking()
	{
		$this->load->view('checking');
	}

	// category function starts from here
	public function Addcategory()
    {
    $data = array(
        'category' => $this->input->post('category'),
		'user_id' => $this->input->post('user_id'),
    );
    $this->im->addingcategory($data);
    switch (true) {
        case $data !== "":
            $this->session->set_flashdata('msg', 'Category Added!');
            redirect(base_url() . 'usercategoryadding');
            break;
        default:
        redirect(base_url() . 'usercategoryadding');
    }
}


public function usersiteupload()
    {
		$config2 = array(
            'upload_path' => './uploads',
            'allowed_types' => 'gif|png|jpg|jpeg',
            'encrypt_name' => TRUE,
        );
        $this->load->library('upload', $config2);
        if (!$this->upload->do_upload('images')) {
            $error = array('error' => $this->upload->display_errors());
            $upload_data = $this->upload->data();
			$noimg1 = 1;
            $this->session->set_flashdata('message', '<h4 class="text-danger">Your image not uploaded :</h4>' . $error['error']);
        } else {
            $upload_data = $this->upload->data();
        }
        $image =  base_url("uploads/" . $upload_data['raw_name'] . $upload_data['file_ext']);
    $data = array(
		'user_id' => $this->input->post('user_id'),
        'namese' => $this->input->post('namese'),
		'links' => $this->input->post('links'),
		'category' => $this->input->post('category'),
		'type' => $this->input->post('type'),
		'description' => $this->input->post('description'),
		'images' => $image,
    );
    $this->im->usersideaddingsite($data);
    switch (true) {
        case $data !== "":
            $this->session->set_flashdata('msg', 'Your Site/Extension is Added!');
            redirect(base_url() . 'usersiteaddingpage');
            break;
        default:
        redirect(base_url() . 'usersiteaddingpage');
    }

}

// Step One of Registration Form (Basic User Details)
// public function step_one() {
// 	// Validate the form data for step one
// 	$this->form_validation->set_rules('username', 'Username', 'trim|required');
// 	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
// 	$this->form_validation->set_rules('password', 'Password', 'trim|required');

// 	if ($this->form_validation->run() == FALSE) {
// 		// Form validation failed for step one, show the registration form again
// 		$this->session->set_flashdata('error', 'User already exists');
// 			redirect("../registerpage");
// 	} else {
// 		// Form validation succeeded for step one, store the data temporarily and proceed to step two
// 		$this->session->set_userdata('username', $this->input->post('username'));
// 		$this->session->set_userdata('email', $this->input->post('email'));
// 		$this->session->set_userdata('password', password_hash($this->input->post('password'), PASSWORD_BCRYPT));
// 		$this->session->set_userdata('verification_key', md5(rand()));
	

// 		// Load the view for step two of the registration form
// 		$this->load->view('siteentry');
// 	}
// }

// Step Two of Registration Form (Additional User Details)
// public function step_two() {
// 	// Validate the form data for step two
// 	$this->form_validation->set_rules('custom_username', 'Custom Username', 'trim|required|callback_check_unique_username');

// 	if ($this->form_validation->run() == FALSE) {
// 		// Form validation failed for step two, show the registration form step two again
// 		$this->session->set_flashdata('error', 'Custom_Username already exists');
// 		$this->load->view('siteentry');
// 	} else {
// 		// Form validation succeeded for step two, store the data temporarily and proceed to final step
// 		$this->session->set_userdata('custom_username', $this->input->post('custom_username'));

// 		// Call a method to insert the user data into the database and complete the registration
// 		$this->complete_registration();
// 	}
// }

//     // Custom callback function to check unique usernames (similar to previous implementation)
//     public function check_unique_username($username) {
//         if ($this->im->is_username_exists($username)) {
//             $this->form_validation->set_message('check_unique_username', 'The {field} already exists.');
//             return FALSE;
//         }
//         return TRUE;
//     }

// Method to complete the user registration and insert data into the database
// private function complete_registration() {
// 	$data = array(
// 		'username' => $this->session->userdata('username'),
// 		'email' => $this->session->userdata('email'),
// 		'custom_username' => $this->session->userdata('custom_username'),
// 		'password' => $this->session->userdata('password')
// 	);

// 	// Insert the data into the database (using your model, e.g., YourModel->create_user())
// 	// For simplicity, let's assume YourModel->create_user() inserts data into the 'users' table
// 	$this->im->create_user($data);

// 	// Set user data in session after successful registration
// 	$this->session->set_userdata('logged_in', TRUE);

// 	// Redirect to a success page or any other desired page
// 	redirect(base_url() . 'loginpage');
// }


// hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh

 public function process_registration() {
     $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('custom_username', 'Custom_username', 'required|trim|min_length[3]|max_length[50]|alpha_dash|is_unique[users.custom_username]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]');
        
         $this->form_validation->set_message('is_unique', 'The {field} already exists.');
         
           // Generate a UUID for the uid
            $uid = strtoupper(bin2hex(random_bytes(16)));
        
          do {
        $verification_key = bin2hex(random_bytes(16));
    } while ($this->db->get_where('users', array('verification_key' => $verification_key))->num_rows() > 0);

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', 'User already exists');
            $this->load->view('register');
        } else {
            $data = array(
                  'uid' => $uid,
                'custom_username' => $this->input->post('custom_username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'verification_key' => $verification_key,
            );

            $this->db->insert('users', $data);

            $this->send_verification_email($data['email'], $data['verification_key']);

            $this->session->set_flashdata('errors', 'Registration successful. Please check your email to verify your account.');
            redirect(base_url() . 'registerpage');
        }
    }

    private function send_verification_email($email, $verification_key) {
        $this->load->library('email');

        // Configure email settings
        $config['protocol'] = 'smtp';
        // Set your SMTP settings
        $this->email->initialize($config);

        $this->email->from('userservice@sitesaverhub.com');
        $this->email->to($email);
        $this->email->subject('Verify your email address');
        $this->email->message('Please click the following link to verify your email address: ' . base_url() . 'verify_email/' . $verification_key);

        $this->email->send();
    }
    
        public function verify_email($verification_key) {
        $user = $this->db->get_where('users', array('verification_key' => $verification_key))->row_array();

        if ($user) {
            $this->db->update('users', array('is_verified' => 1), array('uid' => $user['uid']));

            $this->session->set_flashdata('messages', 'Your email address has been verified. You can now log in.');
            redirect(base_url() . 'loginpage');
        } else {
            $this->session->set_flashdata('message', 'Invalid verification key');
            redirect(base_url() . 'registerpage');
        }
     }
    
}

    
     
     
        



