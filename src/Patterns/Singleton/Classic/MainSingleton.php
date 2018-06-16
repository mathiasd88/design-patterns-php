<?php


namespace Patterns\Singleton\Classic;


class MainSingleton
{
    public static function main()
    {
        $instance = Singleton::getInstance();

        echo "\$instance hash: ";
        echo spl_object_hash($instance);
        echo "\n";

        $anotherInstance = Singleton::getInstance();

        echo "\$anotherInstance hash: ";
        echo spl_object_hash($anotherInstance);
        echo "\n";
    }
}