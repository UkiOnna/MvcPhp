<?php
/**
 * Created by PhpStorm.
 * User: СикировТ
 * Date: 27.09.2019
 * Time: 21:44
 */

namespace Core;


class Config
{
    private function __construct()
    {

    }

    static function fromName($name, $key = null)
    {
        $cfg = include Helpers::path("app", "config", "$name.php");
        if ($key != null) {
            return $cfg[$key];
        }
        return $cfg;
    }

    static function database($key = null)
    {
        return self::fromName("database");
    }
}