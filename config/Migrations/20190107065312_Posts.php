<?php
use Migrations\AbstractMigration;

class Posts extends AbstractMigration
{
    public function up()
    {
        $this->table('posts', ['id' => false, 'primary_key' => ['PostID']])
            ->addColumn('PostID', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('PostTitle', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('PostDate', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('PostAuthor', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('PostContent', 'string', [
                'default' => null,
                'limit' => 1000,
                'null' => true,
            ])
            ->addColumn('PostDesc', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('PostThread', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->create();
    }

    public function down()
    {
        $this->table('posts')->drop()->save();
    }
}
