<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('user/dashboard');
        $this->load->view('template/footer');
    }
    public function detail()
    {
        $this->load->view('template/header');
        $this->load->view('user/detail');
        $this->load->view('template/footer');
    }
    public function faq()
    {
        $this->load->view('template/header');
        $this->load->view('user/faq');
        $this->load->view('template/footer');
    }
}