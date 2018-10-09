<?php

class Term extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('term_model');
    }



public   function index(){

    //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('term_cond_desc', 'Term Name', 'required|min_length[1]|max_length[50]');

      
        
        if ($this->form_validation->run() == FALSE) {
             $this->load->view('header');
            $this->load->view('aside');
            return $this->load->view('pages/forms/add_term');

            //$this->load->view('insert_view');
        } else {
            //Setting values for tabel columns
            $data = array(
                'term_cond_desc' => $this->input->post('term_cond_desc'),
                'inactive_flag' => $this->input->post('inactive_flag'), 
            );
            //Transfering data to Model
            $this->term_model->add_term($data);
            $data['message'] = 'Data Inserted Successfully';

   
       // echo "This";
        $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/forms/add_term', $data);
    }
}

public   function add_term_det(){

    //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('term_cond_det_desc', 'Term Detail Name', 'required|min_length[1]|max_length[50]');

       $data =  array();

       $data['terms'] = $this->term_model->getTerm_list();
       //var_dump($data['terms']);die();
        
        if ($this->form_validation->run() == FALSE) {
             $this->load->view('header');
            $this->load->view('aside');
            return $this->load->view('pages/forms/add_term_det', $data);

            //$this->load->view('insert_view');
        } else {
            //Setting values for tabel columns
            $data = array(
                'term_cond_id' => $this->input->post('term_cond_id'),
                'term_cond_det_desc' => $this->input->post('term_cond_det_desc'),
                'inactive_flag' => $this->input->post('inactive_flag'), 
            );
            //Transfering data to Model
            $this->term_model->add_term_det($data);
            $data['message'] = 'Data Inserted Successfully';

   
       // echo "This";
        $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/forms/add_term_det', $data);
    }
}
public   function term_list(){
       // echo "This";
       $data['terms'] = $this->term_model->getTerm_list();
        $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/tables/term_list.php', $data);
    }

    public function showAllterm(){
    $output = $this->term_model->showAllterm();
     
    // Flags so I can encode html code in json for styling
    echo json_encode($output, JSON_HEX_QUOT | JSON_HEX_TAG);
  }


  public function addterm(){
    $result = $this->term_model->addterm();
    $msg['success'] = false;
    $msg['type'] = 'add';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }


  public function editterm(){
    $result = $this->term_model->editterm();
    echo json_encode($result);
  }

  public function updateterm(){
    $result = $this->term_model->updateterm();
    $msg['success'] = false;
    $msg['type'] = 'update';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }


   public function deleteterm(){
    $msg['success'] = $this->term_model->deleteterm();
    echo json_encode($msg);
  }


}
?>