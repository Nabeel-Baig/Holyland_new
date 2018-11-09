<?php

class saleman_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }


// For Add Saleman Tabele
 function add_saleman($data){
 //Inserting in Table(Credit) of Database(travel) 
       $this->db->insert('00000_mst_salesperson', $data);   
    }

// Fetch in City as saleman List
    public function getsaleman_list()
    {
        $result=$this->db->where('inactive_flag', ACTIVE)->get("00000_mst_salesperson");
        return $result->result();
    }


// Fetch SalesPerson in Client Table
    function fetch_sales()
 {
  $this->db->order_by("salesperson_name", "ASC");
  $this->db->where("inactive_flag", ACTIVE);
  $query = $this->db->get("00000_mst_salesperson");
  return $query->result();
 }

  // This function calls in Client As Show saleman Details detail in Client model
             function getsalemanBysalemanId($salesperson_id){
                $this->db->select('salesperson_name');
                $this->db->from('00000_mst_salesperson');
                $this->db->where('salesperson_id', $salesperson_id);
                $query = $this->db->get();
                $result = $query->row();
                return $result;
            }



            /*// Function To Fetch Selected saleman Record
            function show_salesperson_id($data){
            $this->db->select('*');
            $this->db->from('00000_mst_city');
            $this->db->where('city_id', $data);
            $query = $this->db->get();
            $result = $query->result();
            return $result;
            }
            // Update Query For Selected saleman
            function update_salesperson_id1($id,$data){
            $this->db->where('city_id', $id);
            $this->db->update('00000_mst_city', $data);
            }
*/





// for Country Update Modal

    public function showAllsaleman(){
       // $this->load->model('country_model');
    // Array of database columns which should be read and sent back to DataTables. Use a space where
    // you want to insert a non-database field (for example a counter or static image)
    $aColumns = array( 'salesperson_id',  'salesperson_name', 'commmission_per', 'commission_fix', 'inactive_flag');
    // Indexed column (used for fast and accurate table cardinality)
    $sIndexColumn = $aColumns[0];
    // DB table to use
    $sTable = "00000_mst_salesperson";
     
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
            }else if ($aColumns[$i] == 'salesperson_id') {
                // General output
                $row[] = $counter++;
                 
            }/*elseif ($aColumns[$i] == 'country_id') {
                $country = $this->country_model->getCountryByCountryId($aRow[$aColumns[$i]]);
                $row[] = $country->country_name;
            } */elseif ($aColumns[$i] != ' ') {
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

    public function addsaleman(){
        $field = array(
            'salesperson_name'=>$this->input->post('salesperson_name'),
            //'employee_id'=>$this->input->post('employee_id'),
            'commmission_per'=>$this->input->post('commmission_per'),
            'commission_fix'=>$this->input->post('commission_fix'),
            'inactive_flag'=>$this->input->post('inactive_flag')
            );
        $this->db->insert('00000_mst_salesperson', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }


    public function editsaleman(){
        $id = $this->input->get('salesperson_id');
        $this->db->where('salesperson_id', $id);
        $query = $this->db->get('00000_mst_salesperson');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function updatesaleman(){
        try{
            $id = $this->input->post('salesperson_id');
            $field = array(
	           'salesperson_name'=>$this->input->post('salesperson_name'),
	            //'employee_id'=>$this->input->post('employee_id'),
	            'commmission_per'=>$this->input->post('commmission_per'),
	            'commission_fix'=>$this->input->post('commission_fix'),
	            'inactive_flag'=>$this->input->post('inactive_flag')
	            );
            $this->db->where('salesperson_id', $id);
            return $this->db->update('00000_mst_salesperson', $field);
        }catch(Exception $e){
            return false;
        }
    }


     function deletesaleman(){
    $id = $this->input->get('salesperson_id');
    $this->db->where('salesperson_id', $id);
    $this->db->delete('00000_mst_salesperson');
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }



}
?>