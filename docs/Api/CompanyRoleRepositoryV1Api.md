# Krak\MagentoApiClient\CompanyRoleRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyRoleRepositoryV1DeleteDelete**](CompanyRoleRepositoryV1Api.md#companyRoleRepositoryV1DeleteDelete) | **DELETE** /V1/company/role/{roleId} | 
[**companyRoleRepositoryV1GetGet**](CompanyRoleRepositoryV1Api.md#companyRoleRepositoryV1GetGet) | **GET** /V1/company/role/{roleId} | 
[**companyRoleRepositoryV1GetListGet**](CompanyRoleRepositoryV1Api.md#companyRoleRepositoryV1GetListGet) | **GET** /V1/company/role/ | 
[**companyRoleRepositoryV1SavePost**](CompanyRoleRepositoryV1Api.md#companyRoleRepositoryV1SavePost) | **POST** /V1/company/role/ | 
[**companyRoleRepositoryV1SavePut**](CompanyRoleRepositoryV1Api.md#companyRoleRepositoryV1SavePut) | **PUT** /V1/company/role/{id} | 


# **companyRoleRepositoryV1DeleteDelete**
> bool companyRoleRepositoryV1DeleteDelete($roleId)



Delete a role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CompanyRoleRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$roleId = 56; // int | 

try {
    $result = $apiInstance->companyRoleRepositoryV1DeleteDelete($roleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyRoleRepositoryV1Api->companyRoleRepositoryV1DeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **roleId** | **int**|  |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyRoleRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\CompanyDataRoleInterface companyRoleRepositoryV1GetGet($roleId)



Returns the list of permissions for a specified role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CompanyRoleRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$roleId = 56; // int | 

try {
    $result = $apiInstance->companyRoleRepositoryV1GetGet($roleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyRoleRepositoryV1Api->companyRoleRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **roleId** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\CompanyDataRoleInterface**](../Model/CompanyDataRoleInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyRoleRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\CompanyDataRoleSearchResultsInterface companyRoleRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Returns the list of roles and permissions for a specified company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CompanyRoleRepositoryV1Api(
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
    $result = $apiInstance->companyRoleRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyRoleRepositoryV1Api->companyRoleRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Krak\MagentoApiClient\Model\CompanyDataRoleSearchResultsInterface**](../Model/CompanyDataRoleSearchResultsInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyRoleRepositoryV1SavePost**
> \Krak\MagentoApiClient\Model\CompanyDataRoleInterface companyRoleRepositoryV1SavePost($companyRoleRepositoryV1SavePostBody)



Create or update a role for a selected company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CompanyRoleRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$companyRoleRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\CompanyRoleRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\CompanyRoleRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->companyRoleRepositoryV1SavePost($companyRoleRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyRoleRepositoryV1Api->companyRoleRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companyRoleRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\CompanyRoleRepositoryV1SavePostBody**](../Model/CompanyRoleRepositoryV1SavePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CompanyDataRoleInterface**](../Model/CompanyDataRoleInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyRoleRepositoryV1SavePut**
> \Krak\MagentoApiClient\Model\CompanyDataRoleInterface companyRoleRepositoryV1SavePut($id, $companyRoleRepositoryV1SavePutBody)



Create or update a role for a selected company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CompanyRoleRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$companyRoleRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\CompanyRoleRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\CompanyRoleRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->companyRoleRepositoryV1SavePut($id, $companyRoleRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyRoleRepositoryV1Api->companyRoleRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **companyRoleRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\CompanyRoleRepositoryV1SavePutBody**](../Model/CompanyRoleRepositoryV1SavePutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CompanyDataRoleInterface**](../Model/CompanyDataRoleInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

