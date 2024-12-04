<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Card extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('login');
		}
	}

	public function index(){
		$this->data["title"] = "STCard - Dashboard";
		$this->data["allstudents"] = $this->cardm->count_all_students();
		$this->data["male"] = $this->cardm->count_male_students();
		$this->data["female"] = $this->cardm->count_female_students();
		$this->load->view('pages/dashboard', $this->data);
	}

	public function thecard(){
		$this->data['title'] = "EDU - Card";
		$this->data['header_color'] = "#f30909";
		$this->data['footer_color'] = "#000000";
		$this->data['logo'] = "kec_logo.jpg";
		$this->data['background'] = "the_card_bg.jpg";
		$this->data['school_name'] = $this->session->userdata("edu_school");
		$this->data['header1'] = "Phone: 0788747622/0788351543";
		$this->data['header2'] = "Email: info@kingdomeducenter.org Website: www.kingdomeducenter.org";
		$this->data['main_color'] = "#008acd";
		$this->data['student_photo'] = "sample.jpg";
		$this->data['student_name'] = "HIRWA";
		$this->data['student_regno'] = "GS13154";
		$this->data['student_class'] = "Y3";
		$this->data['theyear'] = "2021/2022";
		$this->data['moto'] = "FEAR GOD, WORK HARD";
		$this->data['capitalize'] = 1;
		$option=$this->uri->segment(3);
		$year=$this->uri->segment(4);
		$this->data['students'] = $this->cardm->get_students($year,$option);
		$this->load->view('cards/student_card_5', $this->data);
	}

	public function thecardback(){
		$this->data['title'] = "STCard - Card";
		$this->data['header_color'] = "#f30909";
		$this->data['footer_color'] = "#000000";
		$this->data['logo'] = "kec_logo.jpg";
		$this->data['background'] = "the_card_backside_bg.jpg";
		$this->data['school_name'] = $this->session->userdata("edu_school");
		$this->data['header1'] = "Phone: 0788747622/0788351543";
		$this->data['header2'] = "Email: info@kingdomeducenter.org Website: www.kingdomeducenter.org";
		$this->data['main_color'] = "#008acd";
		$this->data['student_photo'] = "sample.jpg";
		$this->data['student_name'] = "HIRWA";
		$this->data['student_regno'] = "GS13154";
		$this->data['student_qrcode'] = $this->qrcodeGenerator("GS13154");
		$this->data['student_class'] = "Y3";
		$this->data['theyear'] = "2021/2022";
		$this->data['moto'] = "FEAR GOD, WORK HARD";
		$this->data['capitalize'] = 1;
		$this->load->view('cards/student_card_6', $this->data);
	}

	public function all_students(){
		$this->data['students'] = $this->cardm->get_all_students();
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode($this->data);
	}

	public function gen_card(){
		$this->load->library("wkhtmltopdf", array('path' => FCPATH . 'assets/uploads/cards/', "binpath" => "wkhtmltopdf"));
		$wkhtmltopdf = $this->wkhtmltopdf;
		$this->data['title'] = "STCard - Card";
		$this->data['header_color'] = "#f30909";
		$this->data['footer_color'] = "#000000";
		$this->data['logo'] = "kec_logo.jpg";
		$this->data['background'] = "the_card_bg.jpg";
		$this->data['school_name'] = $this->session->userdata("edu_school");
		$this->data['header1'] = "Phone: 0788747622/0788351543";
		$this->data['header2'] = "Email: info@kingdomeducenter.org Website: www.kingdomeducenter.org";
		$this->data['main_color'] = "#008acd";
		$this->data['student_photo'] = "sample.jpg";
		$this->data['student_name'] = "HIRWA";
		$this->data['student_regno'] = "GS13154";
		$this->data['student_class'] = "Y3";
		$this->data['theyear'] = "2021/2022";
		$this->data['moto'] = "FEAR GOD, WORK HARD";
		$this->data['capitalize'] = 1;
		$option=$this->uri->segment(3);
		$year=$this->uri->segment(4);
		$this->data['students'] = $this->cardm->get_students($year,$option);
		$html = utf8_encode($this->load->view('cards/student_card_5',$this->data,true));
		try {
			$mask = FCPATH . "assets/uploads/cards/*.html";
			array_map('unlink', glob($mask));//clear previous cards
			//$wkhtmltopdf = new Wkhtmltopdf(array('path' => FCPATH . 'assets/uploads/cards/'));
			$wkhtmltopdf->setTitle(strtoupper($option)."_".$year);
			$wkhtmltopdf->setHtml($html);
			$wkhtmltopdf->setOrientation("Landscape");
			$wkhtmltopdf->setOptions(array("javascript-delay" => 1000));
			$wkhtmltopdf->setOptions(array("page-width" => "278px", "page-height" => "430px"));
			$wkhtmltopdf->setMargins(array("top" => 0, "left" => 0, "right" => 0, "bottom" => 0));
			$wkhtmltopdf->output(Wkhtmltopdf::MODE_EMBEDDED, "student_card_" . $option ."_". $year . ".pdf");
		} catch (\Exception $e) {
			echo $e->getMessage();
		}
	}

	public function gen_one_card(){
		$this->load->library("wkhtmltopdf", array('path' => FCPATH . 'assets/uploads/cards/', "binpath" => "wkhtmltopdf"));
		$wkhtmltopdf = $this->wkhtmltopdf;
		$this->data['title'] = "STCard - Card";
		$this->data['header_color'] = "#f30909";
		$this->data['footer_color'] = "#000000";
		$this->data['logo'] = "kec_logo.jpg";
		$this->data['background'] = "the_card_bg.jpg";
		$this->data['school_name'] = $this->session->userdata("edu_school");
		$this->data['header1'] = "Phone: 0788747622/0788351543";
		$this->data['header2'] = "Email: info@kingdomeducenter.org Website: www.kingdomeducenter.org";
		$this->data['main_color'] = "#008acd";
		$this->data['student_photo'] = "sample.jpg";
		$this->data['student_name'] = "HIRWA";
		$this->data['student_regno'] = "GS13154";
		$this->data['student_class'] = "Y3";
		$this->data['theyear'] = "2021/2022";
		$this->data['moto'] = "FEAR GOD, WORK HARD";
		$this->data['capitalize'] = 1;
		$regno=$this->uri->segment(3);
		$this->data['students'] = $this->cardm->get_student($regno);
		$html = utf8_encode($this->load->view('cards/student_card_5',$this->data,true));
		try {
			$mask = FCPATH . "assets/uploads/cards/*.html";
			array_map('unlink', glob($mask));//clear previous cards
			//$wkhtmltopdf = new Wkhtmltopdf(array('path' => FCPATH . 'assets/uploads/cards/'));
			$wkhtmltopdf->setTitle(strtoupper($regno));
			$wkhtmltopdf->setHtml($html);
			$wkhtmltopdf->setOrientation("Landscape");
			$wkhtmltopdf->setOptions(array("javascript-delay" => 1000));
			$wkhtmltopdf->setOptions(array("page-width" => "278px", "page-height" => "430px"));
			$wkhtmltopdf->setMargins(array("top" => 0, "left" => 0, "right" => 0, "bottom" => 0));
			$wkhtmltopdf->output(Wkhtmltopdf::MODE_EMBEDDED, "student_card_" . $regno . ".pdf");
		} catch (\Exception $e) {
			echo $e->getMessage();
		}
	}

	public function gen_card_back(){
		$this->load->library("wkhtmltopdf", array('path' => FCPATH . 'assets/uploads/cards/', "binpath" => "wkhtmltopdf"));
		$wkhtmltopdf = $this->wkhtmltopdf;
		$this->data['title'] = "STCard - Card";
		$this->data['header_color'] = "#f30909";
		$this->data['footer_color'] = "#000000";
		$this->data['logo'] = "kec_logo.jpg";
		$this->data['background'] = "the_card_backside_bg.jpg";
		$this->data['school_name'] = $this->session->userdata("edu_school");
		$this->data['header1'] = "Phone: 0788747622/0788351543";
		$this->data['header2'] = "Email: info@kingdomeducenter.org Website: www.kingdomeducenter.org";
		$this->data['main_color'] = "#008acd";
		$this->data['student_photo'] = "sample.jpg";
		$this->data['student_name'] = "HIRWA";
		$this->data['student_regno'] = "GS13154";
		$this->data['student_qrcode'] = $this->qrcodeGenerator("GS13154");
		$this->data['student_class'] = "Y3";
		$this->data['theyear'] = "2021/2022";
		$this->data['moto'] = "FEAR GOD, WORK HARD";
		$this->data['capitalize'] = 1;
		$option=$this->uri->segment(3);
		$year=$this->uri->segment(4);
		$this->data['students'] = $this->cardm->get_students($year,$option);
		$html = utf8_encode($this->load->view('cards/student_card_6',$this->data,true));
		try {
			$mask = FCPATH . "assets/uploads/cards/*.html";
			array_map('unlink', glob($mask));//clear previous cards
			//$wkhtmltopdf = new Wkhtmltopdf(array('path' => FCPATH . 'assets/uploads/cards/'));
			$wkhtmltopdf->setTitle(strtoupper($option)."_".$year);
			$wkhtmltopdf->setHtml($html);
			$wkhtmltopdf->setOrientation("Landscape");
			$wkhtmltopdf->setOptions(array("javascript-delay" => 1000));
			$wkhtmltopdf->setOptions(array("page-width" => "278px", "page-height" => "430px"));
			$wkhtmltopdf->setMargins(array("top" => 0, "left" => 0, "right" => 0, "bottom" => 0));
			$wkhtmltopdf->output(Wkhtmltopdf::MODE_EMBEDDED, "student_card_" . $option ."_". $year . ".pdf");
		} catch (\Exception $e) {
			echo $e->getMessage();
		}
	}

	public function gen_one_card_back(){
		$this->load->library("wkhtmltopdf", array('path' => FCPATH . 'assets/uploads/cards/', "binpath" => "wkhtmltopdf"));
		$wkhtmltopdf = $this->wkhtmltopdf;
		$this->data['title'] = "STCard - Card";
		$this->data['header_color'] = "#f30909";
		$this->data['footer_color'] = "#000000";
		$this->data['logo'] = "kec_logo.jpg";
		$this->data['background'] = "the_card_backside_bg.jpg";
		$this->data['school_name'] = $this->session->userdata("edu_school");
		$this->data['header1'] = "Phone: 0788747622/0788351543";
		$this->data['header2'] = "Email: info@kingdomeducenter.org Website: www.kingdomeducenter.org";
		$this->data['main_color'] = "#008acd";
		$this->data['student_photo'] = "sample.jpg";
		$this->data['student_name'] = "HIRWA";
		$this->data['student_regno'] = $this->uri->segment(3);
		$this->data['student_qrcode'] = $this->qrcodeGenerator($this->uri->segment(3));
		$this->data['student_class'] = "Y3";
		$this->data['theyear'] = "2021/2022";
		$this->data['moto'] = "FEAR GOD, WORK HARD";
		$this->data['capitalize'] = 1;
		$regno=$this->uri->segment(3);
		$this->data['students'] = $this->cardm->get_student($regno);
		$html = utf8_encode($this->load->view('cards/student_card_6',$this->data,true));
		try {
			$mask = FCPATH . "assets/uploads/cards/*.html";
			array_map('unlink', glob($mask));//clear previous cards
			//$wkhtmltopdf = new Wkhtmltopdf(array('path' => FCPATH . 'assets/uploads/cards/'));
			$wkhtmltopdf->setTitle($regno);
			$wkhtmltopdf->setHtml($html);
			$wkhtmltopdf->setOrientation("Landscape");
			$wkhtmltopdf->setOptions(array("javascript-delay" => 1000));
			$wkhtmltopdf->setOptions(array("page-width" => "278px", "page-height" => "430px"));
			$wkhtmltopdf->setMargins(array("top" => 0, "left" => 0, "right" => 0, "bottom" => 0));
			$wkhtmltopdf->output(Wkhtmltopdf::MODE_EMBEDDED, "student_card_" .  $regno . ".pdf");
		} catch (\Exception $e) {
			echo $e->getMessage();
		}
	}

	public function students(){
		$this->data["title"] = "STCard - Students";
		$this->data['students'] = $this->cardm->get_all_students();
		$this->load->view('pages/students', $this->data);
	}

	public function classes(){
		$this->data["title"] = "STCard - Classes";
		$this->data['options'] = $this->cardm->get_classes();
		$this->load->view('pages/classes', $this->data);
	}

	public function upload_picture(){
		$this->data["title"] = "STCard - Upload Picture";
		$this->data["regno"] = $this->uri->segment(3);
		$this->load->view('pages/upload_picture', $this->data);
	}

	public function picture_uploading(){
		$config = array(
			'upload_path' => FCPATH."assets/images/profile/",
			'allowed_types' => "jpg",
			'overwrite' => TRUE,
			'file_name' => $this->input->post("picture")
		);
		$this->load->library('upload', $config);
		if($this->upload->do_upload()) {
			$data = $this->upload->data();
			$this->phpAlert("Success!\\n\\nPicture have been uploaded successfully for ". $this->input->post("picture"));
			redirect('card/students', 'refresh');
		}
		else {
			$error = $this->upload->display_errors();
			$this->phpAlert("Error!\\n\\nPicture have been failed to upload for ". $this->input->post("picture")."\\n\\n".$error);
			redirect('card/students', 'refresh');
		}
	}


	public function phpAlert($msg){
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
	}


	function qrcodeGenerator($qrtext){
		//header("Content-Type: image/png");
		$qr = new Endroid\QrCode\QrCode();
		$qr->setText($qrtext);
		$qr->setSize(150);
		$qr->setPadding(10);
		return $qr->getDataUri();
		//$qr->render();
	}

	function numberTowords($num)
	{

		$ones = array(
			0 =>"ZERO",
			1 => "ONE",
			2 => "TWO",
			3 => "THREE",
			4 => "FOUR",
			5 => "FIVE",
			6 => "SIX",
			7 => "SEVEN",
			8 => "EIGHT",
			9 => "NINE",
			10 => "TEN",
			11 => "ELEVEN",
			12 => "TWELVE",
			13 => "THIRTEEN",
			14 => "FOURTEEN",
			15 => "FIFTEEN",
			16 => "SIXTEEN",
			17 => "SEVENTEEN",
			18 => "EIGHTEEN",
			19 => "NINETEEN",
			"014" => "FOURTEEN"
		);
		$tens = array(
			0 => "ZERO",
			1 => "TEN",
			2 => "TWENTY",
			3 => "THIRTY",
			4 => "FORTY",
			5 => "FIFTY",
			6 => "SIXTY",
			7 => "SEVENTY",
			8 => "EIGHTY",
			9 => "NINETY"
		);
		$hundreds = array(
			"HUNDRED",
			"THOUSAND",
			"MILLION",
			"BILLION",
			"TRILLION",
			"QUARDRILLION"
		); /*limit t quadrillion */
		$num = number_format($num,2,".",",");
		$num_arr = explode(".",$num);
		$wholenum = $num_arr[0];
		$decnum = $num_arr[1];
		$whole_arr = array_reverse(explode(",",$wholenum));
		krsort($whole_arr,1);
		$rettxt = "";
		foreach($whole_arr as $key => $i){

			while(substr($i,0,1)=="0")
				$i=substr($i,1,5);
			if($i < 20){
				/* echo "getting:".$i; */
				$rettxt .= $ones[$i];
			}elseif($i < 100){
				if(substr($i,0,1)!="0")  $rettxt .= $tens[substr($i,0,1)];
				if(substr($i,1,1)!="0") $rettxt .= " ".$ones[substr($i,1,1)];
			}else{
				if(substr($i,0,1)!="0") $rettxt .= $ones[substr($i,0,1)]." ".$hundreds[0];
				if(substr($i,1,1)!="0")$rettxt .= " ".$tens[substr($i,1,1)];
				if(substr($i,2,1)!="0")$rettxt .= " ".$ones[substr($i,2,1)];
			}
			if($key > 0){
				$rettxt .= " ".$hundreds[$key]." ";
			}
		}
		if($decnum > 0){
			$rettxt .= " and ";
			if($decnum < 20){
				$rettxt .= $ones[$decnum];
			}elseif($decnum < 100){
				$rettxt .= $tens[substr($decnum,0,1)];
				$rettxt .= " ".$ones[substr($decnum,1,1)];
			}
		}
		return $rettxt;
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

}
