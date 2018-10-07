# Krak\MagentoApiClient\CatalogCostStorageV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogCostStorageV1DeletePost**](CatalogCostStorageV1Api.md#catalogCostStorageV1DeletePost) | **POST** /V1/products/cost-delete | 
[**catalogCostStorageV1GetPost**](CatalogCostStorageV1Api.md#catalogCostStorageV1GetPost) | **POST** /V1/products/cost-information | 
[**catalogCostStorageV1UpdatePost**](CatalogCostStorageV1Api.md#catalogCostStorageV1UpdatePost) | **POST** /V1/products/cost | 


# **catalogCostStorageV1DeletePost**
> bool catalogCostStorageV1DeletePost($catalogCostStorageV1DeletePostBody)



Delete product cost. In case of at least one of skus is not found exception will be thrown. If error occurred during the delete exception will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogCostStorageV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$catalogCostStorageV1DeletePostBody = new \Krak\MagentoApiClient\Model\CatalogCostStorageV1DeletePostBody(); // \Krak\MagentoApiClient\Model\CatalogCostStorageV1DeletePostBody | 

try {
    $result = $apiInstance->catalogCostStorageV1DeletePost($catalogCostStorageV1DeletePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCostStorageV1Api->catalogCostStorageV1DeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogCostStorageV1DeletePostBody** | [**\Krak\MagentoApiClient\Model\CatalogCostStorageV1DeletePostBody**](../Model/CatalogCostStorageV1DeletePostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogCostStorageV1GetPost**
> \Krak\MagentoApiClient\Model\CatalogDataCostInterface[] catalogCostStorageV1GetPost($catalogCostStorageV1GetPostBody)



Return product prices. In case of at least one of skus is not found exception will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogCostStorageV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$catalogCostStorageV1GetPostBody = new \Krak\MagentoApiClient\Model\CatalogCostStorageV1GetPostBody(); // \Krak\MagentoApiClient\Model\CatalogCostStorageV1GetPostBody | 

try {
    $result = $apiInstance->catalogCostStorageV1GetPost($catalogCostStorageV1GetPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCostStorageV1Api->catalogCostStorageV1GetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogCostStorageV1GetPostBody** | [**\Krak\MagentoApiClient\Model\CatalogCostStorageV1GetPostBody**](../Model/CatalogCostStorageV1GetPostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataCostInterface[]**](../Model/CatalogDataCostInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogCostStorageV1UpdatePost**
> \Krak\MagentoApiClient\Model\CatalogDataPriceUpdateResultInterface[] catalogCostStorageV1UpdatePost($catalogCostStorageV1UpdatePostBody)



Add or update product cost. Input item should correspond to \\Magento\\Catalog\\Api\\Data\\CostInterface. If any items will have invalid cost, store id or sku, they will be marked as failed and excluded from update list and \\Magento\\Catalog\\Api\\Data\\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogCostStorageV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$catalogCostStorageV1UpdatePostBody = new \Krak\MagentoApiClient\Model\CatalogCostStorageV1UpdatePostBody(); // \Krak\MagentoApiClient\Model\CatalogCostStorageV1UpdatePostBody | 

try {
    $result = $apiInstance->catalogCostStorageV1UpdatePost($catalogCostStorageV1UpdatePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCostStorageV1Api->catalogCostStorageV1UpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogCostStorageV1UpdatePostBody** | [**\Krak\MagentoApiClient\Model\CatalogCostStorageV1UpdatePostBody**](../Model/CatalogCostStorageV1UpdatePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataPriceUpdateResultInterface[]**](../Model/CatalogDataPriceUpdateResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

