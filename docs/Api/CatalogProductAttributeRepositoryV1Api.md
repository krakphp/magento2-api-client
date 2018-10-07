# Krak\MagentoApiClient\CatalogProductAttributeRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductAttributeRepositoryV1DeleteByIdDelete**](CatalogProductAttributeRepositoryV1Api.md#catalogProductAttributeRepositoryV1DeleteByIdDelete) | **DELETE** /V1/products/attributes/{attributeCode} | 
[**catalogProductAttributeRepositoryV1GetGet**](CatalogProductAttributeRepositoryV1Api.md#catalogProductAttributeRepositoryV1GetGet) | **GET** /V1/products/attributes/{attributeCode} | 
[**catalogProductAttributeRepositoryV1GetListGet**](CatalogProductAttributeRepositoryV1Api.md#catalogProductAttributeRepositoryV1GetListGet) | **GET** /V1/products/attributes | 
[**catalogProductAttributeRepositoryV1SavePost**](CatalogProductAttributeRepositoryV1Api.md#catalogProductAttributeRepositoryV1SavePost) | **POST** /V1/products/attributes | 
[**catalogProductAttributeRepositoryV1SavePut**](CatalogProductAttributeRepositoryV1Api.md#catalogProductAttributeRepositoryV1SavePut) | **PUT** /V1/products/attributes/{attributeCode} | 


# **catalogProductAttributeRepositoryV1DeleteByIdDelete**
> bool catalogProductAttributeRepositoryV1DeleteByIdDelete($attributeCode)



Delete Attribute by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductAttributeRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attributeCode = "attributeCode_example"; // string | 

try {
    $result = $apiInstance->catalogProductAttributeRepositoryV1DeleteByIdDelete($attributeCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeRepositoryV1Api->catalogProductAttributeRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeCode** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\CatalogDataProductAttributeInterface catalogProductAttributeRepositoryV1GetGet($attributeCode)



Retrieve specific attribute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductAttributeRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attributeCode = "attributeCode_example"; // string | 

try {
    $result = $apiInstance->catalogProductAttributeRepositoryV1GetGet($attributeCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeRepositoryV1Api->catalogProductAttributeRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeCode** | **string**|  |

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataProductAttributeInterface**](../Model/CatalogDataProductAttributeInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\CatalogDataProductAttributeSearchResultsInterface catalogProductAttributeRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Retrieve all attributes for entity type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductAttributeRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$searchCriteriaFilterGroupsFiltersField = "searchCriteriaFilterGroupsFiltersField_example"; // string | Field
$searchCriteriaFilterGroupsFiltersValue = "searchCriteriaFilterGroupsFiltersValue_example"; // string | Value
$searchCriteriaFilterGroupsFiltersConditionType = "searchCriteriaFilterGroupsFiltersConditionType_example"; // string | Condition type
$searchCriteriaSortOrdersField = "searchCriteriaSortOrdersField_example"; // string | Sorting field.
$searchCriteriaSortOrdersDirection = "searchCriteriaSortOrdersDirection_example"; // string | Sorting direction.
$searchCriteriaPageSize = 56; // int | Page size.
$searchCriteriaCurrentPage = 56; // int | Current page.

try {
    $result = $apiInstance->catalogProductAttributeRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeRepositoryV1Api->catalogProductAttributeRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Krak\MagentoApiClient\Model\CatalogDataProductAttributeSearchResultsInterface**](../Model/CatalogDataProductAttributeSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeRepositoryV1SavePost**
> \Krak\MagentoApiClient\Model\CatalogDataProductAttributeInterface catalogProductAttributeRepositoryV1SavePost($catalogProductAttributeRepositoryV1SavePostBody)



Save attribute data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductAttributeRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$catalogProductAttributeRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\CatalogProductAttributeRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\CatalogProductAttributeRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->catalogProductAttributeRepositoryV1SavePost($catalogProductAttributeRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeRepositoryV1Api->catalogProductAttributeRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogProductAttributeRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\CatalogProductAttributeRepositoryV1SavePostBody**](../Model/CatalogProductAttributeRepositoryV1SavePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataProductAttributeInterface**](../Model/CatalogDataProductAttributeInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeRepositoryV1SavePut**
> \Krak\MagentoApiClient\Model\CatalogDataProductAttributeInterface catalogProductAttributeRepositoryV1SavePut($attributeCode, $catalogProductAttributeRepositoryV1SavePutBody)



Save attribute data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductAttributeRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attributeCode = "attributeCode_example"; // string | 
$catalogProductAttributeRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\CatalogProductAttributeRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\CatalogProductAttributeRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->catalogProductAttributeRepositoryV1SavePut($attributeCode, $catalogProductAttributeRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeRepositoryV1Api->catalogProductAttributeRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeCode** | **string**|  |
 **catalogProductAttributeRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\CatalogProductAttributeRepositoryV1SavePutBody**](../Model/CatalogProductAttributeRepositoryV1SavePutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataProductAttributeInterface**](../Model/CatalogDataProductAttributeInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

