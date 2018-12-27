<?php
/**
 * User: lyz
 * Date: 2018/9/3
 * Time: 下午10:30
 * Project: LemonSass
 * FILE: Okbuy.php
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
