# # RemoteShopcartResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cartItems** | [**\macropage\SDKs\ebay\rest\browse\Model\CartItem[]**](CartItem.md) | An array of the items in the member&#39;s eBay cart. | [optional] 
**cartSubtotal** | [**\macropage\SDKs\ebay\rest\browse\Model\Amount**](Amount.md) |  | [optional] 
**cartWebUrl** | **string** | The URL of the member&#39;s eBay cart. | [optional] 
**unavailableCartItems** | [**\macropage\SDKs\ebay\rest\browse\Model\CartItem[]**](CartItem.md) | An array of items in the cart that are unavailable. This can be for a variety of reasons such as, when the listing has ended or the item is out of stock. Because a cart never expires, these items will remain in the cart until they are removed. | [optional] 
**warnings** | [**\macropage\SDKs\ebay\rest\browse\Model\ErrorDetailV3[]**](ErrorDetailV3.md) | An array of warning messages. These type of errors do not prevent the call from executing but should be checked. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


