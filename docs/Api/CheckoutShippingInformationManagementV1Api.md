# Krak\MagentoApiClient\CheckoutShippingInformationManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkoutShippingInformationManagementV1SaveAddressInformationPost**](CheckoutShippingInformationManagementV1Api.md#checkoutShippingInformationManagementV1SaveAddressInformationPost) | **POST** /V1/carts/mine/shipping-information | 
[**checkoutShippingInformationManagementV1SaveAddressInformationPost_0**](CheckoutShippingInformationManagementV1Api.md#checkoutShippingInformationManagementV1SaveAddressInformationPost_0) | **POST** /V1/carts/{cartId}/shipping-information | 


# **checkoutShippingInformationManagementV1SaveAddressInformationPost**
> \Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface checkoutShippingInformationManagementV1SaveAddressInformationPost($checkoutShippingInformationManagementV1SaveAddressInformationPostBody)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CheckoutShippingInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkoutShippingInformationManagementV1SaveAddressInformationPostBody = new \Krak\MagentoApiClient\Model\CheckoutShippingInformationManagementV1SaveAddressInformationPostBody(); // \Krak\MagentoApiClient\Model\CheckoutShippingInformationManagementV1SaveAddressInformationPostBody | 

try {
    $result = $apiInstance->checkoutShippingInformationManagementV1SaveAddressInformationPost($checkoutShippingInformationManagementV1SaveAddressInformationPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutShippingInformationManagementV1Api->checkoutShippingInformationManagementV1SaveAddressInformationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkoutShippingInformationManagementV1SaveAddressInformationPostBody** | [**\Krak\MagentoApiClient\Model\CheckoutShippingInformationManagementV1SaveAddressInformationPostBody**](../Model/CheckoutShippingInformationManagementV1SaveAddressInformationPostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface**](../Model/CheckoutDataPaymentDetailsInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkoutShippingInformationManagementV1SaveAddressInformationPost_0**
> \Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface checkoutShippingInformationManagementV1SaveAddressInformationPost_0($cartId, $checkoutShippingInformationManagementV1SaveAddressInformationPostBody)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CheckoutShippingInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = 56; // int | 
$checkoutShippingInformationManagementV1SaveAddressInformationPostBody = new \Krak\MagentoApiClient\Model\CheckoutShippingInformationManagementV1SaveAddressInformationPostBody1(); // \Krak\MagentoApiClient\Model\CheckoutShippingInformationManagementV1SaveAddressInformationPostBody1 | 

try {
    $result = $apiInstance->checkoutShippingInformationManagementV1SaveAddressInformationPost_0($cartId, $checkoutShippingInformationManagementV1SaveAddressInformationPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutShippingInformationManagementV1Api->checkoutShippingInformationManagementV1SaveAddressInformationPost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**|  |
 **checkoutShippingInformationManagementV1SaveAddressInformationPostBody** | [**\Krak\MagentoApiClient\Model\CheckoutShippingInformationManagementV1SaveAddressInformationPostBody1**](../Model/CheckoutShippingInformationManagementV1SaveAddressInformationPostBody1.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface**](../Model/CheckoutDataPaymentDetailsInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

