<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Press_M');
        //$this->load->model('admin_m');
    }

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
    
    public function PressEnglish() {
        $data = array();
        $data['page'] = 'Press';
        $data['page_title'] = 'Press | English';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        $data['singlePhoto'] = $this->Press_M->getPressEnglishPhoto();
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('Media/PressEnglish', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function PressBengali() {
        $data = array();
        $data['page'] = 'Press';
        $data['page_title'] = 'Press | Bangla';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        $data['singlePhoto'] = $this->Press_M->getPressBengaliPhoto();
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('Media/PressBengali', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function getPressNewsList(){
        $detailsID = $this->input->get('detailsID',TRUE);
        //echo $detailsID;
        
        $data['detailsList'] = $this->Press_M->getPressDetailsList($detailsID);
        echo $this->load->view('media/mediaList/detailList',$data, TRUE);
    }
    
    public function getPhotoDetailsList(){
        $detailsID = $this->input->get('detailsID',TRUE);
        //echo $detailsID;
        
        $data['detailsList'] = $this->Press_M->getPhotoDetailsList($detailsID);
        echo $this->load->view('media/mediaList/photoDetailList',$data, TRUE);
    }

}
