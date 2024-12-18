<?php
class Input_model extends CI_Model {
    
    
    function __construct()
	{
		parent::__construct();
	}

// adding site category
	function addingsitecategory($data)
	{
	  $this->db->insert('sitecategory',$data);
	}

	// adding site
	function addingsite($data)
	{
	  $this->db->insert('siteadding',$data);
	}

	function sendingsaves($data)
	{
	  $this->db->insert('save',$data);
	}

	function sendingextsaves($data)
	{
	  $this->db->insert('extsave',$data);
	}

	function usersideaddingsite($data)
	{
	  $this->db->insert('usersitesextadding',$data);
	}

	function create_user($data)
	{
	  $this->db->insert('users',$data);
	}
	
	function addingext($data)
	{
	  $this->db->insert('extadding',$data);
	}
	
		function deadexternal($id)
		{
			$this->db->where("id", $id);
			$this->db->delete("savedsite");
			return true;
		}

	function sendingcontact($data)
	{
	  $this->db->insert('contact',$data);
	}

	function sendingmail($data)
	{
	  $this->db->insert('subscriber',$data);
	}

	function sendingsuggestion($data)
	{
	  $this->db->insert('suggest',$data);
	}

	public function get_user_by_email($email) {
        // Retrieve the user record from the database based on the email
        $this->db->where('email', $email);
        $query = $this->db->get('users');

        // Return the user object if found, otherwise return null
        return $query->row();
    }

	public function get_user_by_username($username)
    {
        // Retrieve the user data from the database by username
        $this->db->where('username', $username);
        $query = $this->db->get('users');
        return $query->row();
    }

		public function is_username_exists($username) {
			$this->db->where('custom_username', $username);
			$query = $this->db->get('users');
			return $query->num_rows() > 0;
	}

	// removing site category
	function deletesitecat($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("sitecategory");
        return true;
    }

		// removing site category
		function deadsite($sid)
		{
			$this->db->where("sid", $sid);
			$this->db->delete("siteadding");
			return true;
		}

		function deadusercat($id)
		{
			$this->db->where("id", $id);
			$this->db->delete("category");
			return true;
		}

		function deadusersite($id)
		{
			$this->db->where("id", $id);
			$this->db->delete("usersitesextadding");
			return true;
		}

		function deadsavesite($id)
		{
			$this->db->where("id", $id);
			$this->db->delete("save");
			return true;
		}

		
        public function sitesdata($sid)
        {
        $this->db->select("*");
        $this->db->from("siteadding");
		$this->db->join('sitecategory', 'siteadding.sitecategory_id = sitecategory.id');
        $this->db->where("sid", $sid);
        $query = $this->db->get();
        return $query->result();
        }
		

		function deleteextcat($id)
		{
			$this->db->where("id", $id);
			$this->db->delete("extcategory");
			return true;
		}
		function deleteextlist($eid)
		{
			$this->db->where("eid", $eid);
			$this->db->delete("extadding");
			return true;
		}
		

		public function checklogin($data)
    {
        $this->db->select('*');
        $this->db->where('email', $data['email']);
        $this->db->where('password', $data['password']);
        $query = $this->db->get('admin');
        return $query;
    }

	public function sitedata()
    {
        $this->db->select("*");
        $this->db->from("siteadding");
		$this->db->join('sitecategory', 'siteadding.sitecategory_id = sitecategory.id');
        $query = $this->db->get();
        return $query->result();
    }

