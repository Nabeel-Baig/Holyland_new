<?php

class Category extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('category_model');
    }


// Function to insert Category
   public     function index() {

//Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('category_desc', 'Category Name', 'required|min_length[1]|max_length[50]');

      
        
        if ($this->form_validation->run() == FALSE) {
             $this->load->view('header');
            $this->load->view('aside');
            return $this->load->view('pages/forms/add_category');

            //$this->load->view('insert_view');
        } else {
            //Setting values for tabel columns
            $data = array(
                'category_desc' => $this->input->post('category_desc'),
                'inactive_flag' => $this->input->post('inactive_flag'), 
            );
            //Transfering data to Model
            $this->category_model->add_category($data);
            $data['message'] = 'Data Inserted Successfully';

            //loading view
             $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/forms/add_category', $data);
}
}

// Function to Fetch Category_list
public     function category_list() {
            //$id = $this->uri->segment(3);
            //$data['credits'] = $this->category_model->show_country();
            //var_dump($datas['single_country']);die;
            //echo json_encode($data);
             $this->load->view('header');
            $this->load->view('aside');
            $this->load->view('nav_bar');
            $this->load->view('pages/tables/category_list');
}

public function showAllcategory(){
   /* $result = $this->category_model->showAllcategory();
    echo json_encode($result);*/

    $output = $this->category_model->showAllcategory();
     
    // Flags so I can encode html code in json for styling
    echo json_encode($output, JSON_HEX_QUOT | JSON_HEX_TAG);
  }

  public function addcategory(){
    $result = $this->category_model->addcategory();
    $msg['success'] = false;
    $msg['type'] = 'add';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }

  public function editcategory(){
    $result = $this->category_model->editcategory();
    echo json_encode($result);
  }

  public function updatecategory(){
    $result = $this->category_model->updatecategory();
    $msg['success'] = false;
    $msg['type'] = 'update';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }

  public function deletecategory(){
    $result = $this->category_model->deletecategory();
    $msg['success'] = false;
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }

}

?>