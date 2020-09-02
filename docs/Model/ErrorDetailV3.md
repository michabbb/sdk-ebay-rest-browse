# # ErrorDetailV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | **string** | This string value indicates the error category. There are three categories of errors: request errors, application errors, and system errors. | [optional] 
**domain** | **string** | The name of the primary system where the error occurred. This is relevant for application errors. | [optional] 
**errorId** | **int** | A unique code that identifies the particular error or warning that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms. | [optional] 
**inputRefIds** | **string[]** | An array of reference IDs that identify the specific request elements most closely associated to the error or warning, if any. | [optional] 
**longMessage** | **string** | A detailed description of the condition that caused the error or warning, and information on what to do to correct the problem. | [optional] 
**message** | **string** | A description of the condition that caused the error or warning. | [optional] 
**outputRefIds** | **string[]** | An array of reference IDs that identify the specific response elements most closely associated to the error or warning, if any. | [optional] 
**parameters** | [**\macropage\SDKs\ebay\rest\browse\Model\ErrorParameterV3[]**](ErrorParameterV3.md) | An array of warning and error messages that return one or more variables contextual information about the error or warning. This is often the field or value that triggered the error or warning. | [optional] 
**subdomain** | **string** | The name of the subdomain in which the error or warning occurred. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


