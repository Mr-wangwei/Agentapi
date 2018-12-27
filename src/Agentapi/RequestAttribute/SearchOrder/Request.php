<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/26
 * Time: 10:10
 */

namespace Jayden\Okbuy4laravel\Agentapi\RequestAttribute\SearchOrder;

use Jayden\Okbuy4laravel\Core\BaseRequestAttribute;
use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class Request extends BaseRequestAttribute
{
	/**
	 * 购买的商品信息
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("OrderInfo")
	 * @JMS\Type("array")
	 */
	protected $orderInfo = [];

	/**
	 * 页码
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Page")
	 * @JMS\Type("int")
	 */
	protected $page;

	/**
	 * 订单号(不超过50个)
	 * @param array|string $orderCode
	 * @return $this
	 */
	public function setOrderCode($orderCode){
		if(!is_array($orderCode)){
			$orderCode = [$orderCode];
		}
		$this->orderInfo['OrderCode'] = $orderCode;
		return $this;
	}

	/**
	 * 订单创建时间
	 * @param string $start 开始时间格式 (Y-m-d H:i:s)
	 * @param string $end 结束时间 格式(Y-m-d H:i:s)
	 * @return $this
	 */
	public function setOrderDate(string $start,string $end){
		$this->orderInfo['OrderDate'] = ['Start'=>$start,'End'=>$end];
		return $this;
	}

	/**
	 * 订单状态:确认有货=4,确认无货=5,部分发货=6,全部发货=3,已取消=2
	 * @param array|string $orderStatus
	 * @return $this
	 */
	public function setOrderStatus($orderStatus){
		if(!is_array($orderStatus)){
			$orderStatus = [$orderStatus];
		}
		$this->orderInfo['OrderStatus'] = $orderStatus;
		return $this;
	}

	/**
	 * 页码
	 * @param int $page
	 * @return $this
	 */
	public function setPage(int $page){
		$this->page = $page;
		return $this;
	}

}