<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/26
 * Time: 14:35
 */

namespace Jayden\Okbuy4laravel\Agentapi\ResponseAttribute\CreateOrder;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class Result
{
	/**
	 * 好乐买订单号
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("OrderCode")
	 * @JMS\Type("string")
	 */
	public $orderCode;

	public function getOrderCode(){
		return $this->orderCode;
	}

	/**
	 * 订单创建时间
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("CreateTime")
	 * @JMS\Type("string")
	 */
	public $createTime;

	public function getCreateTime(){
		return $this->createTime;
	}
}