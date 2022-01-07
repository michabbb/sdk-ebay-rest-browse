# # CartItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cartItemId** | **string** | The identifier for the item being added to the cart. This is generated when the item is added to the cart. | [optional]
**cartItemSubtotal** | [**\macropage\SDKs\ebay\rest\browse\Model\Amount**](Amount.md) |  | [optional]
**image** | [**\macropage\SDKs\ebay\rest\browse\Model\Image**](Image.md) |  | [optional]
**itemId** | **string** | The RESTful identifier of the item. This identifier is generated when the item was listed. &lt;br /&gt;&lt;br /&gt; &lt;b&gt;RESTful Item ID Format: &lt;/b&gt;&lt;code&gt;v1&lt;/code&gt;|&lt;code&gt;&lt;i&gt;#&lt;/i&gt;&lt;/code&gt;|&lt;code&gt;&lt;i&gt;#&lt;/i&gt;&lt;/code&gt; &lt;br /&gt;&lt;b&gt; For example: &lt;/b&gt;&lt;br /&gt; &lt;code&gt;v1|2**********2|0&lt;/code&gt; &lt;br /&gt;&lt;code&gt;v1|1**********2|4**********2&lt;/code&gt; | [optional]
**itemWebUrl** | **string** | The URL of the eBay view item page for the item. | [optional]
**price** | [**\macropage\SDKs\ebay\rest\browse\Model\Price**](Price.md) |  | [optional]
**quantity** | **int** | The number of this item the buyer wants to purchase. | [optional]
**title** | **string** | The title of the item. This can be written by the seller or come from the eBay product catalog. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
