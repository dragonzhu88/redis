<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2017/4/5
 * Time: 17:07
 */

$redis = new Redis();
$redis->connect('127.0.0.1', '6379');

$redis->delete('myZset');

$redis->zAdd('myZset', 100, 'zdc1');
$redis->zAdd('myZset', 89, 'zdc2');
$redis->zAdd('myZset', 90, 'zdc3');

$val = $redis->zRange("myZset", 0, -1);

var_dump($val);

$val = $redis->zRevRange('myZset', 0, -1);

var_dump($val);