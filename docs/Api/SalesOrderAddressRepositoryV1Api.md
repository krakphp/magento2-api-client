# Krak\MagentoApiClient\SalesOrderAddressRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesOrderAddressRepositoryV1SavePut**](SalesOrderAddressRepositoryV1Api.md#salesOrderAddressRepositoryV1SavePut) | **PUT** /V1/orders/{parent_id} | 


# **salesOrderAddressRepositoryV1SavePut**
> \Krak\MagentoApiClient\Model\SalesDataOrderAddressInterface salesOrderAddressRepositoryV1SavePut($parentId, $salesOrderAddressRepositoryV1SavePutBody)



Performs persist operations for a specified order address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\SalesOrderAddressRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$parentId = "parentId_example"; // string | 
$salesOrderAddressRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\SalesOrderAddressRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\SalesOrderAddressRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->salesOrderAddressRepositoryV1SavePut($parentId, $salesOrderAddressRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderAddressRepositoryV1Api->salesOrderAddressRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentId** | **string**|  |
 **salesOrderAddressRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\SalesOrderAddressRepositoryV1SavePutBody**](../Model/SalesOrderAddressRepositoryV1SavePutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\SalesDataOrderAddressInterface**](../Model/SalesDataOrderAddressInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

