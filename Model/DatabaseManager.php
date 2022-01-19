<?php
namespace BeeMobile\Model;

class DatabaseManager
{
    private static $_instance = null;

    public function __construct()
    {
    }

    public static function getInstance()
    {

        if (is_null(self::$_instance)) {
            self::$_instance = new DatabaseManager();
        }

        return self::$_instance;
    }

    function ConnectDB()
    {
        $client = new MongoDB\Client("mongodb://localhost:27017");
        $db = $client->BeeMobile;
        $collection = $db->users;
        return $collection;
    }

}