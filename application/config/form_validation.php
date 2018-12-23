<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'send_mail' => array(
        array('field' => 'name', 'label' => 'name', 'rules' => 'required'),
        array('field' => 'email', 'label' => 'email', 'rules' => 'required'),
        array('field' => 'comment', 'label' => 'comment', 'rules' => 'required')
    ),

    'save_supplier' => array(
        array('field' => 'name', 'label' => 'name', 'rules' => 'required'),
        array('field' => 'phone', 'label' => 'phone', 'rules' => 'required|numeric|min_length[10]|max_length[10]'),
        array('field' => 'email', 'label' => 'email'),
        array('field' => 'web', 'label' => 'web'),
        array('field' => 'address', 'label' => 'address'),
        array('field' => 'country', 'label' => 'country')
    ),

);
