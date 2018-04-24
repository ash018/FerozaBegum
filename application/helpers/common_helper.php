<?php
	function isAjax() {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
    }
	
	function getDepot($deptcode){
		$ci =& get_instance();
        $ci->load->database();
		// load the database
        $depotname = '';
        if (!empty($deptcode)) {		
		    $sql = "SELECT depotname
				    FROM [epsserver].[epsmirror].dbo.depot
				    WHERE depotcode = '$deptcode'";
	                    
	        $query = $ci->db->query($sql);
            if ($query !== false){
                $row = $query->result();
                $depotname = $row[0]->depotname;
            }		                
        }
			
		return $depotname;
	}
    
    function getOperators(){
        $ci =& get_instance();
        $ci->load->database();
        // load the database
        $rows = array();              
        $sql = "SELECT operatorid, name+' ['+shortname+']' AS operatorname
                FROM Operators
                ORDER BY operatorid;";
        
        $query = $ci->db->query($sql);
        if ($query !== false){
            $rows = $query->result();                
        }                        
               
        return $rows;
    }

    function getDepots(){
        $ci =& get_instance();
        $ci->load->database();
        // load the database
        $rows = array();              
        $sql = "SELECT depotcode, depotcode + ' - '+shortname AS depotname
                FROM [epsserver].[epsmirror].dbo.depot
                WHERE ActiveDepot = 'Y'
                    AND DepotType = 'O'
                ORDER BY depotcode;";
        
        $query = $ci->db->query($sql);
        if ($query !== false){
            $rows = $query->result();                
        }                        
               
        return $rows;
    }

    function getMaxRechargeNo($depotcode) {
        $ci =& get_instance();
        $ci->load->database();
        // load the database
        $maxno = 0;
        if (!empty($depotcode)) {        
            $sql = "SELECT ISNULL(MAX(CAST(rechargeno AS INT)), 0)+1 AS maxno
                    FROM mobilerecharge
                    WHERE period = ".date('Ym',strtotime(getServerDate()))."
                        AND depotcode LIKE '$depotcode'";
            $query = $ci->db->query($sql);
            if ($query !== false){
                $row = $query->result();
                if (!empty($row[0]->maxno)) {
                    $maxno = $row[0]->maxno;
                } else {
                    $maxno = '1';
                }
                
                if ($maxno == '1') {
                    $maxno = date('md',strtotime(getServerDate())).str_pad($maxno,5,'0',STR_PAD_LEFT);
                }
            }                        
        }
        if (strlen($maxno) < 9) $maxno = str_pad($maxno,(9-strlen($maxno)),'0',STR_PAD_LEFT);
        return $maxno;
    }
    
    function getAvalableBalance($depotcode){
        $ci =& get_instance();
        $ci->load->database();
        // load the database
        $avbal = 0;
        if (!empty($depotcode)) {        
            $sql = "SELECT stockbalance AS avalbal
                    FROM rechargestock
                    WHERE depotcode = '$depotcode'";
            
            $query = $ci->db->query($sql);
            if ($query !== false){
                $row = $query->result();
                if (count($row)>0){
                    $avbal = $row[0]->avalbal;
                }
            }                        
        }
            
        return $avbal;
    }

    function getServerDate() {
        $ci =& get_instance();
		// load the database
		$ci->load->database();
        $CurDate = '';
        
        $sql = "SELECT CONVERT(VARCHAR(35), GETDATE(), 120) AS CurDate";
        $query = $ci->db->query($sql);
		$row = $query->result();
        if ($row !== false && count($row)>0) {                                     
        	$CurDate = $row[0]->CurDate;            
        } 
        return $CurDate;
    }            
        
    /**
    *   Validate an email address.
    *   Provide email address (raw input)
    *   Returns TRUE if the email address has the email 
    *   address format and the domain exists.
    */
    function validEmail($email) {
       $isValid = TRUE;
       $atIndex = strrpos($email, "@");
       if (is_bool($atIndex) && !$atIndex) {
          $isValid = FALSE;
       } else{
          $domain = substr($email, $atIndex+1);
          $local = substr($email, 0, $atIndex);
          $localLen = strlen($local);
          $domainLen = strlen($domain);
          if ($localLen < 1 || $localLen > 64) {
             // local part length exceeded
             $isValid = FALSE;
          } else if ($domainLen < 1 || $domainLen > 255) {
             // domain part length exceeded
             $isValid = FALSE;
          } else if ($local[0] == '.' || $local[$localLen-1] == '.') {
             // local part starts or ends with '.'
             $isValid = FALSE;
          } else if (preg_match('/\\.\\./', $local)) {
             // local part has two consecutive dots
             $isValid = FALSE;
          } else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain)) {
             // character not valid in domain part
             $isValid = FALSE;
          } else if (preg_match('/\\.\\./', $domain)) {
             // domain part has two consecutive dots
             $isValid = FALSE;
          } else if (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/',
                     str_replace("\\\\","",$local))) {
             // character not valid in local part unless 
             // local part is quoted
             if (!preg_match('/^"(\\\\"|[^"])+"$/',
                 str_replace("\\\\","",$local))) {
                $isValid = FALSE;
             }
          }                    
       }
       return $isValid;
    }
    
    function quoteCheck($value) {        
        // Quote if not a number or a numeric string
        if (!is_numeric($value)) {
            $value = mysql_real_escape_string($value);
        }
        return $value;
    }    
    
    function fileList($dir, $typefile='gif|png') {     	   	
		$data = array();		
		$d =  get_filenames($dir);
		
		foreach ($d as $file) {
			$filter = '/\.('.$typefile.')$/';
			if(!preg_match($filter, $file)) continue;
			$info = get_file_info($dir.$file);			
			$size = $info['size'];
			$lastmod = date("d/m/Y",($info['date']*1000));
			$data[] = array('name'=>$file, 'size'=>$size,
					'lastmod'=>$lastmod, 'url'=>$dir.$file);
		}
		$o = array('filelist'=>$data);
		return json_encode($o);	
	}
	/*
	function hex2bin($data){
       $len = strlen($data);
       return pack("H" . $len, $data);
    } */
	
	function cmp($a, $b) {
	    if ($a['QuotationSerial'] == $b['QuotationSerial']) {
	        return 0;
	    }
	    return ($a['QuotationSerial'] < $b['QuotationSerial']) ? -1 : 1;
	}

    function passdecode($xpassword) {
        $decode = "";        
        
        For ($i = strLen($xpassword)-1; $i >= 0; $i--) {
            $decode .= Chr(ord(substr($xpassword, $i, 1)) - 104);
        }
        return $decode;
    }
    
    function passencode($xpassword) {
        $encode = "";
        
        For ($i = strLen($xpassword)-1; $i>= 0; $i--) {
            $encode .= Chr(ord(substr($xpassword, $i, 1)) + 104);
        }
        return $encode;
    }