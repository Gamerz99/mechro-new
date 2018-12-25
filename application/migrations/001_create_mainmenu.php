<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_mainmenu extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => TRUE
            ),
            'url' => array(
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => TRUE
            ),
            'position' => array(
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => TRUE
            ),
            'target' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => TRUE
            ),
            'parent_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => TRUE
            ),
            'show_menu' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => TRUE
            ),
            'type' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => TRUE
            ),
            'icon' => array(
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => TRUE
            ),
            'tooltip' => array(
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => TRUE
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('mainmenu');

        $data = array(
            array('title' => 'Home','url' => 'index.php/admin','position' => 0,'target' => 0,'parent_id' => 0,'show_menu' => 1,'type' => 1,'icon' => 'fa fa-home'),
            array('title' => 'Product','url' => 'index.php/admin','position' => 1,'target' => 2,'parent_id' => 0,'show_menu' => 1,'type' => 1,'icon' => 'fa fa-cart-plus'),
            array('title' => 'Machinery','url' => 'settings/machinery','position' => 0,'target' => 2,'parent_id' => 2,'show_menu' => 1,'type' => 1,'icon' => 'fa fa-cogs'),
            array('title' => 'Construction','url' => 'settings/construction','position' => 1,'target' => 2,'parent_id' => 2,'show_menu' => 1,'type' => 1,'icon' => 'fa fa-exclamation-triangle'),
            array('title' => 'Other','url' => 'settings/other','position' => 2,'parent_id' => 2,'target' => 2,'show_menu' => 1,'type' => 1,'icon' => 'fa fa-flag'),
            array('title' => 'Project','url' => 'index.php/settings/project','position' => 2,'parent_id' => 0,'target' => 2,'show_menu' => 1,'type' => 1,'icon' => 'fa fa-folder'),
            array('title' => 'Gallery','url' => 'index.php/settings/gallery','position' => 3,'target' => 2,'parent_id' => 0,'show_menu' => 1,'type' => 1,'icon' => 'fa fa-photo'),
        );
        $this->db->insert_batch('mainmenu', $data);
    }

    public function down() {
        $this->dbforge->drop_table('mainmenu');
    }

}