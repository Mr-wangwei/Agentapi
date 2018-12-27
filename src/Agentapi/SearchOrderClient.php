<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/27
 * Time: 10:06
 */

namespace Jayden\Okbuy4laravel\Agentapi;


use Jayden\Okbuy4laravel\Core\BaseClient;

class SearchOrderClient extends BaseClient
{
	protected $domain = 'agentapi';
	protected $prefix = 'searchorder';
	protected $method = 'POST';
}