<?php
/**
 * ItemGroupSummary
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
 * ItemGroupSummary Class Doc Comment
 *
 * @category Class
 * @description The type that defines the fields for the details of each item in an item group. An item group is  an item that has various aspect differences, such as color, size, storage capacity, etc. When an item group is created, one of the item variations, such as the red shirt size L, is chosen as the \&quot;parent\&quot;. All the other items in the group are the children, such as the blue shirt size L, red shirt size M, etc. &lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt; Note: &lt;/b&gt; This container is returned only if the &lt;b&gt; item_id&lt;/b&gt; in the request is an item group (parent ID of an item with variations).&lt;/span&gt;
 * @package  macropage\SDKs\ebay\rest\browse
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ItemGroupSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

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
        'itemGroupType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
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
        $this->container['itemGroupAdditionalImages'] = $data['itemGroupAdditionalImages'] ?? null;
        $this->container['itemGroupHref'] = $data['itemGroupHref'] ?? null;
        $this->container['itemGroupId'] = $data['itemGroupId'] ?? null;
        $this->container['itemGroupImage'] = $data['itemGroupImage'] ?? null;
        $this->container['itemGroupTitle'] = $data['itemGroupTitle'] ?? null;
        $this->container['itemGroupType'] = $data['itemGroupType'] ?? null;
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
     * @param \macropage\SDKs\ebay\rest\browse\Model\Image[]|null $itemGroupAdditionalImages An array of containers with the URLs for images that are in addition to the primary image of the item group.  The primary image is returned in the <b> itemGroupImage</b> field.
     *
     * @return self
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
     * @return self
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
     * @return self
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
     * @return self
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
     * @return self
     */
    public function setItemGroupTitle($itemGroupTitle)
    {
        $this->container['itemGroupTitle'] = $itemGroupTitle;

        return $this;
    }

    /**
     * Gets itemGroupType
     *
     * @return string|null
     */
    public function getItemGroupType()
    {
        return $this->container['itemGroupType'];
    }

    /**
     * Sets itemGroupType
     *
     * @param string|null $itemGroupType An enumeration value that indicates the type of the item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:ItemGroupTypeEnum'>eBay API documentation</a>
     *
     * @return self
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


