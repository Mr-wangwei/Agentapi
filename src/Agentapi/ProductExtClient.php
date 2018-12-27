<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/26
 * Time: 10:56
 */

namespace Jayden\Okbuy4laravel\Agentapi;


use Jayden\Okbuy4laravel\Core\BaseClient;

class ProductExtClient extends BaseClient
{
	protected $domain = 'agentapi';
	protected $prefix = 'productExt';
	protected $method = 'POST';
}