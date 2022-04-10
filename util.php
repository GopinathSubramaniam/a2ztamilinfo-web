<?php
abstract class Util
{


    public static function getProperty($key)
    {
        $config = parse_ini_file('db.ini');
        return $config[$key];
    }
}
