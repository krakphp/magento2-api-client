# Krak\MagentoApiClient\CheckoutGuestShippingInformationManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkoutGuestShippingInformationManagementV1SaveAddressInformationPost**](CheckoutGuestShippingInformationManagementV1Api.md#checkoutGuestShippingInformationManagementV1SaveAddressInformationPost) | **POST** /V1/guest-carts/{cartId}/shipping-information | 


# **checkoutGuestShippingInformationManagementV1SaveAddressInformationPost**
> \Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface checkoutGuestShippingInformationManagementV1SaveAddressInformationPost($cartId, $checkoutGuestShippingInformationManagementV1SaveAddressInformationPostBody)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CheckoutGuestShippingInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = "cartId_example"; // string | 
$checkoutGuestShippingInformationManagementV1SaveAddressInformationPostBody = new \Krak\MagentoApiClient\Model\CheckoutGuestShippingInformationManagementV1SaveAddressInformationPostBody(); // \Krak\MagentoApiClient\Model\CheckoutGuestShippingInformationManagementV1SaveAddressInformationPostBody | 

try {
    $result = $apiInstance->checkoutGuestShippingInformationManagementV1SaveAddressInformationPost($cartId, $checkoutGuestShippingInformationManagementV1SaveAddressInformationPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutGuestShippingInformationManagementV1Api->checkoutGuestShippingInformationManagementV1SaveAddressInformationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **checkoutGuestShippingInformationManagementV1SaveAddressInformationPostBody** | [**\Krak\MagentoApiClient\Model\CheckoutGuestShippingInformationManagementV1SaveAddressInformationPostBody**](../Model/CheckoutGuestShippingInformationManagementV1SaveAddressInformationPostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface**](../Model/CheckoutDataPaymentDetailsInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

