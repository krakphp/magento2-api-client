# Krak\MagentoApiClient\SalesRefundInvoiceV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesRefundInvoiceV1ExecutePost**](SalesRefundInvoiceV1Api.md#salesRefundInvoiceV1ExecutePost) | **POST** /V1/invoice/{invoiceId}/refund | 


# **salesRefundInvoiceV1ExecutePost**
> int salesRefundInvoiceV1ExecutePost($invoiceId, $salesRefundInvoiceV1ExecutePostBody)



Create refund for invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesRefundInvoiceV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoiceId = 56; // int | 
$salesRefundInvoiceV1ExecutePostBody = new \Krak\MagentoApiClient\Model\SalesRefundInvoiceV1ExecutePostBody(); // \Krak\MagentoApiClient\Model\SalesRefundInvoiceV1ExecutePostBody | 

try {
    $result = $apiInstance->salesRefundInvoiceV1ExecutePost($invoiceId, $salesRefundInvoiceV1ExecutePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRefundInvoiceV1Api->salesRefundInvoiceV1ExecutePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceId** | **int**|  |
 **salesRefundInvoiceV1ExecutePostBody** | [**\Krak\MagentoApiClient\Model\SalesRefundInvoiceV1ExecutePostBody**](../Model/SalesRefundInvoiceV1ExecutePostBody.md)|  | [optional]

### Return type

**int**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

