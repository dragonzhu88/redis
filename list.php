<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2017/4/5
 * Time: 17:03
 */

$redis = new Redis();
$redis->connect('127.0.0.1','6379');

$redis->delete('myList');

$redis->lPush('myList','listVal1');
$redis->lPush('myList','listVal2');
$redis->lPush('myList','listVal3');
$redis->lPush('myList','listVal4');

$val = $redis->rPop('myList');

var_dump($val);