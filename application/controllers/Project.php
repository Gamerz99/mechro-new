<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends MY_Controller {

    public function index() {
        $this->load->model('project_model');

        $data['comprojects'] = $this->project_model->get_complete_project(3);
        $data['goingprojects'] = $this->project_model->get_going_project(3);
        $data['complete'] = "";
        $data['ongoing'] = "active";

        $this->load->view('home/project', $data);
    }

    public function detail($id) {
        $this->load->model('project_model');

        $data['project'] = $this->project_model->get($id);

        $this->load->view('home/pdetail', $data);
    }


}

?>