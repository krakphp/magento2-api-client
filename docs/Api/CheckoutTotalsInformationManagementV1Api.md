# Krak\MagentoApiClient\CheckoutTotalsInformationManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkoutTotalsInformationManagementV1CalculatePost**](CheckoutTotalsInformationManagementV1Api.md#checkoutTotalsInformationManagementV1CalculatePost) | **POST** /V1/carts/{cartId}/totals-information | 
[**checkoutTotalsInformationManagementV1CalculatePost_0**](CheckoutTotalsInformationManagementV1Api.md#checkoutTotalsInformationManagementV1CalculatePost_0) | **POST** /V1/carts/mine/totals-information | 


# **checkoutTotalsInformationManagementV1CalculatePost**
> \Krak\MagentoApiClient\Model\QuoteDataTotalsInterface checkoutTotalsInformationManagementV1CalculatePost($cartId, $checkoutTotalsInformationManagementV1CalculatePostBody)



Calculate quote totals based on address and shipping method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CheckoutTotalsInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = 56; // int | 
$checkoutTotalsInformationManagementV1CalculatePostBody = new \Krak\MagentoApiClient\Model\CheckoutTotalsInformationManagementV1CalculatePostBody(); // \Krak\MagentoApiClient\Model\CheckoutTotalsInformationManagementV1CalculatePostBody | 

try {
    $result = $apiInstance->checkoutTotalsInformationManagementV1CalculatePost($cartId, $checkoutTotalsInformationManagementV1CalculatePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutTotalsInformationManagementV1Api->checkoutTotalsInformationManagementV1CalculatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**|  |
 **checkoutTotalsInformationManagementV1CalculatePostBody** | [**\Krak\MagentoApiClient\Model\CheckoutTotalsInformationManagementV1CalculatePostBody**](../Model/CheckoutTotalsInformationManagementV1CalculatePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkoutTotalsInformationManagementV1CalculatePost_0**
> \Krak\MagentoApiClient\Model\QuoteDataTotalsInterface checkoutTotalsInformationManagementV1CalculatePost_0($checkoutTotalsInformationManagementV1CalculatePostBody)



Calculate quote totals based on address and shipping method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CheckoutTotalsInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$checkoutTotalsInformationManagementV1CalculatePostBody = new \Krak\MagentoApiClient\Model\CheckoutTotalsInformationManagementV1CalculatePostBody1(); // \Krak\MagentoApiClient\Model\CheckoutTotalsInformationManagementV1CalculatePostBody1 | 

try {
    $result = $apiInstance->checkoutTotalsInformationManagementV1CalculatePost_0($checkoutTotalsInformationManagementV1CalculatePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutTotalsInformationManagementV1Api->checkoutTotalsInformationManagementV1CalculatePost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkoutTotalsInformationManagementV1CalculatePostBody** | [**\Krak\MagentoApiClient\Model\CheckoutTotalsInformationManagementV1CalculatePostBody1**](../Model/CheckoutTotalsInformationManagementV1CalculatePostBody1.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

