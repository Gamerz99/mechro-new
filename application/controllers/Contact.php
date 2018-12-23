<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {

    public function index($msg= null) {
        if ($msg)
            $data['msg'] = $msg;
        $this->load->model('product_model');
        $this->load->model('project_model');
        $this->load->model('category_model');

        $data['products'] = $this->product_model->get_product(3);
        $data['category'] = $this->category_model->as_dropdown('Category')->get_all();
        $data['pcategory'] = $this->category_model->as_dropdown('Parent_id')->get_all();
        $data['comprojects'] = $this->project_model->get_complete_project(3);
        $data['goingprojects'] = $this->project_model->get_going_project(3);
        $data['count'] = $this->product_model->as_array()->count_rows();

        $this->load->view('home/contact', $data);
    }

    public function send_mail(){
        $message = "error";
        $this->load->library('form_validation');
        $data = $this->form_validation->remove_unknown_fields($this->input->post(), $this->form_validation->get_field_names('send_mail'));
        $this->form_validation->set_data($data);
        if ($this->form_validation->run('send_mail') != false) {
            $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

            if(!preg_match($email_exp,$data['email'])) {
                $message = "error";
                redirect('contact/index/' . $message);
            }

            $this->load->library('email');

            $this->email->from($data['email'], $data['name']);
            $this->email->to('mechrocom@gmail.com');

            $this->email->subject('Web site');
            $this->email->message($data['comment']);

            if($this->email->send()){
                $message = "success";
            }
        }
        redirect('contact/index/' . $message);
    }



}

?>