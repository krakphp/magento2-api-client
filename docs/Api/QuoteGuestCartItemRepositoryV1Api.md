# Krak\MagentoApiClient\QuoteGuestCartItemRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestCartItemRepositoryV1DeleteByIdDelete**](QuoteGuestCartItemRepositoryV1Api.md#quoteGuestCartItemRepositoryV1DeleteByIdDelete) | **DELETE** /V1/guest-carts/{cartId}/items/{itemId} | 
[**quoteGuestCartItemRepositoryV1GetListGet**](QuoteGuestCartItemRepositoryV1Api.md#quoteGuestCartItemRepositoryV1GetListGet) | **GET** /V1/guest-carts/{cartId}/items | 
[**quoteGuestCartItemRepositoryV1SavePost**](QuoteGuestCartItemRepositoryV1Api.md#quoteGuestCartItemRepositoryV1SavePost) | **POST** /V1/guest-carts/{cartId}/items | 
[**quoteGuestCartItemRepositoryV1SavePut**](QuoteGuestCartItemRepositoryV1Api.md#quoteGuestCartItemRepositoryV1SavePut) | **PUT** /V1/guest-carts/{cartId}/items/{itemId} | 


# **quoteGuestCartItemRepositoryV1DeleteByIdDelete**
> bool quoteGuestCartItemRepositoryV1DeleteByIdDelete($cartId, $itemId)



Remove the specified item from the specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteGuestCartItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | The cart ID.
$itemId = 56; // int | The item ID of the item to be removed.

try {
    $result = $apiInstance->quoteGuestCartItemRepositoryV1DeleteByIdDelete($cartId, $itemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCartItemRepositoryV1Api->quoteGuestCartItemRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**| The cart ID. |
 **itemId** | **int**| The item ID of the item to be removed. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGuestCartItemRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\QuoteDataCartItemInterface[] quoteGuestCartItemRepositoryV1GetListGet($cartId)



List items that are assigned to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteGuestCartItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | The cart ID.

try {
    $result = $apiInstance->quoteGuestCartItemRepositoryV1GetListGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCartItemRepositoryV1Api->quoteGuestCartItemRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**| The cart ID. |

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataCartItemInterface[]**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGuestCartItemRepositoryV1SavePost**
> \Krak\MagentoApiClient\Model\QuoteDataCartItemInterface quoteGuestCartItemRepositoryV1SavePost($cartId, $quoteGuestCartItemRepositoryV1SavePostBody)



Add/update the specified cart item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteGuestCartItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | 
$quoteGuestCartItemRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\QuoteGuestCartItemRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\QuoteGuestCartItemRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->quoteGuestCartItemRepositoryV1SavePost($cartId, $quoteGuestCartItemRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCartItemRepositoryV1Api->quoteGuestCartItemRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **quoteGuestCartItemRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\QuoteGuestCartItemRepositoryV1SavePostBody**](../Model/QuoteGuestCartItemRepositoryV1SavePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataCartItemInterface**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGuestCartItemRepositoryV1SavePut**
> \Krak\MagentoApiClient\Model\QuoteDataCartItemInterface quoteGuestCartItemRepositoryV1SavePut($cartId, $itemId, $quoteGuestCartItemRepositoryV1SavePutBody)



Add/update the specified cart item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteGuestCartItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | 
$itemId = "itemId_example"; // string | 
$quoteGuestCartItemRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\QuoteGuestCartItemRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\QuoteGuestCartItemRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->quoteGuestCartItemRepositoryV1SavePut($cartId, $itemId, $quoteGuestCartItemRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCartItemRepositoryV1Api->quoteGuestCartItemRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **itemId** | **string**|  |
 **quoteGuestCartItemRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\QuoteGuestCartItemRepositoryV1SavePutBody**](../Model/QuoteGuestCartItemRepositoryV1SavePutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataCartItemInterface**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

