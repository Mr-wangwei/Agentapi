<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/26
 * Time: 15:59
 */

namespace Jayden\Okbuy4laravel\Agentapi\ResponseAttribute\Product;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class Result
{
	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("PageCount")
	 * @JMS\Type("int")
	 */
	public $pageCount;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("CurrentPage")
	 * @JMS\Type("int")
	 */
	public $currentPage;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Product")
	 * @JMS\Type("array<string,array>")
	 */
	public $product;

	public function getPageCount(){
		return $this->pageCount;
	}

	public function getCurrentPage(){
		return $this->currentPage;
	}

	public function getProduct(){
		return $this->product;
	}
}