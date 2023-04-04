<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
   public function index()
   {
      $styles = [
         // 'assets/css/pages/contact-style.css?ver=' . time(),
      ];

      $scripts = [
         'assets/js/g-custom-script.js?ver=' . time(),
         // 'assets/js/pages/home/count-down-script.js?ver=' . time(),
      ];

      $this->load->view('_includes/header', ['styles' => $styles]);
      $this->load->view('_includes/sidebar');
      $this->load->view('about');
      $this->load->view('_includes/footer', ['scripts' => $scripts]);
   }
}
