<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/26
 * Time: 15:37
 */

namespace Jayden\Okbuy4laravel\Agentapi\RequestAttribute\Stock;

use Jayden\Okbuy4laravel\Core\BaseRequestAttribute;
use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class Request extends BaseRequestAttribute
{
	/**
	 *  SKU列表(不超过50个)
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Skus")
	 * @JMS\Type("array")
	 */
	protected $skus;


	/**
	 * @param array|string $skus
	 * @return $this
	 */
	public function setSkus($skus){
		if(is_string($skus) || is_int($skus)){
			$skus = [$skus];
		}
		$this->skus = $skus;
		return $this;
	}
}