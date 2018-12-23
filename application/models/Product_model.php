<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product_model extends MY_Model {

    public function __construct() {
        $this->table = 'products';
        $this->primary_key = 'id';
        $this->return_as = "array";
        parent::__construct();
    }

    public function get_product($limit){
        $this->db->select('*');
        $this->db->order_by('Id' ,'desc');
        $this->db->limit($limit, 0);
        $q = $this->db->get('products');
        $q = $q->result_array();
        return $q;

    }

}
