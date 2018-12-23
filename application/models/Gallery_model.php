<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gallery_model extends MY_Model {

    public function __construct() {
        $this->table = 'gallery';
        $this->primary_key = 'id';
        $this->return_as = "array";
        $this->db->order_by('Id','DESC');
        parent::__construct();
    }


}
