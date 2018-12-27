<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/27
 * Time: 10:53
 */

namespace Jayden\Okbuy4laravel\Agentapi\ResponseAttribute\SearchOrder;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class Result
{
	/**
	 * 总页数
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("PageCount")
	 * @JMS\Type("int")
	 */
	public $pageCount;

	/**
	 * 当前页(每页50条)
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("CurrentPage")
	 * @JMS\Type("int")
	 */
	public $currentPage;

	/**
	 * 订单数组
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Order")
	 * @JMS\Type("array<Jayden\Okbuy4laravel\Agentapi\ResponseAttribute\SearchOrder\Order>")
	 */
	public $order;

	public function getPageCount(){
		return $this->pageCount;
	}

	public function getCurrentPage(){
		return $this->currentPage;
	}

	public function getOrder(){
		return $this->order;
	}

}