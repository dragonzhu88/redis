<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2017/4/5
 * Time: 17:03
 */

$redis = new Redis();
$redis->connect('127.0.0.1','6379');

$redis->delete('mySet');

$redis->sAdd('mySet','val1');
$redis->sAdd('mySet','val2');
$redis->sAdd('mySet','val3');
$redis->sAdd('mySet','val1');

$val = $redis->sCard('mySet');

echo json_encode($val,JSON_UNESCAPED_UNICODE);

$val = $redis->sMembers('mySet');