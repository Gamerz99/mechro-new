<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class All extends MY_Controller {

    public function index($page=1) {
        $this->load->model('product_model');
        $this->load->model('category_model');

        $rows_per_page = 9 ;
        $count = $this->product_model->count_rows();
        $offset =($page-1) * $rows_per_page;
        $data['start'] =($page-1)*$rows_per_page;
        $data['page'] = $page;
        $data['last']=ceil($count/$rows_per_page);

        $data['products'] = $this->product_model->get_page(null,$rows_per_page,$offset);
        $data['category'] = $this->category_model->as_dropdown('Category')->get_all();
        $data['pcategory'] = $this->category_model->as_dropdown('Parent_id')->get_all();

        $this->load->view('home/all', $data);
    }

    public function detail($id) {
        $this->load->model('product_model');
        $this->load->model('category_model');

        $data['product'] = $this->product_model->get($id);
        $data['category'] = $this->category_model->get( $data['product']['Category']);

        $this->load->view('home/mdetail', $data);
    }


}

?>