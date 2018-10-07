# Krak\MagentoApiClient\GiftCardAccountGuestGiftCardAccountManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost**](GiftCardAccountGuestGiftCardAccountManagementV1Api.md#giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost) | **POST** /V1/carts/guest-carts/{cartId}/giftCards | 
[**giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet**](GiftCardAccountGuestGiftCardAccountManagementV1Api.md#giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet) | **GET** /V1/carts/guest-carts/{cartId}/checkGiftCard/{giftCardCode} | 
[**giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete**](GiftCardAccountGuestGiftCardAccountManagementV1Api.md#giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete) | **DELETE** /V1/carts/guest-carts/{cartId}/giftCards/{giftCardCode} | 


# **giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost**
> bool giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost($cartId, $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\GiftCardAccountGuestGiftCardAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = "cartId_example"; // string | 
$giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody = new \Krak\MagentoApiClient\Model\GiftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody(); // \Krak\MagentoApiClient\Model\GiftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody | 

try {
    $result = $apiInstance->giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost($cartId, $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardAccountGuestGiftCardAccountManagementV1Api->giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody** | [**\Krak\MagentoApiClient\Model\GiftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody**](../Model/GiftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet**
> float giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet($cartId, $giftCardCode)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\GiftCardAccountGuestGiftCardAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = "cartId_example"; // string | 
$giftCardCode = "giftCardCode_example"; // string | 

try {
    $result = $apiInstance->giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet($cartId, $giftCardCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardAccountGuestGiftCardAccountManagementV1Api->giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **giftCardCode** | **string**|  |

### Return type

**float**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete**
> bool giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete($cartId, $giftCardCode)



Remove GiftCard Account entity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\GiftCardAccountGuestGiftCardAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = "cartId_example"; // string | 
$giftCardCode = "giftCardCode_example"; // string | 

try {
    $result = $apiInstance->giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete($cartId, $giftCardCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardAccountGuestGiftCardAccountManagementV1Api->giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **giftCardCode** | **string**|  |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

