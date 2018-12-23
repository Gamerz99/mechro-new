<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller {

    public function index() {
        $this->load->model('about_model');

        $data['bords'] = $this->about_model->where(array('Stat'=>2))->get_all();
        $this->load->view('home/about', $data);
    }
}

?>