# Krak\MagentoApiClient\CatalogAttributeSetRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogAttributeSetRepositoryV1DeleteByIdDelete**](CatalogAttributeSetRepositoryV1Api.md#catalogAttributeSetRepositoryV1DeleteByIdDelete) | **DELETE** /V1/products/attribute-sets/{attributeSetId} | 
[**catalogAttributeSetRepositoryV1GetGet**](CatalogAttributeSetRepositoryV1Api.md#catalogAttributeSetRepositoryV1GetGet) | **GET** /V1/products/attribute-sets/{attributeSetId} | 
[**catalogAttributeSetRepositoryV1GetListGet**](CatalogAttributeSetRepositoryV1Api.md#catalogAttributeSetRepositoryV1GetListGet) | **GET** /V1/products/attribute-sets/sets/list | 
[**catalogAttributeSetRepositoryV1SavePut**](CatalogAttributeSetRepositoryV1Api.md#catalogAttributeSetRepositoryV1SavePut) | **PUT** /V1/products/attribute-sets/{attributeSetId} | 


# **catalogAttributeSetRepositoryV1DeleteByIdDelete**
> bool catalogAttributeSetRepositoryV1DeleteByIdDelete($attributeSetId)



Remove attribute set by given ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogAttributeSetRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeSetId = 56; // int | 

try {
    $result = $apiInstance->catalogAttributeSetRepositoryV1DeleteByIdDelete($attributeSetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogAttributeSetRepositoryV1Api->catalogAttributeSetRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeSetId** | **int**|  |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogAttributeSetRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\EavDataAttributeSetInterface catalogAttributeSetRepositoryV1GetGet($attributeSetId)



Retrieve attribute set information based on given ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogAttributeSetRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeSetId = 56; // int | 

try {
    $result = $apiInstance->catalogAttributeSetRepositoryV1GetGet($attributeSetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogAttributeSetRepositoryV1Api->catalogAttributeSetRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeSetId** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\EavDataAttributeSetInterface**](../Model/EavDataAttributeSetInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogAttributeSetRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\EavDataAttributeSetSearchResultsInterface catalogAttributeSetRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Retrieve list of Attribute Sets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogAttributeSetRepositoryV1Api(
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
    $result = $apiInstance->catalogAttributeSetRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogAttributeSetRepositoryV1Api->catalogAttributeSetRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Krak\MagentoApiClient\Model\EavDataAttributeSetSearchResultsInterface**](../Model/EavDataAttributeSetSearchResultsInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogAttributeSetRepositoryV1SavePut**
> \Krak\MagentoApiClient\Model\EavDataAttributeSetInterface catalogAttributeSetRepositoryV1SavePut($attributeSetId, $catalogAttributeSetRepositoryV1SavePutBody)



Save attribute set data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogAttributeSetRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeSetId = "attributeSetId_example"; // string | 
$catalogAttributeSetRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\CatalogAttributeSetRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\CatalogAttributeSetRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->catalogAttributeSetRepositoryV1SavePut($attributeSetId, $catalogAttributeSetRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogAttributeSetRepositoryV1Api->catalogAttributeSetRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeSetId** | **string**|  |
 **catalogAttributeSetRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\CatalogAttributeSetRepositoryV1SavePutBody**](../Model/CatalogAttributeSetRepositoryV1SavePutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\EavDataAttributeSetInterface**](../Model/EavDataAttributeSetInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

