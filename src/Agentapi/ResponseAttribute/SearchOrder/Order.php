<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/27
 * Time: 11:04
 */

namespace Jayden\Okbuy4laravel\Agentapi\ResponseAttribute\SearchOrder;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class Order
{
	/**
	 * 订单号
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("OdrCode")
	 * @JMS\Type("string")
	 */
	public $odrCode;

	/**
	 * 下单时间
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("OdrDT")
	 * @JMS\Type("string")
	 */
	public $odrDT;

	/**
	 * 收货人
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("DstName")
	 * @JMS\Type("string")
	 */
	public $dstName;

	/**
	 * 收货地址
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("DstAddr")
	 * @JMS\Type("string")
	 */
	public $dstAddr;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("DstZipCode")
	 * @JMS\Type("string")
	 */
	public $dstZipCode;

	/**
	 * 收货人电话
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Tel")
	 * @JMS\Type("string")
	 */
	public $tel;

	/**
	 * 收货人手机
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Phone")
	 * @JMS\Type("string")
	 */
	public $phone;

	/**
	 * 收货人邮箱
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("DstEml")
	 * @JMS\Type("string")
	 */
	public $dstEml;

	/**
	 * 备注信息
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Remark")
	 * @JMS\Type("string")
	 */
	public $remark;

	/**
	 * 支付类型
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("PayMode")
	 * @JMS\Type("string")
	 */
	public $payMode;

	/**
	 * 快递类型
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("DstMode")
	 * @JMS\Type("string")
	 */
	public $dstMode;

	/**
	 * 运费
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("AddPr")
	 * @JMS\Type("float")
	 */
	public $addPr;

	/**
	 * 订单状态
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Stat")
	 * @JMS\Type("string")
	 */
	public $stat;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("OuterOrderCode")
	 * @JMS\Type("string")
	 */
	public $outerOrderCode;

	/**
	 * 总金额
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("TotalAmount")
	 * @JMS\Type("float")
	 */
	public $totalAmount;

	/**
	 * 商品信息
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Product")
	 * @JMS\Type("array<Jayden\Okbuy4laravel\Agentapi\ResponseAttribute\SearchOrder\Product>")
	 */
	public $product;

}