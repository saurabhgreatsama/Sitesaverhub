<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FunctionController extends CI_Controller {

public function __construct() {
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->library(['form_validation']);
        //load our Register model here
        $this->load->model('Input_model', 'im');
    }

	public function Addsitecategory()
    {
    $data = array(
        'sitecategoryname' => $this->input->post('sitecategoryname'),
    );
    $this->im->addingsitecategory($data);
    switch (true) {
        case $data !== "":
            $this->session->set_flashdata('msg', 'site Category Added!');
            redirect(base_url() . 'categorylistpage');
            break;
        default:
        redirect(base_url() . 'categoryaddingpage');
    }
}

public function Addextcategory()
    {
    $data = array(
        'extensioncategoryname' => $this->input->post('extensioncategoryname'),
    );
    $this->im->addingextcategory($data);
    switch (true) {
        case $data !== "":
            $this->session->set_flashdata('msg', 'Extension Category Added!');
            redirect(base_url() . 'extcategorylistpage');
            break;
        default:
        redirect(base_url() . 'extcategoryaddingpage');
    }
}

public function Addsite()
    {
		$config2 = array(
            'upload_path' => './uploads',
            'allowed_types' => 'gif|png|jpg|jpeg',
            'encrypt_name' => TRUE,
        );
        $this->load->library('upload', $config2);
        if (!$this->upload->do_upload('siteimage')) {
            $error = array('error' => $this->upload->display_errors());
            $upload_data = $this->upload->data();
			$noimg1 = 1;
            $this->session->set_flashdata('message', '<h4 class="text-danger">Your image not uploaded :</h4>' . $error['error']);
        } else {
            $upload_data = $this->upload->data();
        }
        $image =  base_url("uploads/" . $upload_data['raw_name'] . $upload_data['file_ext']);
    $data = array(
        'sid' => uniqid(),
        'sitename' => $this->input->post('sitename'),
		'sitelink' => $this->input->post('sitelink'),
		'sitecategory_id' => $this->input->post('sitecategory_id'),
		'sitedetails' => $this->input->post('sitedetails'),
		'siteintro' => $this->input->post('siteintro'),
		'siteintroduction' => $this->input->post('siteintroduction'),
		'siteimage' => $image,
    );
    $this->im->addingsite($data);
    switch (true) {
        case $data !== "":
            $this->session->set_flashdata('msg', 'site Added!');
            redirect(base_url() . 'sitelistpage');
            break;
        default:
        redirect(base_url() . 'siteaddingpage');
    }

}

public function Addextension()
    {
		$config2 = array(
            'upload_path' => './uploads',
            'allowed_types' => 'gif|png|jpg|jpeg',
            'encrypt_name' => TRUE,
        );
        $this->load->library('upload', $config2);
        if (!$this->upload->do_upload('extimage')) {
            $error = array('error' => $this->upload->display_errors());
            $upload_data = $this->upload->data();
			$noimg1 = 1;
            $this->session->set_flashdata('message', '<h4 class="text-danger">Your image not uploaded :</h4>' . $error['error']);
        } else {
            $upload_data = $this->upload->data();
        }
        $image =  base_url("uploads/" . $upload_data['raw_name'] . $upload_data['file_ext']);
    $data = array(
        'extname' => $this->input->post('extname'),
		'extlink' => $this->input->post('extlink'),
		'extcategory_id' => $this->input->post('extcategory_id'),
		'extdetails' => $this->input->post('extdetails'),
		'extfree' => $this->input->post('extfree'),
		'extintro' => $this->input->post('extintro'),
		'extimage' => $image,
    );
    $this->im->addingext($data);
    switch (true) {
        case $data !== "":
            $this->session->set_flashdata('msg', 'Extension Added!');
            redirect(base_url() . 'extlistpage');
            break;
        default:
        redirect(base_url() . 'extensionaddingpage');
    }

}


// removing sitecategory
public function removesitecategory()
    {
        $id = $this->input->get('id');
        $response = $this->im->deletesitecat($id);
        if ($response == true) {
            $this->session->set_flashdata('msg', 'Successfully Delected,');
            redirect(base_url() . 'categorylistpage');
        } else {
            echo "Error !";
        }
    }

	public function removeextcat()
    {
        $id = $this->input->get('id');
        $response = $this->im->deleteextcat($id);
        if ($response == true) {
            $this->session->set_flashdata('msg', 'Successfully Delected,');
            redirect(base_url() . 'extcategorylistpage');
        } else {
            echo "Error !";
        }
    }

	public function removeextlist()
    {
        $eid = $this->input->get('eid');
        $response = $this->im->deleteextlist($eid);
        if ($response == true) {
            $this->session->set_flashdata('msg', 'Successfully Delected,');
            redirect(base_url() . 'extlistpage');
        } else {
            echo "Error !";
        }
    }
	
	// removing site
public function removesite()
{
	$sid = $this->input->get('sid');
	$response = $this->im->deadsite($sid);
	if ($response == true) {
		$this->session->set_flashdata('msg', 'Successfully Delected,');
		redirect(base_url() . 'sitelistpage');
	} else {
		echo "Error !";
	}
}

public function removeusercat()
{
	$id = $this->input->get('id');
	$response = $this->im->deadusercat($id);
	if ($response == true) {
		$this->session->set_flashdata('msg', 'Successfully Delected,');
		redirect(base_url() . 'usercategorylistpage');
	} else {
		echo "Error !";
	}
}

public function removeusersite()
{
	$id = $this->input->get('id');
	$response = $this->im->deadusersite($id);
	if ($response == true) {
		$this->session->set_flashdata('msg', 'Successfully Delected,');
		redirect(base_url() . 'usersiteaddinglistpage');
	} else {
		echo "Error !";
	}
}

public function removesavesite()
{
	$id = $this->input->get('id');
	$response = $this->im->deadsavesite($id);
	if ($response == true) {
		$this->session->set_flashdata('msg', 'Successfully Delected,');
		redirect(base_url() . 'savesitelists');
	} else {
		echo "Error !";
	}
}








// / admin login starts here
public function doLogin()
{
	$data = array(
		'email' => $this->input->post('email'),
		'password' => $this->input->post('password'),
	);
	$query = $this->im->checklogin($data);
	$result = $query->row();
	if ($result !== "" && $result !== null) {
		$ses = array(
			'id' => $result->id,
			'name' => $result->name,
			'email' => $result->email,
			'password' => $result->password,
			// 'status' => $result->status,
		);
		$this->session->set_userdata($ses);
		redirect("../kingdompage");
	} else {
		$this->session->set_flashdata('message', '<h6 class="text-success">Please Check Your Username and Password<h6>');
		redirect(base_url() . './gateguard');
	}
}

// admin logout function starts here
public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url() . './');
    }

	public function searchsite()
    {

        $key = $this->input->post('search');

        if (isset($key) and !empty($key)) {
            $data['records'] = $this->im->searchRecord($key);
            $data['link'] = '';
            $data['message'] = 'Search Results';
            $data['title'] = "𝕤𝕖𝕒𝕣𝕔𝕙 𝕣𝕖𝕤𝕦𝕝𝕥"; 
            $this->load->view('header',$data);
            $this->load->view('search', $data);
            $this->load->view('footer');
        } else {
            redirect('search');
        }
    }

	public function searchextension()
    {

        $key = $this->input->post('search');

        if (isset($key) and !empty($key)) {
            $data['records'] = $this->im->searchextRecord($key);
            $data['link'] = '';
            $data['message'] = 'Search Results';
             $data['title'] = "𝔼𝕩𝕥𝕖𝕟𝕤𝕚𝕠𝕟 𝕣𝕖𝕤𝕦𝕝𝕥"; 
            $this->load->view('header',$data);
            $this->load->view('searchext', $data);
            $this->load->view('footer');
        } else {
            redirect('searchext');
        }
    }

	

	public function contactsend()
    {
    $data = array(
        'name' => $this->input->post('name'),
		'email' => $this->input->post('email'),
		'subject' => $this->input->post('subject'),
		'message' => $this->input->post('message'),
    );
    $this->im->sendingcontact($data);
    switch (true) {
        case $data !== "":
            $this->session->set_flashdata('msg', 'Message Send Sucessfully We Will Contact You Shortly!');
            redirect(base_url() . 'contactpage');
            break;
        default:
        redirect(base_url() . 'contactpage');
    }
}


