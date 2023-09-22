<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Article_model');
	}

	public function index()
	{
		$articles = $this->Article_model->getAllArticles(2);

		$data = array(
			'articles' => $articles
		);

		$this->load->view('main/elements/header', $data);
		$this->load->view('main/home', $data);
		$this->load->view('main/elements/footer', $data);
	}

	public function blog()
	{
		$page = $this->uri->segment(2);
		$article_id = $this->uri->segment(3);

		if (is_numeric($page) == true || $page == null) {
			$page = 1;
			$articles = $this->Article_model->getAllArticles();

			$data = array(
				'articles' => $articles
			);
			$this->load->view('main/elements/header', $data);
			$this->load->view('main/blog_index', $data);
			$this->load->view('main/elements/footer', $data);

		} else if ($page != null) {
			$article = return_object_from_array($this->Article_model->getArticle($page));

			$data = array(
				'article' => $article
			);

			$this->load->view('main/elements/header', $data);
			$this->load->view('main/blog_detail', $data);
			$this->load->view('main/elements/footer', $data);
		}

	}
	public function kontakt()
	{
		$articles = $this->Article_model->getAllArticles(2);

		$data = array(
			'articles' => $articles
		);

		$this->load->view('main/elements/header', $data);
		$this->load->view('main/kontakt', $data);
		$this->load->view('main/elements/footer', $data);
	}
}
