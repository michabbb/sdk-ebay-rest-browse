# # ConvertedAmount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**convertedFromCurrency** | [**\macropage\SDKs\ebay\rest\browse\Model\CurrencyCodeEnum**](CurrencyCodeEnum.md) |  | [optional] 
**convertedFromValue** | **string** | The monetary amount before any conversion is performed, in the currency specified by the convertedFromCurrency field. This value is required or returned only if currency conversion/localization is required. The value field contains the converted amount of this value, in the currency specified by the currency field. | [optional] 
**currency** | [**\macropage\SDKs\ebay\rest\browse\Model\CurrencyCodeEnum**](CurrencyCodeEnum.md) |  | [optional] 
**value** | **string** | The monetary amount, in the currency specified by the currency field. If currency conversion/localization is required, this value is the converted amount, and the convertedFromValue field contains the amount in the original currency. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


