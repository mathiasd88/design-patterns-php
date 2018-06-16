<?php


namespace Patterns\Singleton\Classic;


class Singleton
{
    private static $uniqueInstance = null;

    private function __construct(){}

    public static function getInstance()
    {
        if (is_null(self::$uniqueInstance)) {
            self::$uniqueInstance = new self;
        }

        return self::$uniqueInstance;
    }
}