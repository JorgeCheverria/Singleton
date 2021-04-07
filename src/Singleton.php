<?php


namespace jcheverria\Singleton;


class Singleton
{
    private static $instance = null;

    public static function getInstance()
    {
       if(self::$instance == null){
           self::$instance = new Singleton();
       }

       return self::$instance;
    }
}