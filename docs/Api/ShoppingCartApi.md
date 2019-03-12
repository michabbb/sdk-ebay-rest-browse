# macropage\SDKs\ebay\rest\browse\ShoppingCartApi

All URIs are relative to *https://api.ebay.com/buy/browse/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItem**](ShoppingCartApi.md#addItem) | **POST** /shopping_cart/add_item | 
[**getShoppingCart**](ShoppingCartApi.md#getShoppingCart) | **GET** /shopping_cart/ | 
[**removeItem**](ShoppingCartApi.md#removeItem) | **POST** /shopping_cart/remove_item | 
[**updateQuantity**](ShoppingCartApi.md#updateQuantity) | **POST** /shopping_cart/update_quantity | 


# **addItem**
> \macropage\SDKs\ebay\rest\browse\Model\RemoteShopcartResponse addItem($addCartItemInput)



This is an Experimental method. This method creates an eBay cart for the eBay member, if one does not exist, and adds items to that cart. Because a cart never expires, any item added to the cart will remain in the cart until it is removed. To use this method, you must submit a RESTful item ID and the quantity of the item. If the quantity value is greater than the number of available, the quantity value is changed to the number available and a warning is returned. For example, if there are 15 baseballs available and you set the quantity value to 50, the service automatically changes the value of quantity to 15. The response returns all the items in the eBay member's cart; items added to the cart while on ebay.com as well as items added to the cart using the Browse API. The quantity and state of an item changes often. If the item becomes &quot;unavailable&quot; such as, when the listing has ended or the item is out of stock, whether it has just been added to the cart or has been in the cart for some time, the item will be returned in the unavailableCartItems container. Note: There are differences between how legacy APIs, such as Trading and Finding, and RESTful APIs, such as Browse, return the identifier of an &quot;item&quot;. There is also a difference in what the item ID represents and in the format of the item ID value returned. If you have an item ID from one of the legacy APIs, you can use the legacy item ID with the getItemByLegacyId method to retrieve the RESTful ID for that item. For more information about how to use legacy IDs with the Buy APIs, see Legacy API compatibility in the Buying Integration guide. URLs for this method Production URL: https://api.ebay.com/buy/browse/v1/shopping_cart/ Sandbox URL: https://api.sandbox.ebay.com/buy/browse/v1/shopping_cart/ Note: This method is not available in the eBay API Explorer. Restrictions This method can be used only for eBay members. You can add only items with a FIXED_PRICE that accept PayPal as a payment. For a list of supported sites and other restrictions, see API Restrictions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\browse\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new macropage\SDKs\ebay\rest\browse\Api\ShoppingCartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addCartItemInput = new \macropage\SDKs\ebay\rest\browse\Model\AddCartItemInput(); // \macropage\SDKs\ebay\rest\browse\Model\AddCartItemInput | 

try {
    $result = $apiInstance->addItem($addCartItemInput);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartApi->addItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addCartItemInput** | [**\macropage\SDKs\ebay\rest\browse\Model\AddCartItemInput**](../Model/AddCartItemInput.md)|  | [optional]

### Return type

[**\macropage\SDKs\ebay\rest\browse\Model\RemoteShopcartResponse**](../Model/RemoteShopcartResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShoppingCart**
> \macropage\SDKs\ebay\rest\browse\Model\RemoteShopcartResponse getShoppingCart()



This is an experimental method. This method retrieves all the items in the eBay member's cart; items added to the cart while on ebay.com as well as items added to the cart using the Browse API. There are no URI parameters or request payload. The response returns the summary details of all the items in the eBay member's cart; items added to the cart while on ebay.com as well as items added to the cart using the Browse API. If the cart is empty, the response is HTTP 204. The quantity and state of an item changes often. If the item becomes &quot;unavailable&quot; such as, when the listing has ended or the item is out of stock, the item will be returned in the unavailableCartItems container. URLs for this method Production URL: https://api.ebay.com/buy/browse/v1/shopping_cart/ Sandbox URL: https://api.sandbox.ebay.com/buy/browse/v1/shopping_cart/ Note: This method is not available in the eBay API Explorer. Restrictions This method can be used only for eBay members. For a list of supported sites and other restrictions, see API Restrictions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\browse\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new macropage\SDKs\ebay\rest\browse\Api\ShoppingCartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getShoppingCart();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartApi->getShoppingCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\macropage\SDKs\ebay\rest\browse\Model\RemoteShopcartResponse**](../Model/RemoteShopcartResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeItem**
> \macropage\SDKs\ebay\rest\browse\Model\RemoteShopcartResponse removeItem($removeCartItemInput)



This is an experimental method. This method removes a specific item from the eBay member's cart. You specify the ID of the item in the cart (cartItemId) that you want to remove. The response returns all the items in the eBay member's cart; items added to the cart while on ebay.com as well as items added to the cart using the Browse API. If you remove the last item in the cart, the response is HTTP 204. The quantity and state of an item changes often. If the item becomes &quot;unavailable&quot; such as, when the listing has ended or the item is out of stock, the item will be returned in the unavailableCartItems container. Note: The cartItemId is not the same as the item ID. The cartItemId is the identifier of a specific item in the cart and is generated when the item was added to the cart. URLs for this method Production URL: https://api.ebay.com/buy/browse/v1/shopping_cart/ Sandbox URL: https://api.sandbox.ebay.com/buy/browse/v1/shopping_cart/ Note: This method is not available in the eBay API Explorer. Restrictions This method can be used only for eBay members. For a list of supported sites and other restrictions, see API Restrictions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\browse\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new macropage\SDKs\ebay\rest\browse\Api\ShoppingCartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$removeCartItemInput = new \macropage\SDKs\ebay\rest\browse\Model\RemoveCartItemInput(); // \macropage\SDKs\ebay\rest\browse\Model\RemoveCartItemInput | 

try {
    $result = $apiInstance->removeItem($removeCartItemInput);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartApi->removeItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **removeCartItemInput** | [**\macropage\SDKs\ebay\rest\browse\Model\RemoveCartItemInput**](../Model/RemoveCartItemInput.md)|  | [optional]

### Return type

[**\macropage\SDKs\ebay\rest\browse\Model\RemoteShopcartResponse**](../Model/RemoteShopcartResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateQuantity**
> \macropage\SDKs\ebay\rest\browse\Model\RemoteShopcartResponse updateQuantity($updateCartItemInput)



This is an experimental method. This method updates the quantity value of a specific item in the eBay member's cart. You specify the ID of the item in the cart (cartItemId) and the new value for the quantity. If the quantity value is greater than the number of available, the quantity value is changed to the number available and a warning is returned. For example, if there are 15 baseballs available and you set the quantity value to 50, the service automatically changes the value of quantity to 15. The response returns all the items in the eBay member's cart; items added to the cart while on ebay.com as well as items added to the cart using the Browse API. The quantity and state of an item changes often. If the item becomes &quot;unavailable&quot; such as, the listing has ended or the item is out of stock, the item will be returned in the unavailableCartItems container. Note: The cartItemId is not the same as the item ID. The cartItemId is the identifier of a specific item in the cart and is generated when the item was added to the cart. URLs for this method Production URL: https://api.ebay.com/buy/browse/v1/shopping_cart/ Sandbox URL: https://api.sandbox.ebay.com/buy/browse/v1/shopping_cart/ Note: This method is not available in the eBay API Explorer. Restrictions This method can be used only for eBay members. For a list of supported sites and other restrictions, see API Restrictions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\browse\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new macropage\SDKs\ebay\rest\browse\Api\ShoppingCartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateCartItemInput = new \macropage\SDKs\ebay\rest\browse\Model\UpdateCartItemInput(); // \macropage\SDKs\ebay\rest\browse\Model\UpdateCartItemInput | 

try {
    $result = $apiInstance->updateQuantity($updateCartItemInput);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartApi->updateQuantity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateCartItemInput** | [**\macropage\SDKs\ebay\rest\browse\Model\UpdateCartItemInput**](../Model/UpdateCartItemInput.md)|  | [optional]

### Return type

[**\macropage\SDKs\ebay\rest\browse\Model\RemoteShopcartResponse**](../Model/RemoteShopcartResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

