# Krak\MagentoApiClient\CatalogProductAttributeGroupRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductAttributeGroupRepositoryV1DeleteByIdDelete**](CatalogProductAttributeGroupRepositoryV1Api.md#catalogProductAttributeGroupRepositoryV1DeleteByIdDelete) | **DELETE** /V1/products/attribute-sets/groups/{groupId} | 
[**catalogProductAttributeGroupRepositoryV1GetListGet**](CatalogProductAttributeGroupRepositoryV1Api.md#catalogProductAttributeGroupRepositoryV1GetListGet) | **GET** /V1/products/attribute-sets/groups/list | 
[**catalogProductAttributeGroupRepositoryV1SavePost**](CatalogProductAttributeGroupRepositoryV1Api.md#catalogProductAttributeGroupRepositoryV1SavePost) | **POST** /V1/products/attribute-sets/groups | 
[**catalogProductAttributeGroupRepositoryV1SavePut**](CatalogProductAttributeGroupRepositoryV1Api.md#catalogProductAttributeGroupRepositoryV1SavePut) | **PUT** /V1/products/attribute-sets/{attributeSetId}/groups | 


# **catalogProductAttributeGroupRepositoryV1DeleteByIdDelete**
> bool catalogProductAttributeGroupRepositoryV1DeleteByIdDelete($groupId)



Remove attribute group by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductAttributeGroupRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$groupId = 56; // int | 

try {
    $result = $apiInstance->catalogProductAttributeGroupRepositoryV1DeleteByIdDelete($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeGroupRepositoryV1Api->catalogProductAttributeGroupRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeGroupRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\EavDataAttributeGroupSearchResultsInterface catalogProductAttributeGroupRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Retrieve list of attribute groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductAttributeGroupRepositoryV1Api(
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
    $result = $apiInstance->catalogProductAttributeGroupRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeGroupRepositoryV1Api->catalogProductAttributeGroupRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Krak\MagentoApiClient\Model\EavDataAttributeGroupSearchResultsInterface**](../Model/EavDataAttributeGroupSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeGroupRepositoryV1SavePost**
> \Krak\MagentoApiClient\Model\EavDataAttributeGroupInterface catalogProductAttributeGroupRepositoryV1SavePost($catalogProductAttributeGroupRepositoryV1SavePostBody)



Save attribute group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductAttributeGroupRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$catalogProductAttributeGroupRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\CatalogProductAttributeGroupRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\CatalogProductAttributeGroupRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->catalogProductAttributeGroupRepositoryV1SavePost($catalogProductAttributeGroupRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeGroupRepositoryV1Api->catalogProductAttributeGroupRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogProductAttributeGroupRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\CatalogProductAttributeGroupRepositoryV1SavePostBody**](../Model/CatalogProductAttributeGroupRepositoryV1SavePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\EavDataAttributeGroupInterface**](../Model/EavDataAttributeGroupInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeGroupRepositoryV1SavePut**
> \Krak\MagentoApiClient\Model\EavDataAttributeGroupInterface catalogProductAttributeGroupRepositoryV1SavePut($attributeSetId, $catalogProductAttributeGroupRepositoryV1SavePutBody)



Save attribute group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductAttributeGroupRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attributeSetId = "attributeSetId_example"; // string | 
$catalogProductAttributeGroupRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\CatalogProductAttributeGroupRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\CatalogProductAttributeGroupRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->catalogProductAttributeGroupRepositoryV1SavePut($attributeSetId, $catalogProductAttributeGroupRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeGroupRepositoryV1Api->catalogProductAttributeGroupRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeSetId** | **string**|  |
 **catalogProductAttributeGroupRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\CatalogProductAttributeGroupRepositoryV1SavePutBody**](../Model/CatalogProductAttributeGroupRepositoryV1SavePutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\EavDataAttributeGroupInterface**](../Model/EavDataAttributeGroupInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

