# Krak\MagentoApiClient\SalesInvoiceOrderV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesInvoiceOrderV1ExecutePost**](SalesInvoiceOrderV1Api.md#salesInvoiceOrderV1ExecutePost) | **POST** /V1/order/{orderId}/invoice | 


# **salesInvoiceOrderV1ExecutePost**
> int salesInvoiceOrderV1ExecutePost($orderId, $salesInvoiceOrderV1ExecutePostBody)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesInvoiceOrderV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | 
$salesInvoiceOrderV1ExecutePostBody = new \Krak\MagentoApiClient\Model\SalesInvoiceOrderV1ExecutePostBody(); // \Krak\MagentoApiClient\Model\SalesInvoiceOrderV1ExecutePostBody | 

try {
    $result = $apiInstance->salesInvoiceOrderV1ExecutePost($orderId, $salesInvoiceOrderV1ExecutePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceOrderV1Api->salesInvoiceOrderV1ExecutePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**|  |
 **salesInvoiceOrderV1ExecutePostBody** | [**\Krak\MagentoApiClient\Model\SalesInvoiceOrderV1ExecutePostBody**](../Model/SalesInvoiceOrderV1ExecutePostBody.md)|  | [optional]

### Return type

**int**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

