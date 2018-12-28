<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/26
 * Time: 16:14
 */
require  './autoload.php';
$config = require './config/okbuy.php';
$application = new \Jayden\Okbuy4laravel\Okbuy($config);

$request = new \Jayden\Okbuy4laravel\Agentapi\RequestAttribute\ProductExt\Request();
$request->setBrand('ABC童鞋');
$reqData = $request->serialize();
/** @var \Jayden\Okbuy4laravel\Agentapi\BranchClient $app */
$app = $application['Agentapi.productExt'];
/** @var \Jayden\Okbuy4laravel\Agentapi\ResponseAttribute\Brand\Response $ret */
$ret = $app->request($reqData)->getResponse();

var_dump($ret);