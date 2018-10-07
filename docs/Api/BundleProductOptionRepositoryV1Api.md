# Krak\MagentoApiClient\BundleProductOptionRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bundleProductOptionRepositoryV1DeleteByIdDelete**](BundleProductOptionRepositoryV1Api.md#bundleProductOptionRepositoryV1DeleteByIdDelete) | **DELETE** /V1/bundle-products/{sku}/options/{optionId} | 
[**bundleProductOptionRepositoryV1GetGet**](BundleProductOptionRepositoryV1Api.md#bundleProductOptionRepositoryV1GetGet) | **GET** /V1/bundle-products/{sku}/options/{optionId} | 
[**bundleProductOptionRepositoryV1GetListGet**](BundleProductOptionRepositoryV1Api.md#bundleProductOptionRepositoryV1GetListGet) | **GET** /V1/bundle-products/{sku}/options/all | 


# **bundleProductOptionRepositoryV1DeleteByIdDelete**
> bool bundleProductOptionRepositoryV1DeleteByIdDelete($sku, $optionId)



Remove bundle option

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\BundleProductOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 
$optionId = 56; // int | 

try {
    $result = $apiInstance->bundleProductOptionRepositoryV1DeleteByIdDelete($sku, $optionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleProductOptionRepositoryV1Api->bundleProductOptionRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **optionId** | **int**|  |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bundleProductOptionRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\BundleDataOptionInterface bundleProductOptionRepositoryV1GetGet($sku, $optionId)



Get option for bundle product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\BundleProductOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 
$optionId = 56; // int | 

try {
    $result = $apiInstance->bundleProductOptionRepositoryV1GetGet($sku, $optionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleProductOptionRepositoryV1Api->bundleProductOptionRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **optionId** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\BundleDataOptionInterface**](../Model/BundleDataOptionInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bundleProductOptionRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\BundleDataOptionInterface[] bundleProductOptionRepositoryV1GetListGet($sku)



Get all options for bundle product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\BundleProductOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 

try {
    $result = $apiInstance->bundleProductOptionRepositoryV1GetListGet($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleProductOptionRepositoryV1Api->bundleProductOptionRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |

### Return type

[**\Krak\MagentoApiClient\Model\BundleDataOptionInterface[]**](../Model/BundleDataOptionInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

