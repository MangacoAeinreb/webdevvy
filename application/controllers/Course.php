<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Course_model','Course');
	}
		
	public function index()
	{	
		$title="Course Dashboard";	
		$course= $this->Course->read();
		
		$data['title']=$title;
		
		$data['course']=$course;
		
		$this->load->view('include/header.php',$data);
		$this->load->view('include/footer.php');
		$this->load->view('course/view_course.php',$data);
		
	}
	
	
	
	public function create_course(){
		
		$this->load->view('create_course');
		
		// $this->load->library('form_validation');
		// $this->form_validation->set_rules('code','Code','required');
		// $this->form_validation->set_rules('description','Description','required');
		// $check=$this->Course->read_course();
		// if($check=true)
			// $check=$this->Course->create_course();
		
		
	}
	
	
	
	
	public function update_course(){
		
	}
	
	public function delete_course(){
		
	}
}
