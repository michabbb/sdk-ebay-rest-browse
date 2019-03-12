# ItemReturnTerms

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**extendedHolidayReturnsOffered** | **bool** | Indicates if the seller has enabled the Extended Holiday Returns feature on the item. Extended Holiday Returns are only applicable during the US holiday season, and gives buyers extra time to return an item. This &#39;extra time&#39; will typically extend beyond what is set through the returnPeriod value. | [optional] 
**refundMethod** | [**\macropage\SDKs\ebay\rest\browse\Model\RefundMethodEnum**](RefundMethodEnum.md) |  | [optional] 
**restockingFeePercentage** | **string** | This string field indicates the restocking fee percentage that the seller has set on the item. Sellers have the option of setting no restocking fee for an item, or they can set the percentage to 10, 15, or 20 percent. So, if the cost of the item was $100, and the restocking percentage was 20 percent, the buyer would be charged $20 to return that item, so instead of receiving a $100 refund, they would receive $80 due to the restocking fee. | [optional] 
**returnInstructions** | **string** | Text written by the seller describing what the buyer needs to do in order to return the item. | [optional] 
**returnMethod** | [**\macropage\SDKs\ebay\rest\browse\Model\ReturnMethodEnum**](ReturnMethodEnum.md) |  | [optional] 
**returnPeriod** | [**\macropage\SDKs\ebay\rest\browse\Model\TimeDuration**](TimeDuration.md) |  | [optional] 
**returnsAccepted** | **bool** | Indicates whether the seller accepts returns for the item. | [optional] 
**returnShippingCostPayer** | [**\macropage\SDKs\ebay\rest\browse\Model\ReturnShippingCostPayerEnum**](ReturnShippingCostPayerEnum.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


