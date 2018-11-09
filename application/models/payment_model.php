<?php

class payment_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
// For Add Payment Terms Tabele
 function add_payment($data){
 //Inserting in Table(Credit) of Database(travel) 
       $this->db->insert('00000_mst_payment_terms', $data);
    }


    // Fetch Payment in Client Table
    function fetch_payment()
 {
  $this->db->order_by("pay_term_desc", "ASC");
  $this->db->where("inactive_flag", ACTIVE);
  $query = $this->db->get("00000_mst_payment_terms");
  return $query->result();
 }

 // This function calls in Client As Show payment Details detail in Client model
             function getpaymentBypaymentId($pay_terms_id){
                $this->db->select('pay_term_desc');
                $this->db->from('00000_mst_payment_terms');
                $this->db->where('pay_terms_id', $pay_terms_id);
                $query = $this->db->get();
                $result = $query->row();
                return $result;
            }



    public  function showAllpayment(){
    /*$this->db->order_by('pay_terms_id', 'desc');
    $query = $this->db->get('00000_mst_payment_terms');
    if($query->num_rows() > 0){
      return $query->result();
    }else{
      return false;
    }*/


    // Array of database columns which should be read and sent back to DataTables. Use a space where
    // you want to insert a non-database field (for example a counter or static image)
    $aColumns = array( 'pay_terms_id', 'pay_term_desc', 'note', 'inactive_flag');
    // Indexed column (used for fast and accurate table cardinality)
    $sIndexColumn = $aColumns[0];
    // DB table to use
    $sTable = "00000_mst_payment_terms";
     
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
            }else if ($aColumns[$i] == 'pay_terms_id') {
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

  public function addpayment(){
    $field = array(
      'pay_term_desc'=>$this->input->post('pay_term_desc'),
      'note'=>$this->input->post('note'),
      'inactive_flag'=>$this->input->post('inactive_flag')
      );
    $this->db->insert('00000_mst_payment_terms', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

  public function editpayment(){
    $id = $this->input->get('pay_terms_id');
    $this->db->where('pay_terms_id', $id);
    $query = $this->db->get('00000_mst_payment_terms');
    if($query->num_rows() > 0){
      return $query->row();
    }else{
      return false;
    }
  }

  public function updatepayment(){
    $id = $this->input->post('pay_terms_id');
    $field = array(
    'pay_term_desc'=>$this->input->post('pay_term_desc'),
      'note'=>$this->input->post('note'),
      'inactive_flag'=>$this->input->post('inactive_flag')
    );
    $this->db->where('pay_terms_id', $id);
    $this->db->update('00000_mst_payment_terms', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

  function deletepayment(){
    $id = $this->input->get('pay_terms_id');
    $this->db->where('pay_terms_id', $id);
    $this->db->delete('00000_mst_payment_terms');
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

//end Pyament Table
}
?>