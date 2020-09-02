# # ItemSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additionalImages** | [**\macropage\SDKs\ebay\rest\browse\Model\Image[]**](Image.md) | An array of containers with the URLs for the images that are in addition to the primary image. The primary image is returned in the image.imageUrl field. | [optional] 
**adultOnly** | **bool** | This indicates if the item is for adults only. For more information about adult-only items on eBay, see Adult items policy for sellers and Adult-Only items on eBay for buyers. | [optional] 
**bidCount** | **int** | This integer value indicates the total number of bids that have been placed for an auction item. This field is only returned for auction items. | [optional] 
**buyingOptions** | **string[]** | A comma separated list of the purchase options available for the item, such as FIXED_PRICE, AUCTION. FIXED_PRICE - Returned for fixed-price items (non-auction) AUCTION - Returned for auction items without Buy It Now feature FIXED_PRICE and AUCTION - Returned for auction items enabled with the Buy It Now feature Code so that your app gracefully handles any future changes to this list. | [optional] 
**categories** | [**\macropage\SDKs\ebay\rest\browse\Model\Category[]**](Category.md) | This container returns the primary category ID of the item (as well as the secondary category if the item was listed in two categories). | [optional] 
**condition** | **string** | The text describing the condition of the item, such as New or Used. For a list of condition names, see Item Condition IDs and Names. Code so that your app gracefully handles any future changes to this list. | [optional] 
**conditionId** | **string** | The identifier of the condition of the item. For example, 1000 is the identifier for NEW. For a list of condition names and IDs, see Item Condition IDs and Names. Code so that your app gracefully handles any future changes to this list. | [optional] 
**currentBidPrice** | [**\macropage\SDKs\ebay\rest\browse\Model\ConvertedAmount**](ConvertedAmount.md) |  | [optional] 
**distanceFromPickupLocation** | [**\macropage\SDKs\ebay\rest\browse\Model\TargetLocation**](TargetLocation.md) |  | [optional] 
**energyEfficiencyClass** | **string** | This indicates the energy efficiency rating of the item. Energy efficiency ratings apply to products listed by commercial vendors in electronics categories only. Currently, this field is only applicable for the Germany site, and is only returned if the seller specified the energy efficiency rating through item specifics at listing time. Rating values include A+++, A++, A+, A, B, C, D, E, F, and G. | [optional] 
**epid** | **string** | An ePID is the eBay product identifier of a product from the eBay product catalog. This indicates the product in which the item belongs. | [optional] 
**image** | [**\macropage\SDKs\ebay\rest\browse\Model\Image**](Image.md) |  | [optional] 
**itemAffiliateWebUrl** | **string** | The URL to the View Item page of the item, which includes the affiliate tracking ID. This field is only returned if the seller enables affiliate tracking for the item by including the X-EBAY-C-ENDUSERCTX request header in the method. | [optional] 
**itemGroupHref** | **string** | The HATEOAS reference of the parent page of the item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. Note: This field is returned only for item groups. | [optional] 
**itemGroupType** | **string** | The indicates the item group type. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. Currently only SELLER_DEFINED_VARIATIONS is supported and indicates this is an item group created by the seller. Note: This field is returned only for item groups. Code so that your app gracefully handles any future changes to this list. | [optional] 
**itemHref** | **string** | The URI for the Browse API getItem method, which can be used to retrieve more details about items in the search results. | [optional] 
**itemId** | **string** | The unique RESTful identifier of the item. | [optional] 
**itemLocation** | [**\macropage\SDKs\ebay\rest\browse\Model\ItemLocationImpl**](ItemLocationImpl.md) |  | [optional] 
**itemWebUrl** | **string** | The URL to the View Item page of the item. This enables you to include a &amp;quot;Report Item on eBay&amp;quot; hyperlink that takes the buyer to the View Item page on eBay. From there they can report any issues regarding this item to eBay. | [optional] 
**marketingPrice** | [**\macropage\SDKs\ebay\rest\browse\Model\MarketingPrice**](MarketingPrice.md) |  | [optional] 
**pickupOptions** | [**\macropage\SDKs\ebay\rest\browse\Model\PickupOptionSummary[]**](PickupOptionSummary.md) | This container returns the local pickup options available to the buyer. This container is only returned if the user is searching for local pickup items and set the local pickup filters in the method request. | [optional] 
**price** | [**\macropage\SDKs\ebay\rest\browse\Model\ConvertedAmount**](ConvertedAmount.md) |  | [optional] 
**seller** | [**\macropage\SDKs\ebay\rest\browse\Model\Seller**](Seller.md) |  | [optional] 
**shippingOptions** | [**\macropage\SDKs\ebay\rest\browse\Model\ShippingOptionSummary[]**](ShippingOptionSummary.md) | This container returns the shipping options available to ship the item. | [optional] 
**shortDescription** | **string** | This text string is derived from the item condition and the item aspects (such as size, color, capacity, model, brand, etc.). Sometimes the title doesn&#39;t give enough information but the description is too big. Surfacing the shortDescription can often provide buyers with the additional information that could help them make a buying decision. For example: &amp;quot;title&amp;quot;: &amp;quot;Petrel U42W FPV Drone RC Quadcopter w/HD Camera Live Video One Key Off / Landing&amp;quot;, &amp;quot;shortDescription&amp;quot;: &amp;quot;1 U42W Quadcopter. Syma X5SW-V3 Wifi FPV RC Drone Quadcopter 2.4Ghz 6-Axis Gyro with Headless Mode. Syma X20 Pocket Drone 2.4Ghz Mini RC Quadcopter Headless Mode Altitude Hold. One Key Take Off / Landing function: allow beginner to easy to fly the drone without any skill.&amp;quot;, Restriction: This field is returned by the search method only when fieldgroups &#x3D; EXTENDED. | [optional] 
**thumbnailImages** | [**\macropage\SDKs\ebay\rest\browse\Model\Image[]**](Image.md) | An array of thumbnail images for the item. | [optional] 
**title** | **string** | The seller-created title of the item. Maximum Length: 80 characters | [optional] 
**unitPrice** | [**\macropage\SDKs\ebay\rest\browse\Model\ConvertedAmount**](ConvertedAmount.md) |  | [optional] 
**unitPricingMeasure** | **string** | The designation, such as size, weight, volume, count, etc., that was used to specify the quantity of the item. This helps buyers compare prices. For example, the following tells the buyer that the item is 7.99 per 100 grams. &amp;quot;unitPricingMeasure&amp;quot;: &amp;quot;100g&amp;quot;, &amp;quot;unitPrice&amp;quot;: { &amp;nbsp;&amp;nbsp;&amp;quot;value&amp;quot;: &amp;quot;7.99&amp;quot;, &amp;nbsp;&amp;nbsp;&amp;quot;currency&amp;quot;: &amp;quot;GBP&amp;quot; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


