<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/26
 * Time: 13:49
 */
require  './autoload.php';
$config = require '../src/config/okbuy.php';
$application = new \Jayden\Okbuy4laravel\Okbuy($config);

$request = new \Jayden\Okbuy4laravel\Agentapi\RequestAttribute\Brand\Request();
/** @var \Jayden\Okbuy4laravel\Agentapi\BranchClient $app */
$app = $application['Agentapi.brand'];
/** @var \Jayden\Okbuy4laravel\Agentapi\ResponseAttribute\Brand\Response $ret */
$ret = $app->request()->getResponse();

var_dump($ret);