<?php
/**
 * AvailableCoupon
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  macropage\SDKs\ebay\rest\browse
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Browse API
 *
 * <p>The Browse API has the following resources:</p>   <ul> <li><b> item_summary: </b> Lets shoppers search for specific items by keyword, GTIN, category, charity, product, or item aspects and refine the results by using filters, such as aspects, compatibility, and fields values.</li>  <li><b> search_by_image: </b><a href=\"https://developer.ebay.com/api-docs/static/versioning.html#experimental\" target=\"_blank\"><img src=\"/cms/img/docs/experimental-icon.svg\" class=\"legend-icon experimental-icon\" alt=\"Experimental Release\" title=\"Experimental Release\" />&nbsp;(Experimental)</a> Lets shoppers search for specific items by image. You can refine the results by using URI parameters and filters.</li>   <li><b> item: </b> <ul><li>Lets you retrieve the details of a specific item or all the items in an item group, which is an item with variations such as color and size and check if a product is compatible with the specified item, such as if a specific car is compatible with a specific part.</li> <li>Provides a bridge between the eBay legacy APIs, such as <b> Finding</b>, and the RESTful APIs, which use different formats for the item IDs.</li>  </ul> </li>  <li> <b> shopping_cart: </b> <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#experimental\" target=\"_blank\"><img src=\"/cms/img/docs/experimental-icon.svg\" class=\"legend-icon experimental-icon\" alt=\"Experimental Release\" title=\"Experimental Release\" />&nbsp;(Experimental)</a> <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"> <img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />(Limited Release)</a> Provides the ability for eBay members to see the contents of their eBay cart, and add, remove, and change the quantity of items in their eBay cart.&nbsp;&nbsp;<b> Note: </b> This resource is not available in the eBay API Explorer.</li></ul>       <p>The <b> item_summary</b>, <b> search_by_image</b>, and <b> item</b> resource calls require an <a href=\"/api-docs/static/oauth-client-credentials-grant.html\">Application access token</a>. The <b> shopping_cart</b> resource calls require a <a href=\"/api-docs/static/oauth-authorization-code-grant.html\">User access token</a>.</p>
 *
 * The version of the OpenAPI document: v1.11.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace macropage\SDKs\ebay\rest\browse\Model;

use \ArrayAccess;
use \macropage\SDKs\ebay\rest\browse\ObjectSerializer;

/**
 * AvailableCoupon Class Doc Comment
 *
 * @category Class
 * @package  macropage\SDKs\ebay\rest\browse
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AvailableCoupon implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AvailableCoupon';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'constraint' => '\macropage\SDKs\ebay\rest\browse\Model\CouponConstraint',
        'discountAmount' => '\macropage\SDKs\ebay\rest\browse\Model\Amount',
        'discountType' => 'string',
        'message' => 'string',
        'redemptionCode' => 'string',
        'termsWebUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'constraint' => null,
        'discountAmount' => null,
        'discountType' => null,
        'message' => null,
        'redemptionCode' => null,
        'termsWebUrl' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'constraint' => 'constraint',
        'discountAmount' => 'discountAmount',
        'discountType' => 'discountType',
        'message' => 'message',
        'redemptionCode' => 'redemptionCode',
        'termsWebUrl' => 'termsWebUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'constraint' => 'setConstraint',
        'discountAmount' => 'setDiscountAmount',
        'discountType' => 'setDiscountType',
        'message' => 'setMessage',
        'redemptionCode' => 'setRedemptionCode',
        'termsWebUrl' => 'setTermsWebUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'constraint' => 'getConstraint',
        'discountAmount' => 'getDiscountAmount',
        'discountType' => 'getDiscountType',
        'message' => 'getMessage',
        'redemptionCode' => 'getRedemptionCode',
        'termsWebUrl' => 'getTermsWebUrl'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['constraint'] = $data['constraint'] ?? null;
        $this->container['discountAmount'] = $data['discountAmount'] ?? null;
        $this->container['discountType'] = $data['discountType'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['redemptionCode'] = $data['redemptionCode'] ?? null;
        $this->container['termsWebUrl'] = $data['termsWebUrl'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets constraint
     *
     * @return \macropage\SDKs\ebay\rest\browse\Model\CouponConstraint|null
     */
    public function getConstraint()
    {
        return $this->container['constraint'];
    }

    /**
     * Sets constraint
     *
     * @param \macropage\SDKs\ebay\rest\browse\Model\CouponConstraint|null $constraint constraint
     *
     * @return self
     */
    public function setConstraint($constraint)
    {
        $this->container['constraint'] = $constraint;

        return $this;
    }

    /**
     * Gets discountAmount
     *
     * @return \macropage\SDKs\ebay\rest\browse\Model\Amount|null
     */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
     * Sets discountAmount
     *
     * @param \macropage\SDKs\ebay\rest\browse\Model\Amount|null $discountAmount discountAmount
     *
     * @return self
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->container['discountAmount'] = $discountAmount;

        return $this;
    }

    /**
     * Gets discountType
     *
     * @return string|null
     */
    public function getDiscountType()
    {
        return $this->container['discountType'];
    }

    /**
     * Sets discountType
     *
     * @param string|null $discountType The type of discount that the coupon applies. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:CouponDiscountType'>eBay API documentation</a>
     *
     * @return self
     */
    public function setDiscountType($discountType)
    {
        $this->container['discountType'] = $discountType;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message A description of the coupon.<br /><br /><span class=\"tablenote\"><b> Note: </b> The value returned in the <b>termsWebUrl</b> field should appear for all experiences when displaying coupons. The value in the <b>availableCoupons.message</b> field must also be included, if returned in the API response.</span>
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets redemptionCode
     *
     * @return string|null
     */
    public function getRedemptionCode()
    {
        return $this->container['redemptionCode'];
    }

    /**
     * Sets redemptionCode
     *
     * @param string|null $redemptionCode The coupon code.
     *
     * @return self
     */
    public function setRedemptionCode($redemptionCode)
    {
        $this->container['redemptionCode'] = $redemptionCode;

        return $this;
    }

    /**
     * Gets termsWebUrl
     *
     * @return string|null
     */
    public function getTermsWebUrl()
    {
        return $this->container['termsWebUrl'];
    }

    /**
     * Sets termsWebUrl
     *
     * @param string|null $termsWebUrl The URL to the coupon terms of use.<br /><br /><span class=\"tablenote\"><b> Note: </b> The value returned in the <b>termsWebUrl</b> field should appear for all experiences when displaying coupons. The value in the <b>availableCoupons.message</b> field must also be included, if returned in the API response.</span>
     *
     * @return self
     */
    public function setTermsWebUrl($termsWebUrl)
    {
        $this->container['termsWebUrl'] = $termsWebUrl;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

