<?php

use yii\db\Schema;
use yii\db\Migration;

class m150504_074253_clw_slugs extends Migration
{
    public function up()
    {
        $this->createTable('clw_slugs', [
            'id_slug' => Schema::TYPE_PK,
            'pattern' => Schema::TYPE_TEXT . ' NOT NULL',
            'route' => Schema::TYPE_TEXT . ' NOT NULL',
            'suffix' => Schema::TYPE_STRING . ' NOT NULL',
            'defaults' => Schema::TYPE_TEXT . ' NOT NULL',
        ]);

        $this->insert('clw_slugs', [
            'pattern' => 'slug/slug/index',
            'route' => 'slug/slug/index',
            'suffix' => '',
            'defaults' => ''
        ]);
        $this->insert('clw_slugs', [
            'pattern' => 'slug/slug/create',
            'route' => 'slug/slug/create',
            'suffix' => '',
            'defaults' => ''
        ]);
        $this->insert('clw_slugs', [
            'pattern' => 'slug/slug/update',
            'route' => 'slug/slug/update',
            'suffix' => '',
            'defaults' => ''
        ]);
        $this->insert('clw_slugs', [
            'pattern' => 'slug/slug/view',
            'route' => 'slug/slug/view',
            'suffix' => '',
            'defaults' => ''
        ]);
        $this->insert('clw_slugs', [
            'pattern' => 'slug/slug/delete',
            'route' => 'slug/slug/delete',
            'suffix' => '',
            'defaults' => ''
        ]);

        $this->insert('clw_slugs', [
            'pattern' => 'home',
            'route' => 'site/index',
            'suffix' => '',
            'defaults' => ''
        ]);
    }

    public function down()
    {
        $this->delete('clw_slugs', ['id_slug' => 1]);
        $this->dropTable('clw_slugs');
        //echo "m150504_074253_clw_slugs cannot be reverted.\n";
        //return false;
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
