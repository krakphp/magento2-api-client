# Krak\MagentoApiClient\CatalogSpecialPriceStorageV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogSpecialPriceStorageV1DeletePost**](CatalogSpecialPriceStorageV1Api.md#catalogSpecialPriceStorageV1DeletePost) | **POST** /V1/products/special-price-delete | 
[**catalogSpecialPriceStorageV1GetPost**](CatalogSpecialPriceStorageV1Api.md#catalogSpecialPriceStorageV1GetPost) | **POST** /V1/products/special-price-information | 
[**catalogSpecialPriceStorageV1UpdatePost**](CatalogSpecialPriceStorageV1Api.md#catalogSpecialPriceStorageV1UpdatePost) | **POST** /V1/products/special-price | 


# **catalogSpecialPriceStorageV1DeletePost**
> \Krak\MagentoApiClient\Model\CatalogDataPriceUpdateResultInterface[] catalogSpecialPriceStorageV1DeletePost($catalogSpecialPriceStorageV1DeletePostBody)



Delete product's special price. If any items will have invalid price, store id, sku or dates, they will be marked as failed and excluded from delete list and \\Magento\\Catalog\\Api\\Data\\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the delete exception will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogSpecialPriceStorageV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalogSpecialPriceStorageV1DeletePostBody = new \Krak\MagentoApiClient\Model\CatalogSpecialPriceStorageV1DeletePostBody(); // \Krak\MagentoApiClient\Model\CatalogSpecialPriceStorageV1DeletePostBody | 

try {
    $result = $apiInstance->catalogSpecialPriceStorageV1DeletePost($catalogSpecialPriceStorageV1DeletePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogSpecialPriceStorageV1Api->catalogSpecialPriceStorageV1DeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogSpecialPriceStorageV1DeletePostBody** | [**\Krak\MagentoApiClient\Model\CatalogSpecialPriceStorageV1DeletePostBody**](../Model/CatalogSpecialPriceStorageV1DeletePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataPriceUpdateResultInterface[]**](../Model/CatalogDataPriceUpdateResultInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogSpecialPriceStorageV1GetPost**
> \Krak\MagentoApiClient\Model\CatalogDataSpecialPriceInterface[] catalogSpecialPriceStorageV1GetPost($catalogSpecialPriceStorageV1GetPostBody)



Return product's special price. In case of at least one of skus is not found exception will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogSpecialPriceStorageV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalogSpecialPriceStorageV1GetPostBody = new \Krak\MagentoApiClient\Model\CatalogSpecialPriceStorageV1GetPostBody(); // \Krak\MagentoApiClient\Model\CatalogSpecialPriceStorageV1GetPostBody | 

try {
    $result = $apiInstance->catalogSpecialPriceStorageV1GetPost($catalogSpecialPriceStorageV1GetPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogSpecialPriceStorageV1Api->catalogSpecialPriceStorageV1GetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogSpecialPriceStorageV1GetPostBody** | [**\Krak\MagentoApiClient\Model\CatalogSpecialPriceStorageV1GetPostBody**](../Model/CatalogSpecialPriceStorageV1GetPostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataSpecialPriceInterface[]**](../Model/CatalogDataSpecialPriceInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogSpecialPriceStorageV1UpdatePost**
> \Krak\MagentoApiClient\Model\CatalogDataPriceUpdateResultInterface[] catalogSpecialPriceStorageV1UpdatePost($catalogSpecialPriceStorageV1UpdatePostBody)



Add or update product's special price. If any items will have invalid price, store id, sku or dates, they will be marked as failed and excluded from update list and \\Magento\\Catalog\\Api\\Data\\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogSpecialPriceStorageV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalogSpecialPriceStorageV1UpdatePostBody = new \Krak\MagentoApiClient\Model\CatalogSpecialPriceStorageV1UpdatePostBody(); // \Krak\MagentoApiClient\Model\CatalogSpecialPriceStorageV1UpdatePostBody | 

try {
    $result = $apiInstance->catalogSpecialPriceStorageV1UpdatePost($catalogSpecialPriceStorageV1UpdatePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogSpecialPriceStorageV1Api->catalogSpecialPriceStorageV1UpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogSpecialPriceStorageV1UpdatePostBody** | [**\Krak\MagentoApiClient\Model\CatalogSpecialPriceStorageV1UpdatePostBody**](../Model/CatalogSpecialPriceStorageV1UpdatePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataPriceUpdateResultInterface[]**](../Model/CatalogDataPriceUpdateResultInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

