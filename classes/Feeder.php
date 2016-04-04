<?php defined('SYSPATH') or die('No direct script access.');

require dirname(__FILE__) . '/FeedTypes.php';

class Feeder{

    /**
     * Create new feedwriter
     * @param $type
     * @return FeedWriter
     */
    public static function factory($type){
        $class = strtoupper($type) . 'FeedWriter';
        return new $class();
    }

}