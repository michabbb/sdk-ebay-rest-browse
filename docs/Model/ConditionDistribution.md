# # ConditionDistribution

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**condition** | **string** | The text describing the condition of the item, such as New or Used. For a list of condition names, see &lt;a href&#x3D;\&quot;https://developer.ebay.com/devzone/finding/callref/enums/conditionIdList.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Item Condition IDs and Names&lt;/a&gt;.  &lt;br /&gt;&lt;br /&gt;Code so that your app gracefully handles any future changes to this list.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt; Note: &lt;/b&gt;As of September 1, 2021, condition ID 2500 (&#39;Seller Refurbished&#39;) is no longer a valid item condition in the &lt;b&gt;Cell Phones &amp; Smartphones&lt;/b&gt; category (category ID 9355) for the following marketplaces: US, Canada, UK, Germany, and Australia. This refurbished item condition has been replaced by three new refurbished values, which include &#39;Excellent - Refurbished&#39; (condition ID 2010), &#39;Very Good - Refurbished&#39; (condition ID 2020), and &#39;Good - Refurbished&#39; (condition ID 2030).&lt;/span&gt; | [optional]
**conditionId** | **string** | The identifier of the condition. For example, 1000 is the identifier for NEW.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt; Note: &lt;/b&gt;As of September 1, 2021, condition ID 2500 (&#39;Seller Refurbished&#39;) is no longer a valid item condition in the &lt;b&gt;Cell Phones &amp; Smartphones&lt;/b&gt; category (category ID 9355) for the following marketplaces: US, Canada, UK, Germany, and Australia. This refurbished item condition has been replaced by three new refurbished values, which include &#39;Excellent - Refurbished&#39; (condition ID 2010), &#39;Very Good - Refurbished&#39; (condition ID 2020), and &#39;Good - Refurbished&#39; (condition ID 2030).&lt;/span&gt; | [optional]
**matchCount** | **int** | The number of items having the condition. | [optional]
**refinementHref** | **string** | The HATEOAS reference of this condition. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
