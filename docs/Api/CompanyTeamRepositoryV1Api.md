# Krak\MagentoApiClient\CompanyTeamRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyTeamRepositoryV1CreatePost**](CompanyTeamRepositoryV1Api.md#companyTeamRepositoryV1CreatePost) | **POST** /V1/team/{companyId} | 
[**companyTeamRepositoryV1DeleteByIdDelete**](CompanyTeamRepositoryV1Api.md#companyTeamRepositoryV1DeleteByIdDelete) | **DELETE** /V1/team/{teamId} | 
[**companyTeamRepositoryV1GetGet**](CompanyTeamRepositoryV1Api.md#companyTeamRepositoryV1GetGet) | **GET** /V1/team/{teamId} | 
[**companyTeamRepositoryV1GetListGet**](CompanyTeamRepositoryV1Api.md#companyTeamRepositoryV1GetListGet) | **GET** /V1/team/ | 
[**companyTeamRepositoryV1SavePut**](CompanyTeamRepositoryV1Api.md#companyTeamRepositoryV1SavePut) | **PUT** /V1/team/{teamId} | 


# **companyTeamRepositoryV1CreatePost**
> \Krak\MagentoApiClient\Model\ErrorResponse companyTeamRepositoryV1CreatePost($companyId, $companyTeamRepositoryV1CreatePostBody)



Create a team in the company structure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CompanyTeamRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$companyId = 56; // int | 
$companyTeamRepositoryV1CreatePostBody = new \Krak\MagentoApiClient\Model\CompanyTeamRepositoryV1CreatePostBody(); // \Krak\MagentoApiClient\Model\CompanyTeamRepositoryV1CreatePostBody | 

try {
    $result = $apiInstance->companyTeamRepositoryV1CreatePost($companyId, $companyTeamRepositoryV1CreatePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyTeamRepositoryV1Api->companyTeamRepositoryV1CreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companyId** | **int**|  |
 **companyTeamRepositoryV1CreatePostBody** | [**\Krak\MagentoApiClient\Model\CompanyTeamRepositoryV1CreatePostBody**](../Model/CompanyTeamRepositoryV1CreatePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\ErrorResponse**](../Model/ErrorResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyTeamRepositoryV1DeleteByIdDelete**
> \Krak\MagentoApiClient\Model\ErrorResponse companyTeamRepositoryV1DeleteByIdDelete($teamId)



Delete a team from the company structure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CompanyTeamRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$teamId = 56; // int | 

try {
    $result = $apiInstance->companyTeamRepositoryV1DeleteByIdDelete($teamId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyTeamRepositoryV1Api->companyTeamRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\ErrorResponse**](../Model/ErrorResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyTeamRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\CompanyDataTeamInterface companyTeamRepositoryV1GetGet($teamId)



Returns data for a team in the company, by entity id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CompanyTeamRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$teamId = 56; // int | 

try {
    $result = $apiInstance->companyTeamRepositoryV1GetGet($teamId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyTeamRepositoryV1Api->companyTeamRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\CompanyDataTeamInterface**](../Model/CompanyDataTeamInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyTeamRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\CompanyDataTeamSearchResultsInterface companyTeamRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Returns the list of teams for the specified search criteria (team name or description).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CompanyTeamRepositoryV1Api(
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
    $result = $apiInstance->companyTeamRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyTeamRepositoryV1Api->companyTeamRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Krak\MagentoApiClient\Model\CompanyDataTeamSearchResultsInterface**](../Model/CompanyDataTeamSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyTeamRepositoryV1SavePut**
> bool companyTeamRepositoryV1SavePut($teamId, $companyTeamRepositoryV1SavePutBody)



Update a team in the company structure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CompanyTeamRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$teamId = "teamId_example"; // string | 
$companyTeamRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\CompanyTeamRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\CompanyTeamRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->companyTeamRepositoryV1SavePut($teamId, $companyTeamRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyTeamRepositoryV1Api->companyTeamRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**|  |
 **companyTeamRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\CompanyTeamRepositoryV1SavePutBody**](../Model/CompanyTeamRepositoryV1SavePutBody.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

