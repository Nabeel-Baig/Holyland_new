<?php

class season_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }


// For season Tabele
   function season_insert($season){
 //Inserting in Table(season) of Database(travel) 
       $this->db->insert('00000_mst_seasons', $season); 
    	
    }


        public function showAllseason(){

     define("TABLE_ONE", 't1`.`');

     define("ALIAS_ONE", 't1');


    // Array of database columns which should be read and sent back to DataTables. Use a space where
    // you want to insert a non-database field (for example a counter or static image)
    $aColumns = array( TABLE_ONE . 'season_id', TABLE_ONE . 'seeson_name',  TABLE_ONE . 'gor_from_date', TABLE_ONE . 'gor_to_date', TABLE_ONE . 'hij_from_date', TABLE_ONE . 'hij_to_date');

    //write column name only which has TBALE_ONE const with it.
     $bColumns = array( TABLE_ONE . 'season_id', TABLE_ONE . 'seeson_name', TABLE_ONE . 'gor_from_date', TABLE_ONE . 'gor_to_date', TABLE_ONE . 'hij_from_date', TABLE_ONE . 'hij_to_date');
    // Indexed column (used for fast and accurate table cardinality)
    $sIndexColumn = $aColumns[0];
    // DB table to use
    $sTable = "00000_mst_seasons";
     
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
            }else if ($bColumns[$i] == 'season_id') {
                // General output
                $row[] = $counter++;
                 
            }  else if ($bColumns[$i] != ' ') {
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

    public function addseason(){
        $field = array(
		    'seeson_name' => $this->input->post('seeson_name'),
	        'gor_from_date' => $this->input->post('gor_from_date'),
	        'gor_to_date' => $this->input->post('gor_to_date'),
	        'hij_from_date' => $this->input->post('hij_from_date'),
	        'hij_to_date' => $this->input->post('hij_to_date'),
	        'term_cond_id' => $this->input->post('term_cond_id'),
	        'term_cond_det_id' => $this->input->post('term_cond_det_id')
            );
        $this->db->insert('00000_mst_seasons', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }


    public function editseason(){
        $id = $this->input->get('season_id');
        $this->db->where('season_id', $id);
        $query = $this->db->get('00000_mst_seasons');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function updateseason(){
        try {
            $id = $this->input->post('season_id');
            $field = array(
                    'seeson_name' => $this->input->post('seeson_name'),
                    'gor_from_date' => $this->input->post('gor_from_date'),
                    'gor_to_date' => $this->input->post('gor_to_date'),
                    'hij_from_date' => $this->input->post('hij_from_date'),
                    'hij_to_date' => $this->input->post('hij_to_date'),
                    'term_cond_id' => $this->input->post('term_cond_id'),
                    'term_cond_det_id' => $this->input->post('term_cond_det_id')
            );
            $this->db->where('season_id', $id);
            $this->db->update('00000_mst_seasons', $field);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }


     function deleteseason(){
    $id = $this->input->get('season_id');
    $this->db->where('season_id', $id);
    $this->db->delete('00000_mst_seasons');
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

}
?>