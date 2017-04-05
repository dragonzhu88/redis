<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2017/4/5
 * Time: 17:06
 */

$redis = new Redis();

$redis->connect('127.0.0.1','6379');

$redis->delete('myHash');

$redis->hSet('myHash','name','zdc');
$redis->hSet('myHash','age',25);
$redis->hSet('myHash','gender',1);

$val = $redis->hGet('myHash','name');
echo json_encode($val,JSON_UNESCAPED_UNICODE);

$val = $redis->hMGet('myHash',[
    'name','age'
]);
echo json_encode($val,JSON_UNESCAPED_UNICODE);