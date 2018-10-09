<?php

class city_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }


// For City Tabele
   function city_insert($city){
 //Inserting in Table(City) of Database(travel) 
       $this->db->insert('00000_mst_city', $city); 
    	
    }



    /*// Fetching City Name from Cities
    public function getCities()
    {
        $sql="SELECT * from 00000_mst_country INNER JOIN 00000_mst_city ON 00000_mst_country.country_id=00000_mst_city.country_id INNER JOIN 00000_mst_state ON 00000_mst_state.state_id=00000_mst_city.state_id";
        $result=$this->db->query($sql);
        return $result->result();
    }
*/
/*
// Delete City From City_list
    function delete_city_id($id){
$this->db->where('city_id', $id);
$this->db->delete('00000_mst_city');


}
*/



// for Country Update Modal

    public function showAllcity(){

     define("TABLE_ONE", 't1`.`');
     define("TABLE_TWO", 't2`.`');
     define("TABLE_THREE", 't3`.`');

     define("ALIAS_ONE", 't1');
     define("ALIAS_TWO", 't2');
     define("ALIAS_THREE", 't3');

    $this->load->model('country_model');
    $this->load->model('state_model');

    // Array of database columns which should be read and sent back to DataTables. Use a space where
    // you want to insert a non-database field (for example a counter or static image)
    $aColumns = array( TABLE_ONE . 'city_id', TABLE_ONE . 'country_id', TABLE_ONE . 'state_id', TABLE_ONE . 'city_name', TABLE_ONE . 'inactive_flag', TABLE_TWO . 'country_name', TABLE_THREE . 'state_name');

    //write column name only which has TBALE_ONE const with it.
     $bColumns = array( TABLE_ONE . 'city_id', TABLE_ONE . 'country_id', TABLE_ONE . 'state_id', TABLE_ONE . 'city_name', TABLE_ONE . 'inactive_flag');
    // Indexed column (used for fast and accurate table cardinality)
    $sIndexColumn = $aColumns[0];
    // DB table to use
    $sTable = "00000_mst_city";
     
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
        JOIN ".$this->db->dbprefix('country')." ".ALIAS_TWO." ON ".ALIAS_TWO.".country_id = ".ALIAS_ONE.".country_id
        JOIN ".$this->db->dbprefix('state')." ".ALIAS_THREE." ON ".ALIAS_THREE.".state_id = ".ALIAS_ONE.".state_id
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
            }else if ($bColumns[$i] == 'city_id') {
                // General output
                $row[] = $counter++;
                 
            }elseif ($bColumns[$i] == 'country_id') {
                $country = $this->country_model->getCountryByCountryId($aRow[$bColumns[$i]]);
                $row[] = $country->country_name;
            }elseif ($bColumns[$i] == 'state_id') {
                $state = $this->state_model->getStateBySateId($aRow[$bColumns[$i]]);
                $row[] = $state->state_name;
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

    public function addcity(){
        $field = array(
            'country_id'=>$this->input->post('country_id'),
            'state_id'=>$this->input->post('state_id'),
            'city_name'=>$this->input->post('city_name'),
            'inactive_flag'=>$this->input->post('inactive_flag')
            );
        $this->db->insert('00000_mst_city', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }


    public function editcity(){
        $id = $this->input->get('city_id');
        $this->db->where('city_id', $id);
        $query = $this->db->get('00000_mst_city');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function updatecity(){
        $id = $this->input->post('city_id');
        $field = array(
        'country_id'=>$this->input->post('country_id'),
            'state_id'=>$this->input->post('state_id'),
            'city_name'=>$this->input->post('city_name'),
            'inactive_flag'=>$this->input->post('inactive_flag')
        );
        $this->db->where('city_id', $id);
        $this->db->update('00000_mst_city', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }


     function deletecity(){
    $id = $this->input->get('city_id');
    $this->db->where('city_id', $id);
    $this->db->delete('00000_mst_city');
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }


}
 ?>