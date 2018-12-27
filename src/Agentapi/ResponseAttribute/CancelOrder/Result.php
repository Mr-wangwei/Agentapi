<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/27
 * Time: 17:04
 */

namespace Jayden\Okbuy4laravel\Agentapi\ResponseAttribute\CancelOrder;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class Result
{
	/**
	 * 1成功0失败
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Result")
	 * @JMS\Type("int")
	 */
	public $result;

	/**
	 * 失败原因
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("FailureInfo")
	 * @JMS\Type("string")
	 */
	public $failureInfo;

	public function getResult(){
		return $this->result;
	}

	public function getFailureInfo(){
		return $this->failureInfo;
	}
}