<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Programme extends CI_Controller {

    public function index() {
        $data = array();
        $data['page'] = 'Programme';
        $data['page_title'] = 'Programme';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('programme/stage/english_v', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function tvProgram(){
        $data = array();
        $data['page'] = 'TV Programme';
        $data['page_title'] = 'TV Programme';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('programme/stage/tvProgramme', $data, TRUE);
        $this->load->view('index', $data);
    }

}