		public function extdata()
    {
        $this->db->select("*");
        $this->db->from("extadding");
		$this->db->join('extcategory', 'extadding.extcategory_id = extcategory.id');
		 $this->db->order_by('extadding.created_at', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

		public function extcatdata()
    {
        $this->db->select("*");
        $this->db->from("extcategory");
        $query = $this->db->get();
        return $query->result();
    }

		

public function getSitedata()
{
    $this->db->select("*");
    $this->db->from("siteadding");
    $this->db->join('sitecategory', 'siteadding.sitecategory_id = sitecategory.id');
    $this->db->order_by('siteadding.created_at', 'DESC');
    $query = $this->db->get();
    return $query->result();
}

	public function searchRecord($key)
    {
        $this->db->select('*');
        $this->db->from('siteadding');
        $this->db->like('sitename',$key);
        $this->db->or_like('sitedetails',$key);
		$this->db->or_like('siteintro',$key);
        $this->db->or_like('sid',$key);
        $query = $this->db->get();

        if($query->num_rows()>0){
          return $query->result();
        }
    }

	public function searchextRecord($key)
    {
        $this->db->select('*');
        $this->db->from('extadding');
        $this->db->like('extname',$key);
        $this->db->or_like('extdetails',$key);
		$this->db->or_like('extintro',$key);
        $this->db->or_like('eid',$key);
        $query = $this->db->get();

        if($query->num_rows()>0){
          return $query->result();
        }
    }

		public function viewsite($sid)
    {
        $this->db->select("*");
        $this->db->from("siteadding");
        $this->db->where("sid", $sid);
        $query = $this->db->get();
        return $query->result();
    }

	public function viewext($eid)
    {
        $this->db->select("*");
        $this->db->from("extadding");
        $this->db->where("eid", $eid);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function countSitedata() {
        return $this->db->count_all('siteadding'); // Replace 'your_table' with the actual table name
    }

		function addingextcategory($data)
	{
	  $this->db->insert('extcategory',$data);
	}

	function addingcategory($data)
	{
	  $this->db->insert('category',$data);
	}

	 // Method to fetch template data by custom usernam


	//  $this->db->select('save.id, save.sid, save.user_id, save.ucat_id, site1.sitelink, site1.sitename, site1.sitedetails, site1.siteintro, site1.siteimage, site1.sitecategory_id, category.id AS category_id, category.category');
	//  $this->db->from("save");
	//  $this->db->join('siteadding AS site1', 'site1.sid = save.sid');
	//  $this->db->join('category', 'site1.sitecategory_id = category.id');
	//  $this->db->where("save.user_id", $data);



	public function get_saved_list_by_username($custom_username) {
		$this->db->select('save.id, save.sid, save.user_id, siteadding.sitelink, siteadding.sitename, siteadding.sitedetails, siteadding.siteintro, siteadding.siteimage,siteadding.sitecategory_id');
		$this->db->from('save');
		$this->db->join('users', 'users.uid = save.user_id');
		$this->db->join('siteadding', 'siteadding.sid = save.sid');
		$this->db->where('users.custom_username', $custom_username);
		$query = $this->db->get();
	
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	
	public function get_external_list_by_username($custom_username) {
		$this->db->select('*');
		$this->db->from("savedsite");
		$this->db->join('users', 'users.uid = savedsite.user_id');
		$this->db->where('users.custom_username', $custom_username);
		$query = $this->db->get();
	
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}

	public function verify_password($custom_username, $password) {
		$this->db->select('password');
		$this->db->from('users');
		$this->db->where('custom_username', $custom_username);
		$query = $this->db->get();
	
		if ($query->num_rows() == 1) {
			$hashed_password = $query->row()->password;
	
			if (password_verify($password, $hashed_password)) {
				return true;
			} else {
				echo "Password Verification Failed!";
			}
		}
	
		return false;
	}

// 	public function get_saved_list_by_username($custom_username) {
// 		$this->db->select('save.id, save.sid, save.user_id, save.ucat_id, site1.sitelink, site1.sitename, site1.sitedetails, site1.siteintro, site1.siteimage, site1.sitecategory_id, category.id AS category_id, category.category');
// 		$this->db->from("save");
// 		$this->db->join('users', 'users.uid = save.user_id');
// 		$this->db->join('siteadding AS site1', 'site1.sid = save.sid');
// 		$this->db->join('category', 'site1.sitecategory_id = category.id');
// 		$this->db->where('users.custom_username', $custom_username);
// 		$query = $this->db->get();
	
// 		if ($query->num_rows() > 0) {
// 			return $query->result();
// 		} else {
// 			return array();
// 		}
// 	}



	public function editsites($sid)
    {
        $this->db->select("*");
        $this->db->from("siteadding");
        $this->db->where('sid',$sid);	
		$this->db->join('sitecategory', 'siteadding.sitecategory_id = sitecategory.id');
        $query = $this->db->get();
        return $query->result(); 
    }
	
	public function update_site($data,$siteid)
    {
        if(!empty($siteid))
        {
        $this->db->where('sid',$siteid);
        $sql_query = $this->db->update('siteadding', $data);
        }
        else{
      $this->db->insert('siteadding',$data);
        }
    }
	
	public function get_user_id_by_custom_name($custom_name) {
		$this->db->select('uid');
		$this->db->where('custom_username', $custom_name);
		$query = $this->db->get('users');
	
		if ($query->num_rows() == 1) {
			return $query->row()->uid;
		} else {
			return false;
		}
	}
	
	

}
