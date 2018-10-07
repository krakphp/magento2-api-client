# Krak\MagentoApiClient\CustomerCustomerGroupConfigV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerCustomerGroupConfigV1SetDefaultCustomerGroupPut**](CustomerCustomerGroupConfigV1Api.md#customerCustomerGroupConfigV1SetDefaultCustomerGroupPut) | **PUT** /V1/customerGroups/default/{id} | 


# **customerCustomerGroupConfigV1SetDefaultCustomerGroupPut**
> int customerCustomerGroupConfigV1SetDefaultCustomerGroupPut($id)



Set system default customer group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerCustomerGroupConfigV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->customerCustomerGroupConfigV1SetDefaultCustomerGroupPut($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCustomerGroupConfigV1Api->customerCustomerGroupConfigV1SetDefaultCustomerGroupPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

