<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/28
 * Time: 14:26
 */

namespace Jayden\Okbuy4laravel\Agentapi\ResponseAttribute\Product;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class Product
{
	/**
	 * 商品sku
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Sku")
	 * @JMS\Type("string")
	 */
	public $sku;

	/**
	 * 品牌
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Brand")
	 * @JMS\Type("string")
	 */
	public $brand;

	/**
	 * 号码颜色
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Code")
	 * @JMS\Type("string")
	 */
	public $code;

	/**
	 * AgentPrice
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("AgentPrice")
	 * @JMS\Type("float")
	 */
	public $agentPrice;

	/**
	 * 商品名称
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Name")
	 * @JMS\Type("string")
	 */
	public $name;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Category")
	 * @JMS\Type("string")
	 */
	public $category;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Gender")
	 * @JMS\Type("string")
	 */
	public $gender;

	/**
	 * 颜色
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Color")
	 * @JMS\Type("string")
	 */
	public $color;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("MainColor")
	 * @JMS\Type("string")
	 */
	public $mainColor;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("MarketPrice")
	 * @JMS\Type("float")
	 */
	public $marketPrice;

	/**
	 * Discount
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Discount")
	 * @JMS\Type("string")
	 */
	public $discount;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Date")
	 * @JMS\Type("string")
	 */
	public $date;

	/**
	 * 描述
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Description")
	 * @JMS\Type("string")
	 */
	public $description;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Property")
	 * @JMS\Type("array<string,string>")
	 */
	public $property;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Image")
	 * @JMS\Type("string")
	 */
	public $image;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("AllImages")
	 * @JMS\Type("array<string,string>")
	 */
	public $allImages;

	public function getSku(){
		return $this->sku;
	}

	public function getBrand(){
		return $this->brand;
	}

	public function getCode(){
		return $this->code;
	}

	public function getAgentPrice(){
		return $this->agentPrice;
	}

	public function getName(){
		return $this->name;
	}

	public function getCategory(){
		return $this->category;
	}

	public function getGender(){
		return $this->gender;
	}

	public function getColor(){
		return $this->color;
	}

	public function getMainColor(){
		return $this->mainColor;
	}

	public function getMarketPrice(){
		return $this->marketPrice;
	}

	public function getDiscount(){
		return $this->discount;
	}

	public function getDate(){
		return $this->date;
	}

	public function getDescription(){
		return $this->description;
	}

	public function getProperty(){
		return $this->property;
	}

	public function getImage(){
		return $this->image;
	}

	public function getAllImages(){
		return $this->allImages;
	}
}