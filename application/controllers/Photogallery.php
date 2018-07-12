<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Photogallery extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('PhotoGallery_M');
        //$this->load->model('admin_m');
    }

    public function index() {
        $data = array();
        $data['page'] = 'Photogallery';
        $data['page_title'] = 'Photogallery';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        $data['singlePhoto'] = $this->PhotoGallery_M->getSinglePhoto();
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('photogallery/SinglePhoto', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function familyLife(){
        $data = array();
        $data['page'] = 'Photogallery';
        $data['page_title'] = 'Photogallery';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        $data['singlePhoto'] = $this->PhotoGallery_M->getFamilyLifePhoto();
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('photogallery/FamilyLife', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function singingCareer(){
        $data = array();
        $data['page'] = 'Photogallery';
        $data['page_title'] = 'Photogallery';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        $data['singlePhoto'] = $this->PhotoGallery_M->getSingingCareerPhoto();
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('photogallery/SingingCareer', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function withMaestro(){
        $data = array();
        $data['page'] = 'Photogallery';
        $data['page_title'] = 'Photogallery';
        //$data['userid'] = $this->session->userdata('userid');
        //$data['UserName'] = $this->session->userdata('UserName');
        $data['singlePhoto'] = $this->PhotoGallery_M->getWithMaestroPhoto();
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('photogallery/WithMaestro', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function getPhotoDetailsList(){
        $detailsID = $this->input->get('detailsID',TRUE);
        //echo $detailsID;
         
        $data['detailsList'] = $this->PhotoGallery_M->getDetailsList($detailsID);
        echo $this->load->view('photogallery/photoList/detailList',$data, TRUE);
    }
    
    public function getPressNewsList(){
        $detailsID = $this->input->get('detailsID',TRUE);
        //echo $detailsID;
        
        $data['detailsList'] = $this->PhotoGallery_M->getPressNewsDetailsList($detailsID);
        echo $this->load->view('photogallery/photoList/newsDetailList',$data, TRUE);
    }

}
