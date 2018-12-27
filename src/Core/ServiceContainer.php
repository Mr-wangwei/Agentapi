<?php
/**
 * User: lyz
 * Date: 2018/12/21
 * Time: 11:34 AM
 * Project: LemonSass
 * FILE: ServiceContainer.php
 */

namespace Jayden\Okbuy4laravel\Core;

use Symfony\Component\HttpFoundation\Request;
use GuzzleHttp\Client;
use Pimple\Container;

class ServiceContainer extends Container
{
    /**
     * @var array
     */
    protected $providers = [];

    /**
     * @var array
     */
    protected $defaultConfig = [];
    /**
     * @var array
     */
    protected $globalConfig
        = [
            // \GuzzleHttp\Client __construct params
            'http' => [
                'base_uri' => 'http://platform.okbuy.com',
                'timeout' => 10.0,
            ],
        ];

    public function __construct(array $config, array $values = array())
    {
        parent::__construct($values);
	    $this->registerConfig($config)
		    ->registerProviders()
		    ->registerRequest()
		    ->registerHttpClient();
    }

    protected function registerConfig(array $config)
    {
        $this['config'] = function () use ($config) {
            return new Config(
                array_replace_recursive(
                    $this->globalConfig,
                    $this->defaultConfig,
                    $config
                )
            );
        };
        return $this;
    }

    protected function registerProviders()
    {
        foreach ($this->providers as $provider){
            $this->register(new $provider());
        }
        return $this;
    }

	/**
	 * @see \GuzzleHttp\Client __construct
	 * @return $this
	 */
	protected function registerHttpClient()
	{
		isset($this['http_client']) || $this['http_client'] = function ($app) {
			return new Client($app['config']->get('http'));
		};

		return $this;
	}

	/**
	 * @return $this
	 */
	protected function registerRequest()
	{
		isset($this['request'])
		|| $this['request'] = function () {
			return Request::createFromGlobals();
		};

		return $this;
	}
}
