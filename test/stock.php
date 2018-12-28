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

$request = new \Jayden\Okbuy4laravel\Agentapi\RequestAttribute\Stock\Request();
$request->setSkus(['16880367','16882088','16887028','16892163']);
$reqData = $request->serialize();
/** @var \Jayden\Okbuy4laravel\Agentapi\StockClient $app */
$app = $application['Agentapi.stock'];
/** @var \Jayden\Okbuy4laravel\Agentapi\ResponseAttribute\Stock\Response $ret */
$ret = $app->request($reqData)->getResponse();

var_dump($ret);