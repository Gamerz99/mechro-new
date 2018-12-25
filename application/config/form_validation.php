<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'send_mail' => array(
        array('field' => 'name', 'label' => 'name', 'rules' => 'required'),
        array('field' => 'email', 'label' => 'email', 'rules' => 'required'),
        array('field' => 'comment', 'label' => 'comment', 'rules' => 'required')
    ),

    'save_gallery' => array(
        array('field' => 'Category', 'label' => 'Category', 'rules' => 'required')
    ),

    'save_project' => array(
        array('field' => 'Name', 'label' => 'Name', 'rules' => 'required'),
        array('field' => 'Description', 'label' => 'Description'),
        array('field' => 'Start_Date', 'label' => 'Start_Date')
    ),

    'save_machinery' => array(
        array('field' => 'Name', 'label' => 'Name', 'rules' => 'required'),
        array('field' => 'Description', 'label' => 'Description'),
        array('field' => 'Category', 'label' => 'Category','rules' => 'required'),
        array('field' => 'Pcategory', 'label' => 'Pcategory','rules' => 'required')
    ),

    'save_construction' => array(
        array('field' => 'Name', 'label' => 'Name', 'rules' => 'required'),
        array('field' => 'Description', 'label' => 'Description'),
        array('field' => 'Category', 'label' => 'Category','rules' => 'required'),
        array('field' => 'Pcategory', 'label' => 'Pcategory','rules' => 'required')
    ),

    'save_other' => array(
        array('field' => 'Name', 'label' => 'Name', 'rules' => 'required'),
        array('field' => 'Description', 'label' => 'Description'),
        array('field' => 'Category', 'label' => 'Category','rules' => 'required'),
        array('field' => 'Pcategory', 'label' => 'Pcategory','rules' => 'required')
    ),


);