public function suggestadding()
    {
    $data = array(
		'fname' => $this->input->post('fname'),
		'email' => $this->input->post('email'),
		'type' => $this->input->post('type'),
		'webname' => $this->input->post('webname'),
		'weblink' => $this->input->post('weblink'),
        'message' => $this->input->post('message'),
    );
    $this->im->sendingsuggestion($data);
    switch (true) {
        case $data !== "":
            $this->session->set_flashdata('msg', 'Email Send Sucessfully Thankyou!');
            redirect(base_url() . 'thankyoupage');
            break;
        default:
        redirect(base_url() . '/');
    }
}

public function savefiles()
    {
    $data = array(
		'sid' => $this->input->post('sid'),
		'user_id' => $this->input->post('user_id'),
    );
    $this->im->sendingsaves($data);
    switch (true) {
        case $data !== "":
            $this->session->set_flashdata('msg', 'SAVED ENJOY MORE!');

            redirect(base_url() . 'sitelistpages');
            break;
        default:
        redirect(base_url() . '/');
    }
}

// public function savefiles()
//     {
//     $data = array(
// 		'sid' => $this->input->post('sid'),
// 		'user_id' => $this->input->post('user_id'),
// 		'ucat_id' => $this->input->post('ucat_id'),
//     );
//     $this->im->sendingsaves($data);
//     switch (true) {
//         case $data !== "":
//             $this->session->set_flashdata('msg', 'SAVED ENJOY MORE!');
// 			$this->session->set_userdata($user_data);
// 			if(!empty($this->session->userdata('sid')))
// 	{
// 		$t = $this->session->userdata('sid');
// 		$this->session->unset_userdata($t);
// 		redirect(base_url() . 'sitedetails?sid='.$t);
// 	}
// 	else{
// 	redirect(base_url() . '/');
// 	}
//     }
// }

