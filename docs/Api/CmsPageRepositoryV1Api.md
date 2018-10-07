# Krak\MagentoApiClient\CmsPageRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cmsPageRepositoryV1DeleteByIdDelete**](CmsPageRepositoryV1Api.md#cmsPageRepositoryV1DeleteByIdDelete) | **DELETE** /V1/cmsPage/{pageId} | 
[**cmsPageRepositoryV1GetByIdGet**](CmsPageRepositoryV1Api.md#cmsPageRepositoryV1GetByIdGet) | **GET** /V1/cmsPage/{pageId} | 
[**cmsPageRepositoryV1GetListGet**](CmsPageRepositoryV1Api.md#cmsPageRepositoryV1GetListGet) | **GET** /V1/cmsPage/search | 
[**cmsPageRepositoryV1SavePost**](CmsPageRepositoryV1Api.md#cmsPageRepositoryV1SavePost) | **POST** /V1/cmsPage | 
[**cmsPageRepositoryV1SavePut**](CmsPageRepositoryV1Api.md#cmsPageRepositoryV1SavePut) | **PUT** /V1/cmsPage/{id} | 


# **cmsPageRepositoryV1DeleteByIdDelete**
> bool cmsPageRepositoryV1DeleteByIdDelete($pageId)



Delete page by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CmsPageRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pageId = 56; // int | 

try {
    $result = $apiInstance->cmsPageRepositoryV1DeleteByIdDelete($pageId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsPageRepositoryV1Api->cmsPageRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cmsPageRepositoryV1GetByIdGet**
> \Krak\MagentoApiClient\Model\CmsDataPageInterface cmsPageRepositoryV1GetByIdGet($pageId)



Retrieve page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CmsPageRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pageId = 56; // int | 

try {
    $result = $apiInstance->cmsPageRepositoryV1GetByIdGet($pageId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsPageRepositoryV1Api->cmsPageRepositoryV1GetByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageId** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\CmsDataPageInterface**](../Model/CmsDataPageInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cmsPageRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\CmsDataPageSearchResultsInterface cmsPageRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Retrieve pages matching the specified criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CmsPageRepositoryV1Api(
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
    $result = $apiInstance->cmsPageRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsPageRepositoryV1Api->cmsPageRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Krak\MagentoApiClient\Model\CmsDataPageSearchResultsInterface**](../Model/CmsDataPageSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cmsPageRepositoryV1SavePost**
> \Krak\MagentoApiClient\Model\CmsDataPageInterface cmsPageRepositoryV1SavePost($cmsPageRepositoryV1SavePostBody)



Save page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CmsPageRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cmsPageRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\CmsPageRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\CmsPageRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->cmsPageRepositoryV1SavePost($cmsPageRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsPageRepositoryV1Api->cmsPageRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cmsPageRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\CmsPageRepositoryV1SavePostBody**](../Model/CmsPageRepositoryV1SavePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CmsDataPageInterface**](../Model/CmsDataPageInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cmsPageRepositoryV1SavePut**
> \Krak\MagentoApiClient\Model\CmsDataPageInterface cmsPageRepositoryV1SavePut($id, $cmsPageRepositoryV1SavePutBody)



Save page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CmsPageRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$cmsPageRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\CmsPageRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\CmsPageRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->cmsPageRepositoryV1SavePut($id, $cmsPageRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsPageRepositoryV1Api->cmsPageRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **cmsPageRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\CmsPageRepositoryV1SavePutBody**](../Model/CmsPageRepositoryV1SavePutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CmsDataPageInterface**](../Model/CmsDataPageInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

