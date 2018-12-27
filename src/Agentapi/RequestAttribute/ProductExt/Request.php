<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/26
 * Time: 15:37
 */

namespace Jayden\Okbuy4laravel\Agentapi\RequestAttribute\ProductExt;

use Jayden\Okbuy4laravel\Core\BaseRequestAttribute;
use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class Request extends BaseRequestAttribute
{
	/**※Brand和Skus至少输入一个**/

	/**
	 * 品牌名
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Brand")
	 * @JMS\Type("string")
	 */
	protected $brand;

	/**
	 *  SKU列表(不超过50个)
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Skus")
	 * @JMS\Type("array")
	 */
	protected $skus;

	/**
	 *  页码
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("Page")
	 * @JMS\Type("int")
	 */
	protected $page;

	/**
	 * @param string $brand
	 * @return $this
	 */
	public function setBrand(string $brand){
		$this->brand = $brand;
		return $this;
	}

	/**
	 * @param string|array $skus
	 * @return $this
	 */
	public function setSkus($skus){
		if(is_string($skus) || is_int($skus)){
			$skus = [$skus];
		}
		$this->skus = $skus;
		return $this;
	}

	/**
	 * @param int $page
	 * @return $this
	 */
	public function setPage(int $page){
		$this->page = $page;
		return $this;
	}
}