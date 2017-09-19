<?php

namespace Singleton;


class Database
{
    public static $instance;

    public static function getInstance()
    {
        if (!isset(Database::$instance)){
            Database::$instance = new Database();
        }

        return Database::$instance;
    }

    private function __construct()
    {
        //TODO Implement
    }

    public function query()
    {
        return "SELECT * From commentTable";
    }


}