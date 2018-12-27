<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/27
 * Time: 16:36
 */

namespace Jayden\Okbuy4laravel\Agentapi\ResponseAttribute\CancelOrder;

use Jayden\Okbuy4laravel\Agentapi\ResponseAttribute\CancelOrder\Result;
use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Jayden\Okbuy4laravel\Core\BaseResponseAttribute;

class Response extends BaseResponseAttribute
{
	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Result")
	 * @JMS\Type("Jayden\Okbuy4laravel\Agentapi\ResponseAttribute\CancelOrder\Result")
	 */
	protected $result;

	/**
	 * @return Result
	 */
	public function getResult()
	{
		return $this->result;
	}

}