<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

    public function index() {
        $this->load->model('user_model');
        $this->load->model('product_model');
        $this->load->model('project_model');

        $data['session_data'] =  $this->user_model->getLoginSession();
        $data['pcount'] = $this->project_model->as_array()->count_rows();
        $data['ccount'] = $this->product_model->where(array('Pcategory'=>2))->as_array()->count_rows();
        $data['mcount'] = $this->product_model->where(array('Pcategory'=>1))->as_array()->count_rows();
        $data['ocount'] = $this->product_model->where(array('Pcategory'=>3))->as_array()->count_rows();

        $this->load->view('admin/index', $data);
    }

}

?>