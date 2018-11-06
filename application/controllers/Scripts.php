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
        $this->load->model('FerozaBegumSong_M');
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
        
        
        $SongbookID = $this->input->get('scriptListID',TRUE);
        $script_id = $this->input->get('script_id',TRUE);
        
        $data['FullSongBookList'] =$this->NazrulSong_M->getDetailScriptList($SongbookID,$script_id);
        
        if($SongbookID == 1){
            $data['title'] = "Full List";
        }
        if($SongbookID == 2){
            $data['title'] = "Others";
        }
        if($SongbookID > 1900){
            $data['title'] = $SongbookID."-".($SongbookID+9);
        }
        
        if($script_id == 1){
            echo $this->load->view('scripts/scriptList/RabindraDetailList',$data, TRUE);
        }
        if($script_id == 2){
            echo $this->load->view('scripts/scriptList/ModernDetailList',$data, TRUE);
        }
        if($script_id == 3){
            echo $this->load->view('scripts/scriptList/ModernStuffDetailList',$data, TRUE);
        }
    }
    
    public function getStuffNotationWithID(){
        $SongbookID = $this->input->get('scriptListID',TRUE);
        
        $data['FullSongBookList'] =$this->NazrulSong_M->getDetailStuffNotationList($SongbookID);
        
        if($SongbookID == 1){
            $data['title'] = "Full List";
        }
        if($SongbookID == 2){
            $data['title'] = "Others";
        }
        if($SongbookID > 1900){
            $data['title'] = $SongbookID."-".($SongbookID+9);
        }
        
        
        echo $this->load->view('scripts/scriptList/detailList',$data, TRUE);
    }
    
    public function NazrulSong(){
        $data = array();
        $data['page'] = 'Nazrul Song';
        $data['page_title'] = 'Nazrul Song';
        $Category = 'Feroza Begum';
        $filter = 'NazrulSong';
        
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
        
        $data['rangeYear'] = $this->NazrulSong_M->getRangeYearSong($Category,$filter);
        
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
        $data['infoList'] = $this->NazrulSong_M->getInfoDetailsList($detailsID);
        $data['rowCount']= sizeof($data['infoList']);
        //echo sizeof($data['infoList']);
        $data['detailsID'] = $detailsID;
        echo $this->load->view('scripts/scriptList/detailList',$data, TRUE);
    }
    
    public function getScriptDetailsListScriptID(){
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
        $Category = 'Feroza Begum';
        $filter = 'NazrulSongScript';
        
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
        
        $data['rangeYear'] = $this->NazrulSong_M->getRangeYearSong($Category,$filter);
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('scripts/NazrulSongScript', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function RabindraSong(){
        $data = array();
        $data['page'] = 'Rabindra Song';
        $data['page_title'] = 'Rabindra Song';
        $Category = 'Feroza Begum';
        $filter = 'RabindraSong';
        
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
        $data['rangeYear'] = $this->NazrulSong_M->getRangeYearSong($Category,$filter);
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
        $Category = 'Feroza Begum';
        $filter = 'ModernBengaliSong';
        
        
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
        
        $data['rangeYear'] = $this->NazrulSong_M->getRangeYearSong($Category,$filter);
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('scripts/ModernBengaliSong', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function ModernBengaliLyricsStuffNotation(){
        $data = array();
        $data['page'] = 'Modern Bengali Song Lyrics Stuff Notation';
        $data['page_title'] = 'Modern Bengali Song Lyrics Stuff Notation';
        $Category = 'Feroza Begum';
        $filter = 'ModernBengaliLyricsStuffNotation';
        
        $root=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        
        $this->load->library('pagination');
        
        $limit_per_page = 10;
        $start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['ModernBengaliSong'] = $this->ModernBengaliSong_M->getModernBengaliLyricsStuffNotation(); 
        $total_records = sizeof($data['ModernBengaliSong']);
        
        $config['base_url'] = base_url() . 'scripts/ModernBengaliLyricsStuffNotation/index';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;
        $config["uri_segment"] = 4;
        $config['num_links'] = 15;
        
        
        if ($total_records > 0) 
        {
            // get current page records
            
            $data["results"] = $this->ModernBengaliSong_M->get_current_script_ModernBengaliLyricsStuffNotation($limit_per_page, $start_index);
            
            $this->pagination->initialize($config);
             
            // build paging links
            $data["links"] = $this->pagination->create_links();
           
        }
        
        $data['rangeYear'] = $this->NazrulSong_M->getRangeYearSong($Category,$filter);
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('scripts/ModernBengaliLyricsStuffNotation', $data, TRUE);
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
    
    public function GeetGhazalBhajanLyricsStuffNotation(){
        $data = array();
        $data['page'] = 'Geet Ghazal Bhajan Song Lyrics & Stuff Notation';
        $data['page_title'] = 'Geet Ghazal Bhajan Lyrics & Stuff Notation';
        
        
        $root=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        
        $this->load->library('pagination');
        
        $limit_per_page = 10;
        $start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['GeetGhazalBhajanSong'] = $this->GeetGhazalBhajanSong_M->getGeetGhazalBhajanLyricsStuffNotation(); 
        $total_records = sizeof($data['GeetGhazalBhajanSong']);
        
        $config['base_url'] = base_url() . 'scripts/GeetGhazalBhajanLyricsStuffNotation/index';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;
        $config["uri_segment"] = 4;
        $config['num_links'] = 15;
        
        
        if ($total_records > 0) 
        {
            // get current page records
            
            $data["results"] = $this->GeetGhazalBhajanSong_M->get_current_script_GeetGhazalBhajanLyricsStuffNotation($limit_per_page, $start_index);
            
            $this->pagination->initialize($config);
             
            // build paging links
            $data["links"] = $this->pagination->create_links();
           
        }
        
        
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('scripts/GeetGhazalBhajanLyricsStuffNotation', $data, TRUE);
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
    
    public function OthersSongLyricsStuffNotation(){
        $data = array();
        $data['page'] = 'Others Song';
        $data['page_title'] = 'Others Song';
        
        
        $root=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        
        $this->load->library('pagination');
        
        $limit_per_page = 10;
        $start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['OthersSong'] = $this->OthersSong_M->getOthersSongLyricsStuffNotation(); 
        $total_records = sizeof($data['OthersSong']);
        
        $config['base_url'] = base_url() . 'scripts/OthersSongLyricsStuffNotation/index';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;
        $config["uri_segment"] = 4;
        $config['num_links'] = 15;
        
        
        if ($total_records > 0) 
        {
            // get current page records
            
            $data["results"] = $this->OthersSong_M->get_current_script_OthersSongLyricsStuffNotation($limit_per_page, $start_index);
            
            $this->pagination->initialize($config);
             
            // build paging links
            $data["links"] = $this->pagination->create_links();
           
        }
        
        
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('scripts/OthersSongLyricsStuffNotation', $data, TRUE);
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
    
    public function getSongbook(){
        $SongbookID = $this->input->get('SongbookID',TRUE);
        $bookID = $this->input->get('bookID',TRUE);
        
        
        $data['FullSongBookList'] =$this->NazrulSong_M->getFullSongBookList($SongbookID,$bookID);
        if($SongbookID == 1){
            $data['title'] = "Full List";
        }
        if($SongbookID == 2){
            $data['title'] = "Others";
        }
        if($SongbookID > 1900){
            $data['title'] = $SongbookID."-".($SongbookID+9);
        }
        
       // $data['songListID'] = $songListID;
        
        echo $this->load->view('scripts/scriptList/FullList',$data, TRUE);
    }
    
    public function FerozaBegumSong(){
       $data = array();
        $data['page'] = 'Feroza Begum Song';
        $data['page_title'] = 'Feroza Begum Song';
        
        $root=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        
        $this->load->library('pagination');
        
        $limit_per_page = 10;
        $start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['FerozaBegumSong'] = $this->FerozaBegumSong_M->getFerozaBegumSong(); 
        $total_records = sizeof($data['FerozaBegumSong']);
        
        $config['base_url'] = base_url() . 'scripts/FerozaBegumSong/index';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;
        $config["uri_segment"] = 4;
        $config['num_links'] = 15;
        
        if ($total_records > 0) 
        {
            // get current page records
            
            $data["results"] = $this->FerozaBegumSong_M->get_current_script_FerozaBegumSong($limit_per_page, $start_index);
            
            $this->pagination->initialize($config);
             
            // build paging links
            $data["links"] = $this->pagination->create_links();
           
        }
        
        
        
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('scripts/FerozaBegumSong', $data, TRUE);
        $this->load->view('index', $data); 
    }
    
    public function Letter(){
        $data = array();
        $data['page'] = 'Letter';
        $data['page_title'] = 'Letter';
        
        
        $root=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        
        $this->load->library('pagination');
        
        $limit_per_page = 10;
        $start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['Letter'] = $this->OthersSong_M->getLetter(); 
        $total_records = sizeof($data['Letter']);
        
        $config['base_url'] = base_url() . 'scripts/Letter/index';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;
        $config["uri_segment"] = 4;
        $config['num_links'] = 15;
        
        
        if ($total_records > 0) 
        {
            // get current page records
            
            $data["results"] = $this->OthersSong_M->get_current_script_Letter($limit_per_page, $start_index);
            
            $this->pagination->initialize($config);
             
            // build paging links
            $data["links"] = $this->pagination->create_links();
           
        }
        
        
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('scripts/Letter', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function Script(){
        $data = array();
        $data['page'] = 'Script';
        $data['page_title'] = 'Script';
        
        
        $root=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        
        $this->load->library('pagination');
        
        $limit_per_page = 10;
        $start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['Script'] = $this->OthersSong_M->getScript(); 
        $total_records = sizeof($data['Script']);
        
        $config['base_url'] = base_url() . 'scripts/Script/index';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;
        $config["uri_segment"] = 4;
        $config['num_links'] = 15;
        
        
        if ($total_records > 0) 
        {
            // get current page records
            
            $data["results"] = $this->OthersSong_M->get_current_script_Script($limit_per_page, $start_index);
            
            $this->pagination->initialize($config);
             
            // build paging links
            $data["links"] = $this->pagination->create_links();
           
        }
        
        
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('scripts/Script', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function Others(){
        $data = array();
        $data['page'] = 'Others';
        $data['page_title'] = 'Others';
        
        
        $root=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== "off" ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        
        $this->load->library('pagination');
        
        $limit_per_page = 10;
        $start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['Others'] = $this->OthersSong_M->getOthers(); 
        $total_records = sizeof($data['Others']);
        
        $config['base_url'] = base_url() . 'scripts/Others/index';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;
        $config["uri_segment"] = 4;
        $config['num_links'] = 15;
        
        
        if ($total_records > 0) 
        {
            // get current page records
            
            $data["results"] = $this->OthersSong_M->get_current_script_Others($limit_per_page, $start_index);
            
            $this->pagination->initialize($config);
             
            // build paging links
            $data["links"] = $this->pagination->create_links();
           
        }
        
        
        $data['menubar'] = $this->load->view('inc/menubar', $data, TRUE);
        $data['main_content'] = $this->load->view('scripts/Others', $data, TRUE);
        $this->load->view('index', $data);
    }

}
