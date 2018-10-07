# Krak\MagentoApiClient\QuoteCartItemRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteCartItemRepositoryV1DeleteByIdDelete**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1DeleteByIdDelete) | **DELETE** /V1/carts/{cartId}/items/{itemId} | 
[**quoteCartItemRepositoryV1DeleteByIdDelete_0**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1DeleteByIdDelete_0) | **DELETE** /V1/carts/mine/items/{itemId} | 
[**quoteCartItemRepositoryV1GetListGet**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1GetListGet) | **GET** /V1/carts/{cartId}/items | 
[**quoteCartItemRepositoryV1GetListGet_0**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1GetListGet_0) | **GET** /V1/carts/mine/items | 
[**quoteCartItemRepositoryV1SavePost**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1SavePost) | **POST** /V1/carts/{quoteId}/items | 
[**quoteCartItemRepositoryV1SavePost_0**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1SavePost_0) | **POST** /V1/carts/mine/items | 
[**quoteCartItemRepositoryV1SavePut**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1SavePut) | **PUT** /V1/carts/{cartId}/items/{itemId} | 
[**quoteCartItemRepositoryV1SavePut_0**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1SavePut_0) | **PUT** /V1/carts/mine/items/{itemId} | 


# **quoteCartItemRepositoryV1DeleteByIdDelete**
> bool quoteCartItemRepositoryV1DeleteByIdDelete($cartId, $itemId)



Removes the specified item from the specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteCartItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = 56; // int | The cart ID.
$itemId = 56; // int | The item ID of the item to be removed.

try {
    $result = $apiInstance->quoteCartItemRepositoryV1DeleteByIdDelete($cartId, $itemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |
 **itemId** | **int**| The item ID of the item to be removed. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1DeleteByIdDelete_0**
> bool quoteCartItemRepositoryV1DeleteByIdDelete_0($itemId)



Removes the specified item from the specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteCartItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemId = 56; // int | The item ID of the item to be removed.

try {
    $result = $apiInstance->quoteCartItemRepositoryV1DeleteByIdDelete_0($itemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1DeleteByIdDelete_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemId** | **int**| The item ID of the item to be removed. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\QuoteDataCartItemInterface[] quoteCartItemRepositoryV1GetListGet($cartId)



Lists items that are assigned to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteCartItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = 56; // int | The cart ID.

try {
    $result = $apiInstance->quoteCartItemRepositoryV1GetListGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataCartItemInterface[]**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1GetListGet_0**
> \Krak\MagentoApiClient\Model\QuoteDataCartItemInterface[] quoteCartItemRepositoryV1GetListGet_0()



Lists items that are assigned to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteCartItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->quoteCartItemRepositoryV1GetListGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1GetListGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataCartItemInterface[]**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1SavePost**
> \Krak\MagentoApiClient\Model\QuoteDataCartItemInterface quoteCartItemRepositoryV1SavePost($quoteId, $quoteCartItemRepositoryV1SavePostBody)



Add/update the specified cart item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteCartItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$quoteId = "quoteId_example"; // string | 
$quoteCartItemRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\QuoteCartItemRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\QuoteCartItemRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->quoteCartItemRepositoryV1SavePost($quoteId, $quoteCartItemRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quoteId** | **string**|  |
 **quoteCartItemRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\QuoteCartItemRepositoryV1SavePostBody**](../Model/QuoteCartItemRepositoryV1SavePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataCartItemInterface**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1SavePost_0**
> \Krak\MagentoApiClient\Model\QuoteDataCartItemInterface quoteCartItemRepositoryV1SavePost_0($quoteCartItemRepositoryV1SavePostBody)



Add/update the specified cart item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteCartItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$quoteCartItemRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\QuoteCartItemRepositoryV1SavePostBody1(); // \Krak\MagentoApiClient\Model\QuoteCartItemRepositoryV1SavePostBody1 | 

try {
    $result = $apiInstance->quoteCartItemRepositoryV1SavePost_0($quoteCartItemRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1SavePost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quoteCartItemRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\QuoteCartItemRepositoryV1SavePostBody1**](../Model/QuoteCartItemRepositoryV1SavePostBody1.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataCartItemInterface**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1SavePut**
> \Krak\MagentoApiClient\Model\QuoteDataCartItemInterface quoteCartItemRepositoryV1SavePut($cartId, $itemId, $quoteCartItemRepositoryV1SavePutBody)



Add/update the specified cart item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteCartItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | 
$itemId = "itemId_example"; // string | 
$quoteCartItemRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\QuoteCartItemRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\QuoteCartItemRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->quoteCartItemRepositoryV1SavePut($cartId, $itemId, $quoteCartItemRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **itemId** | **string**|  |
 **quoteCartItemRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\QuoteCartItemRepositoryV1SavePutBody**](../Model/QuoteCartItemRepositoryV1SavePutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataCartItemInterface**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1SavePut_0**
> \Krak\MagentoApiClient\Model\QuoteDataCartItemInterface quoteCartItemRepositoryV1SavePut_0($itemId, $quoteCartItemRepositoryV1SavePutBody)



Add/update the specified cart item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteCartItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemId = "itemId_example"; // string | 
$quoteCartItemRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\QuoteCartItemRepositoryV1SavePutBody1(); // \Krak\MagentoApiClient\Model\QuoteCartItemRepositoryV1SavePutBody1 | 

try {
    $result = $apiInstance->quoteCartItemRepositoryV1SavePut_0($itemId, $quoteCartItemRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1SavePut_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemId** | **string**|  |
 **quoteCartItemRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\QuoteCartItemRepositoryV1SavePutBody1**](../Model/QuoteCartItemRepositoryV1SavePutBody1.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataCartItemInterface**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

