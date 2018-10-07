# Krak\MagentoApiClient\SharedCatalogSharedCatalogRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sharedCatalogSharedCatalogRepositoryV1DeleteByIdDelete**](SharedCatalogSharedCatalogRepositoryV1Api.md#sharedCatalogSharedCatalogRepositoryV1DeleteByIdDelete) | **DELETE** /V1/sharedCatalog/{sharedCatalogId} | 
[**sharedCatalogSharedCatalogRepositoryV1GetGet**](SharedCatalogSharedCatalogRepositoryV1Api.md#sharedCatalogSharedCatalogRepositoryV1GetGet) | **GET** /V1/sharedCatalog/{sharedCatalogId} | 
[**sharedCatalogSharedCatalogRepositoryV1GetListGet**](SharedCatalogSharedCatalogRepositoryV1Api.md#sharedCatalogSharedCatalogRepositoryV1GetListGet) | **GET** /V1/sharedCatalog/ | 
[**sharedCatalogSharedCatalogRepositoryV1SavePost**](SharedCatalogSharedCatalogRepositoryV1Api.md#sharedCatalogSharedCatalogRepositoryV1SavePost) | **POST** /V1/sharedCatalog | 
[**sharedCatalogSharedCatalogRepositoryV1SavePut**](SharedCatalogSharedCatalogRepositoryV1Api.md#sharedCatalogSharedCatalogRepositoryV1SavePut) | **PUT** /V1/sharedCatalog/{id} | 


# **sharedCatalogSharedCatalogRepositoryV1DeleteByIdDelete**
> bool sharedCatalogSharedCatalogRepositoryV1DeleteByIdDelete($sharedCatalogId)



Delete a shared catalog by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\SharedCatalogSharedCatalogRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sharedCatalogId = 56; // int | 

try {
    $result = $apiInstance->sharedCatalogSharedCatalogRepositoryV1DeleteByIdDelete($sharedCatalogId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogSharedCatalogRepositoryV1Api->sharedCatalogSharedCatalogRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharedCatalogId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharedCatalogSharedCatalogRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\SharedCatalogDataSharedCatalogInterface sharedCatalogSharedCatalogRepositoryV1GetGet($sharedCatalogId)



Return the following properties for the selected shared catalog: ID, Store Group ID, Name, Type, Description, Customer Group, Tax Class.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\SharedCatalogSharedCatalogRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sharedCatalogId = 56; // int | 

try {
    $result = $apiInstance->sharedCatalogSharedCatalogRepositoryV1GetGet($sharedCatalogId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogSharedCatalogRepositoryV1Api->sharedCatalogSharedCatalogRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharedCatalogId** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\SharedCatalogDataSharedCatalogInterface**](../Model/SharedCatalogDataSharedCatalogInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharedCatalogSharedCatalogRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\SharedCatalogDataSearchResultsInterface sharedCatalogSharedCatalogRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Return the list of shared catalogs and basic properties for each catalog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\SharedCatalogSharedCatalogRepositoryV1Api(
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
    $result = $apiInstance->sharedCatalogSharedCatalogRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogSharedCatalogRepositoryV1Api->sharedCatalogSharedCatalogRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Krak\MagentoApiClient\Model\SharedCatalogDataSearchResultsInterface**](../Model/SharedCatalogDataSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharedCatalogSharedCatalogRepositoryV1SavePost**
> int sharedCatalogSharedCatalogRepositoryV1SavePost($sharedCatalogSharedCatalogRepositoryV1SavePostBody)



Create or update Shared Catalog service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\SharedCatalogSharedCatalogRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sharedCatalogSharedCatalogRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\SharedCatalogSharedCatalogRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\SharedCatalogSharedCatalogRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->sharedCatalogSharedCatalogRepositoryV1SavePost($sharedCatalogSharedCatalogRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogSharedCatalogRepositoryV1Api->sharedCatalogSharedCatalogRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharedCatalogSharedCatalogRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\SharedCatalogSharedCatalogRepositoryV1SavePostBody**](../Model/SharedCatalogSharedCatalogRepositoryV1SavePostBody.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharedCatalogSharedCatalogRepositoryV1SavePut**
> int sharedCatalogSharedCatalogRepositoryV1SavePut($id, $sharedCatalogSharedCatalogRepositoryV1SavePutBody)



Create or update Shared Catalog service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\SharedCatalogSharedCatalogRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$sharedCatalogSharedCatalogRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\SharedCatalogSharedCatalogRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\SharedCatalogSharedCatalogRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->sharedCatalogSharedCatalogRepositoryV1SavePut($id, $sharedCatalogSharedCatalogRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogSharedCatalogRepositoryV1Api->sharedCatalogSharedCatalogRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **sharedCatalogSharedCatalogRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\SharedCatalogSharedCatalogRepositoryV1SavePutBody**](../Model/SharedCatalogSharedCatalogRepositoryV1SavePutBody.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

