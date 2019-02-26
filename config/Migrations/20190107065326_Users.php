<?php
use Migrations\AbstractMigration;

class Users extends AbstractMigration
{
    public function up()
    {
        $this->table('users', ['id' => false, 'primary_key' => ['ID']])
        ->addColumn('ID', 'integer', [
            'autoIncrement' => true,
            'default' => null,
            'limit' => 15,
            'null' => false,
        ])
        ->addColumn('Email', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ])
        ->addColumn('Username', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ])
        ->addColumn('Password', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ])
        ->addColumn('token', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ])
        ->addIndex(
            [
                'Email',
            ],
            ['unique' => true]
        )
        ->create();
    }

    public function down()
    {
        $this->table('users')->drop()->save();
    }
}
