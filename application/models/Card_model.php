<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Card_model extends CI_Model{
    function validate($email, $password){
		$result = $this->db->query('SELECT *, (SELECT districts.name FROM districts WHERE districts.id=agency.district) AS thedistrict FROM staff WHERE email="$email" AND password="$password"');
		return $result->result_array();
	}

    public function checkUser($email,$password,$ekey="staffs.email",$pkey="staffs.password"){
		$res = $this->db->select("staffs.id,staffs.photo,staffs.school_id,fname,lname,staffs.email,password,staffs.status,post
		,p.title as post_title,sc.name as school_name,sc.status as school_status,sc.active_term,at.academic_year")
			->where($ekey,$email)
			->where($pkey,$password)
			->join("posts p","p.id=staffs.post","inner")
			->join("schools sc","sc.id=staffs.school_id","inner")
			->join("active_term at","sc.active_term=at.id","left")
			->get("staffs");
		return $res;
	}
	public function get_staff($val,$select="staffs.*,p.title as post_title"){
		$res = $this->db->select($select)
			->join("posts p", "staffs.post=p.id")
			->where($val)
			->where("school_id", $_SESSION['edu_school_id'])
			->get("staffs")->result_array();
		return $res;
	}

	public function get_all_students(){
		$query = $this->db->get('students');
		return $query->result_array();
	}

	public function count_all_students(){
		$query = $this->db->get('students');
		return $query->num_rows();
	}

	public function count_male_students(){
    	$this->db->where("gender", "male");
		$query = $this->db->get('students');
		return $query->num_rows();
	}

	public function count_female_students(){
		$this->db->where("gender", "female");
		$query = $this->db->get('students');
		return $query->num_rows();
	}

	public function get_students($year,$option){
    	$this->db->where("year",$year);
    	$this->db->where("options",$option);
		$query = $this->db->get('students');
		return $query->result_array();
	}

	public function get_student($regno){
		$this->db->where("regno",$regno);
		$query = $this->db->get('students');
		return $query->result_array();
	}

	public function get_classes(){
    	$this->db->group_by(array("department","options","year"));
		$query = $this->db->get('students');
		return $query->result_array();
	}
}
