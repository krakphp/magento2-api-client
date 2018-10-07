# Krak\MagentoApiClient\CatalogBasePriceStorageV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogBasePriceStorageV1GetPost**](CatalogBasePriceStorageV1Api.md#catalogBasePriceStorageV1GetPost) | **POST** /V1/products/base-prices-information | 
[**catalogBasePriceStorageV1UpdatePost**](CatalogBasePriceStorageV1Api.md#catalogBasePriceStorageV1UpdatePost) | **POST** /V1/products/base-prices | 


# **catalogBasePriceStorageV1GetPost**
> \Krak\MagentoApiClient\Model\CatalogDataBasePriceInterface[] catalogBasePriceStorageV1GetPost($catalogBasePriceStorageV1GetPostBody)



Return product prices. In case of at least one of skus is not found exception will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogBasePriceStorageV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$catalogBasePriceStorageV1GetPostBody = new \Krak\MagentoApiClient\Model\CatalogBasePriceStorageV1GetPostBody(); // \Krak\MagentoApiClient\Model\CatalogBasePriceStorageV1GetPostBody | 

try {
    $result = $apiInstance->catalogBasePriceStorageV1GetPost($catalogBasePriceStorageV1GetPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogBasePriceStorageV1Api->catalogBasePriceStorageV1GetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogBasePriceStorageV1GetPostBody** | [**\Krak\MagentoApiClient\Model\CatalogBasePriceStorageV1GetPostBody**](../Model/CatalogBasePriceStorageV1GetPostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataBasePriceInterface[]**](../Model/CatalogDataBasePriceInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogBasePriceStorageV1UpdatePost**
> \Krak\MagentoApiClient\Model\CatalogDataPriceUpdateResultInterface[] catalogBasePriceStorageV1UpdatePost($catalogBasePriceStorageV1UpdatePostBody)



Add or update product prices. Input item should correspond \\Magento\\Catalog\\Api\\Data\\CostInterface. If any items will have invalid price, store id or sku, they will be marked as failed and excluded from update list and \\Magento\\Catalog\\Api\\Data\\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogBasePriceStorageV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$catalogBasePriceStorageV1UpdatePostBody = new \Krak\MagentoApiClient\Model\CatalogBasePriceStorageV1UpdatePostBody(); // \Krak\MagentoApiClient\Model\CatalogBasePriceStorageV1UpdatePostBody | 

try {
    $result = $apiInstance->catalogBasePriceStorageV1UpdatePost($catalogBasePriceStorageV1UpdatePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogBasePriceStorageV1Api->catalogBasePriceStorageV1UpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogBasePriceStorageV1UpdatePostBody** | [**\Krak\MagentoApiClient\Model\CatalogBasePriceStorageV1UpdatePostBody**](../Model/CatalogBasePriceStorageV1UpdatePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataPriceUpdateResultInterface[]**](../Model/CatalogDataPriceUpdateResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

