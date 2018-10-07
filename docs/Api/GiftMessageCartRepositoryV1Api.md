# Krak\MagentoApiClient\GiftMessageCartRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**giftMessageCartRepositoryV1GetGet**](GiftMessageCartRepositoryV1Api.md#giftMessageCartRepositoryV1GetGet) | **GET** /V1/carts/{cartId}/gift-message | 
[**giftMessageCartRepositoryV1GetGet_0**](GiftMessageCartRepositoryV1Api.md#giftMessageCartRepositoryV1GetGet_0) | **GET** /V1/carts/mine/gift-message | 
[**giftMessageCartRepositoryV1SavePost**](GiftMessageCartRepositoryV1Api.md#giftMessageCartRepositoryV1SavePost) | **POST** /V1/carts/{cartId}/gift-message | 
[**giftMessageCartRepositoryV1SavePost_0**](GiftMessageCartRepositoryV1Api.md#giftMessageCartRepositoryV1SavePost_0) | **POST** /V1/carts/mine/gift-message | 


# **giftMessageCartRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\GiftMessageDataMessageInterface giftMessageCartRepositoryV1GetGet($cartId)



Return the gift message for a specified order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\GiftMessageCartRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = 56; // int | The shopping cart ID.

try {
    $result = $apiInstance->giftMessageCartRepositoryV1GetGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageCartRepositoryV1Api->giftMessageCartRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The shopping cart ID. |

### Return type

[**\Krak\MagentoApiClient\Model\GiftMessageDataMessageInterface**](../Model/GiftMessageDataMessageInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftMessageCartRepositoryV1GetGet_0**
> \Krak\MagentoApiClient\Model\GiftMessageDataMessageInterface giftMessageCartRepositoryV1GetGet_0()



Return the gift message for a specified order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\GiftMessageCartRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->giftMessageCartRepositoryV1GetGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageCartRepositoryV1Api->giftMessageCartRepositoryV1GetGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Krak\MagentoApiClient\Model\GiftMessageDataMessageInterface**](../Model/GiftMessageDataMessageInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftMessageCartRepositoryV1SavePost**
> bool giftMessageCartRepositoryV1SavePost($cartId, $giftMessageCartRepositoryV1SavePostBody)



Set the gift message for an entire order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\GiftMessageCartRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = 56; // int | The cart ID.
$giftMessageCartRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\GiftMessageCartRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\GiftMessageCartRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->giftMessageCartRepositoryV1SavePost($cartId, $giftMessageCartRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageCartRepositoryV1Api->giftMessageCartRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |
 **giftMessageCartRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\GiftMessageCartRepositoryV1SavePostBody**](../Model/GiftMessageCartRepositoryV1SavePostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftMessageCartRepositoryV1SavePost_0**
> bool giftMessageCartRepositoryV1SavePost_0($giftMessageCartRepositoryV1SavePostBody)



Set the gift message for an entire order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\GiftMessageCartRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$giftMessageCartRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\GiftMessageCartRepositoryV1SavePostBody1(); // \Krak\MagentoApiClient\Model\GiftMessageCartRepositoryV1SavePostBody1 | 

try {
    $result = $apiInstance->giftMessageCartRepositoryV1SavePost_0($giftMessageCartRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageCartRepositoryV1Api->giftMessageCartRepositoryV1SavePost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **giftMessageCartRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\GiftMessageCartRepositoryV1SavePostBody1**](../Model/GiftMessageCartRepositoryV1SavePostBody1.md)|  | [optional]

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

