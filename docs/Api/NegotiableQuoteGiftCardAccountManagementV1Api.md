# Krak\MagentoApiClient\NegotiableQuoteGiftCardAccountManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuoteGiftCardAccountManagementV1DeleteByQuoteIdDelete**](NegotiableQuoteGiftCardAccountManagementV1Api.md#negotiableQuoteGiftCardAccountManagementV1DeleteByQuoteIdDelete) | **DELETE** /V1/negotiable-carts/{cartId}/giftCards/{giftCardCode} | 
[**negotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPost**](NegotiableQuoteGiftCardAccountManagementV1Api.md#negotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPost) | **POST** /V1/negotiable-carts/{cartId}/giftCards | 


# **negotiableQuoteGiftCardAccountManagementV1DeleteByQuoteIdDelete**
> bool negotiableQuoteGiftCardAccountManagementV1DeleteByQuoteIdDelete($cartId, $giftCardCode)



Remove GiftCard Account entity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\NegotiableQuoteGiftCardAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = 56; // int | 
$giftCardCode = "giftCardCode_example"; // string | 

try {
    $result = $apiInstance->negotiableQuoteGiftCardAccountManagementV1DeleteByQuoteIdDelete($cartId, $giftCardCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteGiftCardAccountManagementV1Api->negotiableQuoteGiftCardAccountManagementV1DeleteByQuoteIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**|  |
 **giftCardCode** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **negotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPost**
> bool negotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPost($cartId, $negotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPostBody)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\NegotiableQuoteGiftCardAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = 56; // int | 
$negotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPostBody = new \Krak\MagentoApiClient\Model\NegotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPostBody(); // \Krak\MagentoApiClient\Model\NegotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPostBody | 

try {
    $result = $apiInstance->negotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPost($cartId, $negotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteGiftCardAccountManagementV1Api->negotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**|  |
 **negotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPostBody** | [**\Krak\MagentoApiClient\Model\NegotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPostBody**](../Model/NegotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

