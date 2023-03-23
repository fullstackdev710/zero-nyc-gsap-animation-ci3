<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Work extends CI_Controller
{
   public function index()
   {
      $styles = [
         'assets/css/pages/work-all-style.css?ver=' . time(),
      ];

      $scripts = [
         'assets/js/pages/home/home-script.js?ver=' . time(),
         'assets/js/pages/home/count-down-script.js?ver=' . time(),
      ];

      $this->load->view('_includes/header', ['styles' => $styles]);
      $this->load->view('_includes/sidebar');
      $this->load->view('work/all');
      $this->load->view('_includes/footer', ['scripts' => $scripts]);
   }

   public function item($item)
   {
      $styles = [
         'assets/css/pages/work-all-style.css?ver=' . time(),
      ];

      $scripts = [
         'assets/js/pages/home/home-script.js?ver=' . time(),
         'assets/js/pages/home/count-down-script.js?ver=' . time(),
      ];

      $this->load->view('_includes/header', ['styles' => $styles]);
      $this->load->view('_includes/sidebar');
      $this->load->view('work/individual-work/' . $item);
      $this->load->view('_includes/footer', ['scripts' => $scripts]);
   }
}
