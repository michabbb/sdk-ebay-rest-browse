<?php
/**
 * ProductTest
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
 * OpenAPI Generator version: 4.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace macropage\SDKs\ebay\rest\browse;

use PHPUnit\Framework\TestCase;

/**
 * ProductTest Class Doc Comment
 *
 * @category    Class
 * @description The type that defines the fields for the product information of the item.
 * @package     macropage\SDKs\ebay\rest\browse
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ProductTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "Product"
     */
    public function testProduct()
    {
    }

    /**
     * Test attribute "additionalImages"
     */
    public function testPropertyAdditionalImages()
    {
    }

    /**
     * Test attribute "additionalProductIdentities"
     */
    public function testPropertyAdditionalProductIdentities()
    {
    }

    /**
     * Test attribute "aspectGroups"
     */
    public function testPropertyAspectGroups()
    {
    }

    /**
     * Test attribute "brand"
     */
    public function testPropertyBrand()
    {
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
    }

    /**
     * Test attribute "gtins"
     */
    public function testPropertyGtins()
    {
    }

    /**
     * Test attribute "image"
     */
    public function testPropertyImage()
    {
    }

    /**
     * Test attribute "mpns"
     */
    public function testPropertyMpns()
    {
    }

    /**
     * Test attribute "title"
     */
    public function testPropertyTitle()
    {
    }
}
