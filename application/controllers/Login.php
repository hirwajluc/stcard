<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */

    public function index(){
		$this->data["title"] = "STCard - LOGIN";
		$this->load->view('login', $this->data);
	}

	public function login_pro(){
		$email    = $this->input->post('email',TRUE);
		$password = sha1($this->input->post('password',TRUE));
		$validate = $this->cardm->checkUser($email, $password);

		if($validate->num_rows() > 0){
			$data  = $validate->row_array();
			$id  = $data['id'];
          	$fname  = $data['fname'];
			$lname  = $data['lname'];
			$email = $data['email'];
			$school_id = $data['school_id'];
			$school_name = $data['school_name'];
			$post = $data['post'];
			$post_title = $data['post_title'];
			$picture = $data['photo'];
			$status = $data['status'];
			$academic_year = $data['academic_year'];
			$sesdata = array(
				'edu_id'  => $id,
				'edu_name' => $fname . ' ' . $lname,
				'edu_email' => $email,
				'edu_school_id' => $school_id,
				'edu_school' => $school_name,
				'edu_post' => $post,
				'edu_post_title' => $post_title,
				'edu_picture' => $picture,
				'edu_status' => $status,
				'edu_academics_year' => $academic_year,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sesdata);
			// access login for admin
			redirect('/');
		}else{
			echo $this->session->set_flashdata('msg','Email or Password is Wrong');
			redirect('login');
		}
	}
}
