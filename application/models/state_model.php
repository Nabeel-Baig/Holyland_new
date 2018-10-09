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

// this function shows the drop down menu of Country with reference to state in Add City
    public function get_state($country_id)
    {
        $query = $this->db->get_where('00000_mst_state', array('country_id' => $country_id ));
        return $query->result();
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


// This table shows the list of States in City Table
             function getStateBySateId($state_id){
                $this->db->select('state_name');
                $this->db->from('00000_mst_state');
                $this->db->where('state_id', $state_id);
                $query = $this->db->get();
                $result = $query->row();
                return $result;
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
        $this->load->model('country_model');
    // Array of database columns which should be read and sent back to DataTables. Use a space where
    // you want to insert a non-database field (for example a counter or static image)
    $aColumns = array( 'state_id', 'country_id', 'state_name', 'state_sht_name', 'inactive_flag');
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
            }else if ($aColumns[$i] == 'state_id') {
                // General output
                $row[] = $counter++;
                 
            }elseif ($aColumns[$i] == 'country_id') {
                $country = $this->country_model->getCountryByCountryId($aRow[$aColumns[$i]]);
                $row[] = $country->country_name;
            } elseif ($aColumns[$i] != ' ') {
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