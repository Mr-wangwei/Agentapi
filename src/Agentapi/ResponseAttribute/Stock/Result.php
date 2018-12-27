<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/26
 * Time: 15:59
 */

namespace Jayden\Okbuy4laravel\Agentapi\ResponseAttribute\Stock;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class Result
{
	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Stock")
	 * @JMS\Type("array")
	 */
	public $stock;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Warehouse")
	 * @JMS\Type("array")
	 */
	public $warehouse;


	public function getStock(){
		return $this->stock;
	}

	public function getWarehouse(){
		return $this->warehouse;
	}
}