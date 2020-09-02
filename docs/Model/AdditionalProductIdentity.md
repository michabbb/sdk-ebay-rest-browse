# # AdditionalProductIdentity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**productIdentity** | [**\macropage\SDKs\ebay\rest\browse\Model\ProductIdentity[]**](ProductIdentity.md) | An array of the product identifier/value pairs for the product associated with the item. This is returned if the seller has associated the eBay Product Identifier (ePID) with the item and the request has fieldgroups set to PRODUCT. The following table shows what is returned, based on the item information provided by the seller, when the fieldgroups set to PRODUCT. ePID Provided Product&amp;nbsp;ID(s) Provided Response No No The AdditionalProductIdentity container is not returned. No Yes The AdditionalProductIdentity container is not returned but the product identifiers specified by the seller are returned in the localizedAspects container. Yes No The AdditionalProductIdentity container is returned listing the product identifiers of the product. Yes Yes The AdditionalProductIdentity container is returned listing all the product identifiers of the product and the product identifiers specified by the seller are returned in the localizedAspects container. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


