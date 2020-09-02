<?php
/**
 * ItemGroupSummary
 *
 * PHP version 7.2
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
 * The version of the OpenAPI document: v1_beta.19.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
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
 * ItemGroupSummary Class Doc Comment
 *
 * @category Class
 * @description The type that defines the fields for the details of each item in an item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. When an item group is created, one of the item variations, such as the red shirt size L, is chosen as the &amp;quot;parent&amp;quot;. All the other items in the group are the children, such as the blue shirt size L, red shirt size M, etc. Note: This container is returned only if the item_id in the request is an item group (parent ID of an item with variations).
 * @package  macropage\SDKs\ebay\rest\browse
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ItemGroupSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemGroupSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'itemGroupAdditionalImages' => '\macropage\SDKs\ebay\rest\browse\Model\Image[]',
        'itemGroupHref' => 'string',
        'itemGroupId' => 'string',
        'itemGroupImage' => '\macropage\SDKs\ebay\rest\browse\Model\Image',
        'itemGroupTitle' => 'string',
        'itemGroupType' => '\macropage\SDKs\ebay\rest\browse\Model\ItemGroupTypeEnum'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'itemGroupAdditionalImages' => null,
        'itemGroupHref' => null,
        'itemGroupId' => null,
        'itemGroupImage' => null,
        'itemGroupTitle' => null,
        'itemGroupType' => null
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
        'itemGroupAdditionalImages' => 'itemGroupAdditionalImages',
        'itemGroupHref' => 'itemGroupHref',
        'itemGroupId' => 'itemGroupId',
        'itemGroupImage' => 'itemGroupImage',
        'itemGroupTitle' => 'itemGroupTitle',
        'itemGroupType' => 'itemGroupType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemGroupAdditionalImages' => 'setItemGroupAdditionalImages',
        'itemGroupHref' => 'setItemGroupHref',
        'itemGroupId' => 'setItemGroupId',
        'itemGroupImage' => 'setItemGroupImage',
        'itemGroupTitle' => 'setItemGroupTitle',
        'itemGroupType' => 'setItemGroupType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemGroupAdditionalImages' => 'getItemGroupAdditionalImages',
        'itemGroupHref' => 'getItemGroupHref',
        'itemGroupId' => 'getItemGroupId',
        'itemGroupImage' => 'getItemGroupImage',
        'itemGroupTitle' => 'getItemGroupTitle',
        'itemGroupType' => 'getItemGroupType'
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
        $this->container['itemGroupAdditionalImages'] = isset($data['itemGroupAdditionalImages']) ? $data['itemGroupAdditionalImages'] : null;
        $this->container['itemGroupHref'] = isset($data['itemGroupHref']) ? $data['itemGroupHref'] : null;
        $this->container['itemGroupId'] = isset($data['itemGroupId']) ? $data['itemGroupId'] : null;
        $this->container['itemGroupImage'] = isset($data['itemGroupImage']) ? $data['itemGroupImage'] : null;
        $this->container['itemGroupTitle'] = isset($data['itemGroupTitle']) ? $data['itemGroupTitle'] : null;
        $this->container['itemGroupType'] = isset($data['itemGroupType']) ? $data['itemGroupType'] : null;
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
     * Gets itemGroupAdditionalImages
     *
     * @return \macropage\SDKs\ebay\rest\browse\Model\Image[]|null
     */
    public function getItemGroupAdditionalImages()
    {
        return $this->container['itemGroupAdditionalImages'];
    }

    /**
     * Sets itemGroupAdditionalImages
     *
     * @param \macropage\SDKs\ebay\rest\browse\Model\Image[]|null $itemGroupAdditionalImages An array of containers with the URLs for images that are in addition to the primary image of the item group. The primary image is returned in the itemGroupImage field.
     *
     * @return $this
     */
    public function setItemGroupAdditionalImages($itemGroupAdditionalImages)
    {
        $this->container['itemGroupAdditionalImages'] = $itemGroupAdditionalImages;

        return $this;
    }

    /**
     * Gets itemGroupHref
     *
     * @return string|null
     */
    public function getItemGroupHref()
    {
        return $this->container['itemGroupHref'];
    }

    /**
     * Sets itemGroupHref
     *
     * @param string|null $itemGroupHref The HATEOAS reference of the parent page of the item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc.
     *
     * @return $this
     */
    public function setItemGroupHref($itemGroupHref)
    {
        $this->container['itemGroupHref'] = $itemGroupHref;

        return $this;
    }

    /**
     * Gets itemGroupId
     *
     * @return string|null
     */
    public function getItemGroupId()
    {
        return $this->container['itemGroupId'];
    }

    /**
     * Sets itemGroupId
     *
     * @param string|null $itemGroupId The unique identifier for the item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc.
     *
     * @return $this
     */
    public function setItemGroupId($itemGroupId)
    {
        $this->container['itemGroupId'] = $itemGroupId;

        return $this;
    }

    /**
     * Gets itemGroupImage
     *
     * @return \macropage\SDKs\ebay\rest\browse\Model\Image|null
     */
    public function getItemGroupImage()
    {
        return $this->container['itemGroupImage'];
    }

    /**
     * Sets itemGroupImage
     *
     * @param \macropage\SDKs\ebay\rest\browse\Model\Image|null $itemGroupImage itemGroupImage
     *
     * @return $this
     */
    public function setItemGroupImage($itemGroupImage)
    {
        $this->container['itemGroupImage'] = $itemGroupImage;

        return $this;
    }

    /**
     * Gets itemGroupTitle
     *
     * @return string|null
     */
    public function getItemGroupTitle()
    {
        return $this->container['itemGroupTitle'];
    }

    /**
     * Sets itemGroupTitle
     *
     * @param string|null $itemGroupTitle The title of the item that appears on the item group page. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc.
     *
     * @return $this
     */
    public function setItemGroupTitle($itemGroupTitle)
    {
        $this->container['itemGroupTitle'] = $itemGroupTitle;

        return $this;
    }

    /**
     * Gets itemGroupType
     *
     * @return \macropage\SDKs\ebay\rest\browse\Model\ItemGroupTypeEnum|null
     */
    public function getItemGroupType()
    {
        return $this->container['itemGroupType'];
    }

    /**
     * Sets itemGroupType
     *
     * @param \macropage\SDKs\ebay\rest\browse\Model\ItemGroupTypeEnum|null $itemGroupType itemGroupType
     *
     * @return $this
     */
    public function setItemGroupType($itemGroupType)
    {
        $this->container['itemGroupType'] = $itemGroupType;

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


