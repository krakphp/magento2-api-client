# Krak\MagentoApiClient\NegotiableQuoteCouponManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuoteCouponManagementV1RemoveDelete**](NegotiableQuoteCouponManagementV1Api.md#negotiableQuoteCouponManagementV1RemoveDelete) | **DELETE** /V1/negotiable-carts/{cartId}/coupons | 
[**negotiableQuoteCouponManagementV1SetPut**](NegotiableQuoteCouponManagementV1Api.md#negotiableQuoteCouponManagementV1SetPut) | **PUT** /V1/negotiable-carts/{cartId}/coupons/{couponCode} | 


# **negotiableQuoteCouponManagementV1RemoveDelete**
> bool negotiableQuoteCouponManagementV1RemoveDelete($cartId)



Deletes a coupon from a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\NegotiableQuoteCouponManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = 56; // int | The cart ID.

try {
    $result = $apiInstance->negotiableQuoteCouponManagementV1RemoveDelete($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteCouponManagementV1Api->negotiableQuoteCouponManagementV1RemoveDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **negotiableQuoteCouponManagementV1SetPut**
> bool negotiableQuoteCouponManagementV1SetPut($cartId, $couponCode)



Adds a coupon by code to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\NegotiableQuoteCouponManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = 56; // int | The cart ID.
$couponCode = "couponCode_example"; // string | The coupon code data.

try {
    $result = $apiInstance->negotiableQuoteCouponManagementV1SetPut($cartId, $couponCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteCouponManagementV1Api->negotiableQuoteCouponManagementV1SetPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |
 **couponCode** | **string**| The coupon code data. |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

