<?php

class term_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }


// For Add Term Tabele
 function add_term($data){
 //Inserting in Table(Credit) of Database(travel) 
       $this->db->insert('00000_mst_terms_condition', $data);   
    }


    // Fetching Term Name from Term in ADD Season As a drop down and inherit in Add Term details List
    public function getTerms()
    {
        $sql="SELECT * from 00000_mst_terms_condition";
        $result=$this->db->query($sql);
        return $result->result();
    }
// Fetching Term Name from Term in ADD Season As a drop down and inherit in TErm Details List
    public function get_Term_Details()
    {
        $sql="SELECT * from 00000_mst_terms_condition INNER JOIN 00000_mst_terms_condition_detail ON 00000_mst_terms_condition.term_cond_id=00000_mst_terms_condition_detail.term_cond_id";
        $result=$this->db->query($sql);
        return $result->result();
    }




// this function shows the drop down menu of Country with reference to state in Add City
    public function get_term($term_cond_id)
    {
        $query = $this->db->get_where('00000_mst_terms_condition_detail', array('term_cond_id' => $term_cond_id));
        return $query->result();
    }

// this function calls in Season As Show term in season model
    public function gettermBytermId($term_cond_id)
{
    $sql="SELECT term_cond_desc FROM 00000_mst_terms_condition WHERE term_cond_id = " . $term_cond_id;
    //$this->db->insert('00000_mst_city', $app_id);
    $result=$this->db->query($sql);
    return $result->row();
}

// This function calls in Season As Show Term Details detail in season model
             function getdetailBydetailId($term_cond_det_id){
                $this->db->select('term_cond_det_desc');
                $this->db->from('00000_mst_terms_condition_detail');
                $this->db->where('term_cond_det_id', $term_cond_det_id);
                $query = $this->db->get();
                $result = $query->row();
                return $result;
            }





// Fetch in Term Details as Term List
    public function getTerm_list()
    {
        $result=$this->db->where('inactive_flag', ACTIVE)->get("00000_mst_terms_condition");
        return $result->result();
    }

    // For Add Term Detail Table
 function add_term_det($data){
 //Inserting in Table(Credit) of Database(travel) 
       $this->db->insert('00000_mst_terms_condition_detail', $data);   
    }


    public function showAllterm(){
    // Array of database columns which should be read and sent back to DataTables. Use a space where
    // you want to insert a non-database field (for example a counter or static image)
    $aColumns = array( 'term_cond_det_id', 'term_cond_id', 'term_cond_det_desc', 'inactive_flag');
    // Indexed column (used for fast and accurate table cardinality)
    $sIndexColumn = $aColumns[0];
    // DB table to use
    $sTable = "00000_mst_terms_condition_detail";
     
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
            }else if ($aColumns[$i] == 'term_cond_det_id') {
                // General output
                $row[] = $counter++;
                 
            }elseif ($aColumns[$i] == 'term_cond_id') {
                $term_cond_desc = $this->getTermByTermId($aRow[$aColumns[$i]]);
                $row[] = $term_cond_desc->term_cond_desc;
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

    public function addterm(){
        $field = array(
                 'term_cond_id'=>$this->input->post('term_cond_id'),
                'term_cond_det_desc'=>$this->input->post('term_cond_det_desc'),
                'inactive_flag'=>$this->input->post('inactive_flag')
            );
        $this->db->insert('00000_mst_terms_condition_detail', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }


    public function editterm(){
        $id = $this->input->get('term_cond_det_id');
        $this->db->where('term_cond_det_id', $id);
        $query = $this->db->get('00000_mst_terms_condition_detail');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function updateterm(){
        try{
            $id = $this->input->post('term_cond_det_id');
            $field = array(
            'term_cond_id'=>$this->input->post('term_cond_id'),
                'term_cond_det_desc'=>$this->input->post('term_cond_det_desc'),
                'inactive_flag'=>$this->input->post('inactive_flag')
            );
            $this->db->where('term_cond_det_id', $id);
            return $this->db->update('00000_mst_terms_condition_detail', $field);
        }catch(Exception $e){
            return false;
        }
    }


     function deleteterm(){
    $id = $this->input->get('term_cond_det_id');
    $this->db->where('term_cond_det_id', $id);
    $this->db->delete('00000_mst_terms_condition_detail');
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }



}
?>