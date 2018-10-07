# Krak\MagentoApiClient\CatalogInventoryStockRegistryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogInventoryStockRegistryV1GetLowStockItemsGet**](CatalogInventoryStockRegistryV1Api.md#catalogInventoryStockRegistryV1GetLowStockItemsGet) | **GET** /V1/stockItems/lowStock/ | 
[**catalogInventoryStockRegistryV1GetStockItemBySkuGet**](CatalogInventoryStockRegistryV1Api.md#catalogInventoryStockRegistryV1GetStockItemBySkuGet) | **GET** /V1/stockItems/{productSku} | 
[**catalogInventoryStockRegistryV1GetStockStatusBySkuGet**](CatalogInventoryStockRegistryV1Api.md#catalogInventoryStockRegistryV1GetStockStatusBySkuGet) | **GET** /V1/stockStatuses/{productSku} | 
[**catalogInventoryStockRegistryV1UpdateStockItemBySkuPut**](CatalogInventoryStockRegistryV1Api.md#catalogInventoryStockRegistryV1UpdateStockItemBySkuPut) | **PUT** /V1/products/{productSku}/stockItems/{itemId} | 


# **catalogInventoryStockRegistryV1GetLowStockItemsGet**
> \Krak\MagentoApiClient\Model\CatalogInventoryDataStockStatusCollectionInterface catalogInventoryStockRegistryV1GetLowStockItemsGet($scopeId, $qty, $currentPage, $pageSize)



Retrieves a list of SKU's with low inventory qty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogInventoryStockRegistryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scopeId = 56; // int | 
$qty = 8.14; // float | 
$currentPage = 56; // int | 
$pageSize = 56; // int | 

try {
    $result = $apiInstance->catalogInventoryStockRegistryV1GetLowStockItemsGet($scopeId, $qty, $currentPage, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogInventoryStockRegistryV1Api->catalogInventoryStockRegistryV1GetLowStockItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scopeId** | **int**|  |
 **qty** | **float**|  |
 **currentPage** | **int**|  | [optional]
 **pageSize** | **int**|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogInventoryDataStockStatusCollectionInterface**](../Model/CatalogInventoryDataStockStatusCollectionInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogInventoryStockRegistryV1GetStockItemBySkuGet**
> \Krak\MagentoApiClient\Model\CatalogInventoryDataStockItemInterface catalogInventoryStockRegistryV1GetStockItemBySkuGet($productSku, $scopeId)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogInventoryStockRegistryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productSku = "productSku_example"; // string | 
$scopeId = 56; // int | 

try {
    $result = $apiInstance->catalogInventoryStockRegistryV1GetStockItemBySkuGet($productSku, $scopeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogInventoryStockRegistryV1Api->catalogInventoryStockRegistryV1GetStockItemBySkuGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productSku** | **string**|  |
 **scopeId** | **int**|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogInventoryDataStockItemInterface**](../Model/CatalogInventoryDataStockItemInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogInventoryStockRegistryV1GetStockStatusBySkuGet**
> \Krak\MagentoApiClient\Model\CatalogInventoryDataStockStatusInterface catalogInventoryStockRegistryV1GetStockStatusBySkuGet($productSku, $scopeId)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogInventoryStockRegistryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productSku = "productSku_example"; // string | 
$scopeId = 56; // int | 

try {
    $result = $apiInstance->catalogInventoryStockRegistryV1GetStockStatusBySkuGet($productSku, $scopeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogInventoryStockRegistryV1Api->catalogInventoryStockRegistryV1GetStockStatusBySkuGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productSku** | **string**|  |
 **scopeId** | **int**|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogInventoryDataStockStatusInterface**](../Model/CatalogInventoryDataStockStatusInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogInventoryStockRegistryV1UpdateStockItemBySkuPut**
> int catalogInventoryStockRegistryV1UpdateStockItemBySkuPut($productSku, $itemId, $catalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogInventoryStockRegistryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productSku = "productSku_example"; // string | 
$itemId = "itemId_example"; // string | 
$catalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody = new \Krak\MagentoApiClient\Model\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody(); // \Krak\MagentoApiClient\Model\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody | 

try {
    $result = $apiInstance->catalogInventoryStockRegistryV1UpdateStockItemBySkuPut($productSku, $itemId, $catalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogInventoryStockRegistryV1Api->catalogInventoryStockRegistryV1UpdateStockItemBySkuPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productSku** | **string**|  |
 **itemId** | **string**|  |
 **catalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody** | [**\Krak\MagentoApiClient\Model\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody**](../Model/CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody.md)|  | [optional]

### Return type

**int**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

