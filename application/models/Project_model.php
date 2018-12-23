<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class project_model extends MY_Model {

    public function __construct() {
        $this->table = 'project';
        $this->primary_key = 'id';
        $this->return_as = "array";
        $this->db->order_by('Id','DESC');
        parent::__construct();
    }

    public function get_complete_project($limit){
        $this->db->select('*');
        $this->db->order_by('Id' ,'desc');
        $this->db->where('Stat = 1');
        $this->db->limit($limit, 0);
        $q = $this->db->get('project');
        $q = $q->result_array();
        return $q;
    }

    public function get_going_project($limit){
        $this->db->select('*');
        $this->db->order_by('Id' ,'desc');
        $this->db->where('Stat = 0');
        $this->db->limit($limit, 0);
        $q = $this->db->get('project');
        $q = $q->result_array();
        return $q;
    }

}
