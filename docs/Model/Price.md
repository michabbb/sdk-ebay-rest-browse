# # Price

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**convertedFromCurrency** | [**\macropage\SDKs\ebay\rest\browse\Model\CurrencyCodeEnum**](CurrencyCodeEnum.md) |  | [optional] 
**convertedFromValue** | **string** | The monetary amount before any conversion is performed, in the currency specified by the convertedFromCurrency field. This value is the pre-conversion amount. The value field contains the converted amount of this value, in the currency specified by the currency field. | [optional] 
**currency** | [**\macropage\SDKs\ebay\rest\browse\Model\CurrencyCodeEnum**](CurrencyCodeEnum.md) |  | [optional] 
**value** | **string** | The dollar value of the currency specified in the currency field. The value of currency defaults to the standard currency used by the country of the eBay site offering the item. If currency conversion/localization was performed, this is the post-conversion amount. Default: The currency of the user&#39;s country. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


