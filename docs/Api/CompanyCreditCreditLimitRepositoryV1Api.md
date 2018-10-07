# Krak\MagentoApiClient\CompanyCreditCreditLimitRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyCreditCreditLimitRepositoryV1GetGet**](CompanyCreditCreditLimitRepositoryV1Api.md#companyCreditCreditLimitRepositoryV1GetGet) | **GET** /V1/companyCredits/{creditId} | 
[**companyCreditCreditLimitRepositoryV1GetListGet**](CompanyCreditCreditLimitRepositoryV1Api.md#companyCreditCreditLimitRepositoryV1GetListGet) | **GET** /V1/companyCredits/ | 
[**companyCreditCreditLimitRepositoryV1SavePut**](CompanyCreditCreditLimitRepositoryV1Api.md#companyCreditCreditLimitRepositoryV1SavePut) | **PUT** /V1/companyCredits/{id} | 


# **companyCreditCreditLimitRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\CompanyCreditDataCreditLimitInterface companyCreditCreditLimitRepositoryV1GetGet($creditId, $reload)



Returns data on the credit limit for a specified credit limit ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CompanyCreditCreditLimitRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$creditId = 56; // int | 
$reload = true; // bool | [optional]

try {
    $result = $apiInstance->companyCreditCreditLimitRepositoryV1GetGet($creditId, $reload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyCreditCreditLimitRepositoryV1Api->companyCreditCreditLimitRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creditId** | **int**|  |
 **reload** | **bool**| [optional] | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CompanyCreditDataCreditLimitInterface**](../Model/CompanyCreditDataCreditLimitInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCreditCreditLimitRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\CompanyCreditDataCreditLimitSearchResultsInterface companyCreditCreditLimitRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Returns the list of credits for specified companies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CompanyCreditCreditLimitRepositoryV1Api(
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
    $result = $apiInstance->companyCreditCreditLimitRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyCreditCreditLimitRepositoryV1Api->companyCreditCreditLimitRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Krak\MagentoApiClient\Model\CompanyCreditDataCreditLimitSearchResultsInterface**](../Model/CompanyCreditDataCreditLimitSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCreditCreditLimitRepositoryV1SavePut**
> \Krak\MagentoApiClient\Model\CompanyCreditDataCreditLimitInterface companyCreditCreditLimitRepositoryV1SavePut($id, $companyCreditCreditLimitRepositoryV1SavePutBody)



Update the following company credit attributes: credit currency, credit limit and setting to exceed credit.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CompanyCreditCreditLimitRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$companyCreditCreditLimitRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\CompanyCreditCreditLimitRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\CompanyCreditCreditLimitRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->companyCreditCreditLimitRepositoryV1SavePut($id, $companyCreditCreditLimitRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyCreditCreditLimitRepositoryV1Api->companyCreditCreditLimitRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **companyCreditCreditLimitRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\CompanyCreditCreditLimitRepositoryV1SavePutBody**](../Model/CompanyCreditCreditLimitRepositoryV1SavePutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CompanyCreditDataCreditLimitInterface**](../Model/CompanyCreditDataCreditLimitInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

