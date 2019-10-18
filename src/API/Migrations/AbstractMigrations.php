<?php


namespace App\API\Migrations;


class AbstractMigrations
{
    public function getSQL():string {
        return $this->sql;
    }
}
