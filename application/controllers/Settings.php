<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends MY_Controller {

    public function category($msg=null) {
        if ($msg)
            $data['msg'] = $msg;
        $this->load->model('user_model');
        $this->load->model('category_model');

        $data['session_data'] = $this->user_model->getLoginSession();
        $data['categorys'] = $this->category_model->where(array('stat'=>1))->get_all();

        $this->load->view('settings/category', $data);
    }

    public function add_category($id = null) {
        $this->load->model('user_model');
        $data['session_data'] = $this->user_model->getLoginSession();
        $data['category'] = null;
        if ($id) {
            $this->load->model('category_model');
            $data['category'] = $this->category_model->where(array('id' => $id))->get();
        }
        $this->load->view('settings/add_category', $data);
    }

    public function save_category() {
        $message = 2;
        $id = $this->input->post('id');
        $this->load->library('form_validation');
        $data = $this->form_validation->remove_unknown_fields($this->input->post(), $this->form_validation->get_field_names('save_category'));
        $this->form_validation->set_data($data);
        if ($this->form_validation->run('save_category') != false) {
            $this->load->model('category_model');
            if ($id) {
                if ($this->category_model->update($data, $id)) {
                    $message = 1;
                }
            } else {
                $this->category_model->insert($data);
                $message = 1;
            }
        }
        redirect('settings/category/' . $message);
    }

    public function delete_category() {
        $this->load->model('user_model');
        $id = $this->input->post('id');
        $message = 2;
        if ($id) {
            $this->load->model('category_model');
            $this->category_model->update(array('stat' => 2),$id);
            $message = 1;
        }
        redirect('settings/category/' . $message);
    }


}
?>