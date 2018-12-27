<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/27
 * Time: 10:44
 */

namespace Jayden\Okbuy4laravel\Agentapi\ResponseAttribute\SearchOrder;

use Jayden\Okbuy4laravel\Core\BaseResponseAttribute;
use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class Response extends BaseResponseAttribute
{
	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Result")
	 * @JMS\Type("Jayden\Okbuy4laravel\Agentapi\ResponseAttribute\SearchOrder\Result")
	 */
	protected $result;

	/**
	 * @return Result
	 */
	public function getResult()
	{
		return $this->result;
	}
}