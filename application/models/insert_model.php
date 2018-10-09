<?php

class insert_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    // For Country Tabele
 function form_insert($data){
 //Inserting in Table(Country) of Database(travel) 
       $this->db->insert('00000_mst_country', $data);   
    }

   // Function To Fetch All Country Record
      

// Function to Delete selected record from table name Country.
    function delete_country_id($id){
$this->db->where('country_id', $id);
$this->db->delete('00000_mst_country');
}

// End Country Table






// For State Tabele
function state_insert($state){
 //Inserting in Table(Country) of Database(travel) 
       $this->db->insert('00000_mst_state', $state);
       
    }

// Fetch in State as Country List
    public function getCountries_list()
    {
        $sql="SELECT country_name, country_id from 00000_mst_country";
        //$this->db->insert('00000_mst_city', $app_id);
        $result=$this->db->query($sql);
        return $result->result();
    }


     // Fetching Country Name from Countries in ADD City As a drop down and inherit in States List
    public function getCountries()
    {
        $sql="SELECT * from 00000_mst_country INNER JOIN 00000_mst_state ON 00000_mst_country.country_id=00000_mst_state.country_id";
        $result=$this->db->query($sql);
        return $result->result();
    }

// this function shows the drop down menu of Country with reference to state
    public function get_state($country_id)
    {
        $query = $this->db->get_where('00000_mst_state', array('country_id' => $country_id ));
        return $query->result();
    }


// for Country Update Modal

            public function showAllcountry(){
    // Array of database columns which should be read and sent back to DataTables. Use a space where
    // you want to insert a non-database field (for example a counter or static image)
    $aColumns = array( 'country_id', 'country_name', 'country_sht_name', 'inactive_flag');
    // Indexed column (used for fast and accurate table cardinality)
    $sIndexColumn = $aColumns[0];
    // DB table to use
    $sTable = "00000_mst_country";
     
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
            if ($aColumns[$i] == "DBcol1") {
                $row[] = $aRow[$aColumns[$i]] != '' ? $aRow[$aColumns[$i]] : "N/A";
            } else if ($aColumns[$i] == "DBcol4") {
                $row[] = "<textarea id='notes" . $dbID . "' cols='40' rows='4' name='myname' wrap='virtual'>" . $aRow[$aColumns[$i]] . "</textarea>";
            } else if ($aColumns[$i] != ' ') {
                // General output
                $row[] = $aRow[$aColumns[$i]];
                 
            }
            // Formatted output
        }
        $row[] = "<button style='width:110px' onClick='saveChangesAction(\"" . $dbID . "\")' type='button' class='btn' aria-haspopup='true' aria-expanded='false'>Save Changes</button>";
        $row[] = "<div class='alert' role='alert' id='saveChangesResultDiv" . $dbID . "'  style='width:380px'></div>";
        $output['aaData'][] = $row;
    }
    return $output;
  }

    public function addcountry(){
        $field = array(
            'country_name'=>$this->input->post('country_name'),
            'country_sht_name'=>$this->input->post('country_sht_name'),
            'inactive_flag'=>$this->input->post('inactive_flag')
            );
        $this->db->insert('00000_mst_country', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }


    public function editcountry(){
        $id = $this->input->get('country_id');
        $this->db->where('country_id', $id);
        $query = $this->db->get('00000_mst_country');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function updatecountry(){
        $id = $this->input->post('country_id');
        $field = array(
        'country_name'=>$this->input->post('country_name'),
            'country_sht_name'=>$this->input->post('country_sht_name'),
            'inactive_flag'=>$this->input->post('inactive_flag')
        );
        $this->db->where('country_id', $id);
        $this->db->update('00000_mst_country', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }


     function deletecountry(){
    $id = $this->input->get('country_id');
    $this->db->where('country_id', $id);
    $this->db->delete('00000_mst_country');
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }




    // For Add Credit Tabele
 function add_credit($data){
 //Inserting in Table(Credit) of Database(travel) 
       $this->db->insert('00000_mst_credit_terms', $data);   
    }


    public function showAllcredit(){
    $this->db->order_by('credit_term_id', 'desc');
    $query = $this->db->get('00000_mst_credit_terms');
    if($query->num_rows() > 0){
      return $query->result();
    }else{
      return false;
    }
  }

  public function addcredit(){
    $field = array(
      'no_of_days'=>$this->input->post('no_of_days'),
      'credit_term_desc'=>$this->input->post('credit_term_desc'),
      'note'=>$this->input->post('note'),
     'inactive_flag'=>$this->input->post('inactive_flag')
      );
    $this->db->insert('00000_mst_credit_terms', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

  public function editcredit(){
    $id = $this->input->get('credit_term_id');
    $this->db->where('credit_term_id', $id);
    $query = $this->db->get('00000_mst_credit_terms');
    if($query->num_rows() > 0){
      return $query->row();
    }else{
      return false;
    }
  }

  public function updatecredit(){
    $id = $this->input->post('credit_term_id');
    $field = array(
    'no_of_days'=>$this->input->post('no_of_days'),
    'credit_term_desc'=>$this->input->post('credit_term_desc'),
    'note'=>$this->input->post('note'),
    'inactive_flag'=>$this->input->post('inactive_flag')
    );
    $this->db->where('credit_term_id', $id);
    $this->db->update('00000_mst_credit_terms', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

  function deletecredit(){
    $id = $this->input->get('credit_term_id');
    $this->db->where('credit_term_id', $id);
    $this->db->delete('00000_mst_credit_terms');
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }




// For Add Category Tabele
 function add_category($data){
 //Inserting in Table(Credit) of Database(travel) 
       $this->db->insert('00000_mst_category', $data);   
    }


    public function showAllcategory(){
    $this->db->order_by('category_id', 'desc');
    $query = $this->db->get('00000_mst_category');
    if($query->num_rows() > 0){
      return $query->result();
    }else{
      return false;
    }
  }

  public function addcategory(){
    $field = array(
      'category_desc'=>$this->input->post('category_desc'),
      'inactive_flag'=>$this->input->post('inactive_flag')
      );
    $this->db->insert('00000_mst_category', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

  public function editcategory(){
    $id = $this->input->get('category_id');
    $this->db->where('category_id', $id);
    $query = $this->db->get('00000_mst_category');
    if($query->num_rows() > 0){
      return $query->row();
    }else{
      return false;
    }
  }

  public function updatecategory(){
    $id = $this->input->post('category_id');
    $field = array(
    'category_desc'=>$this->input->post('category_desc'),
      'inactive_flag'=>$this->input->post('inactive_flag')
    );
    $this->db->where('category_id', $id);
    $this->db->update('00000_mst_category', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

  function deletecategory(){
    $id = $this->input->get('category_id');
    $this->db->where('category_id', $id);
    $this->db->delete('00000_mst_category');
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }


}

?>
