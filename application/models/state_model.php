<?php

class state_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }


// For State Tabele
function state_insert($state){
 //Inserting in Table(Country) of Database(travel) 
       $this->db->insert('00000_mst_state', $state);
       
    }

// this function shows the drop down menu of Country with reference to state in Add Client
    function fetch_state($country_id)
 {
  $this->db->where('country_id', $country_id);
  $this->db->order_by('state_name', 'ASC');
  $this->db->where('inactive_flag', ACTIVE);
  $query = $this->db->get('00000_mst_state');
  $output = '<option value="">Select State</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->state_id.'">'.$row->state_name.'</option>';
  }
  return $output;
 }

/*// this function shows the drop down menu of Country with reference to state in Add City
    public function get_state($country_id)
    {
        $this->db->order_by("state_name", "ASC");
        $this->db->where("inactive_flag", ACTIVE);
        $query = $this->db->get_where('00000_mst_state', array('country_id' => $country_id ));

        return $query->result();
    }*/

// This function calls in Client As Show state Details detail in Client model
             function getstateBystateId($state_id){
                $this->db->select('state_name');
                $this->db->from('00000_mst_state');
                $this->db->where('state_id', $state_id);
                $query = $this->db->get();
                $result = $query->row();
                return $result;
            }


/*
// Fetching Country Name from Countries in ADD City As a drop down and inherit in States List
    public function getCountries()
    {
        $sql="SELECT * from 00000_mst_country INNER JOIN 00000_mst_state ON 00000_mst_country.country_id=00000_mst_state.country_id";
        $result=$this->db->query($sql);
        return $result->result();
    }
*/



  /*  // Function to Delete selected record from table name students.
    function delete_state_id($id){
$this->db->where('state_id', $id);
$this->db->delete('00000_mst_state');

}*/
// Fetch in City as State List
    public function getState_list()
    {
        $result=$this->db->where('inactive_flag', ACTIVE)->get("00000_mst_state");
        return $result->result();
    }


            /*// Function To Fetch Selected State Record
            function show_state_id($data){
            $this->db->select('*');
            $this->db->from('00000_mst_city');
            $this->db->where('city_id', $data);
            $query = $this->db->get();
            $result = $query->result();
            return $result;
            }
            // Update Query For Selected State
            function update_state_id1($id,$data){
            $this->db->where('city_id', $id);
            $this->db->update('00000_mst_city', $data);
            }
*/





// for Country Update Modal

   public function showAllstate(){

     define("TABLE_ONE", 't1`.`');
     define("TABLE_TWO", 't2`.`');

     define("ALIAS_ONE", 't1');
     define("ALIAS_TWO", 't2');


    // Array of database columns which should be read and sent back to DataTables. Use a space where
    // you want to insert a non-database field (for example a counter or static image)
    $aColumns = array( TABLE_ONE . 'state_id', TABLE_ONE . 'country_id', TABLE_ONE . 'state_name', TABLE_ONE . 'state_sht_name', TABLE_ONE . 'inactive_flag', TABLE_TWO . 'country_name');

    //write column name only which has TBALE_ONE const with it.
     $bColumns = array( TABLE_ONE . 'state_id', TABLE_ONE . 'country_id', TABLE_ONE . 'state_name', TABLE_ONE . 'state_sht_name', TABLE_ONE . 'inactive_flag');
    // Indexed column (used for fast and accurate table cardinality)
    $sIndexColumn = $aColumns[0];
    // DB table to use
    $sTable = "00000_mst_state";
     
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
            }else if ($bColumns[$i] == 'state_id') {
                // General output
                $row[] = $counter++;
                 
            }elseif ($bColumns[$i] == 'country_id') {
                $country = $this->country_model->getcountryBycountryId($aRow[$bColumns[$i]]);
                $row[] = $country->country_name;
            } else if ($bColumns[$i] != ' ') {
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

    public function addstate(){
        $field = array(
            'state_name'=>$this->input->post('state_name'),
            'state_sht_name'=>$this->input->post('state_sht_name'),
            'inactive_flag'=>$this->input->post('inactive_flag'),
            'country_id' => $this->input->post('country_id'),
            );
        $this->db->insert('00000_mst_state', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }


    public function editstate(){
        $id = $this->input->get('state_id');
        $this->db->where('state_id', $id);
        $query = $this->db->get('00000_mst_state');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function updatestate(){
        try{
            $id = $this->input->post('state_id');
            $field = array(
            'state_name'=>$this->input->post('state_name'),
                'state_sht_name'=>$this->input->post('state_sht_name'),
                'inactive_flag'=>$this->input->post('inactive_flag'),
                'country_id' => $this->input->post('country_id')
            );
            $this->db->where('state_id', $id);
            return $this->db->update('00000_mst_state', $field);
        }catch(Exception $e){
            return false;
        }
    }


     function deletestate(){
    $id = $this->input->get('state_id');
    $this->db->where('state_id', $id);
    $this->db->delete('00000_mst_state');
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }



}
?>