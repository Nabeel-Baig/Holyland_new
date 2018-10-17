<?php

class Branch extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('branch_model');
    }



// Function to insert Branch
   public     function index() {

//Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('branch_name', 'Branch Name', 'required|min_length[1]|max_length[50]');

      
        
        if ($this->form_validation->run() == FALSE) {
             $this->load->view('header');
            $this->load->view('aside');
            return $this->load->view('pages/forms/add_branch');

            
        } else {
            //Setting values for tabel columns
            $data = array(
                'branch_name' => $this->input->post('branch_name'),
                'inactive_flag' => $this->input->post('inactive_flag'), 
            );
            //Transfering data to Model
            $this->branch_model->add_branch($data);
            $data['message'] = 'Data Inserted Successfully';

            //loading view
             $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/forms/add_branch', $data);
}
}

// Function to Fetch credit_list
public     function branch_list() {
            //$id = $this->uri->segment(3);
            //$data['credits'] = $this->branch_model->show_country();
            //var_dump($datas['single_country']);die;
            //echo json_encode($data);
             $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/tables/branch_list');
}

public function showAllbranch(){
    /*$result = $this->branch_model->showAllbranch();
    echo json_encode($result);*/

    $output = $this->branch_model->showAllbranch();
     
    // Flags so I can encode html code in json for styling
    echo json_encode($output, JSON_HEX_QUOT | JSON_HEX_TAG);
  }

  public function addbranch(){
    $result = $this->branch_model->addbranch();
    $msg['success'] = false;
    $msg['type'] = 'add';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }

  public function editbranch(){
    $result = $this->branch_model->editbranch();
    echo json_encode($result);
  }

  public function updatebranch(){
    $result = $this->branch_model->updatebranch();
    $msg['success'] = false;
    $msg['type'] = 'update';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }

  public function deletebranch(){
    $result = $this->branch_model->deletebranch();
    $msg['success'] = false;
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }




}
?>