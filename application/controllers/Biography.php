<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Biography extends CI_Controller {

    public function index() {
        $data = array();
        $data['page'] = 'Biography';
        $data['page_title'] = 'Biography';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('biography/english_v', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function Awards() {
        $data = array();
        $data['page'] = 'Awards';
        $data['page_title'] = 'Awards';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('biography/award_v', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function bangla(){
        $data = array();
        $data['page'] = 'Biography';
        $data['page_title'] = 'Biography';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('biography/bangla_v', $data, TRUE);
        $this->load->view('index', $data);
    }

}
