# Krak\MagentoApiClient\GiftMessageItemRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**giftMessageItemRepositoryV1GetGet**](GiftMessageItemRepositoryV1Api.md#giftMessageItemRepositoryV1GetGet) | **GET** /V1/carts/{cartId}/gift-message/{itemId} | 
[**giftMessageItemRepositoryV1GetGet_0**](GiftMessageItemRepositoryV1Api.md#giftMessageItemRepositoryV1GetGet_0) | **GET** /V1/carts/mine/gift-message/{itemId} | 
[**giftMessageItemRepositoryV1SavePost**](GiftMessageItemRepositoryV1Api.md#giftMessageItemRepositoryV1SavePost) | **POST** /V1/carts/{cartId}/gift-message/{itemId} | 
[**giftMessageItemRepositoryV1SavePost_0**](GiftMessageItemRepositoryV1Api.md#giftMessageItemRepositoryV1SavePost_0) | **POST** /V1/carts/mine/gift-message/{itemId} | 


# **giftMessageItemRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\GiftMessageDataMessageInterface giftMessageItemRepositoryV1GetGet($cartId, $itemId)



Return the gift message for a specified item in a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\GiftMessageItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = 56; // int | The shopping cart ID.
$itemId = 56; // int | The item ID.

try {
    $result = $apiInstance->giftMessageItemRepositoryV1GetGet($cartId, $itemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageItemRepositoryV1Api->giftMessageItemRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The shopping cart ID. |
 **itemId** | **int**| The item ID. |

### Return type

[**\Krak\MagentoApiClient\Model\GiftMessageDataMessageInterface**](../Model/GiftMessageDataMessageInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftMessageItemRepositoryV1GetGet_0**
> \Krak\MagentoApiClient\Model\GiftMessageDataMessageInterface giftMessageItemRepositoryV1GetGet_0($itemId)



Return the gift message for a specified item in a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\GiftMessageItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemId = 56; // int | The item ID.

try {
    $result = $apiInstance->giftMessageItemRepositoryV1GetGet_0($itemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageItemRepositoryV1Api->giftMessageItemRepositoryV1GetGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemId** | **int**| The item ID. |

### Return type

[**\Krak\MagentoApiClient\Model\GiftMessageDataMessageInterface**](../Model/GiftMessageDataMessageInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftMessageItemRepositoryV1SavePost**
> bool giftMessageItemRepositoryV1SavePost($cartId, $itemId, $giftMessageItemRepositoryV1SavePostBody)



Set the gift message for a specified item in a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\GiftMessageItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = 56; // int | The cart ID.
$itemId = 56; // int | The item ID.
$giftMessageItemRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\GiftMessageItemRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\GiftMessageItemRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->giftMessageItemRepositoryV1SavePost($cartId, $itemId, $giftMessageItemRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageItemRepositoryV1Api->giftMessageItemRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |
 **itemId** | **int**| The item ID. |
 **giftMessageItemRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\GiftMessageItemRepositoryV1SavePostBody**](../Model/GiftMessageItemRepositoryV1SavePostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftMessageItemRepositoryV1SavePost_0**
> bool giftMessageItemRepositoryV1SavePost_0($itemId, $giftMessageItemRepositoryV1SavePostBody)



Set the gift message for a specified item in a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\GiftMessageItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemId = 56; // int | The item ID.
$giftMessageItemRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\GiftMessageItemRepositoryV1SavePostBody1(); // \Krak\MagentoApiClient\Model\GiftMessageItemRepositoryV1SavePostBody1 | 

try {
    $result = $apiInstance->giftMessageItemRepositoryV1SavePost_0($itemId, $giftMessageItemRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageItemRepositoryV1Api->giftMessageItemRepositoryV1SavePost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemId** | **int**| The item ID. |
 **giftMessageItemRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\GiftMessageItemRepositoryV1SavePostBody1**](../Model/GiftMessageItemRepositoryV1SavePostBody1.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

