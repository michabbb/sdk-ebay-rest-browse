<?php
/**
 * ItemReturnTerms
 *
 * PHP version 5
 *
 * @category Class
 * @package  macropage\SDKs\ebay\rest\browse
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Browse API
 *
 * <p>The Browse API has the following resources:</p>   <ul> <li><b>item_summary: </b> Lets shoppers search for specific items by keyword, GTIN, category, charity, product, or item aspects and refine the results by using filters.</li>  <li> <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#API\" target=\"_blank\"><img src=\"/cms/img/docs/experimental-icon.svg\" class=\"legend-icon experimental-icon\" alt=\"Experimental Release\" title=\"Experimental Release\" />&nbsp;(Experimental)</a> <b>search_by_image: </b> Lets shoppers search for specific items by image. You can refine the results by using URI parameters and filters.</li>   <li><b>item: </b> Lets you retrieve the details of a specific item or all the items in an item group, which is an item with variations such as color and size. This resource also provides a bridge between the eBay legacy APIs, such as <b>Trading</b> and <b>Finding</b>, and the RESTful APIs, such as <b>Browse</b>, which use different formats for the item IDs. You can use the <b>Browse</b> API to retrieve the basic details of the item and the RESTful item ID using a legacy item ID.</li>    <li><a href=\"https://developer.ebay.com/api-docs/static/versioning.html#API\" target=\"_blank\"><img src=\"/cms/img/docs/experimental-icon.svg\" class=\"legend-icon experimental-icon\" alt=\"Experimental Release\" title=\"Experimental Release\" />&nbsp;(Experimental)</a> <b>shopping_cart: </b> Provides the ability for eBay members to see the contents of their eBay cart, and add, remove, and change the quantity of items in their eBay cart.&nbsp;&nbsp;<b>*Note:* </b> This resource is not available in the eBay API Explorer.</li></ul>       <p>The <b>item_summary</b>, <b>search_by_image</b>, and <b>item</b> resource calls require an <a href=\"/api-docs/static/oauth-client-credentials-grant.html\">Application access token</a>. The <b>shopping_cart</b> resource calls require a <a href=\"/api-docs/static/oauth-authorization-code-grant.html\">User access token</a>.</p>
 *
 * OpenAPI spec version: v1_beta.19.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
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
 * ItemReturnTerms Class Doc Comment
 *
 * @category Class
 * @description The type that defines the fields for the seller&#39;s return policy.
 * @package  macropage\SDKs\ebay\rest\browse
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ItemReturnTerms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemReturnTerms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'extendedHolidayReturnsOffered' => 'bool',
        'refundMethod' => '\macropage\SDKs\ebay\rest\browse\Model\RefundMethodEnum',
        'restockingFeePercentage' => 'string',
        'returnInstructions' => 'string',
        'returnMethod' => '\macropage\SDKs\ebay\rest\browse\Model\ReturnMethodEnum',
        'returnPeriod' => '\macropage\SDKs\ebay\rest\browse\Model\TimeDuration',
        'returnsAccepted' => 'bool',
        'returnShippingCostPayer' => '\macropage\SDKs\ebay\rest\browse\Model\ReturnShippingCostPayerEnum'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'extendedHolidayReturnsOffered' => null,
        'refundMethod' => null,
        'restockingFeePercentage' => null,
        'returnInstructions' => null,
        'returnMethod' => null,
        'returnPeriod' => null,
        'returnsAccepted' => null,
        'returnShippingCostPayer' => null
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
        'extendedHolidayReturnsOffered' => 'extendedHolidayReturnsOffered',
        'refundMethod' => 'refundMethod',
        'restockingFeePercentage' => 'restockingFeePercentage',
        'returnInstructions' => 'returnInstructions',
        'returnMethod' => 'returnMethod',
        'returnPeriod' => 'returnPeriod',
        'returnsAccepted' => 'returnsAccepted',
        'returnShippingCostPayer' => 'returnShippingCostPayer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'extendedHolidayReturnsOffered' => 'setExtendedHolidayReturnsOffered',
        'refundMethod' => 'setRefundMethod',
        'restockingFeePercentage' => 'setRestockingFeePercentage',
        'returnInstructions' => 'setReturnInstructions',
        'returnMethod' => 'setReturnMethod',
        'returnPeriod' => 'setReturnPeriod',
        'returnsAccepted' => 'setReturnsAccepted',
        'returnShippingCostPayer' => 'setReturnShippingCostPayer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'extendedHolidayReturnsOffered' => 'getExtendedHolidayReturnsOffered',
        'refundMethod' => 'getRefundMethod',
        'restockingFeePercentage' => 'getRestockingFeePercentage',
        'returnInstructions' => 'getReturnInstructions',
        'returnMethod' => 'getReturnMethod',
        'returnPeriod' => 'getReturnPeriod',
        'returnsAccepted' => 'getReturnsAccepted',
        'returnShippingCostPayer' => 'getReturnShippingCostPayer'
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
        $this->container['extendedHolidayReturnsOffered'] = isset($data['extendedHolidayReturnsOffered']) ? $data['extendedHolidayReturnsOffered'] : null;
        $this->container['refundMethod'] = isset($data['refundMethod']) ? $data['refundMethod'] : null;
        $this->container['restockingFeePercentage'] = isset($data['restockingFeePercentage']) ? $data['restockingFeePercentage'] : null;
        $this->container['returnInstructions'] = isset($data['returnInstructions']) ? $data['returnInstructions'] : null;
        $this->container['returnMethod'] = isset($data['returnMethod']) ? $data['returnMethod'] : null;
        $this->container['returnPeriod'] = isset($data['returnPeriod']) ? $data['returnPeriod'] : null;
        $this->container['returnsAccepted'] = isset($data['returnsAccepted']) ? $data['returnsAccepted'] : null;
        $this->container['returnShippingCostPayer'] = isset($data['returnShippingCostPayer']) ? $data['returnShippingCostPayer'] : null;
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
     * Gets extendedHolidayReturnsOffered
     *
     * @return bool|null
     */
    public function getExtendedHolidayReturnsOffered()
    {
        return $this->container['extendedHolidayReturnsOffered'];
    }

    /**
     * Sets extendedHolidayReturnsOffered
     *
     * @param bool|null $extendedHolidayReturnsOffered Indicates if the seller has enabled the Extended Holiday Returns feature on the item. Extended Holiday Returns are only applicable during the US holiday season, and gives buyers extra time to return an item. This 'extra time' will typically extend beyond what is set through the returnPeriod value.
     *
     * @return $this
     */
    public function setExtendedHolidayReturnsOffered($extendedHolidayReturnsOffered)
    {
        $this->container['extendedHolidayReturnsOffered'] = $extendedHolidayReturnsOffered;

        return $this;
    }

    /**
     * Gets refundMethod
     *
     * @return \macropage\SDKs\ebay\rest\browse\Model\RefundMethodEnum|null
     */
    public function getRefundMethod()
    {
        return $this->container['refundMethod'];
    }

    /**
     * Sets refundMethod
     *
     * @param \macropage\SDKs\ebay\rest\browse\Model\RefundMethodEnum|null $refundMethod refundMethod
     *
     * @return $this
     */
    public function setRefundMethod($refundMethod)
    {
        $this->container['refundMethod'] = $refundMethod;

        return $this;
    }

    /**
     * Gets restockingFeePercentage
     *
     * @return string|null
     */
    public function getRestockingFeePercentage()
    {
        return $this->container['restockingFeePercentage'];
    }

    /**
     * Sets restockingFeePercentage
     *
     * @param string|null $restockingFeePercentage This string field indicates the restocking fee percentage that the seller has set on the item. Sellers have the option of setting no restocking fee for an item, or they can set the percentage to 10, 15, or 20 percent. So, if the cost of the item was $100, and the restocking percentage was 20 percent, the buyer would be charged $20 to return that item, so instead of receiving a $100 refund, they would receive $80 due to the restocking fee.
     *
     * @return $this
     */
    public function setRestockingFeePercentage($restockingFeePercentage)
    {
        $this->container['restockingFeePercentage'] = $restockingFeePercentage;

        return $this;
    }

    /**
     * Gets returnInstructions
     *
     * @return string|null
     */
    public function getReturnInstructions()
    {
        return $this->container['returnInstructions'];
    }

    /**
     * Sets returnInstructions
     *
     * @param string|null $returnInstructions Text written by the seller describing what the buyer needs to do in order to return the item.
     *
     * @return $this
     */
    public function setReturnInstructions($returnInstructions)
    {
        $this->container['returnInstructions'] = $returnInstructions;

        return $this;
    }

    /**
     * Gets returnMethod
     *
     * @return \macropage\SDKs\ebay\rest\browse\Model\ReturnMethodEnum|null
     */
    public function getReturnMethod()
    {
        return $this->container['returnMethod'];
    }

    /**
     * Sets returnMethod
     *
     * @param \macropage\SDKs\ebay\rest\browse\Model\ReturnMethodEnum|null $returnMethod returnMethod
     *
     * @return $this
     */
    public function setReturnMethod($returnMethod)
    {
        $this->container['returnMethod'] = $returnMethod;

        return $this;
    }

    /**
     * Gets returnPeriod
     *
     * @return \macropage\SDKs\ebay\rest\browse\Model\TimeDuration|null
     */
    public function getReturnPeriod()
    {
        return $this->container['returnPeriod'];
    }

    /**
     * Sets returnPeriod
     *
     * @param \macropage\SDKs\ebay\rest\browse\Model\TimeDuration|null $returnPeriod returnPeriod
     *
     * @return $this
     */
    public function setReturnPeriod($returnPeriod)
    {
        $this->container['returnPeriod'] = $returnPeriod;

        return $this;
    }

    /**
     * Gets returnsAccepted
     *
     * @return bool|null
     */
    public function getReturnsAccepted()
    {
        return $this->container['returnsAccepted'];
    }

    /**
     * Sets returnsAccepted
     *
     * @param bool|null $returnsAccepted Indicates whether the seller accepts returns for the item.
     *
     * @return $this
     */
    public function setReturnsAccepted($returnsAccepted)
    {
        $this->container['returnsAccepted'] = $returnsAccepted;

        return $this;
    }

    /**
     * Gets returnShippingCostPayer
     *
     * @return \macropage\SDKs\ebay\rest\browse\Model\ReturnShippingCostPayerEnum|null
     */
    public function getReturnShippingCostPayer()
    {
        return $this->container['returnShippingCostPayer'];
    }

    /**
     * Sets returnShippingCostPayer
     *
     * @param \macropage\SDKs\ebay\rest\browse\Model\ReturnShippingCostPayerEnum|null $returnShippingCostPayer returnShippingCostPayer
     *
     * @return $this
     */
    public function setReturnShippingCostPayer($returnShippingCostPayer)
    {
        $this->container['returnShippingCostPayer'] = $returnShippingCostPayer;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
}


