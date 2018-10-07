# Krak\MagentoApiClient\BundleProductLinkManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bundleProductLinkManagementV1AddChildByProductSkuPost**](BundleProductLinkManagementV1Api.md#bundleProductLinkManagementV1AddChildByProductSkuPost) | **POST** /V1/bundle-products/{sku}/links/{optionId} | 
[**bundleProductLinkManagementV1GetChildrenGet**](BundleProductLinkManagementV1Api.md#bundleProductLinkManagementV1GetChildrenGet) | **GET** /V1/bundle-products/{productSku}/children | 
[**bundleProductLinkManagementV1RemoveChildDelete**](BundleProductLinkManagementV1Api.md#bundleProductLinkManagementV1RemoveChildDelete) | **DELETE** /V1/bundle-products/{sku}/options/{optionId}/children/{childSku} | 
[**bundleProductLinkManagementV1SaveChildPut**](BundleProductLinkManagementV1Api.md#bundleProductLinkManagementV1SaveChildPut) | **PUT** /V1/bundle-products/{sku}/links/{id} | 


# **bundleProductLinkManagementV1AddChildByProductSkuPost**
> int bundleProductLinkManagementV1AddChildByProductSkuPost($sku, $optionId, $bundleProductLinkManagementV1AddChildByProductSkuPostBody)



Add child product to specified Bundle option by product sku

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\BundleProductLinkManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 
$optionId = 56; // int | 
$bundleProductLinkManagementV1AddChildByProductSkuPostBody = new \Krak\MagentoApiClient\Model\BundleProductLinkManagementV1AddChildByProductSkuPostBody(); // \Krak\MagentoApiClient\Model\BundleProductLinkManagementV1AddChildByProductSkuPostBody | 

try {
    $result = $apiInstance->bundleProductLinkManagementV1AddChildByProductSkuPost($sku, $optionId, $bundleProductLinkManagementV1AddChildByProductSkuPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleProductLinkManagementV1Api->bundleProductLinkManagementV1AddChildByProductSkuPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **optionId** | **int**|  |
 **bundleProductLinkManagementV1AddChildByProductSkuPostBody** | [**\Krak\MagentoApiClient\Model\BundleProductLinkManagementV1AddChildByProductSkuPostBody**](../Model/BundleProductLinkManagementV1AddChildByProductSkuPostBody.md)|  | [optional]

### Return type

**int**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bundleProductLinkManagementV1GetChildrenGet**
> \Krak\MagentoApiClient\Model\BundleDataLinkInterface[] bundleProductLinkManagementV1GetChildrenGet($productSku, $optionId)



Get all children for Bundle product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\BundleProductLinkManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productSku = "productSku_example"; // string | 
$optionId = 56; // int | 

try {
    $result = $apiInstance->bundleProductLinkManagementV1GetChildrenGet($productSku, $optionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleProductLinkManagementV1Api->bundleProductLinkManagementV1GetChildrenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productSku** | **string**|  |
 **optionId** | **int**|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\BundleDataLinkInterface[]**](../Model/BundleDataLinkInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bundleProductLinkManagementV1RemoveChildDelete**
> bool bundleProductLinkManagementV1RemoveChildDelete($sku, $optionId, $childSku)



Remove product from Bundle product option

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\BundleProductLinkManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 
$optionId = 56; // int | 
$childSku = "childSku_example"; // string | 

try {
    $result = $apiInstance->bundleProductLinkManagementV1RemoveChildDelete($sku, $optionId, $childSku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleProductLinkManagementV1Api->bundleProductLinkManagementV1RemoveChildDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **optionId** | **int**|  |
 **childSku** | **string**|  |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bundleProductLinkManagementV1SaveChildPut**
> bool bundleProductLinkManagementV1SaveChildPut($sku, $id, $bundleProductLinkManagementV1SaveChildPutBody)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\BundleProductLinkManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 
$id = "id_example"; // string | 
$bundleProductLinkManagementV1SaveChildPutBody = new \Krak\MagentoApiClient\Model\BundleProductLinkManagementV1SaveChildPutBody(); // \Krak\MagentoApiClient\Model\BundleProductLinkManagementV1SaveChildPutBody | 

try {
    $result = $apiInstance->bundleProductLinkManagementV1SaveChildPut($sku, $id, $bundleProductLinkManagementV1SaveChildPutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleProductLinkManagementV1Api->bundleProductLinkManagementV1SaveChildPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **id** | **string**|  |
 **bundleProductLinkManagementV1SaveChildPutBody** | [**\Krak\MagentoApiClient\Model\BundleProductLinkManagementV1SaveChildPutBody**](../Model/BundleProductLinkManagementV1SaveChildPutBody.md)|  | [optional]

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

