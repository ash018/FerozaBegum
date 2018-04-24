<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Photogallery extends CI_Controller {

    public function index() {
        $data = array();
        $data['page'] = 'Photogallery';
        $data['page_title'] = 'Photogallery';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('photogallery/family_life_v', $data, TRUE);
        $this->load->view('index', $data);
    }

}
