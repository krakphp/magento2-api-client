# Krak\MagentoApiClient\SalesRefundOrderV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesRefundOrderV1ExecutePost**](SalesRefundOrderV1Api.md#salesRefundOrderV1ExecutePost) | **POST** /V1/order/{orderId}/refund | 


# **salesRefundOrderV1ExecutePost**
> int salesRefundOrderV1ExecutePost($orderId, $salesRefundOrderV1ExecutePostBody)



Create offline refund for order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\SalesRefundOrderV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderId = 56; // int | 
$salesRefundOrderV1ExecutePostBody = new \Krak\MagentoApiClient\Model\SalesRefundOrderV1ExecutePostBody(); // \Krak\MagentoApiClient\Model\SalesRefundOrderV1ExecutePostBody | 

try {
    $result = $apiInstance->salesRefundOrderV1ExecutePost($orderId, $salesRefundOrderV1ExecutePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRefundOrderV1Api->salesRefundOrderV1ExecutePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**|  |
 **salesRefundOrderV1ExecutePostBody** | [**\Krak\MagentoApiClient\Model\SalesRefundOrderV1ExecutePostBody**](../Model/SalesRefundOrderV1ExecutePostBody.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

