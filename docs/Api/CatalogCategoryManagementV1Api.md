# Krak\MagentoApiClient\CatalogCategoryManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogCategoryManagementV1GetTreeGet**](CatalogCategoryManagementV1Api.md#catalogCategoryManagementV1GetTreeGet) | **GET** /V1/categories | 
[**catalogCategoryManagementV1MovePut**](CatalogCategoryManagementV1Api.md#catalogCategoryManagementV1MovePut) | **PUT** /V1/categories/{categoryId}/move | 


# **catalogCategoryManagementV1GetTreeGet**
> \Krak\MagentoApiClient\Model\CatalogDataCategoryTreeInterface catalogCategoryManagementV1GetTreeGet($rootCategoryId, $depth)



Retrieve list of categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogCategoryManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$rootCategoryId = 56; // int | 
$depth = 56; // int | 

try {
    $result = $apiInstance->catalogCategoryManagementV1GetTreeGet($rootCategoryId, $depth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryManagementV1Api->catalogCategoryManagementV1GetTreeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rootCategoryId** | **int**|  | [optional]
 **depth** | **int**|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataCategoryTreeInterface**](../Model/CatalogDataCategoryTreeInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogCategoryManagementV1MovePut**
> bool catalogCategoryManagementV1MovePut($categoryId, $catalogCategoryManagementV1MovePutBody)



Move category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogCategoryManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$categoryId = 56; // int | 
$catalogCategoryManagementV1MovePutBody = new \Krak\MagentoApiClient\Model\CatalogCategoryManagementV1MovePutBody(); // \Krak\MagentoApiClient\Model\CatalogCategoryManagementV1MovePutBody | 

try {
    $result = $apiInstance->catalogCategoryManagementV1MovePut($categoryId, $catalogCategoryManagementV1MovePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryManagementV1Api->catalogCategoryManagementV1MovePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryId** | **int**|  |
 **catalogCategoryManagementV1MovePutBody** | [**\Krak\MagentoApiClient\Model\CatalogCategoryManagementV1MovePutBody**](../Model/CatalogCategoryManagementV1MovePutBody.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

