<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/26
 * Time: 10:10
 */

namespace Jayden\Okbuy4laravel\Agentapi\RequestAttribute\CancelOrder;

use Jayden\Okbuy4laravel\Core\BaseRequestAttribute;
use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class Request extends BaseRequestAttribute
{
	/**
	 * 要取消的订单号
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("OrderCode")
	 * @JMS\Type("string")
	 */
	protected $orderInfo;

	public function setOrderCode(string $orderCode){
		$this->orderInfo = $orderCode;
		return $this;
	}
}