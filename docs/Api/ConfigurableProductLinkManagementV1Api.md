# Krak\MagentoApiClient\ConfigurableProductLinkManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurableProductLinkManagementV1AddChildPost**](ConfigurableProductLinkManagementV1Api.md#configurableProductLinkManagementV1AddChildPost) | **POST** /V1/configurable-products/{sku}/child | 
[**configurableProductLinkManagementV1GetChildrenGet**](ConfigurableProductLinkManagementV1Api.md#configurableProductLinkManagementV1GetChildrenGet) | **GET** /V1/configurable-products/{sku}/children | 
[**configurableProductLinkManagementV1RemoveChildDelete**](ConfigurableProductLinkManagementV1Api.md#configurableProductLinkManagementV1RemoveChildDelete) | **DELETE** /V1/configurable-products/{sku}/children/{childSku} | 


# **configurableProductLinkManagementV1AddChildPost**
> bool configurableProductLinkManagementV1AddChildPost($sku, $configurableProductLinkManagementV1AddChildPostBody)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\ConfigurableProductLinkManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 
$configurableProductLinkManagementV1AddChildPostBody = new \Krak\MagentoApiClient\Model\ConfigurableProductLinkManagementV1AddChildPostBody(); // \Krak\MagentoApiClient\Model\ConfigurableProductLinkManagementV1AddChildPostBody | 

try {
    $result = $apiInstance->configurableProductLinkManagementV1AddChildPost($sku, $configurableProductLinkManagementV1AddChildPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductLinkManagementV1Api->configurableProductLinkManagementV1AddChildPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **configurableProductLinkManagementV1AddChildPostBody** | [**\Krak\MagentoApiClient\Model\ConfigurableProductLinkManagementV1AddChildPostBody**](../Model/ConfigurableProductLinkManagementV1AddChildPostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurableProductLinkManagementV1GetChildrenGet**
> \Krak\MagentoApiClient\Model\CatalogDataProductInterface[] configurableProductLinkManagementV1GetChildrenGet($sku)



Get all children for Configurable product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\ConfigurableProductLinkManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 

try {
    $result = $apiInstance->configurableProductLinkManagementV1GetChildrenGet($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductLinkManagementV1Api->configurableProductLinkManagementV1GetChildrenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataProductInterface[]**](../Model/CatalogDataProductInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurableProductLinkManagementV1RemoveChildDelete**
> bool configurableProductLinkManagementV1RemoveChildDelete($sku, $childSku)



Remove configurable product option

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\ConfigurableProductLinkManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 
$childSku = "childSku_example"; // string | 

try {
    $result = $apiInstance->configurableProductLinkManagementV1RemoveChildDelete($sku, $childSku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductLinkManagementV1Api->configurableProductLinkManagementV1RemoveChildDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **childSku** | **string**|  |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

