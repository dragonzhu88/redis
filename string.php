<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2017/4/5
 * Time: 17:03
 */

$redis = new Redis();
$redis->connect('127.0.0.1','6379');

$redis->delete('myString');

$redis->set('myString','stringVal1');
$val = $redis->get("myString");

echo json_encode($val,JSON_UNESCAPED_UNICODE);

$redis->set("myString",4);
$redis->incr("myString",2);
$val = $redis->get("myString");
echo json_encode($val,JSON_UNESCAPED_UNICODE);
