# Krak\MagentoApiClient\QuoteCartTotalManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteCartTotalManagementV1CollectTotalsPut**](QuoteCartTotalManagementV1Api.md#quoteCartTotalManagementV1CollectTotalsPut) | **PUT** /V1/carts/mine/collect-totals | 


# **quoteCartTotalManagementV1CollectTotalsPut**
> \Krak\MagentoApiClient\Model\QuoteDataTotalsInterface quoteCartTotalManagementV1CollectTotalsPut($quoteCartTotalManagementV1CollectTotalsPutBody)



Set shipping/billing methods and additional data for cart and collect totals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteCartTotalManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quoteCartTotalManagementV1CollectTotalsPutBody = new \Krak\MagentoApiClient\Model\QuoteCartTotalManagementV1CollectTotalsPutBody(); // \Krak\MagentoApiClient\Model\QuoteCartTotalManagementV1CollectTotalsPutBody | 

try {
    $result = $apiInstance->quoteCartTotalManagementV1CollectTotalsPut($quoteCartTotalManagementV1CollectTotalsPutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartTotalManagementV1Api->quoteCartTotalManagementV1CollectTotalsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quoteCartTotalManagementV1CollectTotalsPutBody** | [**\Krak\MagentoApiClient\Model\QuoteCartTotalManagementV1CollectTotalsPutBody**](../Model/QuoteCartTotalManagementV1CollectTotalsPutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

