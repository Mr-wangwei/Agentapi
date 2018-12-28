<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/26
 * Time: 13:51
 */

namespace Jayden\Okbuy4laravel;

use Illuminate\Config\Repository;
use Jayden\Okbuy4laravel\Core\ServiceContainer;

class Okbuy extends ServiceContainer
{
    protected $providers = [
		\Jayden\Okbuy4laravel\Agentapi\AgentApiServiceProvider::class
    ];
}
