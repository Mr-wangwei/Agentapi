<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/25
 * Time: 15:23
 */

namespace Jayden\Okbuy4laravel\Core;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
abstract class BaseResponseAttribute
{
	/**
	 * 响应头信息statusCode
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("statusCode")
	 * @JMS\Type("integer")
	 */
	protected $statusCode;

	/**
	 * 响应头信息reasonPhrase
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("reasonPhrase")
	 * @JMS\Type("string")
	 */
	protected $reasonPhrase;

	/**
	 * body错误码
	 * 可选
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("ErrorCode")
	 * @JMS\Type("int")
	 */
	protected $errorCode;

	/**
	 * body错误描述
	 * 可选
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("ErrorMessage")
	 * @JMS\Type("string")
	 */
	protected $errorMessage;

	/**
	 * Sign
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Sign")
	 * @JMS\Type("string")
	 */
	protected $sign;
	/**
	 * SignDate
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("SignDate")
	 * @JMS\Type("string")
	 */
	protected $signDate;

	/**
	 * AgentId
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("AgentId")
	 * @JMS\Type("int")
	 */
	protected $agentId;



	/**
	 * @return int
	 */
	public function getStatusCode() :int
	{
		return $this->statusCode;
	}

	/**
	 * @return string
	 */
	public function getReasonPhrase() :string
	{
		return $this->reasonPhrase;
	}

	/**
	 * @return int
	 */
	public function getErrorCode() :int
	{
		return $this->errorCode;
	}

	/**
	 * @return string
	 */
	public function getErrorMessage() :string
	{
		return $this->errorMessage;
	}

	public function getSign(){
		return $this->sign;
	}

	public function getSignDate(){
		return $this->signDate;
	}

	public function getAgentId(){
		return $this->agentId;
	}


}