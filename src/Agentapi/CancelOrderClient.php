<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/27
 * Time: 16:26
 */

namespace Jayden\Okbuy4laravel\Agentapi;


use Jayden\Okbuy4laravel\Core\BaseClient;

class CancelOrderClient extends BaseClient
{
	protected $domain = 'agentapi';
	protected $prefix = 'createorder';
	protected $method = 'POST';
}