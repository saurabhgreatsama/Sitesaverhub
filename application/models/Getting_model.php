<?php
class Getting_model extends CI_Model {



public function sitecategory()
    {
        $this->db->select("*");
        $this->db->from("sitecategory");
        $query = $this->db->get();
        return $query->result();
    }

	public function allcategory()
    {
		$data =	$this->session->userdata('uid');
        $this->db->select("*");
        $this->db->from("category");
		$this->db->where("user_id",$data);
        $query = $this->db->get();
        return $query->result();
    }

	public function allusersitelist()
    {
		$data =	$this->session->userdata('uid');
        $this->db->select("*");
        $this->db->from("usersitesextadding");
		$this->db->where("user_id",$data);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function allexternal()
    {
		$data = $this->session->userdata('uid');
        $this->db->select("*");
        $this->db->from("savedsite");
		$this->db->where("user_id",$data);
        $query = $this->db->get();
        return $query->result();
    }

	public function allsavesiteext()
    {
		$data =	$this->session->userdata('uid');
		$this->db->select('save.id, save.sid, save.user_id, siteadding.sitelink, siteadding.sitename, siteadding.sitedetails, siteadding.siteintro, siteadding.siteimage,siteadding.sitecategory_id');
        $this->db->from("save");
		$this->db->join('siteadding', 'siteadding.sid = save.sid');
// 		$this->db->join('siteadding', 'siteadding.sid = category.id');
		$this->db->where("user_id",$data);
        $query = $this->db->get();
        return $query->result();
    }



	public function extsitecategory()
    {
        $this->db->select("*");
        $this->db->from("extcategory");
        $query = $this->db->get();
        return $query->result();
    }

	public function contactrequest()
    {
        $this->db->select("*");
        $this->db->from("contact");
        $query = $this->db->get();
        return $query->result();
    }

	public function userlist()
    {
        $this->db->select("*");
        $this->db->from("users");
        $query = $this->db->get();
        return $query->result();
    }


	public function suggestreq()
    {
        $this->db->select("*");
        $this->db->from("suggest");
        $query = $this->db->get();
        return $query->result();
    }

	public function catfilter($id)
{
$this->db->where('sitecategory_id', $id);
$query = $this->db->get('siteadding');
// $this->db->join('sitecategory', 'siteadding.sitecategory_id = sitecategory.id');
return $query->result();
}


public function catfilters($id)
{
$this->db->where('extcategory_id', $id);
$query = $this->db->get('extadding');
// $this->db->join('sitecategory', 'siteadding.sitecategory_id = sitecategory.id');
return $query->result();
}

public function allsavedlist()
    {
		$data =	$this->session->userdata('uid');
        $this->db->select("*");
        $this->db->from("save");
		$this->db->where("user_id",$data);
        $query = $this->db->get();
        return $query->result();
    }
      
      
      public function save_url_to_dashboard($user_id, $url, $sitename, $details) {
		$data = array(
			'user_id' => $user_id,
			'url' => $url,
			'sitename' => $sitename,
			'details' => $details
		);
	
		return $this->db->insert('savedsite', $data);
	}
	

	public function testinglist()
    {
        $this->db->select("*");
        $this->db->from("savedsite");
        $query = $this->db->get();
        return $query->result();
    }
    
     public function specificat($id) {
        $query = $this->db->get_where('sitecategory', array('id' => $id));
        return $query->row();
    }



}
