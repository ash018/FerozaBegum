<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogue extends CI_Controller {

    public function index() {
        $data = array();
        $data['page'] = 'Home';
        $data['page_title'] = 'Home';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('catalogue/catalogue_v', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function FullAlbum(){
        $data = array();
        $data['page'] = 'Home';
        $data['page_title'] = 'Full Album';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('catalogue/AlbumSection', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function CollectedRecording(){
        $data = array();
        $data['page'] = 'Home';
        $data['page_title'] = 'Collected Recording';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('catalogue/AlbumSection', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function MixedAlbum(){
        $data = array();
        $data['page'] = 'Home';
        $data['page_title'] = 'Mixed Album';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('catalogue/AlbumSection', $data, TRUE);
        $this->load->view('index', $data);
    }

}
