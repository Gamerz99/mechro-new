<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends MY_Controller {

    public function index() {
        $this->load->model('gallery_model');

        $data['machines'] = $this->gallery_model->where(array('Category'=>'Machine'))->get_all();
        $data['constructions'] = $this->gallery_model->where(array('Category'=>'Construction'))->get_all();
        $data['others'] = $this->gallery_model->where(array('Category'=>'Other'))->get_all();
        $this->load->view('home/gallery', $data);
    }
}

?>