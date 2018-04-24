<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public $page = '';
    public $menuid = 0;

    function __construct() {
        parent::__construct();

        $local = gmmktime(gmdate("H"), gmdate("i") - 360);
        $this->session->set_userdata('localdatetime', gmdate('Y-m-d h:i:s', $local));
        $alldata = $this->session->userdata('alldata');
        if (!$alldata) {
            if (!$this->session->userdata('login')) {
                if ($this->input->is_ajax_request()) {
                    echo "valid_script = true; window.location = '" . site_url("/home") . "'";
                    exit();
                } else {
                    redirect(site_url("/home"));
                }
            }
        }
    }

}
