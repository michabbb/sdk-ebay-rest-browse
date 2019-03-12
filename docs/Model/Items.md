# Items

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**commonDescriptions** | [**\macropage\SDKs\ebay\rest\browse\Model\CommonDescriptions[]**](CommonDescriptions.md) | An array of containers for a description and the item IDs of all the items that have this exact description. Often the item variations within an item group all have the same description. Instead of repeating this description in the item details of each item, an description that is shared by at one other item is returned in this container. If the description is unique, it is returned in the items.description field. | [optional] 
**items** | [**\macropage\SDKs\ebay\rest\browse\Model\Item[]**](Item.md) | An array of containers for all the item variations details, excluding the description. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


