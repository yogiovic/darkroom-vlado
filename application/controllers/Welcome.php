<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Article_model');
		$this->load->model('Product_model');


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

	public function shop()
	{
		$url = $this->uri->segment(2);

		switch ($url) {
			case NULL:
			case '':
				$products = $this->Product_model->getAllProducts();
				$productCategories = $this->Product_model->getProductCategories();
				$data = array(
					'products' => $products,
					'productCategories' => $productCategories
				);

				$this->load->view('main/elements/header', $data);
				$this->load->view('main/shop', $data);
				$this->load->view('main/elements/footer', $data);
				break;
			case !NULL:
				//shop s kategoriou
				$categoryExists = false;
				$cat_id = NULL;
				$productCategories = $this->Product_model->getProductCategories();
				foreach ($productCategories as $category) {
					if ($category['category_seo'] == $url) {
						$categoryExists = true;
						$category_id = $category['category_id'];
						break;
					}
				}
				if ($categoryExists) {
					$products = $this->Product_model->getAllProducts($category_id);
					$productCategories = $this->Product_model->getProductCategories();
					$data = array(
						'products' => $products,
						'productCategories' => $productCategories
					);

					$this->load->view('main/elements/header', $data);
					$this->load->view('main/shop', $data);
					$this->load->view('main/elements/footer', $data);
					break;
				} else {
					// Category does not exist, do something else
					redirect(base_url('shop'));
				}
				break;
			default:
				// Handle unknown URL segment
				show_404();
		}
	}


	public
	function detail()
	{

		$id = $this->uri->segment(2);
		$product = $this->Product_model->getProduct($id);
// 		echo '<pre>';
// var_dump($product['img']);
// echo '</pre>';
//     	exit;
		$data = array(
			'product' => $product
		);


		// $img = $this->Product_model->getProductImage($id);
		// var_dump($img);
		// exit;

		// $data = array(
		// 	'product' => $product,
		// 	'img' => $img
		// );

		$this->load->view('main/elements/header', $data);
		$this->load->view('main/product-detail', $data);
		$this->load->view('main/elements/footer', $data);
	}


}
