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
            array('title' => 'Setting','url' => 'index.php/settings','position' => 15,'target' => 2,'parent_id' => 0,'show_menu' => 1,'type' => 1,'icon' => 'fa fa-cogs'),
            array('title' => 'Category','url' => 'settings/category','position' => 0,'target' => 2,'parent_id' => 2,'show_menu' => 1,'type' => 1,'icon' => 'fa  fa-podcast'),
            array('title' => 'Sub Category','url' => 'settings/subcategory','position' => 1,'target' => 2,'parent_id' => 2,'show_menu' => 1,'type' => 1,'icon' => 'fa fa-dot-circle-o'),
            array('title' => 'Unit','url' => 'settings/unit','position' => 2,'parent_id' => 2,'target' => 2,'show_menu' => 1,'type' => 1,'icon' => 'fa fa-pencil-square-o'),
            array('title' => 'Item','url' => 'settings/item','position' => 3,'parent_id' => 2,'target' => 2,'show_menu' => 1,'type' => 1,'icon' => 'fa fa-shopping-basket'),
            array('title' => 'Location','url' => 'settings/location','position' => 4,'target' => 2,'parent_id' => 2,'show_menu' => 1,'type' => 1,'icon' => 'fa fa-map-marker'),
            array('title' => 'Sub Location','url' => 'settings/sublocation','position' => 5,'target' => 2,'parent_id' => 2,'show_menu' => 1,'type' => 1,'icon' => 'fa fa-map-pin'),
            array('title' => 'Store','url' => 'settings/store','position' => 6,'target' => 2,'parent_id' => 2,'show_menu' => 1,'type' => 1,'icon' => 'fa fa-institution'),
            array('title' => 'Supplier','url' => 'settings/supplier','position' => 7,'target' => 2,'parent_id' => 2,'show_menu' => 1,'type' => 1,'icon' => 'fa fa-group')
        );
        //$this->db->insert('user_group', $data); I tried both
        $this->db->insert_batch('mainmenu', $data);
    }

    public function down() {
        $this->dbforge->drop_table('mainmenu');
    }

}