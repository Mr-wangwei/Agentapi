<?php
/**
 * User: lyz
 * Date: 2018/9/3
 * Time: 下午10:34
 * Project: LemonSass
 * FILE: Okbuy.php
 */

namespace Jayden\Okbuy4laravel\Facades;


use Illuminate\Support\Facades\Facade;

class Okbuy extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Okbuy';
    }
}