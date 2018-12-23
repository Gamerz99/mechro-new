<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

    public function index() {
        $this->load->library(array('session'));
        if($this->session->userdata('login_data'))
        {
            $session_data = $this->session->userdata('login_data');
        }
        else
        {
            redirect('user/sighIn');
        }
        $this->load->model('user_model');
        $data['session_data'] =  $this->user_model->getLoginSession();

        $this->load->view('admin/index', $data);
    }

}

?>