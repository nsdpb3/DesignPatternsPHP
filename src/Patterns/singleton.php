<?php

namespace nsdpb3\Patterns;

class Connection
{
    private static ?self $instance = null;
    private static string $name;


    public static function getInstance(): self
    {
        if (self::$instance === null){
            self::$instance = new self();
        } 
        return self::$instance;
    }
    public static function getName(): string
    {
        return self::$name;
    }
    public static function setName(string $name): void
    {
        self::$name = $name;
    }
    public function __clone()
    {

    }
    public function __wakeup()
    {

    }
}
$connection = Connection::getInstance();
$connection::setName('Symfony');
var_dump($connection::getName());