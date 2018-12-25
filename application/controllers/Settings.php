<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends MY_Controller {

    public function machinery($msg=null) {
        if ($msg)
            $data['msg'] = $msg;
        $this->load->model('user_model');
        $this->load->model('product_model');
        $this->load->model('category_model');

        $data['page']="Machinery";
        $data['session_data'] = $this->user_model->getLoginSession();
        $data['products'] = $this->product_model->where(array('Pcategory'=>1))->get_all();
        $data['category'] = $this->category_model->as_dropdown('Category')->get_all();

        $this->load->view('settings/machinery', $data);
    }

    public function add_machinery($id = null) {
        $this->load->model('product_model');
        $this->load->model('user_model');
        $this->load->model('category_model');

        $data['page']="Machinery";
        $data['session_data'] = $this->user_model->getLoginSession();
        $data['category'] = $this->category_model->where(array('Parent_id'=>1))->as_dropdown('Category')->get_all();
        $data['product'] = null;
        if ($id) {
            $data['product'] = $this->product_model->get($id);
        }
        $this->load->view('settings/add_machinery', $data);
    }

    public function save_machinery() {
        $message = 2;
        $id = $this->input->post('Id');
        $this->load->library('form_validation');
        $data = $this->form_validation->remove_unknown_fields($this->input->post(), $this->form_validation->get_field_names('save_machinery'));
        $this->form_validation->set_data($data);
        if ($this->form_validation->run('save_machinery') != false) {
            $this->load->model('product_model');
            $this->load->model('category_model');
            $category = $this->category_model->as_dropdown('Category')->get_all();

            if ($id) {
                $this->product_model->update($data, $id);
                if ($_FILES["Image"]["name"]) {
                    $img = $this->product_model->get($id);

                    if($img['Image']) {
                        unlink("products/". $category[$img['Category']] ."/". $img['Image']);
                    }
                    $config['upload_path'] = 'products/'. $category[$data['Category']].'/';
                    $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
                    $qFile_name = $id;
                    $type = $_FILES["Image"]["type"];
                    $type = explode('/', $type);
                    if ($type[1] == "jpeg")
                        $type[1] = 'jpg';

                    $qFile_name = $qFile_name . "." . $type[1];
                    $config['file_name'] = $qFile_name;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    $this->upload->do_upload('Image');

                    $data2 = array(
                        'Image' => $qFile_name
                    );
                    $this->product_model->update($data2, $id);
                }
                $message = 1;

            } else {
                $id = $this->product_model->insert($data);
                if ($_FILES["Image"]["name"]) {
                    $config['upload_path'] = 'products/'. $category[$data['Category']].'/';
                    $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
                    $qFile_name = $id;
                    $type = $_FILES["Image"]["type"];
                    $type = explode('/', $type);
                    if ($type[1] == "jpeg")
                        $type[1] = 'jpg';

                    $qFile_name = $qFile_name . "." . $type[1];
                    $config['file_name'] = $qFile_name;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    $this->upload->do_upload('Image');

                    $data2 = array(
                        'Image' => $qFile_name
                    );
                    $this->product_model->update($data2, $id);
                }
                $message = 1;
            }
        }
        redirect('settings/machinery/' . $message);
    }

    public function delete_machinery() {
        $id = $this->input->post('Id');
        $message = 2;
        if ($id) {
            $this->load->model('product_model');
            $this->load->model('category_model');
            $category = $this->category_model->as_dropdown('Category')->get_all();
            $img = $this->product_model->get($id);
            if($img['Image']) {
                unlink("products/". $category[$img['Category']] ."/". $img['Image']);
            }
            $this->product_model->delete($id);
            $message = 1;
        }
        redirect('settings/machinery/' . $message);
    }


    public function construction($msg=null) {
        if ($msg)
            $data['msg'] = $msg;
        $this->load->model('user_model');
        $this->load->model('product_model');
        $this->load->model('category_model');

        $data['page']="Construction";
        $data['session_data'] = $this->user_model->getLoginSession();
        $data['products'] = $this->product_model->where(array('Pcategory'=>2))->get_all();
        $data['category'] = $this->category_model->as_dropdown('Category')->get_all();

        $this->load->view('settings/construction', $data);
    }

    public function add_construction($id = null) {
        $this->load->model('product_model');
        $this->load->model('user_model');
        $this->load->model('category_model');

        $data['page']="Construction";
        $data['session_data'] = $this->user_model->getLoginSession();
        $data['category'] = $this->category_model->where(array('Parent_id'=>2))->as_dropdown('Category')->get_all();
        $data['product'] = null;
        if ($id) {
            $data['product'] = $this->product_model->get($id);
        }
        $this->load->view('settings/add_construction', $data);
    }

    public function save_construction() {
        $message = 2;
        $id = $this->input->post('Id');
        $this->load->library('form_validation');
        $data = $this->form_validation->remove_unknown_fields($this->input->post(), $this->form_validation->get_field_names('save_construction'));
        $this->form_validation->set_data($data);
        if ($this->form_validation->run('save_construction') != false) {
            $this->load->model('product_model');
            $this->load->model('category_model');
            $category = $this->category_model->as_dropdown('Category')->get_all();

            if ($id) {
                $this->product_model->update($data, $id);
                if ($_FILES["Image"]["name"]) {
                    $img = $this->product_model->get($id);

                    if($img['Image']) {
                        unlink("products/". $category[$img['Category']] ."/". $img['Image']);
                    }
                    $config['upload_path'] = 'products/'. $category[$data['Category']].'/';
                    $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
                    $qFile_name = $id;
                    $type = $_FILES["Image"]["type"];
                    $type = explode('/', $type);
                    if ($type[1] == "jpeg")
                        $type[1] = 'jpg';

                    $qFile_name = $qFile_name . "." . $type[1];
                    $config['file_name'] = $qFile_name;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    $this->upload->do_upload('Image');

                    $data2 = array(
                        'Image' => $qFile_name
                    );
                    $this->product_model->update($data2, $id);
                }
                $message = 1;

            } else {
                $id = $this->product_model->insert($data);
                if ($_FILES["Image"]["name"]) {
                    $config['upload_path'] = 'products/'. $category[$data['Category']].'/';
                    $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
                    $qFile_name = $id;
                    $type = $_FILES["Image"]["type"];
                    $type = explode('/', $type);
                    if ($type[1] == "jpeg")
                        $type[1] = 'jpg';

                    $qFile_name = $qFile_name . "." . $type[1];
                    $config['file_name'] = $qFile_name;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    $this->upload->do_upload('Image');

                    $data2 = array(
                        'Image' => $qFile_name
                    );
                    $this->product_model->update($data2, $id);
                }
                $message = 1;
            }
        }
        redirect('settings/construction/' . $message);
    }

    public function delete_construction() {
        $id = $this->input->post('Id');
        $message = 2;
        if ($id) {
            $this->load->model('product_model');
            $this->load->model('category_model');
            $category = $this->category_model->as_dropdown('Category')->get_all();
            $img = $this->product_model->get($id);
            if($img['Image']) {
                unlink("products/". $category[$img['Category']] ."/". $img['Image']);
            }
            $this->product_model->delete($id);
            $message = 1;
        }
        redirect('settings/construction/' . $message);
    }

    public function other($msg=null) {
        if ($msg)
            $data['msg'] = $msg;
        $this->load->model('user_model');
        $this->load->model('product_model');
        $this->load->model('category_model');

        $data['page']="Other";
        $data['session_data'] = $this->user_model->getLoginSession();
        $data['products'] = $this->product_model->where(array('Pcategory'=>3))->get_all();
        $data['category'] = $this->category_model->as_dropdown('Category')->get_all();

        $this->load->view('settings/other', $data);
    }

    public function add_other($id = null) {
        $this->load->model('product_model');
        $this->load->model('user_model');
        $this->load->model('category_model');

        $data['page']="Other";
        $data['session_data'] = $this->user_model->getLoginSession();
        $data['category'] = $this->category_model->where(array('Parent_id'=>3))->as_dropdown('Category')->get_all();
        $data['product'] = null;
        if ($id) {
            $data['product'] = $this->product_model->get($id);
        }
        $this->load->view('settings/add_other', $data);
    }

    public function save_other() {
        $message = 2;
        $id = $this->input->post('Id');
        $this->load->library('form_validation');
        $data = $this->form_validation->remove_unknown_fields($this->input->post(), $this->form_validation->get_field_names('save_other'));
        $this->form_validation->set_data($data);
        if ($this->form_validation->run('save_other') != false) {
            $this->load->model('product_model');
            $this->load->model('category_model');
            $category = $this->category_model->as_dropdown('Category')->get_all();

            if ($id) {
                $this->product_model->update($data, $id);
                if ($_FILES["Image"]["name"]) {
                    $img = $this->product_model->get($id);

                    if($img['Image']) {
                        unlink("products/". $category[$img['Category']] ."/". $img['Image']);
                    }
                    $config['upload_path'] = 'products/'. $category[$data['Category']].'/';
                    $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
                    $qFile_name = $id;
                    $type = $_FILES["Image"]["type"];
                    $type = explode('/', $type);
                    if ($type[1] == "jpeg")
                        $type[1] = 'jpg';

                    $qFile_name = $qFile_name . "." . $type[1];
                    $config['file_name'] = $qFile_name;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    $this->upload->do_upload('Image');

                    $data2 = array(
                        'Image' => $qFile_name
                    );
                    $this->product_model->update($data2, $id);
                }
                $message = 1;

            } else {
                $id = $this->product_model->insert($data);
                if ($_FILES["Image"]["name"]) {
                    $config['upload_path'] = 'products/'. $category[$data['Category']].'/';
                    $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
                    $qFile_name = $id;
                    $type = $_FILES["Image"]["type"];
                    $type = explode('/', $type);
                    if ($type[1] == "jpeg")
                        $type[1] = 'jpg';

                    $qFile_name = $qFile_name . "." . $type[1];
                    $config['file_name'] = $qFile_name;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    $this->upload->do_upload('Image');

                    $data2 = array(
                        'Image' => $qFile_name
                    );
                    $this->product_model->update($data2, $id);
                }
                $message = 1;
            }
        }
        redirect('settings/other/' . $message);
    }

    public function delete_other() {
        $id = $this->input->post('Id');
        $message = 2;
        if ($id) {
            $this->load->model('product_model');
            $this->load->model('category_model');
            $category = $this->category_model->as_dropdown('Category')->get_all();
            $img = $this->product_model->get($id);
            if($img['Image']) {
                unlink("products/". $category[$img['Category']] ."/". $img['Image']);
            }
            $this->product_model->delete($id);
            $message = 1;
        }
        redirect('settings/other/' . $message);
    }

    public function gallery($msg=null) {
        if ($msg)
            $data['msg'] = $msg;
        $this->load->model('user_model');
        $this->load->model('gallery_model');

        $data['session_data'] = $this->user_model->getLoginSession();
        $data['gallerys'] = $this->gallery_model->get_all();

        $this->load->view('settings/gallery', $data);
    }

    public function add_gallery($id = null) {
        $this->load->model('gallery_model');
        $this->load->model('user_model');
        $data['session_data'] = $this->user_model->getLoginSession();
        $data['category'] = array(''=>'--Select--','Machine'=>'Machinery','Construction'=>'Construction','Other'=>'Other');
        $data['gallery'] = null;
        if ($id) {
            $data['gallery'] = $this->gallery_model->get($id);
        }
        $this->load->view('settings/add_gallery', $data);
    }

    public function save_gallery() {
        $message = 2;
        $id = $this->input->post('Id');
        $this->load->library('form_validation');
        $data = $this->form_validation->remove_unknown_fields($this->input->post(), $this->form_validation->get_field_names('save_gallery'));
        $this->form_validation->set_data($data);
        if ($this->form_validation->run('save_gallery') != false) {
            $this->load->model('gallery_model');
            if ($id) {
                $this->gallery_model->update($data, $id);
                    if ($_FILES["Image"]["name"]) {
                        $img = $this->gallery_model->get($id);
                        if($img['Image']) {
                            unlink("gallery/" . $img['Image']);
                        }
                        $config['upload_path'] = 'gallery/';
                        $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
                        $qFile_name = 'gallery_' . $id;
                        $type = $_FILES["Image"]["type"];
                        $type = explode('/', $type);
                        if ($type[1] == "jpeg")
                            $type[1] = 'jpg';

                        $qFile_name = $qFile_name . "." . $type[1];
                        $config['file_name'] = $qFile_name;
                        $this->load->library('upload', $config);
                        $this->upload->initialize($config);
                        $this->upload->do_upload('Image');

                        $data2 = array(
                            'Image' => $qFile_name
                        );
                        $this->gallery_model->update($data2, $id);
                    }
                    $message = 1;

            } else {
                $id = $this->gallery_model->insert($data);
                if ($_FILES["Image"]["name"]) {
                    $config['upload_path'] = 'gallery/';
                    $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
                    $qFile_name = 'gallery_' . $id;
                    $type = $_FILES["Image"]["type"];
                    $type = explode('/', $type);
                    if ($type[1] == "jpeg")
                        $type[1] = 'jpg';

                    $qFile_name = $qFile_name . "." . $type[1];
                    $config['file_name'] = $qFile_name;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    $this->upload->do_upload('Image');

                    $data2 = array(
                        'Image' => $qFile_name
                    );
                    $this->gallery_model->update($data2, $id);
                }
                $message = 1;
            }
        }
        redirect('settings/gallery/' . $message);
    }

    public function delete_gallery() {
        $id = $this->input->post('Id');
        $message = 2;
        if ($id) {
            $this->load->model('gallery_model');
            $img = $this->gallery_model->get($id);
            if($img['Image']) {
                unlink("gallery/" . $img['Image']);
            }
            $this->gallery_model->delete($id);
            $message = 1;
        }
        redirect('settings/gallery/' . $message);
    }

    public function project($msg=null) {
        if ($msg)
            $data['msg'] = $msg;
        $this->load->model('user_model');
        $this->load->model('project_model');

        $data['session_data'] = $this->user_model->getLoginSession();
        $data['projects'] = $this->project_model->get_all();

        $this->load->view('settings/project', $data);
    }

    public function add_project($id = null) {
        $this->load->model('project_model');
        $this->load->model('user_model');
        $data['session_data'] = $this->user_model->getLoginSession();
        $data['project'] = null;
        if ($id) {
            $data['project'] = $this->project_model->get($id);
        }
        $this->load->view('settings/add_project', $data);
    }

    public function save_project() {
        $message = 2;
        $id = $this->input->post('Id');
        $this->load->library('form_validation');
        $data = $this->form_validation->remove_unknown_fields($this->input->post(), $this->form_validation->get_field_names('save_project'));
        $this->form_validation->set_data($data);
        if ($this->form_validation->run('save_project') != false) {
            $this->load->model('project_model');
            if ($id) {
                $this->project_model->update($data, $id);
                if ($_FILES["Image1"]["name"]) {
                    $img = $this->project_model->get($id);
                    if($img['Image1']) {
                        unlink("projects/" . $img['Image1']);
                    }
                    $config['upload_path'] = 'projects/';
                    $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
                    $qFile_name = 'project_' . $id . '_1';
                    $type = $_FILES["Image1"]["type"];
                    $type = explode('/', $type);
                    if ($type[1] == "jpeg")
                        $type[1] = 'jpg';

                    $qFile_name = $qFile_name . "." . $type[1];
                    $config['file_name'] = $qFile_name;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    $this->upload->do_upload('Image1');

                    $data2 = array(
                        'Image1' => $qFile_name
                    );
                    $this->project_model->update($data2, $id);
                }
                if ($_FILES["Image2"]["name"]) {
                    $img = $this->project_model->get($id);
                    if($img['Image2']) {
                        unlink("projects/" . $img['Image2']);
                    }
                    $config['upload_path'] = 'projects/';
                    $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
                    $qFile_name = 'project_' . $id . '_2';
                    $type = $_FILES["Image2"]["type"];
                    $type = explode('/', $type);
                    if ($type[1] == "jpeg")
                        $type[1] = 'jpg';

                    $qFile_name = $qFile_name . "." . $type[1];
                    $config['file_name'] = $qFile_name;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    $this->upload->do_upload('Image2');

                    $data2 = array(
                        'Image2' => $qFile_name
                    );
                    $this->project_model->update($data2, $id);
                }
                if ($_FILES["Image3"]["name"]) {
                    $img = $this->project_model->get($id);
                    if($img['Image3']) {
                        unlink("projects/" . $img['Image3']);
                    }
                    $config['upload_path'] = 'projects/';
                    $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
                    $qFile_name = 'project_' . $id . '_3';
                    $type = $_FILES["Image3"]["type"];
                    $type = explode('/', $type);
                    if ($type[1] == "jpeg")
                        $type[1] = 'jpg';

                    $qFile_name = $qFile_name . "." . $type[1];
                    $config['file_name'] = $qFile_name;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    $this->upload->do_upload('Image3');

                    $data2 = array(
                        'Image3' => $qFile_name
                    );
                    $this->project_model->update($data2, $id);
                }
                if ($_FILES["Image4"]["name"]) {
                    $img = $this->project_model->get($id);
                    if($img['Image4']) {
                        unlink("projects/" . $img['Image4']);
                    }
                    $config['upload_path'] = 'projects/';
                    $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
                    $qFile_name = 'project_' . $id . '_4';
                    $type = $_FILES["Image4"]["type"];
                    $type = explode('/', $type);
                    if ($type[1] == "jpeg")
                        $type[1] = 'jpg';

                    $qFile_name = $qFile_name . "." . $type[1];
                    $config['file_name'] = $qFile_name;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    $this->upload->do_upload('Image4');

                    $data2 = array(
                        'Image4' => $qFile_name
                    );
                    $this->project_model->update($data2, $id);
                }
                $message = 1;

            } else {
                $id = $this->project_model->insert($data);
                if ($_FILES["Image1"]["name"]) {
                    $config['upload_path'] = 'projects/';
                    $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
                    $qFile_name = 'project_' . $id. '_1';
                    $type = $_FILES["Image1"]["type"];
                    $type = explode('/', $type);
                    if ($type[1] == "jpeg")
                        $type[1] = 'jpg';

                    $qFile_name = $qFile_name . "." . $type[1];
                    $config['file_name'] = $qFile_name;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    $this->upload->do_upload('Image1');

                    $data2 = array(
                        'Image1' => $qFile_name
                    );
                    $this->project_model->update($data2, $id);
                }
                if ($_FILES["Image2"]["name"]) {
                    $config['upload_path'] = 'projects/';
                    $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
                    $qFile_name = 'project_' . $id. '_2';
                    $type = $_FILES["Image2"]["type"];
                    $type = explode('/', $type);
                    if ($type[1] == "jpeg")
                        $type[1] = 'jpg';

                    $qFile_name = $qFile_name . "." . $type[1];
                    $config['file_name'] = $qFile_name;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    $this->upload->do_upload('Image2');

                    $data2 = array(
                        'Image2' => $qFile_name
                    );
                    $this->project_model->update($data2, $id);
                }
                if ($_FILES["Image3"]["name"]) {
                    $config['upload_path'] = 'projects/';
                    $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
                    $qFile_name = 'project_' . $id. '_3';
                    $type = $_FILES["Image3"]["type"];
                    $type = explode('/', $type);
                    if ($type[1] == "jpeg")
                        $type[1] = 'jpg';

                    $qFile_name = $qFile_name . "." . $type[1];
                    $config['file_name'] = $qFile_name;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    $this->upload->do_upload('Image3');

                    $data2 = array(
                        'Image3' => $qFile_name
                    );
                    $this->project_model->update($data2, $id);
                }
                if ($_FILES["Image4"]["name"]) {
                    $config['upload_path'] = 'projects/';
                    $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
                    $qFile_name = 'project_' . $id. '_4';
                    $type = $_FILES["Image4"]["type"];
                    $type = explode('/', $type);
                    if ($type[1] == "jpeg")
                        $type[1] = 'jpg';

                    $qFile_name = $qFile_name . "." . $type[1];
                    $config['file_name'] = $qFile_name;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    $this->upload->do_upload('Image4');

                    $data2 = array(
                        'Image4' => $qFile_name
                    );
                    $this->project_model->update($data2, $id);
                }
                $message = 1;
            }
        }
        redirect('settings/project/' . $message);
    }

    public function delete_project() {
        $id = $this->input->post('Id');
        $message = 2;
        if ($id) {
            $this->load->model('project_model');
            $img = $this->project_model->get($id);
            if($img['Image1']) {
                unlink("projects/" . $img['Image1']);
            }
            if($img['Image2']) {
                unlink("projects/" . $img['Image2']);
            }
            if($img['Image3']) {
                unlink("projects/" . $img['Image3']);
            }
            if($img['Image4']) {
                unlink("projects/" . $img['Image4']);
            }
            $this->project_model->delete($id);
            $message = 1;
        }
        redirect('settings/project/' . $message);
    }

    public function complete_project($id = null) {
        $message = 2;
        if ($id) {
            $this->load->model('project_model');
            $this->project_model->update( array('Stat' => 1,'End_Date'=> date('Y-m-d h:i:s')),$id);
            $message = 1;
        }
        redirect('settings/project/' . $message);
    }

    public function incomplete_project($id = null) {
        $message = 2;
        if ($id) {
            $this->load->model('project_model');
            $this->project_model->update( array('Stat' => 0,'End_Date'=>null),$id);
            $message = 1;
        }
        redirect('settings/project/' . $message);
    }
}
?>