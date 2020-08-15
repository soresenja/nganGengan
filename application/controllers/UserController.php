<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function index()
    {
        $this->load->view('user/index');
    }
    public function role()
    {
        $this->load->view('user/role');
    }
}