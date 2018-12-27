<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/26
 * Time: 14:35
 */

namespace Jayden\Okbuy4laravel\Agentapi\ResponseAttribute\Brand;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class Result
{
	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Brand")
	 * @JMS\Type("array")
	 */
	public $brand;

	public function getBrand(){
		return $this->brand;
	}
}