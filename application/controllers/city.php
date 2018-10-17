<?php

class City extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('country_model');
        $this->load->model('state_model');
        $this->load->model('city_model');
    }


public   function index(){
   //var_dump($this->input->post('country'));die;
        //$this->load->model('city_model','form_insert', TRUE);
        //Including validation library
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
//sadsadsad

       
       $data['countries'] = $this->country_model->get_Countries();
       /*$data['countries'] = $this->state_model->getState_list();*/

        if ($this->form_validation->run() == FALSE) {
             $this->load->view('header');
            $this->load->view('aside');
            $this->load->view('pages/forms/add_city', $data);
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
            //Loading View
             $this->load->view('header');
            $this->load->view('aside');
            $this->load->view('pages/forms/add_city', $city);
        }
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
            /*$id = $this->uri->segment(3);*/
            $data =  array();
            $data['countries'] = $this->country_model->getCountries();
             $this->load->view('header');
            $this->load->view('aside');
            //$this->load->view('nav_bar');
            $this->load->view('pages/tables/city_list', $data);
}


/*// Function to Delete selected record from database.
            function delete_city_id() {
            $id = $this->uri->segment(3);
            $this->city_model->delete_city_id($id);
      
            $this->city_list();
            }

*/


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