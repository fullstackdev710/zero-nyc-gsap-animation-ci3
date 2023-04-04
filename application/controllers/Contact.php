<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->library('user_agent');
   }

   public function index()
   {
      $styles = [
         'assets/css/pages/contact-style.css?ver=' . time(),
      ];

      $scripts = [
         // 'assets/js/pages/home/home-script.js?ver=' . time(),
         // 'assets/js/pages/home/count-down-script.js?ver=' . time(),
      ];

      $this->load->view('_includes/header', ['styles' => $styles]);
      $this->load->view('_includes/sidebar');
      $this->load->view('contact');
      $this->load->view('_includes/footer', ['scripts' => $scripts]);
   }
}
