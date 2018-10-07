# Krak\MagentoApiClient\NegotiableQuoteShippingMethodManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuoteShippingMethodManagementV1EstimateByAddressIdPost**](NegotiableQuoteShippingMethodManagementV1Api.md#negotiableQuoteShippingMethodManagementV1EstimateByAddressIdPost) | **POST** /V1/negotiable-carts/{cartId}/estimate-shipping-methods-by-address-id | 


# **negotiableQuoteShippingMethodManagementV1EstimateByAddressIdPost**
> \Krak\MagentoApiClient\Model\QuoteDataShippingMethodInterface[] negotiableQuoteShippingMethodManagementV1EstimateByAddressIdPost($cartId, $negotiableQuoteShippingMethodManagementV1EstimateByAddressIdPostBody)



Estimate shipping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\NegotiableQuoteShippingMethodManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = 56; // int | The shopping cart ID.
$negotiableQuoteShippingMethodManagementV1EstimateByAddressIdPostBody = new \Krak\MagentoApiClient\Model\NegotiableQuoteShippingMethodManagementV1EstimateByAddressIdPostBody(); // \Krak\MagentoApiClient\Model\NegotiableQuoteShippingMethodManagementV1EstimateByAddressIdPostBody | 

try {
    $result = $apiInstance->negotiableQuoteShippingMethodManagementV1EstimateByAddressIdPost($cartId, $negotiableQuoteShippingMethodManagementV1EstimateByAddressIdPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteShippingMethodManagementV1Api->negotiableQuoteShippingMethodManagementV1EstimateByAddressIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The shopping cart ID. |
 **negotiableQuoteShippingMethodManagementV1EstimateByAddressIdPostBody** | [**\Krak\MagentoApiClient\Model\NegotiableQuoteShippingMethodManagementV1EstimateByAddressIdPostBody**](../Model/NegotiableQuoteShippingMethodManagementV1EstimateByAddressIdPostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

