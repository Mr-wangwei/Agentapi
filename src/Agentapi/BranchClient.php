<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/26
 * Time: 10:56
 */

namespace Jayden\Okbuy4laravel\Agentapi;


use Jayden\Okbuy4laravel\Core\BaseClient;

class BranchClient extends BaseClient
{
	protected $domain = 'agentapi';
	protected $prefix = 'brand';
	protected $method = 'POST';
}