public function removeexternal()
{
	$id = $this->input->get('id');
	$response = $this->im->deadexternal($id);
	if ($response == true) {
		$this->session->set_flashdata('msg', 'Successfully Delected,');
		redirect(base_url() . 'externalpage');
	} else {
		echo "Error !";
	}
}

public function editsitelist()
	{
		$sid = $_GET['sid'];
		$data['sitedata'] = $this->im->editsites($sid);
		$this->load->view('admindash/header');
		$this->load->view('admindash/editsite',$data);
		$this->load->view('admindash/footer');
	}

	public function editedversionsite()
    {
		$siteid = $this->input->post('sid');
		$noimg1 = "";
        $config2 = array(
            'upload_path' => './uploads',
            'allowed_types' => 'gif|png|jpg|jpeg',
            'encrypt_name' => TRUE,
        );
        $this->load->library('upload', $config2);
        if (!$this->upload->do_upload('siteimage')) {
            $error = array('error' => $this->upload->display_errors());
            $upload_data = $this->upload->data();
			$noimg1 = 1;
            $this->session->set_flashdata('message', '<h4 class="text-danger">Your image not uploaded :</h4>' . $error['error']);
        } else {
            $upload_data = $this->upload->data();
        }
		if($noimg1 == 1 && !empty($this->input->post('editimg1')))
		{
	    $image = $this->input->post('editimg1');
		}
		else{
        $image =  base_url("uploads/" . $upload_data['raw_name'] . $upload_data['file_ext']);
		}
        $data = array(
            'sitename' => $this->input->post('sitename'),
            'sitecategory_id' => $this->input->post('sitecategory_id'),
            'sitedetails' => $this->input->post('sitedetails'),
			'sitelink' => $this->input->post('sitelink'),
			'siteintroduction' => $this->input->post('siteintroduction'),
			'siteintro' => $this->input->post('siteintro'),
            'siteimage' => $image,
        );
		$this->im->update_site($data,$siteid);
        switch (true) {
            case $data !== "":
                $this->session->set_flashdata('msg', 'Successfully Updated!');
                redirect(base_url() . 'sitelistpage');
                break;
            default:
            redirect(base_url() . 'sendingeditsite');
        }
    }


}
