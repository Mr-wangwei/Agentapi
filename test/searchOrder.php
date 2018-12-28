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
$request = new \Jayden\Okbuy4laravel\Agentapi\RequestAttribute\SearchOrder\Request();
$reqData = $request->setOrderDate('2017-01-01 00:00:00','2018-12-01 00:00:00')->serialize();
/** @var \Jayden\Okbuy4laravel\Agentapi\SearchOrderClient $app */
$app = $application['Agentapi.searchOrder'];
/** @var \Jayden\Okbuy4laravel\Agentapi\ResponseAttribute\SearchOrder\Response $ret */
try {
	$ret = $app->request($reqData)->getResponse();
	var_dump($ret->getResult()->order);
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
}
