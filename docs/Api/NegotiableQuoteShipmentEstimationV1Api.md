# Krak\MagentoApiClient\NegotiableQuoteShipmentEstimationV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPost**](NegotiableQuoteShipmentEstimationV1Api.md#negotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPost) | **POST** /V1/negotiable-carts/{cartId}/estimate-shipping-methods | 


# **negotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPost**
> \Krak\MagentoApiClient\Model\QuoteDataShippingMethodInterface[] negotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $negotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPostBody)



Estimate shipping by address and return list of available shipping methods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\NegotiableQuoteShipmentEstimationV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | 
$negotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPostBody = new \Krak\MagentoApiClient\Model\NegotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPostBody(); // \Krak\MagentoApiClient\Model\NegotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPostBody | 

try {
    $result = $apiInstance->negotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $negotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteShipmentEstimationV1Api->negotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **negotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPostBody** | [**\Krak\MagentoApiClient\Model\NegotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPostBody**](../Model/NegotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

