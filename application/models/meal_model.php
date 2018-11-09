<?php

class meal_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }



// For Add meal Tabele
 function add_meal($data){
 //Inserting in Table(Credit) of Database(travel) 
       $this->db->insert('00000_mst_meal_plans', $data);   
    }


    // Fetch in Meal as Meal List
   /* public function getMeal_list()
    {
        $result=$this->db->where('inactive_flag', ACTIVE)->get("00000_mst_meal_plans");
        return $result->result();
    }*/

// Fetch meal in Hotel Table
    function fetch_meal()
 {
  $this->db->order_by("meal_plan_desc", "ASC");
  $this->db->where('inactive_flag', ACTIVE);
  $query = $this->db->get("00000_mst_meal_plans");
  return $query->result();
 }


    public function showAllmeal(){
   /* $this->db->order_by('meal_plan_id', 'desc');
    $query = $this->db->get('00000_mst_meal_plans');
    if($query->num_rows() > 0){
      return $query->result();
    }else{
      return false;
    }*/

// Array of database columns which should be read and sent back to DataTables. Use a space where
    // you want to insert a non-database field (for example a counter or static image)
    $aColumns = array( 'meal_plan_id', 'meal_plan_desc', 'inactive_flag');
    // Indexed column (used for fast and accurate table cardinality)
    $sIndexColumn = $aColumns[0];
    // DB table to use
    $sTable = "00000_mst_meal_plans";
     
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
        FROM $sTable
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
    $sQuery = "SELECT COUNT(`".$sIndexColumn."`) FROM $sTable";
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
        for ($i=0; $i<count($aColumns); $i++) {
            $dbID = $aRow[$aColumns[0]];
            if ($aColumns[$i] == "inactive_flag") {
                $row[] = $aRow[$aColumns[$i]] == 0 ? 'Active' : 'Inactive';
            }else if ($aColumns[$i] == 'meal_plan_id') {
                // General output
                $row[] = $counter++;
                 
            } else if ($aColumns[$i] != ' ') {
                // General output
                $row[] = $aRow[$aColumns[$i]];
                 
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

  public function addmeal(){
    $field = array(
      'meal_plan_desc'=>$this->input->post('meal_plan_desc'),
      'inactive_flag'=>$this->input->post('inactive_flag')
      );
    $this->db->insert('00000_mst_meal_plans', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

  public function editmeal(){
    $id = $this->input->get('meal_plan_id');
    $this->db->where('meal_plan_id', $id);
    $query = $this->db->get('00000_mst_meal_plans');
    if($query->num_rows() > 0){
      return $query->row();
    }else{
      return false;
    }
  }

  public function updatemeal(){
    $id = $this->input->post('meal_plan_id');
    $field = array(
    'meal_plan_desc'=>$this->input->post('meal_plan_desc'),
      'inactive_flag'=>$this->input->post('inactive_flag')
    );
    $this->db->where('meal_plan_id', $id);
    $this->db->update('00000_mst_meal_plans', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

  function deletemeal(){
    $id = $this->input->get('meal_plan_id');
    $this->db->where('meal_plan_id', $id);
    $this->db->delete('00000_mst_meal_plans');
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }



}
?>