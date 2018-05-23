<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Scripts extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('NazrulSong_M');
        $this->load->model('RabindraSong_M');
        $this->load->model('ModernBengaliSong_M');
        $this->load->model('GeetGhazalBhajanSong_M');
        $this->load->model('OthersSong_M');
        $this->load->model('FullVolume_M');
        //$this->load->model('admin_m');
    }
    
    public function index() {
        $data = array();
        $data['page'] = 'Scripts';
        $data['page_title'] = 'Scripts';
        
        $root=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        
        $this->load->library('pagination');
        
        
        $limit_per_page = 10;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['scripts'] = $this->NazrulSong_M->getScriptList();
        $total_records = sizeof($data['scripts']);
        
        $config['base_url'] = base_url() . 'scripts/index';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;
        $config["uri_segment"] = 3;
        $config['num_links'] = 15;
        
        if ($total_records > 0) 
        {
            // get current page records
            
            $data["results"] = $this->NazrulSong_M->get_current_script_records($limit_per_page, $start_index);
            
            $this->pagination->initialize($config);
             
            // build paging links
            $data["links"] = $this->pagination->create_links();
        }
        
        
        
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('scripts/song_book_v', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function getScriptListWithID(){
        $scriptListID = $this->input->get('scriptListID',TRUE);
        $data['detailScriptList'] = $this->NazrulSong_M->getDetailScriptList($scriptListID);
        
        echo $this->load->view('scripts/detailScriptList',$data, TRUE);
    }
    
    public function getStuffNotationWithID(){
        $scriptListID = $this->input->get('scriptListID',TRUE);
        $data['detailScriptList'] = $this->NazrulSong_M->getDetailStuffNotationList($scriptListID);
        
        echo $this->load->view('scripts/detailScriptList',$data, TRUE);
    }
    
    public function NazrulSong(){
        $data = array();
        $data['page'] = 'Nazrul Song';
        $data['page_title'] = 'Nazrul Song';
        
        $root=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        
        $this->load->library('pagination');
        
        $limit_per_page = 10;
        $start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['NazrulSong'] = $this->NazrulSong_M->getNazrulSong(); 
        $total_records = sizeof($data['NazrulSong']);
        
        $config['base_url'] = base_url() . 'scripts/NazrulSong/index';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;
        $config["uri_segment"] = 4;
        $config['num_links'] = 15;
        
        if ($total_records > 0) 
        {
            // get current page records
            
            $data["results"] = $this->NazrulSong_M->get_current_script_NazrulSong($limit_per_page, $start_index);
            
            $this->pagination->initialize($config);
             
            // build paging links
            $data["links"] = $this->pagination->create_links();
           
        }
        
        
        
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('scripts/NazrulSong', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function getScriptDetailsList(){
        $detailsID = $this->input->get('detailsID',TRUE);
        $script_id = $this->input->get('script_id',TRUE);
        //Check Script Code Here
        //echo $detailsID;
       // $data['detailsList'] = $this->NazrulSong_M->getScriptDetailsList($detailsID);
        $data['infoList'] = $this->NazrulSong_M->getInfoDetailsList($script_id);
        $data['rowCount']= sizeof($data['infoList']);
        //echo sizeof($data['infoList']);
        $data['detailsID'] = $detailsID;
        echo $this->load->view('scripts/scriptList/detailList',$data, TRUE);
    }
    
    public function NazrulSongScript(){
        $data = array();
        $data['page'] = 'Nazrul Sangeet with Stuff Notation';
        $data['page_title'] = 'Nazrul Sangeet with Stuff Notation';
        
        $root=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        
        $this->load->library('pagination');
        
        $limit_per_page = 10;
        $start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['NazrulSongScript'] = $this->NazrulSong_M->getNazrulSongScript(); 
        $total_records = sizeof($data['NazrulSongScript']);
        
        $config['base_url'] = base_url() . 'scripts/NazrulSongScript/index';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;
        $config["uri_segment"] = 4;
        $config['num_links'] = 15;
        
        if ($total_records > 0) 
        {
            // get current page records
            
            $data["results"] = $this->NazrulSong_M->get_current_script_NazrulSongScript($limit_per_page, $start_index);
            
            $this->pagination->initialize($config);
             
            // build paging links
            $data["links"] = $this->pagination->create_links();
           
        }
        
        
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('scripts/NazrulSongScript', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function RabindraSong(){
        $data = array();
        $data['page'] = 'Rabindra Song';
        $data['page_title'] = 'Rabindra Song';
        
        $root=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        
        $this->load->library('pagination');
        
        $limit_per_page = 10;
        $start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['RabindraSong'] = $this->RabindraSong_M->getRabindraSong(); 
        $total_records = sizeof($data['RabindraSong']);
        
        $config['base_url'] = base_url() . 'scripts/RabindraSong/index';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;
        $config["uri_segment"] = 4;
        $config['num_links'] = 15;
        
        
        if ($total_records > 0) 
        {
            // get current page records
            
            $data["results"] = $this->RabindraSong_M->get_current_script_RabindraSong($limit_per_page, $start_index);
            
            $this->pagination->initialize($config);
             
            // build paging links
            $data["links"] = $this->pagination->create_links();
           
        }
        
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('scripts/RabindraSong', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function RabindraSongScript(){
        $data = array();
        $data['page'] = 'Rabindra Song & Script';
        $data['page_title'] = 'Rabindra Song & Script';
        
        $root=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        
        $this->load->library('pagination');
        
        $limit_per_page = 10;
        $start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['NazrulSongScript'] = $this->NazrulSong_M->getNazrulSongScript(); 
        $total_records = sizeof($data['NazrulSongScript']);
        
        $config['base_url'] = base_url() . 'scripts/NazrulSongScript/index';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;
        $config["uri_segment"] = 4;
        $config['num_links'] = 15;
        
        if ($total_records > 0) 
        {
            // get current page records
            
            $data["results"] = $this->NazrulSong_M->get_current_script_NazrulSongScript($limit_per_page, $start_index);
            
            $this->pagination->initialize($config);
             
            // build paging links
            $data["links"] = $this->pagination->create_links();
           
        }
        
        
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('scripts/NazrulSongScript', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function ModernBengaliSong(){
        $data = array();
        $data['page'] = 'Modern Bengali Song';
        $data['page_title'] = 'Modern Bengali Song';
        
        
        $root=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        
        $this->load->library('pagination');
        
        $limit_per_page = 10;
        $start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['ModernBengaliSong'] = $this->ModernBengaliSong_M->getModernBengaliSong(); 
        $total_records = sizeof($data['ModernBengaliSong']);
        
        $config['base_url'] = base_url() . 'scripts/ModernBengaliSong/index';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;
        $config["uri_segment"] = 4;
        $config['num_links'] = 15;
        
        
        if ($total_records > 0) 
        {
            // get current page records
            
            $data["results"] = $this->ModernBengaliSong_M->get_current_script_ModernBengaliSong($limit_per_page, $start_index);
            
            $this->pagination->initialize($config);
             
            // build paging links
            $data["links"] = $this->pagination->create_links();
           
        }
        
        
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('scripts/ModernBengaliSong', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function GeetGhazalBhajanSong(){
        $data = array();
        $data['page'] = 'Geet Ghazal Bhajan Song';
        $data['page_title'] = 'Geet Ghazal Bhajan Song';
        
        
        $root=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        
        $this->load->library('pagination');
        
        $limit_per_page = 10;
        $start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['GeetGhazalBhajanSong'] = $this->GeetGhazalBhajanSong_M->getGeetGhazalBhajanSong(); 
        $total_records = sizeof($data['GeetGhazalBhajanSong']);
        
        $config['base_url'] = base_url() . 'scripts/GeetGhazalBhajanSong/index';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;
        $config["uri_segment"] = 4;
        $config['num_links'] = 15;
        
        
        if ($total_records > 0) 
        {
            // get current page records
            
            $data["results"] = $this->GeetGhazalBhajanSong_M->get_current_script_GeetGhazalBhajanSong($limit_per_page, $start_index);
            
            $this->pagination->initialize($config);
             
            // build paging links
            $data["links"] = $this->pagination->create_links();
           
        }
        
        
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('scripts/GeetGhazalBhajanSong', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function OthersSong(){
        $data = array();
        $data['page'] = 'Others Song';
        $data['page_title'] = 'Others Song';
        
        
        $root=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        
        $this->load->library('pagination');
        
        $limit_per_page = 10;
        $start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['OthersSong'] = $this->OthersSong_M->getOthersSong(); 
        $total_records = sizeof($data['OthersSong']);
        
        $config['base_url'] = base_url() . 'scripts/OthersSong/index';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;
        $config["uri_segment"] = 4;
        $config['num_links'] = 15;
        
        
        if ($total_records > 0) 
        {
            // get current page records
            
            $data["results"] = $this->OthersSong_M->get_current_script_OthersSong($limit_per_page, $start_index);
            
            $this->pagination->initialize($config);
             
            // build paging links
            $data["links"] = $this->pagination->create_links();
           
        }
        
        
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('scripts/OthersSong', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function FullVolume(){
        $data = array();
        $data['page'] = 'Full Volume';
        $data['page_title'] = 'Full Volume';
        
        $data['FullVolume'] = $this->FullVolume_M->getFullVolume();
        
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('scripts/FullVolume', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function FullVolumeKamal(){
        $data = array();
        $data['page'] = 'Full Volume Kamal Das Gupta';
        $data['page_title'] = 'Full Volume Kamal Das Gupta';
        
        $data['FullVolume'] = $this->FullVolume_M->getFullVolumeK();
        
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('scripts/FullVolume', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function FullVolumeOthers(){
        $data = array();
        $data['page'] = 'Full Volume Others';
        $data['page_title'] = 'Full Volume Others';
        
        $data['FullVolume'] = $this->FullVolume_M->getFullVolumeOthers();
        
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('scripts/FullVolume', $data, TRUE);
        $this->load->view('index', $data);
    }

}
