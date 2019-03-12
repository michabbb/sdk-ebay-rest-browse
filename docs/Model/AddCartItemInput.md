# AddCartItemInput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**itemId** | **string** | The eBay RESTful identifier of the item you want added to the cart. RESTful Item ID Format: v1|#|# For example: v1|272394640372|0 v1|162846450672|461882996982 For more information about item ID for RESTful APIs, see the Legacy API compatibility section of the Buy APIs Overview. Maximum number of items in a cart: 100 | [optional] 
**quantity** | **int** | The number of this item the buyer wants to purchase. If this value is greater than the number available, the service will change this value to the number available. If this happens, a warning is returned. Maximum: number available | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


