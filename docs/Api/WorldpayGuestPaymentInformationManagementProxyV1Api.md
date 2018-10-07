# Krak\MagentoApiClient\WorldpayGuestPaymentInformationManagementProxyV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost**](WorldpayGuestPaymentInformationManagementProxyV1Api.md#worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost) | **POST** /V1/worldpay-guest-carts/{cartId}/payment-information | 


# **worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost**
> int worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost($cartId, $worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPostBody)



Proxy handler for guest place order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\WorldpayGuestPaymentInformationManagementProxyV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = "cartId_example"; // string | 
$worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPostBody = new \Krak\MagentoApiClient\Model\WorldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPostBody(); // \Krak\MagentoApiClient\Model\WorldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPostBody | 

try {
    $result = $apiInstance->worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost($cartId, $worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldpayGuestPaymentInformationManagementProxyV1Api->worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPostBody** | [**\Krak\MagentoApiClient\Model\WorldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPostBody**](../Model/WorldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPostBody.md)|  | [optional]

### Return type

**int**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

