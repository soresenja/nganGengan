<?php


class UnitController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function index()
    {
        $this->load->view('unit/index');
    }
}