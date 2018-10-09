<?php

class Season extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('season_model');
    }


public   function index(){

    $data =  array();
       $datass =  array();
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('country', 'Country Name', 'required|min_length[0]|max_length[9]');

        //Validating Name Field
        $this->form_validation->set_rules('state', 'State Name', 'required|min_length[0]|max_length[9]');

        //Validating Name Field
        $this->form_validation->set_rules('city_name', 'City Name', 'required|min_length[3]|max_length[15]');

        //Validating Email Field
        $this->form_validation->set_rules('city_sht_name', 'Country Short Name', 'required|min_length[1]|max_length[15]');

       
       $data['countries'] = $this->country_model->getCountries();
       /*$data['countries'] = $this->state_model->getState_list();*/

        if ($this->form_validation->run() == FALSE) {
             $this->load->view('header');
            $this->load->view('aside');
            $this->load->view('pages/forms/add_season', $data);
            //$this->load->view('insert_view');
        } else {
            //Setting values for tabel columns

            $city = array(
                'city_name' => $this->input->post('city_name'),
                'city_sht_name' => $this->input->post('city_sht_name'),
                'inactive_flag' => $this->input->post('inactive_flag'),
               'country_id' => $this->input->post('country'),
               'state_id' => $this->input->post('state'),
               
            );

            //Transfering data to Model
            $this->city_model->city_insert($city);
            $city['message'] = 'Data Inserted Successfully';
    
       // echo "This";
        $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/forms/add_season', $season);
    }
}

public   function season_list(){
       // echo "This";
        $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/tables/season_list');
    }


// this function shows the drop down menu of Country with reference to state
public function get_state()
{
  $country_id = $this->input->post('country_id');
  $state = $this->state_model->get_state($country_id);
  if (count($state)>0)
   {
      $pro_select_box = '';
      $pro_select_box .= '<option value = "">Select State</option>';
      foreach ($state as $state) {
        $pro_select_box .= '<option value="'.$state->state_id.'">'.$state->state_name.'</option>';
      }
      echo json_encode($pro_select_box);
  }
}

public     function city_list() {
            $id = $this->uri->segment(3);
            $data =  array();
            $data['countries'] = $this->country_model->getCountries();
             $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/tables/city_list', $data);
}



public function showAllcity(){
    $output = $this->city_model->showAllcity();
     
    // Flags so I can encode html code in json for styling
    echo json_encode($output, JSON_HEX_QUOT | JSON_HEX_TAG);
  }


  public function addcity(){
    $result = $this->city_model->addcity();
    $msg['success'] = false;
    $msg['type'] = 'add';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }


  public function editcity(){
    $result = $this->city_model->editcity();
    echo json_encode($result);
  }

  public function updatecity(){
    $result = $this->city_model->updatecity();
    $msg['success'] = false;
    $msg['type'] = 'update';
    if($result){
      $msg['success'] = true;
    }
    echo json_encode($msg);
  }


   public function deletecity(){
    $msg['success'] = $this->city_model->deletecity();
    echo json_encode($msg);
  }


}
?>