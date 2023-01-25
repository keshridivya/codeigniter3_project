<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function blog()
	{
		$this->load->view('blog_list');
	}
	public function product()
	{
		$this->load->view('product');
	}
	public function testimonial()
	{
		$this->load->view('testimonial');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
}
