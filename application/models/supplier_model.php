<?php

class supplier_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }


// For supplier Tabele
   function supplier_insert($supplier){
 //Inserting in Table(supplier) of Database(travel) 
       $this->db->insert('00000_mst_supplier', $supplier); 
    	
    }


        public function showAllsupplier(){

     define("TABLE_ONE", 't1`.`');
     define("TABLE_TWO", 't2`.`');
     define("TABLE_THREE", 't3`.`');
     define("TABLE_FOUR", 't4`.`');
     define("TABLE_SIX", 't6`.`');
     define("TABLE_SEVEN", 't7`.`');
     define("TABLE_EIGHT", 't8`.`');
     define("TABLE_NINE", 't9`.`');

     define("ALIAS_ONE", 't1');
     define("ALIAS_TWO", 't2');
     define("ALIAS_THREE", 't3');
     define("ALIAS_FOUR", 't4');
     define("ALIAS_SIX", 't6');
     define("ALIAS_SEVEN", 't7');
     define("ALIAS_EIGHT", 't8');
     define("ALIAS_NINE", 't9');

    $this->load->model('category_model');
    $this->load->model('payment_model');
    $this->load->model('hotel_model');
    $this->load->model('country_model');
    $this->load->model('state_model');
    $this->load->model('city_model');
    $this->load->model('branch_model');

    // Array of database columns which should be read and sent back to DataTables. Use a space where
    // you want to insert a non-database field (for example a counter or static image)
    $aColumns = array( TABLE_ONE . 'supplier_id', TABLE_ONE . 'supplier_name', TABLE_ONE . 'supplier_sht_name', TABLE_ONE . 'category_id', TABLE_ONE . 'pay_terms_id', TABLE_ONE . 'credit_limit', TABLE_ONE . 'credit_term_desc', TABLE_ONE . 'hotel_id', TABLE_ONE . 'phone_list', TABLE_ONE . 'fax_list', TABLE_ONE . 'country_id', TABLE_ONE . 'state_id', TABLE_ONE . 'city_id', TABLE_ONE . 'address', TABLE_ONE . 'gl_ac_no', TABLE_ONE . 'email_id', TABLE_ONE . 'website', TABLE_ONE . 'note', TABLE_ONE . 'vat_no', TABLE_ONE . 'ntn_no', TABLE_ONE . 'gst_no', TABLE_ONE . 'branch_id', TABLE_ONE . 'inactive_flag', TABLE_ONE . 'attachement_detail', TABLE_TWO . 'pay_term_desc', TABLE_THREE . 'hotel_name', TABLE_FOUR . 'category_desc', TABLE_SIX . 'country_name', TABLE_SEVEN . 'state_name', TABLE_EIGHT . 'city_name', TABLE_NINE . 'branch_name');

    //write column name only which has TBALE_ONE const with it.
     $bColumns = array( TABLE_ONE . 'supplier_id', TABLE_ONE . 'supplier_name', TABLE_ONE . 'supplier_sht_name', TABLE_ONE . 'category_id', TABLE_ONE . 'pay_terms_id', TABLE_ONE . 'credit_limit', TABLE_ONE . 'credit_term_desc', TABLE_ONE . 'hotel_id', TABLE_ONE . 'phone_list', TABLE_ONE . 'fax_list', TABLE_ONE . 'country_id', TABLE_ONE . 'state_id', TABLE_ONE . 'city_id', TABLE_ONE . 'address', TABLE_ONE . 'gl_ac_no', TABLE_ONE . 'email_id', TABLE_ONE . 'website', TABLE_ONE . 'note', TABLE_ONE . 'vat_no', TABLE_ONE . 'ntn_no', TABLE_ONE . 'gst_no', TABLE_ONE . 'branch_id', TABLE_ONE . 'inactive_flag', TABLE_ONE . 'attachement_detail');
    // Indexed column (used for fast and accurate table cardinality)
    $sIndexColumn = $aColumns[0];
    // DB table to use
    $sTable = "00000_mst_supplier";
     
    // Paging
    $sLimit = "";
    if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' ) {
        $sLimit = "LIMIT " . intval($_GET['iDisplayStart']) . ", " . intval($_GET['iDisplayLength']);
    }
     
    // Ordering
    $sOrder = "";
    if ( isset( $_GET['iSortCol_0'] ) ) {
        $sOrder = "ORDER BY  ";
        for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ )
        {
            if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
            {
                $sOrder .= "`".$aColumns[ intval( $_GET['iSortCol_'.$i] ) ]."` ".
                    ($_GET['sSortDir_'.$i]==='asc' ? 'asc' : 'desc') .", ";
            }
        }
      
        $sOrder = substr_replace( $sOrder, "", -2 );
        if ( $sOrder == "ORDER BY" )
        {
            $sOrder = "";
        }
    }
     
    // Filtering
    $sWhere = "";
    if ( isset($_GET['sSearch']) && $_GET['sSearch'] != "" ) {
        $sWhere = "WHERE (";
        for ( $i=0 ; $i<count($aColumns) ; $i++ ) {
            $sWhere .= "`".$aColumns[$i]."` LIKE '%". $_GET['sSearch'] ."%' OR ";
        }
        $sWhere = substr_replace( $sWhere, "", -3 );
        $sWhere .= ')';
    }
     
    // Individual column filtering
    for ( $i=0 ; $i<count($aColumns) ; $i++ )
    {
        if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' )
        {
            if ( $sWhere == "" ) {
                $sWhere = "WHERE ";
            } else {
                $sWhere .= " AND ";
            }
            $sWhere .= "`".$aColumns[$i]."` LIKE '%".$_GET['sSearch_'.$i]."%' ";
        }
    }
      
    // SQL queries
    $sQuery = "
        SELECT SQL_CALC_FOUND_ROWS `".str_replace(" , ", " ", implode("`, `", $aColumns))."`
        FROM $sTable ".ALIAS_ONE." 
        JOIN ".$this->db->dbprefix('payment_terms')." ".ALIAS_TWO." ON ".ALIAS_TWO.".pay_terms_id = ".ALIAS_ONE.".pay_terms_id
        JOIN ".$this->db->dbprefix('hotels')." ".ALIAS_THREE." ON ".ALIAS_THREE.".hotel_id = ".ALIAS_ONE.".hotel_id
        JOIN ".$this->db->dbprefix('category')." ".ALIAS_FOUR." ON ".ALIAS_FOUR.".category_id = ".ALIAS_ONE.".category_id
        
        JOIN ".$this->db->dbprefix('country')." ".ALIAS_SIX." ON ".ALIAS_SIX.".country_id = ".ALIAS_ONE.".country_id
        JOIN ".$this->db->dbprefix('state')." ".ALIAS_SEVEN." ON ".ALIAS_SEVEN.".state_id = ".ALIAS_ONE.".state_id
        JOIN ".$this->db->dbprefix('city')." ".ALIAS_EIGHT." ON ".ALIAS_EIGHT.".city_id = ".ALIAS_ONE.".city_id
        JOIN ".$this->db->dbprefix('branch')." ".ALIAS_NINE." ON ".ALIAS_NINE.".branch_id = ".ALIAS_ONE.".branch_id
        $sWhere
        $sOrder
        $sLimit";
    $rResult = $this->db->query($sQuery);
      
    // Data set length after filtering
    $sQuery = "SELECT FOUND_ROWS()";
    $rResultFilterTotal = $this->db->query($sQuery);
    $aResultFilterTotal = $rResultFilterTotal->result_array();
    $tempFilteredTotal = array_values($aResultFilterTotal[0]);
    $iFilteredTotal = $tempFilteredTotal[0];
      
    // Total data set length
    $colNam = explode(".", "`".$sIndexColumn."`");
    if(count($colNam) > 0)
        $tem_sIndexColumn = $colNam[1];
    else
        $tem_sIndexColumn = "`".$tem_sIndexColumn."`";
    $sQuery = "SELECT COUNT(".$tem_sIndexColumn.") FROM $sTable";
    $rResultTotal = $this->db->query($sQuery);
    $aResultTotal = $rResultTotal->result_array();
    $tempTotal = array_values($aResultTotal[0]);
    $iTotal = $tempTotal[0];
    $counter = 1;
    // JSON-ify Output
    $output = array(
            "sEcho" => intval($_GET['sEcho']),
            "iTotalRecords" => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData" => array()
    );

    foreach ($rResult->result_array() as $aRow) {
        $row = array();
        $re = '/^.*`.`/m';
        for ($i=0; $i<count($bColumns); $i++) {
            $bColumns[$i] = preg_replace($re, "", $bColumns[$i]);

            $dbID = $aRow[$bColumns[0]];
            if ($bColumns[$i] == "inactive_flag") {
                $row[] = $aRow[$bColumns[$i]] == 0 ? 'Active' : 'Inactive';
            }else if ($bColumns[$i] == 'supplier_id') {
                // General output
                $row[] = $counter++;
                 
            }else if ($bColumns[$i] == 'phone_list') {
                // General output
                $phone_list = json_decode($aRow[$bColumns[$i]]);
                $html = '';
                foreach ($phone_list as $value) {
                    $html .= '<span class="phone_list">'.$value.'</span><br>';
                }
                $row[] = $html;
                 
            }elseif ($bColumns[$i] == 'fax_list') {
                $fax_list = json_decode($aRow[$bColumns[$i]]);
                $html = '';
                foreach ($fax_list as $value) {
                    $html .= '<span class="fax_list">'.$value.'</span><br>';
                }
                $row[] =$html;
            }else if ($bColumns[$i] == 'attachement_detail') {
                // General output
                $attachement_detail = json_decode($aRow[$bColumns[$i]]);
                $html = '';
                if(isset($attachement_detail) && count($attachement_detail) > 0) {
                    foreach ($attachement_detail as $value) {
                        $v = $value->file_upload;
                        $html .= '<a target="_blank" href="'. base_url('assets/supplier_file/'.$v).'" class="attachement_detail">'.$v.'</a><br>';
                    }
                   
                }
                 $row[] = $html;
                
                 
            }elseif ($bColumns[$i] == 'pay_terms_id') {
                $term = $this->payment_model->getpaymentBypaymentId($aRow[$bColumns[$i]]);
                $row[] = $term->pay_term_desc;
            }elseif ($bColumns[$i] == 'hotel_id') {
                $detail = $this->hotel_model->gethotelByhotelId($aRow[$bColumns[$i]]);
                $row[] = $detail->hotel_name;
            }elseif ($bColumns[$i] == 'category_id') {
                $detail = $this->category_model->getcategoryBycategoryId($aRow[$bColumns[$i]]);
                $row[] = $detail->category_desc;
            }elseif ($bColumns[$i] == 'country_id') {
                $detail = $this->country_model->getcountryBycountryId($aRow[$bColumns[$i]]);
                $row[] = $detail->country_name;
            }elseif ($bColumns[$i] == 'state_id') {
                $detail = $this->state_model->getstateBystateId($aRow[$bColumns[$i]]);
                $row[] = $detail->state_name;
            }elseif ($bColumns[$i] == 'city_id') {
                $detail = $this->city_model->getcityBycityId($aRow[$bColumns[$i]]);
                $row[] = $detail->city_name;
            }elseif ($bColumns[$i] == 'branch_id') {
                $detail = $this->branch_model->getbranchBybranchId($aRow[$bColumns[$i]]);
                $row[] = $detail->branch_name;
            } 
            else if ($bColumns[$i] != ' ') {
                // General output
                $row[] = $aRow[$bColumns[$i]];
                 
            }
            // Formatted output
        }
        $row[] = '<td>'.
                    '<a href="javascript:;" class="fa fa-check fa-lg item-edit" style="color: dodgerblue;padding-left: 20%;position: relative;left: 10px;" data="'.$dbID.'"></a>'.
                    '<a href="javascript:;" class="fa fa-times fa-lg item-delete" style="color: red;position: relative;left: 15px;" data="'.$dbID.'"></a>'.
                  '</td>';
        $output['aaData'][] = $row;
    }
    return $output;
  }

    public function addsupplier(){
         try {

                if($_SERVER['REQUEST_METHOD'] === 'POST'){
                    $files =  array();
                     $supplier_files_details = array();
                if(isset($_FILES['file_name']['name'])){
                    for ($i=0; $i < count($_FILES['file_name']['name']); $i++) { 
                        $file_type = pathinfo($_FILES['file_name']['name'][$i], PATHINFO_EXTENSION);
                        $orignal_file_name = $this->input->post('supplier_name').rand(1111,9999).'_'.rand(1111,9999).'.'.$file_type;
                        array_push($files, array(
                            //'name' => $_FILES['file_name']['name'][$i], 
                            'name' => $orignal_file_name, 
                            'type' => $_FILES['file_name']['type'][$i], 
                            'tmp_name' => $_FILES['file_name']['tmp_name'][$i], 
                            'error' => $_FILES['file_name']['error'][$i], 
                            'size' => $_FILES['file_name']['size'][$i]
                        ));
                    }

                    $_FILES = '';
                    for ($i=0; $i < count($files); $i++) { 
                        $_FILES['file_name'.$i] = $files[$i]; 
                    }
                    $suppliers_file = $this->multiple_upload();

                   
                    for ($i=0; $i < count($suppliers_file); $i++) { 
                        array_push($supplier_files_details, array(
                            'file_description' => $this->input->post('file_description')[$i],
                            'file_upload' =>  $suppliers_file[$i]
                        ));
                    }
                }
                

                $contact_person_array =  array();   
               if($this->input->post('contact_person_name') !== null){
                 for ($i=0; $i < count($this->input->post('contact_person_name')); $i++) { 
                    array_push($contact_person_array, array(
                        'contact_person_name' => isset($this->input->post('contact_person_name')[$i][0]) ? $this->input->post('contact_person_name')[$i][0] : '', 
                        'contact_person_title' => isset($this->input->post('contact_person_title')[$i][0]) ? $this->input->post('contact_person_title')[$i][0] : '', 
                        'contact_person_phone' => isset($this->input->post('contact_person_phone')[$i][0]) ? $this->input->post('contact_person_phone')[$i][0] : '', 
                        'contact_person_mobile' => isset($this->input->post('contact_person_mobile')[$i][0]) ? $this->input->post('contact_person_mobile')[$i][0] : '', 
                        'contact_person_email' => isset($this->input->post('contact_person_email')[$i][0]) ? $this->input->post('contact_person_email')[$i][0] : '', 
                        'contact_person_inactive_flag' => isset($this->input->post('contact_person_inactive_flag')[$i][0]) ? $this->input->post('contact_person_inactive_flag')[$i][0] : '' 
                    ));
                }
               }
                
                  //Setting values for tabel columns
            $supplier = array(
                'supplier_name' => $this->input->post('supplier_name'),
                'credit_term_desc' => $this->input->post('credit_term_desc'),
                'state_id' => $this->input->post('state'),
                'gl_ac_no' => $this->input->post('gl_ac_no'),
                'vat_no' => $this->input->post('vat_no'),
                'branch_id' => $this->input->post('branch'),
                'gst_no' => $this->input->post('gst_no'),
                'vat_flag' => $this->input->post('vat_flag'),
                'black_list_flag' => $this->input->post('black_list_flag'),
                'credit_limit' => $this->input->post('credit_limit'),
                'supplier_sht_name' => $this->input->post('supplier_sht_name'),
                'country_id' => $this->input->post('country'),
                'address' => $this->input->post('address'),
                'website' => $this->input->post('website'),
                'category_id' => $this->input->post('category'),
                'ntn_no' => $this->input->post('ntn_no'),
                'hotel_id' => $this->input->post('hotel'),
                'pay_terms_id' => $this->input->post('payment'),
                'city_id' => $this->input->post('city'),
                'email_id' => $this->input->post('email_id'),
                'gst_no' => $this->input->post('gst_no'),
                'note' => $this->input->post('note'),
                'travel_no' => $this->input->post('travel_no'),
                'travel_type_id' => $this->input->post('travel'),
                'inactive_flag' => $this->input->post('inactive_flag'),
                'fax_list' => json_encode($this->input->post('fax')),
                'phone_list' => json_encode($this->input->post('phone')),
                'cont_person' => json_encode($contact_person_array),
                'attachement_detail' => json_encode($supplier_files_details)
            );
                }
          
                //echo "working or not";
            } catch (Exception $ex) {
                echo json_encode(["message"=>$ex->getMessage()]);
            }
        $this->db->insert('00000_mst_supplier', $supplier);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }


    public function editsupplier(){
        $id = $this->input->get('supplier_id');
        $this->db->where('supplier_id', $id);
        $query = $this->db->get('00000_mst_supplier');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    private function multiple_upload($upload_dir = 'uploads', $config = array())
    {

    $files = array();

    if(empty($config))
    {
        $config['upload_path'] = $this->config->config['upload_path'] . '/supplier_file';
        $config['allowed_types'] = 'gif|jpg|jpeg|jpe|png|pdf|doc|docx|xls|xlsx|rar|zip';
        $config['max_size']      = '800000000';
    }

        $this->load->library('upload', $config);

        $errors = FALSE;

        foreach($_FILES as $key => $value)
        {
                
            if( ! empty($value['name']))
            {
                if( ! $this->upload->do_upload($key))
                {                                           
                    $data['upload_message'] = $this->upload->display_errors(ERR_OPEN, ERR_CLOSE); // ERR_OPEN and ERR_CLOSE are error delimiters defined in a config file
                    $this->load->vars($data);

                    $errors = TRUE;
                }
                else
                {
                    // Build a file array from all uploaded files
                    $files[] = $this->upload->data()['file_name'];
                }
            }
        }

        // There was errors, we have to delete the uploaded files
        if($errors)
        {                    
            foreach($files as $key => $file)
            {
                @unlink($file['full_path']);    
            }                    
        }
        elseif(empty($files) AND empty($data['upload_message']))
        {
            $this->lang->load('upload');
            $data['upload_message'] = ERR_OPEN.$this->lang->line('upload_no_file_selected').ERR_CLOSE;
            $this->load->vars($data);
        }
        else
        {
            return $files;
        }
    }

    public function updatesupplier(){
         try {
            $id = $this->input->post('supplier_id');

                if($_SERVER['REQUEST_METHOD'] === 'POST'){

                    $supplier_files_details = array();
                    $files =  array();
                    $fileDesc = $this->input->post('file_description');

                    foreach ($fileDesc as $key => $value) {
                        if(isset($fileDesc[$key]) && isset($this->input->post('file_name_hidden')[$key])){
                            array_push($supplier_files_details, array(
                                'file_description' => reset($this->input->post('file_description')[$key]),
                                'file_upload' =>  reset($this->input->post('file_name_hidden')[$key])
                            ));
                        }
                    }

                    $i = count($supplier_files_details);
                    
 
                    if(isset($fileDesc[$i]) && isset($_FILES['file_name']['name'])){
                            foreach ($_FILES['file_name']['name'] as $key => $value) {
                                if(!isset($_FILES['file_name']['name'][$key]) || empty(reset($_FILES['file_name']['name'][$key])))
                                    continue;

                                $file_type = pathinfo($_FILES['file_name']['name'][$key][0], PATHINFO_EXTENSION);

                                if(empty($file_type)){
                                  $file_type =  explode(".", $_FILES['file_name']['name'][$key][0]);
                                  $file_type = $file_type[0];
                                }
                                $orignal_file_name = $this->input->post('supplier_name').rand(1111,9999).'_'.rand(1111,9999).'.'.$file_type;
                                array_push($files, array(
                                    //'name' => $_FILES['file_name']['name'][$key], 
                                    'name' => $orignal_file_name, 
                                    'type' => $_FILES['file_name']['type'][$key][0], 
                                    'tmp_name' => $_FILES['file_name']['tmp_name'][$key][0], 
                                    'error' => $_FILES['file_name']['error'][$key][0], 
                                    'size' => $_FILES['file_name']['size'][$key][0]
                                ));
                            }

                            $_FILES = '';
                            for ($k=0; $k < count($files); $k++) { 
                                $_FILES['file_name'.$k] = $files[$k]; 
                            }
                            $suppliers_file = $this->multiple_upload();
                           
                            for ($l=0; $l < count($suppliers_file); $l++) { 
                                array_push($supplier_files_details, array(
                                    'file_description' => reset($this->input->post('file_description')[$l]),
                                    'file_upload' =>  $suppliers_file[$l]
                                ));
                            }
                        }
                

                $contact_person_array =  array();   
               if($this->input->post('contact_person_name') !== null){
                 for ($i=0; $i < count($this->input->post('contact_person_name')); $i++) { 
                    array_push($contact_person_array, array(
                        'contact_person_name' => isset($this->input->post('contact_person_name')[$i][0]) ? $this->input->post('contact_person_name')[$i][0] : '', 
                        'contact_person_title' => isset($this->input->post('contact_person_title')[$i][0]) ? $this->input->post('contact_person_title')[$i][0] : '', 
                        'contact_person_phone' => isset($this->input->post('contact_person_phone')[$i][0]) ? $this->input->post('contact_person_phone')[$i][0] : '', 
                        'contact_person_mobile' => isset($this->input->post('contact_person_mobile')[$i][0]) ? $this->input->post('contact_person_mobile')[$i][0] : '', 
                        'contact_person_email' => isset($this->input->post('contact_person_email')[$i][0]) ? $this->input->post('contact_person_email')[$i][0] : '', 
                        'contact_person_inactive_flag' => isset($this->input->post('contact_person_inactive_flag')[$i][0]) ? $this->input->post('contact_person_inactive_flag')[$i][0] : '' 
                    ));
                }
               }
                
                  //Setting values for tabel columns
            $datasupplier = array(
                'supplier_name' => $this->input->post('supplier_name'),
                'credit_term_desc' => $this->input->post('credit_term_desc'),
                'state_id' => $this->input->post('state_id'),
                'gl_ac_no' => $this->input->post('gl_ac_no'),
                'vat_no' => $this->input->post('vat_no'),
                'branch_id' => $this->input->post('branch_id'),
                'gst_no' => $this->input->post('gst_no'),
                'vat_flag' => $this->input->post('vat_flag'),
                'black_list_flag' => $this->input->post('black_list_flag'),
                'credit_limit' => $this->input->post('credit_limit'),
                'supplier_sht_name' => $this->input->post('supplier_sht_name'),
                'country_id' => $this->input->post('country_id'),
                'address' => $this->input->post('address'),
                'website' => $this->input->post('website'),
                'category_id' => $this->input->post('category_id'),
                'ntn_no' => $this->input->post('ntn_no'),
                'hotel_id' => $this->input->post('hotel_id'),
                'pay_terms_id' => $this->input->post('pay_terms_id'),
                'city_id' => $this->input->post('city_id'),
                'email_id' => $this->input->post('email_id'),
                'gst_no' => $this->input->post('gst_no'),
                'note' => $this->input->post('note'),
                'travel_no' => $this->input->post('travel_no'),
                'travel_type_id' => $this->input->post('travel_type_id'),
                'inactive_flag' => $this->input->post('inactive_flag'),
                'fax_list' => json_encode($this->input->post('fax')),
                'phone_list' => json_encode($this->input->post('phone')),
                'cont_person' => json_encode($contact_person_array),
                'attachement_detail' => json_encode($supplier_files_details)
            );
                }
                 $this->db->where('supplier_id', $id);
            $this->db->update('00000_mst_supplier', $datasupplier);
            return true;
          
                //echo "working or not";
            } catch (Exception $ex) {
                echo json_encode(["message"=>$ex->getMessage()]);
                return false;
            }
        
    }


     function deletesupplier(){
    $id = $this->input->get('supplier_id');
    $this->db->where('supplier_id', $id);
    $this->db->delete('00000_mst_supplier');
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

 }
 ?>