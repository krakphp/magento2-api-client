# Krak\MagentoApiClient\CatalogCategoryLinkRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogCategoryLinkRepositoryV1DeleteByIdsDelete**](CatalogCategoryLinkRepositoryV1Api.md#catalogCategoryLinkRepositoryV1DeleteByIdsDelete) | **DELETE** /V1/categories/{categoryId}/products/{sku} | 
[**catalogCategoryLinkRepositoryV1SavePost**](CatalogCategoryLinkRepositoryV1Api.md#catalogCategoryLinkRepositoryV1SavePost) | **POST** /V1/categories/{categoryId}/products | 
[**catalogCategoryLinkRepositoryV1SavePut**](CatalogCategoryLinkRepositoryV1Api.md#catalogCategoryLinkRepositoryV1SavePut) | **PUT** /V1/categories/{categoryId}/products | 


# **catalogCategoryLinkRepositoryV1DeleteByIdsDelete**
> bool catalogCategoryLinkRepositoryV1DeleteByIdsDelete($categoryId, $sku)



Remove the product assignment from the category by category id and sku

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogCategoryLinkRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryId = "categoryId_example"; // string | 
$sku = "sku_example"; // string | 

try {
    $result = $apiInstance->catalogCategoryLinkRepositoryV1DeleteByIdsDelete($categoryId, $sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryLinkRepositoryV1Api->catalogCategoryLinkRepositoryV1DeleteByIdsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryId** | **string**|  |
 **sku** | **string**|  |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogCategoryLinkRepositoryV1SavePost**
> bool catalogCategoryLinkRepositoryV1SavePost($categoryId, $catalogCategoryLinkRepositoryV1SavePostBody)



Assign a product to the required category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogCategoryLinkRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryId = "categoryId_example"; // string | 
$catalogCategoryLinkRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\CatalogCategoryLinkRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\CatalogCategoryLinkRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->catalogCategoryLinkRepositoryV1SavePost($categoryId, $catalogCategoryLinkRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryLinkRepositoryV1Api->catalogCategoryLinkRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryId** | **string**|  |
 **catalogCategoryLinkRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\CatalogCategoryLinkRepositoryV1SavePostBody**](../Model/CatalogCategoryLinkRepositoryV1SavePostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogCategoryLinkRepositoryV1SavePut**
> bool catalogCategoryLinkRepositoryV1SavePut($categoryId, $catalogCategoryLinkRepositoryV1SavePutBody)



Assign a product to the required category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogCategoryLinkRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryId = "categoryId_example"; // string | 
$catalogCategoryLinkRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\CatalogCategoryLinkRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\CatalogCategoryLinkRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->catalogCategoryLinkRepositoryV1SavePut($categoryId, $catalogCategoryLinkRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryLinkRepositoryV1Api->catalogCategoryLinkRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryId** | **string**|  |
 **catalogCategoryLinkRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\CatalogCategoryLinkRepositoryV1SavePutBody**](../Model/CatalogCategoryLinkRepositoryV1SavePutBody.md)|  | [optional]

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

