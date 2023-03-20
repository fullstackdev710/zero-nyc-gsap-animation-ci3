<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Careers extends CI_Controller
{
   public function index()
   {
      $styles = [
         'assets/css/pages/home-style.css?ver=' . time(),
      ];

      $scripts = [
         'assets/js/pages/home/home-script.js?ver=' . time(),
         'assets/js/pages/home/count-down-script.js?ver=' . time(),
      ];

      $this->load->view('_includes/header', ['styles' => $styles]);
      $this->load->view('home');
      $this->load->view('_includes/footer', ['scripts' => $scripts]);
   }
}
