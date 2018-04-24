<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

    if (!function_exists('select_option')) {

        function select_option($table,$field_id,$field_name) {
            $ci = get_instance();

            $ci->load->model('common_m');
            $option = $ci->common_m->option_select($table, $field_id);

            foreach ($option as $opt) {
                $opt_id = $opt[$field_id];
                $opt_name = $opt[$field_name];
                //echo "<option value=\"$opt_id\">$opt_name</option>";
                echo "<option value="."'".$opt_id."'".">$opt_name</option>";
            }
        }

    }
    
    if(!function_exists('select_option_selected')){
        function select_option_selected($table,$field_id,$field_name,$selected_id){        
            $ci = get_instance();

            $ci->load->model('common_m');
            $option = $ci->common_m->option_select($table,$field_id);   
            foreach($option as $opt){
                $opt_id = $opt[$field_id];
                $opt_name = $opt[$field_name];            
                if($opt_id == $selected_id){$selected = 'selected';}else{$selected = '';}
                echo "<option $selected value=\"$opt_id\">$opt_name</option>";
            }        
        }
    }

    if (!function_exists('total_service_data')) {

        function total_service_data($userid) {
            $CI = & get_instance();
            $CI->load->model('Common_m');
            $total_q = $CI->Common_m->sumSericeData($userid);
            //$Levelname = $Levelname_q['0']['Levelname'];
            return $total_q;
        }
    }
    
   
    
    if (!function_exists('select_option_condtion')) {

    function select_option_condtion($table, $Id, $field, $condition_field, $condition_val) {
        $ci = get_instance();
        $ci->load->model('common_m');
        $option = $ci->common_m->option_select_condtion($table, $field, $condition_field, $condition_val);

        foreach ($option as $opt) {
            $opt_id = $opt[$Id];
            $opt_val = $opt[$field] . ' - ' . $opt_id;
            echo "<option value=\"$opt_id\">$opt_val</option>";
        }
    }

}

if (!function_exists('get_depot_code')) {

        function get_depot_code($userid) {
            $CI = & get_instance();
            $CI->load->model('Common_m');
            $role_q = $CI->Common_m->select_option_depotcode($userid);
            $DepotCode = $role_q['0']['DepotCode'];
            return $DepotCode;
        }
    }
    
    if (!function_exists('get_date_format')) {
        function get_date_format($date) {
            $time = strtotime($date);
            $dateF = date('M d Y', $time);
            return $dateF;
        }
    }
    
    if (!function_exists('get_date_format_2')) {
        function get_date_format_2($date) {
            $time = strtotime($date);
            $dateF = date('Y-m-d', $time);
            return $dateF;
        }
    }


    if (!function_exists('bd_nice_number')) {

        function bd_nice_number($n) {
            $n = (0 + str_replace(",", "", $n));

            // is this a number?
            if (!is_numeric($n))
                return false;

            // now filter it;
            // if($n>1000000000000) return round(($n/1000000000000),1).' trillion';
            // else if($n>1000000000) return round(($n/1000000),1).'';
            // else if($n>1000000) return round(($n/1000000),2).'';
            if ($n > 1000)
                return round(($n / 1000000), 2) . '';

            return number_format($n);
        }

    }

    if (!function_exists('bd_nice_number_hs')) {

        function bd_nice_number_hs($n) {
            $n = (0 + str_replace(",", "", $n));

            // is this a number?
            if (!is_numeric($n))
                return false;

            // now filter it;
            if ($n > 1000000000000)
                return round(($n / 1000000000000), 1) . ' trillion';
            else if ($n > 1000000000)
                return round(($n / 1000000000), 1) . ' billion';
            else if ($n > 1000000)
                return round(($n / 1000), 2) . '';
            else if ($n > 1000)
                return round(($n / 1000), 2) . '';

            return number_format($n);
        }

}

if (!function_exists('getaddress')) {

    function getaddress($lat, $lng) {
        $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng=' . trim($lat) . ',' . trim($lng) . '&sensor=false';
        $json = @file_get_contents($url);
        $data = json_decode($json);
        $status = $data->status;
        if ($status == "OK") {
            return $data->results[0]->formatted_address;
        } else {
            return false;
        }
    }

}

    if (!function_exists('get_user_name')) {

        function get_user_name($id) {
            $CI = & get_instance();
            $CI->load->model('Common_m');
            $Name_q = $CI->Common_m->select_option_user($id);
            $Name = $Name_q['0']['Name'];     
            return $Name;
        }

    }
    
    
    
if (!function_exists('get_QuarantineReceiveNo')) {

    function get_QuarantineReceiveNo($PlantCode) {
        $CI = & get_instance();
        $CI->load->model('Common_m');
        
        $year = date('y');
        $MaxLastReceiveNo = $CI->Common_m->selectLastReceiveNo($PlantCode);
        $LastReceiveNo = $MaxLastReceiveNo->QuarantineReceiveNo+1;
        $LastReceiveNoLen = strlen($LastReceiveNo);
        switch ($LastReceiveNoLen) {
            case 1:
                $ReceiveNo = '0000'.$LastReceiveNo;
                break;
            case 2:
                $ReceiveNo = '000'.$LastReceiveNo;
                break;
            case 3:
                $ReceiveNo = '00'.$LastReceiveNo;
            case 4:
                $ReceiveNo = '0'.$LastReceiveNo;
            default:
                $ReceiveNo = $LastReceiveNo;
        }
        $QuarantineReceiveNo = $PlantCode.$year.$ReceiveNo;
        return $QuarantineReceiveNo;
    }
}

if (!function_exists('get_IssueNo')) {

    function get_IssueNo($PlantCode) {
        $CI = & get_instance();
        $CI->load->model('Common_m');
        
        $year = date('y');
        $month = date('m');
        $day = date('d');
        $MaxLastIssueNo = $CI->Common_m->selectLastIssueNo($PlantCode);
        $LastIssueNo = $MaxLastIssueNo->IssueNo+1;
        $LastIssueNoLen = strlen($LastIssueNo);
        switch ($LastIssueNoLen) {
            case 1:
                $IssueNo = '0000'.$LastIssueNo;
                break;
            case 2:
                $IssueNo = '000'.$LastIssueNo;
                break;
            case 3:
                $IssueNo = '00'.$LastIssueNo;
            case 4:
                $IssueNo = '0'.$LastIssueNo;
            default:
                $IssueNo = $LastIssueNo;
        }
        $IssueNo = $PlantCode.$year.$IssueNo;
        return $IssueNo;
    }
}



