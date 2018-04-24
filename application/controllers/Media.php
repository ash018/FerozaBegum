<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

    public function index() {
        $data = array();
        $data['page'] = 'Media';
        $data['page_title'] = 'Media';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('Media/tv_v', $data, TRUE);
        $this->load->view('index', $data);
    }

}
