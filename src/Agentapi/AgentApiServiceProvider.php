<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/26
 * Time: 13:51
 */

namespace Jayden\Okbuy4laravel\Agentapi;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class AgentApiServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['Agentapi.brand'] = function ($app)
        {
            return new BranchClient($app);
        };
	    $app['Agentapi.product'] = function ($app)
	    {
		    return new ProductClient($app);
	    };
	    $app['Agentapi.productExt'] = function ($app)
	    {
		    return new ProductExtClient($app);
	    };
	    $app['Agentapi.stock'] = function ($app)
	    {
	    	return new StockClient($app);
	    };
	    $app['Agentapi.createOrder'] = function ($app)
	    {
	    	return new CreateOrderClient($app);
	    };
	    $app['Agentapi.searchOrder'] = function ($app){
	        return new SearchOrderClient($app);
	    };
	    $app['Agentapi.cancelOrder'] = function ($app){
	    	return new CancelOrderClient($app);
	    };
    }
}
