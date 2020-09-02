# # EstimatedAvailability

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**availabilityThreshold** | **int** | This field is return only when the seller sets their &#39;display item quantity&#39; preference to Display &amp;quot;More than 10 available&amp;quot; in your listing (if applicable). The value of this field will be &amp;quot;10&amp;quot;, which is the threshold value. Code so that your app gracefully handles any future changes to this value. | [optional] 
**availabilityThresholdType** | [**\macropage\SDKs\ebay\rest\browse\Model\AvailabilityThresholdEnum**](AvailabilityThresholdEnum.md) |  | [optional] 
**deliveryOptions** | [**\macropage\SDKs\ebay\rest\browse\Model\DeliveryOptionsEnum[]**](DeliveryOptionsEnum.md) | An array of available delivery options. Code so that your app gracefully handles any future changes to this list. | [optional] 
**estimatedAvailabilityStatus** | [**\macropage\SDKs\ebay\rest\browse\Model\AvailabilityStatusEnum**](AvailabilityStatusEnum.md) |  | [optional] 
**estimatedAvailableQuantity** | **int** | The estimated number of this item that are available for purchase. Because the quantity of an item can change several times within a second, it is impossible to return the exact quantity. So instead of returning quantity, the estimated availability of the item is returned. | [optional] 
**estimatedSoldQuantity** | **int** | The estimated number of this item that have been sold. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


