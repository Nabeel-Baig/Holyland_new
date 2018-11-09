<?php

class Room extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('room_model');
    }


public   function index(){
//form Validation
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
     //Validating Name Field
        $this->form_validation->set_rules('room_type_name', 'Room Name', 'required|min_length[1]|max_length[255]');

        //Validating no_of_persons Button
        $this->form_validation->set_rules('no_of_persons', 'No of Person', 'required|min_length[0]|max_length[15]');

       
       
        if ($this->form_validation->run() == FALSE) {
             $this->load->view('header');
            $this->load->view('aside');
            return $this->load->view('pages/forms/add_room');

            //$this->load->view('insert_view');
        } else {
            //Setting values for tabel columns
            $data = array(
                'room_type_name' => $this->input->post('room_type_name'),
                //'arabic_name' => $this->input->post('arabic_name'),
                'no_of_persons' => $this->input->post('no_of_persons'),
                'note' => $this->input->post('note'),
                'inactive_flag' => $this->input->post('inactive_flag'),

               
            );
            //Transfering data to Model
            $this->room_model->room_insert($data);
            $data['message'] = 'Data Inserted Successfully';
            //Loading View


             $this->load->view('header');
            $this->load->view('aside');
            $this->load->view('pages/forms/add_room', $data);
        }
    }

public   function room_list(){
       // echo "This";
        $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/tables/room_list.php');
    }


public function showAllroom(){
    /*$result = $this->room_model->showAllroom();
    echo json_encode($result);*/

    $output = $this->room_model->showAllroom();
     
    // Flags so I can encode html code in json for styling
    echo json_encode($output, JSON_HEX_QUOT | JSON_HEX_TAG);
  }

  /*public function addroom(){
    $result = $this->room_model->addroom();
    $msg['success'] = false;
    $msg['type'] = 'add';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }*/

  public function editroom(){
    $result = $this->room_model->editroom();
    echo json_encode($result);
  }

  public function updateroom(){
    $result = $this->room_model->updateroom();
    $msg['success'] = false;
    $msg['type'] = 'update';
    /*echo "<pre>";
    print_r($result);*/
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }

  public function deleteroom(){
    $result = $this->room_model->deleteroom();
    $msg['success'] = false;
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }



 }
 ?>