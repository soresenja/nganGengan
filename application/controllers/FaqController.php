<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FaqController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function index()
    {
        $this->load->view('faq/index');
    }
}