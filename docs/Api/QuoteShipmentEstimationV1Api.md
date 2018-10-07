# Krak\MagentoApiClient\QuoteShipmentEstimationV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteShipmentEstimationV1EstimateByExtendedAddressPost**](QuoteShipmentEstimationV1Api.md#quoteShipmentEstimationV1EstimateByExtendedAddressPost) | **POST** /V1/carts/{cartId}/estimate-shipping-methods | 
[**quoteShipmentEstimationV1EstimateByExtendedAddressPost_0**](QuoteShipmentEstimationV1Api.md#quoteShipmentEstimationV1EstimateByExtendedAddressPost_0) | **POST** /V1/carts/mine/estimate-shipping-methods | 


# **quoteShipmentEstimationV1EstimateByExtendedAddressPost**
> \Krak\MagentoApiClient\Model\QuoteDataShippingMethodInterface[] quoteShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $quoteShipmentEstimationV1EstimateByExtendedAddressPostBody)



Estimate shipping by address and return list of available shipping methods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteShipmentEstimationV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | 
$quoteShipmentEstimationV1EstimateByExtendedAddressPostBody = new \Krak\MagentoApiClient\Model\QuoteShipmentEstimationV1EstimateByExtendedAddressPostBody(); // \Krak\MagentoApiClient\Model\QuoteShipmentEstimationV1EstimateByExtendedAddressPostBody | 

try {
    $result = $apiInstance->quoteShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $quoteShipmentEstimationV1EstimateByExtendedAddressPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteShipmentEstimationV1Api->quoteShipmentEstimationV1EstimateByExtendedAddressPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **quoteShipmentEstimationV1EstimateByExtendedAddressPostBody** | [**\Krak\MagentoApiClient\Model\QuoteShipmentEstimationV1EstimateByExtendedAddressPostBody**](../Model/QuoteShipmentEstimationV1EstimateByExtendedAddressPostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteShipmentEstimationV1EstimateByExtendedAddressPost_0**
> \Krak\MagentoApiClient\Model\QuoteDataShippingMethodInterface[] quoteShipmentEstimationV1EstimateByExtendedAddressPost_0($quoteShipmentEstimationV1EstimateByExtendedAddressPostBody)



Estimate shipping by address and return list of available shipping methods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteShipmentEstimationV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$quoteShipmentEstimationV1EstimateByExtendedAddressPostBody = new \Krak\MagentoApiClient\Model\QuoteShipmentEstimationV1EstimateByExtendedAddressPostBody1(); // \Krak\MagentoApiClient\Model\QuoteShipmentEstimationV1EstimateByExtendedAddressPostBody1 | 

try {
    $result = $apiInstance->quoteShipmentEstimationV1EstimateByExtendedAddressPost_0($quoteShipmentEstimationV1EstimateByExtendedAddressPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteShipmentEstimationV1Api->quoteShipmentEstimationV1EstimateByExtendedAddressPost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quoteShipmentEstimationV1EstimateByExtendedAddressPostBody** | [**\Krak\MagentoApiClient\Model\QuoteShipmentEstimationV1EstimateByExtendedAddressPostBody1**](../Model/QuoteShipmentEstimationV1EstimateByExtendedAddressPostBody1.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

