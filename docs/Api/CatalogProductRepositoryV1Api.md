# Krak\MagentoApiClient\CatalogProductRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductRepositoryV1DeleteByIdDelete**](CatalogProductRepositoryV1Api.md#catalogProductRepositoryV1DeleteByIdDelete) | **DELETE** /V1/products/{sku} | 
[**catalogProductRepositoryV1GetGet**](CatalogProductRepositoryV1Api.md#catalogProductRepositoryV1GetGet) | **GET** /V1/products/{sku} | 
[**catalogProductRepositoryV1GetListGet**](CatalogProductRepositoryV1Api.md#catalogProductRepositoryV1GetListGet) | **GET** /V1/products | 
[**catalogProductRepositoryV1SavePost**](CatalogProductRepositoryV1Api.md#catalogProductRepositoryV1SavePost) | **POST** /V1/products | 
[**catalogProductRepositoryV1SavePut**](CatalogProductRepositoryV1Api.md#catalogProductRepositoryV1SavePut) | **PUT** /V1/products/{sku} | 


# **catalogProductRepositoryV1DeleteByIdDelete**
> bool catalogProductRepositoryV1DeleteByIdDelete($sku)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 

try {
    $result = $apiInstance->catalogProductRepositoryV1DeleteByIdDelete($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductRepositoryV1Api->catalogProductRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\CatalogDataProductInterface catalogProductRepositoryV1GetGet($sku, $editMode, $storeId, $forceReload)



Get info about product by product SKU

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 
$editMode = true; // bool | 
$storeId = 56; // int | 
$forceReload = true; // bool | 

try {
    $result = $apiInstance->catalogProductRepositoryV1GetGet($sku, $editMode, $storeId, $forceReload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductRepositoryV1Api->catalogProductRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **editMode** | **bool**|  | [optional]
 **storeId** | **int**|  | [optional]
 **forceReload** | **bool**|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataProductInterface**](../Model/CatalogDataProductInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\CatalogDataProductSearchResultsInterface catalogProductRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Get product list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$searchCriteriaFilterGroupsFiltersField = "searchCriteriaFilterGroupsFiltersField_example"; // string | Field
$searchCriteriaFilterGroupsFiltersValue = "searchCriteriaFilterGroupsFiltersValue_example"; // string | Value
$searchCriteriaFilterGroupsFiltersConditionType = "searchCriteriaFilterGroupsFiltersConditionType_example"; // string | Condition type
$searchCriteriaSortOrdersField = "searchCriteriaSortOrdersField_example"; // string | Sorting field.
$searchCriteriaSortOrdersDirection = "searchCriteriaSortOrdersDirection_example"; // string | Sorting direction.
$searchCriteriaPageSize = 56; // int | Page size.
$searchCriteriaCurrentPage = 56; // int | Current page.

try {
    $result = $apiInstance->catalogProductRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductRepositoryV1Api->catalogProductRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchCriteriaFilterGroupsFiltersField** | **string**| Field | [optional]
 **searchCriteriaFilterGroupsFiltersValue** | **string**| Value | [optional]
 **searchCriteriaFilterGroupsFiltersConditionType** | **string**| Condition type | [optional]
 **searchCriteriaSortOrdersField** | **string**| Sorting field. | [optional]
 **searchCriteriaSortOrdersDirection** | **string**| Sorting direction. | [optional]
 **searchCriteriaPageSize** | **int**| Page size. | [optional]
 **searchCriteriaCurrentPage** | **int**| Current page. | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataProductSearchResultsInterface**](../Model/CatalogDataProductSearchResultsInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductRepositoryV1SavePost**
> \Krak\MagentoApiClient\Model\CatalogDataProductInterface catalogProductRepositoryV1SavePost($catalogProductRepositoryV1SavePostBody)



Create product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalogProductRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\CatalogProductRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\CatalogProductRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->catalogProductRepositoryV1SavePost($catalogProductRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductRepositoryV1Api->catalogProductRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogProductRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\CatalogProductRepositoryV1SavePostBody**](../Model/CatalogProductRepositoryV1SavePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataProductInterface**](../Model/CatalogDataProductInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductRepositoryV1SavePut**
> \Krak\MagentoApiClient\Model\CatalogDataProductInterface catalogProductRepositoryV1SavePut($sku, $catalogProductRepositoryV1SavePutBody)



Create product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 
$catalogProductRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\CatalogProductRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\CatalogProductRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->catalogProductRepositoryV1SavePut($sku, $catalogProductRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductRepositoryV1Api->catalogProductRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **catalogProductRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\CatalogProductRepositoryV1SavePutBody**](../Model/CatalogProductRepositoryV1SavePutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataProductInterface**](../Model/CatalogDataProductInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

