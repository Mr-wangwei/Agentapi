<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/27
 * Time: 11:45
 */

namespace Jayden\Okbuy4laravel\Agentapi\ResponseAttribute\SearchOrder;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class Product
{
	/**
	 * 商品标示
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Sku")
	 * @JMS\Type("string")
	 */
	public $sku;

	/**
	 * 大小
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Size")
	 * @JMS\Type("string")
	 */
	public $size;

	/**
	 * 商品价格
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Price")
	 * @JMS\Type("float")
	 */
	public $price;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Code")
	 * @JMS\Type("string")
	 */
	public $code;

	/**
	 * 商品名
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Name")
	 * @JMS\Type("string")
	 */
	public $name;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("LogisticsCompany")
	 * @JMS\Type("string")
	 */
	public $logisticsCompany;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("SheetCode")
	 * @JMS\Type("string")
	 */
	public $sheetCode;


}