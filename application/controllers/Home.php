<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$styles = [
			'assets/css/pages/home/styles.css?ver=' . time(),
		];

		$scripts = [
			'assets/js/pages/home/scripts.js?ver=' . time(),
			'assets/js/pages/home/count-down-script.js?ver=' . time(),
		];

		$this->load->view('_includes/header', ['styles' => $styles]);
		$this->load->view('home');
		$this->load->view('_includes/footer', ['scripts' => $scripts]);
	}
}
