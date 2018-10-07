# Krak\MagentoApiClient\QuoteGuestShipmentEstimationV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost**](QuoteGuestShipmentEstimationV1Api.md#quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost) | **POST** /V1/guest-carts/{cartId}/estimate-shipping-methods | 


# **quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost**
> \Krak\MagentoApiClient\Model\QuoteDataShippingMethodInterface[] quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody)



Estimate shipping by address and return list of available shipping methods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteGuestShipmentEstimationV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | 
$quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody = new \Krak\MagentoApiClient\Model\QuoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody(); // \Krak\MagentoApiClient\Model\QuoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody | 

try {
    $result = $apiInstance->quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestShipmentEstimationV1Api->quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody** | [**\Krak\MagentoApiClient\Model\QuoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody**](../Model/QuoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

