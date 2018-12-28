<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/26
 * Time: 10:10
 */

namespace Jayden\Okbuy4laravel\Agentapi\RequestAttribute\CreateOrder;

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
	 * 订单商品信息
	 * @param array $orderItemInfo
	 * @return $this
	 */
	public function setOrderItemInfo(array $orderItemInfo){
		if(!array_key_exists(0,$orderItemInfo)){
			$orderItemInfo = [$orderItemInfo];
		}
		$array = [];
		foreach ($orderItemInfo as $key=>$value){
			$array[ucfirst($key)] = $value;
		}
		$this->orderInfo['OrderItemInfo'] = $array;
		return $this;
	}

	/**
	 * 收货人,必须为中文
	 * @param string $dstName
	 * @return $this
	 */
	public function setDstName(string $dstName){
		$this->orderInfo['DstName'] = $dstName;
		return $this;
	}

	/**
	 * 收货人所在省份
	 * @param string $dstProv
	 * @return $this
	 */
	public function setDstProv(string $dstProv){
		$this->orderInfo['DstProv'] = $dstProv;
		return $this;
	}

	/**
	 * 收货人所在城市
	 * @param string $dstCity
	 * @return $this
	 */
	public function setDstCity(string $dstCity){
		$this->orderInfo['DstCity'] = $dstCity;
		return $this;
	}

	/**
	 * 收货人所在区县
	 * @param string $dstArea
	 * @return $this
	 */
	public function setDstArea(string $dstArea){
		$this->orderInfo['DstArea'] = $dstArea;
		return $this;
	}

	/**
	 * 配送方式:1⇒普通快递,3⇒特快专递EMS,8⇒顺丰快递
	 * @param int $dstMode
	 * @return $this
	 */
	public function setDstMode(int $dstMode){
		$this->orderInfo['DstMode'] = $dstMode;
		return $this;
	}

	/**
	 * 收货地址
	 * @param string $dstAddr
	 * @return $this
	 */
	public function setDstAddr(string $dstAddr){
		$this->orderInfo['DstAddr'] = $dstAddr;
		return $this;
	}

	/**
	 * 邮政编码
	 * @param int $dstZipCode
	 * @return $this
	 */
	public function setDstZipCode(int $dstZipCode){
		$this->orderInfo['DstZipCode'] = $dstZipCode;
		return $this;
	}

	/**
	 * 固定电话，格式如：010-00000000，移动电话为空时此项必填
	 * @param string $dsrTel
	 * @return $this
	 */
	public function setDstTel(string $dsrTel){
		$this->orderInfo['DstTel'] = $dsrTel;
		return $this;
	}

	/**
	 * 移动电话，格式如：15000000000，固定电话为空时此项必填
	 * @param string $dstPhone
	 * @return $this
	 */
	public function setDstPhone(string $dstPhone){
		$this->orderInfo['DstPhone'] = $dstPhone;
		return $this;
	}

	/**
	 * 备注信息
	 * @param string $remark
	 * @return $this
	 */
	public function setRemark(string $remark){
		$this->orderInfo['Remark'] = $remark;
		return $this;
	}

	/**
	 * 外部单号
	 * @param array $outerOrderCode
	 * @return $this
	 */
	public function setOuterOrderCode(array $outerOrderCode){
		$this->orderInfo['OuterOrderCode'] = $outerOrderCode;
		return $this;
	}

}