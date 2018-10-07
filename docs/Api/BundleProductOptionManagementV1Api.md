# Krak\MagentoApiClient\BundleProductOptionManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bundleProductOptionManagementV1SavePost**](BundleProductOptionManagementV1Api.md#bundleProductOptionManagementV1SavePost) | **POST** /V1/bundle-products/options/add | 
[**bundleProductOptionManagementV1SavePut**](BundleProductOptionManagementV1Api.md#bundleProductOptionManagementV1SavePut) | **PUT** /V1/bundle-products/options/{optionId} | 


# **bundleProductOptionManagementV1SavePost**
> int bundleProductOptionManagementV1SavePost($bundleProductOptionManagementV1SavePostBody)



Add new option for bundle product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\BundleProductOptionManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bundleProductOptionManagementV1SavePostBody = new \Krak\MagentoApiClient\Model\BundleProductOptionManagementV1SavePostBody(); // \Krak\MagentoApiClient\Model\BundleProductOptionManagementV1SavePostBody | 

try {
    $result = $apiInstance->bundleProductOptionManagementV1SavePost($bundleProductOptionManagementV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleProductOptionManagementV1Api->bundleProductOptionManagementV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bundleProductOptionManagementV1SavePostBody** | [**\Krak\MagentoApiClient\Model\BundleProductOptionManagementV1SavePostBody**](../Model/BundleProductOptionManagementV1SavePostBody.md)|  | [optional]

### Return type

**int**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bundleProductOptionManagementV1SavePut**
> int bundleProductOptionManagementV1SavePut($optionId, $bundleProductOptionManagementV1SavePutBody)



Add new option for bundle product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\BundleProductOptionManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$optionId = "optionId_example"; // string | 
$bundleProductOptionManagementV1SavePutBody = new \Krak\MagentoApiClient\Model\BundleProductOptionManagementV1SavePutBody(); // \Krak\MagentoApiClient\Model\BundleProductOptionManagementV1SavePutBody | 

try {
    $result = $apiInstance->bundleProductOptionManagementV1SavePut($optionId, $bundleProductOptionManagementV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleProductOptionManagementV1Api->bundleProductOptionManagementV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **optionId** | **string**|  |
 **bundleProductOptionManagementV1SavePutBody** | [**\Krak\MagentoApiClient\Model\BundleProductOptionManagementV1SavePutBody**](../Model/BundleProductOptionManagementV1SavePutBody.md)|  | [optional]

### Return type

**int**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

