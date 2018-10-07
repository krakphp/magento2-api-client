# Krak\MagentoApiClient\SalesShipOrderV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesShipOrderV1ExecutePost**](SalesShipOrderV1Api.md#salesShipOrderV1ExecutePost) | **POST** /V1/order/{orderId}/ship | 


# **salesShipOrderV1ExecutePost**
> int salesShipOrderV1ExecutePost($orderId, $salesShipOrderV1ExecutePostBody)



Creates new Shipment for given Order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesShipOrderV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | 
$salesShipOrderV1ExecutePostBody = new \Krak\MagentoApiClient\Model\SalesShipOrderV1ExecutePostBody(); // \Krak\MagentoApiClient\Model\SalesShipOrderV1ExecutePostBody | 

try {
    $result = $apiInstance->salesShipOrderV1ExecutePost($orderId, $salesShipOrderV1ExecutePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesShipOrderV1Api->salesShipOrderV1ExecutePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**|  |
 **salesShipOrderV1ExecutePostBody** | [**\Krak\MagentoApiClient\Model\SalesShipOrderV1ExecutePostBody**](../Model/SalesShipOrderV1ExecutePostBody.md)|  | [optional]

### Return type

**int**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

