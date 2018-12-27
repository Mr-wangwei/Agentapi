<?php
/**
 * User: lyz
 * Date: 2018/12/21
 * Time: 3:05 PM
 * Project: LemonSass
 * FILE: BaseClient.php
 */

namespace Jayden\Okbuy4laravel\Core;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use LSS\Array2XML;
Abstract class BaseClient
{
	protected $client = 'okbuy';
	protected $httpClient;
	protected $response;
	protected $result;
	protected $app;
	protected $id = null;
	protected $urlExtend = null;
	protected $resourcePath = 'agent';
	protected $httpErrors = [];
	protected $config;
	protected $prefix = '';
	protected $createData = [];
	/**
	 * 为了适配有些接口GET参数必须从url中代入
	 * 必须要求拼接到url中
	 *
	 * @var null
	 */
	protected $urlParams = null;


	public function __construct(ServiceContainer $app)
	{
		$this->app = $app;
		$this->config = $app['config']->get('agent_config');

	}

	public function getUri()
	{
		$this->uri = $this->getPath();
		if ($this->urlParams) {
			$this->uri = $this->uri.'?'.$this->urlParams;
		}

		return $this->uri;
	}

	/**
	 * @param array $body
	 *
	 * @return $this
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function request($body = [])
	{
		$method = strtoupper($this->getMethod());
		$paypwd = $this->config['paypwd'];
		$key = $this->config['key'];
		$post_data = [
			"SignDate" => date('Y-m-d H:i:s'),
			"AgentId" => $this->config['AgentId'],
			"Request"=>json_encode($body)
		];
//签名开始
		$sign_data = 'SignDate='.$post_data['SignDate'].',Request='.$post_data['Request'];
		$sign = hash_hmac("md5",$sign_data, $key.$paypwd);
		$post_data['Sign'] = $sign;
		try {
			$this->response = $this->getHttpClient()->request(
				$method,
				$this->getUri(),
				[
					'form_params'  => $post_data,
					'verify'  => false,
					'headers' => $this->getHeaders(),
				]
			);
		} catch (ClientException $e) {
			$this->httpErrors = [
				'statusCode'   => $e->getCode(),
				'reasonPhrase' => $e->getResponse()->getReasonPhrase(),
			];
			$message = (array)json_decode(
				$e->getResponse()->getBody()->getContents()
			);
			$this->httpErrors = array_merge($this->httpErrors, $message);
		}

		return $this;
	}

	protected function getHttpClient(): Client
	{
		return $this->app['http_client'];
	}

	/**
	 * @param string $format
	 *
	 * @return array|\JMS\Serializer\scalar|mixed|null|object|string|string[]
	 */
	public function getResponse($format = 'object')
	{
		if (empty($this->httpErrors)) {
			$body_array = json_decode(
				(string)$this->response->getBody(),
				true
			);

			$body_array['statusCode'] = $this->response->getStatusCode();
			$body_array['reasonPhrase'] = $this->response->getReasonPhrase();


		}
		else
			$body_array = $this->httpErrors;

		if (isset($body_array['error_desc'])) {
			$body_array['errorDesc'] = $body_array['error_desc'];
			unset($body_array['error_desc']);
		}
		if (isset($body_array['error_code'])) {
			$body_array['errorCode'] = $body_array['error_code'];
			unset($body_array['error_code']);
		}
		$body = $body_array;
		$body['Result'] = json_decode($body['Result'],true);
		if ($format == 'json' || $format == 'text') {
			$this->result = json_encode($body,true);
		} elseif ($format == 'array') {
			$this->result = $body;
		} elseif ($format == 'object') {
			$object = 'Jayden\Okbuy4laravel\\'.ucfirst($this->getDomain())
				.'\ResponseAttribute\\'.ucfirst($this->getPrefix());
			if ($this->getId()) {
				$object .= '\\'.ucfirst($this->getId());
			}
			$object .= '\Response';
			$this->result = $this->deserialize(json_encode($body), $object, 'json');
		} elseif ($format == 'xml') {
			$xml = Array2XML::createXML('root', $body);
			$this->result = $xml->saveXML();
		}

		return $this->result;
	}

	/**
	 * @return array
	 */
	protected function getHeaders()
	{
		$headers = ['User-Agent' => $this->client];
		return $headers;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getPath()
	{
		$url_array = array_filter([$this->getResourcePath(),$this->getDomain(),$this->getPrefix(),$this->getUrlExtend()]);
		return implode('/',$url_array);
	}

	/**
	 * @param mixed ...$params
	 *
	 * @return $this
	 */
	public function setUrlExtend(...$params)
	{
		$extend = '';
		foreach ($params as $item) {
			$extend .= '/'.$item;
		}

		$this->urlExtend = $extend;

		return $this;
	}

	public function getPrefix()
	{
		return $this->prefix;
	}

	/**
	 * @return null
	 */
	public function getUrlExtend()
	{
		return $this->urlExtend;
	}

	/**
	 * @return null
	 */
	public function getUrlParams()
	{
		return $this->urlParams;
	}

	/**
	 * @param $urlParams
	 *
	 * @return $this
	 */
	public function setUrlParams($urlParams)
	{
		$this->urlParams = $urlParams;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getResourcePath(): string
	{
		return  $this->resourcePath;
	}

	/**
	 * @return string
	 */
	public function getDomain(): string
	{
		return $this->domain;
	}

	/**
	 * @return string
	 */
	public function getMethod(): string
	{
		return $this->method;
	}

	public function createData(){
		$this->createData = function (){
			$object = '\\Jayden\Okbuy4laravel\\'.ucfirst($this->getDomain())
				.'\RequestAttribute\\'.ucfirst($this->getPrefix()).'\\Request';

			return new $object();
		};
		return $this;
	}

	protected function deserialize($data, $object, $format)
	{
		$serializer = \JMS\Serializer\SerializerBuilder::create()->build();

		return $serializer->deserialize($data, $object, $format);
	}
}
