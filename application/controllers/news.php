<?php
class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
	}

	public function index()
	{
		$this->load->view('news/index');
		
	}

	public function view($slug)
	{
		$data['news'] = $this->news_model->get_news($slug);
		$data['title']="News by id";
		$this->load->view('templates/header',$data);
		$this->load->view('news/index2',$data);
		$this->load->view('templates/footer');
	}
}
