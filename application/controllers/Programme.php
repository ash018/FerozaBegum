<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Programme extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Programme_M');
        //$this->load->model('admin_m');
    }

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
        $data['page'] = 'TV Program';
        $data['page_title'] = 'TV Program';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        $data['tvProgram'] = $this->Programme_M->getTvProgram($data['page_title']);
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('programme/stage/tvProgramme', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function getProgrammeDetailsList(){
        $programListID = $this->input->get('detailsID',TRUE);
        $data['ProgramList'] =$this->Programme_M->getFullProgramList($programListID);
        echo $this->load->view('programme/programList/detailList',$data, TRUE);
    }
    
    public function videoFootage(){
        $data = array();
        $data['page'] = 'Video Footage';
        $data['page_title'] = 'Video Footage';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        $data['videoFootage'] = $this->Programme_M->getVideoFootage($data['page_title']);
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('programme/stage/videoFootage', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function stageShow(){
        $data = array();
        $data['page'] = 'Stage Program';
        $data['page_title'] = 'Stage Program';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        $data['stageShow'] = $this->Programme_M->getStageShow($data['page_title']);
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('programme/stage/stageShow', $data, TRUE);
        $this->load->view('index', $data);
    }

}
