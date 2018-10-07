# Krak\MagentoApiClient\NegotiableQuoteShippingInformationManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuoteShippingInformationManagementV1SaveAddressInformationPost**](NegotiableQuoteShippingInformationManagementV1Api.md#negotiableQuoteShippingInformationManagementV1SaveAddressInformationPost) | **POST** /V1/negotiable-carts/{cartId}/shipping-information | 


# **negotiableQuoteShippingInformationManagementV1SaveAddressInformationPost**
> \Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface negotiableQuoteShippingInformationManagementV1SaveAddressInformationPost($cartId, $negotiableQuoteShippingInformationManagementV1SaveAddressInformationPostBody)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\NegotiableQuoteShippingInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = 56; // int | 
$negotiableQuoteShippingInformationManagementV1SaveAddressInformationPostBody = new \Krak\MagentoApiClient\Model\NegotiableQuoteShippingInformationManagementV1SaveAddressInformationPostBody(); // \Krak\MagentoApiClient\Model\NegotiableQuoteShippingInformationManagementV1SaveAddressInformationPostBody | 

try {
    $result = $apiInstance->negotiableQuoteShippingInformationManagementV1SaveAddressInformationPost($cartId, $negotiableQuoteShippingInformationManagementV1SaveAddressInformationPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteShippingInformationManagementV1Api->negotiableQuoteShippingInformationManagementV1SaveAddressInformationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**|  |
 **negotiableQuoteShippingInformationManagementV1SaveAddressInformationPostBody** | [**\Krak\MagentoApiClient\Model\NegotiableQuoteShippingInformationManagementV1SaveAddressInformationPostBody**](../Model/NegotiableQuoteShippingInformationManagementV1SaveAddressInformationPostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface**](../Model/CheckoutDataPaymentDetailsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

