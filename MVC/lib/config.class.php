<?php

class Config{
    protected static $settings = [];

    public function get($key)
    {
        return isset(self::$settings[$key]) ? self::$settings[$key] : null;
    }

    public function set($key, $value)
    {
        self::$settings[$key] = $value;
    }

}