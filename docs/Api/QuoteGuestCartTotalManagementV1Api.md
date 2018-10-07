# Krak\MagentoApiClient\QuoteGuestCartTotalManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestCartTotalManagementV1CollectTotalsPut**](QuoteGuestCartTotalManagementV1Api.md#quoteGuestCartTotalManagementV1CollectTotalsPut) | **PUT** /V1/guest-carts/{cartId}/collect-totals | 


# **quoteGuestCartTotalManagementV1CollectTotalsPut**
> \Krak\MagentoApiClient\Model\QuoteDataTotalsInterface quoteGuestCartTotalManagementV1CollectTotalsPut($cartId, $quoteGuestCartTotalManagementV1CollectTotalsPutBody)



Set shipping/billing methods and additional data for cart and collect totals for guest.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteGuestCartTotalManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | The cart ID.
$quoteGuestCartTotalManagementV1CollectTotalsPutBody = new \Krak\MagentoApiClient\Model\QuoteGuestCartTotalManagementV1CollectTotalsPutBody(); // \Krak\MagentoApiClient\Model\QuoteGuestCartTotalManagementV1CollectTotalsPutBody | 

try {
    $result = $apiInstance->quoteGuestCartTotalManagementV1CollectTotalsPut($cartId, $quoteGuestCartTotalManagementV1CollectTotalsPutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCartTotalManagementV1Api->quoteGuestCartTotalManagementV1CollectTotalsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**| The cart ID. |
 **quoteGuestCartTotalManagementV1CollectTotalsPutBody** | [**\Krak\MagentoApiClient\Model\QuoteGuestCartTotalManagementV1CollectTotalsPutBody**](../Model/QuoteGuestCartTotalManagementV1CollectTotalsPutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

