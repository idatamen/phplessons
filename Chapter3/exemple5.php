<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 06.05.2016
 * Time: 21:22
 */
function longdate($timestamp){
    return date("l F jS Y", $timestamp);
}

echo longdate(time());