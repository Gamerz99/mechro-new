<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function index() {
        $this->load->model('product_model');
        $this->load->model('project_model');
        $this->load->model('category_model');

        $data['products'] = $this->product_model->get_product(3);
        $data['category'] = $this->category_model->as_dropdown('Category')->get_all();
        $data['pcategory'] = $this->category_model->as_dropdown('Parent_id')->get_all();
        $data['comprojects'] = $this->project_model->get_complete_project(3);
        $data['goingprojects'] = $this->project_model->get_going_project(3);
        $data['count'] = $this->product_model->as_array()->count_rows();

        $this->load->view('home/index', $data);
    }


}

?>