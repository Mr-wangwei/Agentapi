<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/25
 * Time: 15:18
 */

namespace Jayden\Okbuy4laravel\Core;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

abstract class BaseRequestAttribute
{

	public function serialize($format = 'array')
	{
		$serializer = \JMS\Serializer\SerializerBuilder::create()->build();

		if ($format == 'form-url-encode')
		{
			$json = $serializer->serialize($this,'json');
			return http_build_query(json_decode($json,true));
		}
		elseif ($format == 'array')
		{
			$json = $serializer->serialize($this,'json');
			return json_decode($json,true);
		}
		else
			return $serializer->serialize($this, $format);

	}
}