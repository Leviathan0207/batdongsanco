<?php
use Migrations\AbstractMigration;

class Contacts extends AbstractMigration
{
    public function up()
    {
        $this->table('contacts', ['id' => false, 'primary_key' => ['ID']])
            ->addColumn('ID', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('Email', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('Name', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('General', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('Message', 'string', [
                'default' => null,
                'limit' => 500,
                'null' => false,
            ])
            ->create();
    }

    public function down()
    {
        $this->table('contacts')->drop()->save();
    }
}
