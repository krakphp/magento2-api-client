# Krak\MagentoApiClient\CustomerAddressRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerAddressRepositoryV1DeleteByIdDelete**](CustomerAddressRepositoryV1Api.md#customerAddressRepositoryV1DeleteByIdDelete) | **DELETE** /V1/addresses/{addressId} | 
[**customerAddressRepositoryV1GetByIdGet**](CustomerAddressRepositoryV1Api.md#customerAddressRepositoryV1GetByIdGet) | **GET** /V1/customers/addresses/{addressId} | 


# **customerAddressRepositoryV1DeleteByIdDelete**
> bool customerAddressRepositoryV1DeleteByIdDelete($addressId)



Delete customer address by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerAddressRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$addressId = 56; // int | 

try {
    $result = $apiInstance->customerAddressRepositoryV1DeleteByIdDelete($addressId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressRepositoryV1Api->customerAddressRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addressId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAddressRepositoryV1GetByIdGet**
> \Krak\MagentoApiClient\Model\CustomerDataAddressInterface customerAddressRepositoryV1GetByIdGet($addressId)



Retrieve customer address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerAddressRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$addressId = 56; // int | 

try {
    $result = $apiInstance->customerAddressRepositoryV1GetByIdGet($addressId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressRepositoryV1Api->customerAddressRepositoryV1GetByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addressId** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\CustomerDataAddressInterface**](../Model/CustomerDataAddressInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

