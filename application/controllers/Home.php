<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
        }
    
    public function index() {
        $data = array();
        $data['page'] = 'Home';
        $data['page_title'] = 'Home';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('home/home_v', $data, TRUE);
        $this->load->view('index', $data);
    }

}
