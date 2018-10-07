# Krak\MagentoApiClient\SalesRuleRuleRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesRuleRuleRepositoryV1DeleteByIdDelete**](SalesRuleRuleRepositoryV1Api.md#salesRuleRuleRepositoryV1DeleteByIdDelete) | **DELETE** /V1/salesRules/{ruleId} | 
[**salesRuleRuleRepositoryV1GetByIdGet**](SalesRuleRuleRepositoryV1Api.md#salesRuleRuleRepositoryV1GetByIdGet) | **GET** /V1/salesRules/{ruleId} | 
[**salesRuleRuleRepositoryV1GetListGet**](SalesRuleRuleRepositoryV1Api.md#salesRuleRuleRepositoryV1GetListGet) | **GET** /V1/salesRules/search | 
[**salesRuleRuleRepositoryV1SavePost**](SalesRuleRuleRepositoryV1Api.md#salesRuleRuleRepositoryV1SavePost) | **POST** /V1/salesRules | 
[**salesRuleRuleRepositoryV1SavePut**](SalesRuleRuleRepositoryV1Api.md#salesRuleRuleRepositoryV1SavePut) | **PUT** /V1/salesRules/{ruleId} | 


# **salesRuleRuleRepositoryV1DeleteByIdDelete**
> bool salesRuleRuleRepositoryV1DeleteByIdDelete($ruleId)



Delete rule by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\SalesRuleRuleRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ruleId = 56; // int | 

try {
    $result = $apiInstance->salesRuleRuleRepositoryV1DeleteByIdDelete($ruleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleRuleRepositoryV1Api->salesRuleRuleRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ruleId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleRuleRepositoryV1GetByIdGet**
> \Krak\MagentoApiClient\Model\SalesRuleDataRuleInterface salesRuleRuleRepositoryV1GetByIdGet($ruleId)



Get rule by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\SalesRuleRuleRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ruleId = 56; // int | 

try {
    $result = $apiInstance->salesRuleRuleRepositoryV1GetByIdGet($ruleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleRuleRepositoryV1Api->salesRuleRuleRepositoryV1GetByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ruleId** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\SalesRuleDataRuleInterface**](../Model/SalesRuleDataRuleInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleRuleRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\SalesRuleDataRuleSearchResultInterface salesRuleRuleRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Retrieve sales rules that match te specified criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#RuleRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\SalesRuleRuleRepositoryV1Api(
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
    $result = $apiInstance->salesRuleRuleRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleRuleRepositoryV1Api->salesRuleRuleRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Krak\MagentoApiClient\Model\SalesRuleDataRuleSearchResultInterface**](../Model/SalesRuleDataRuleSearchResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleRuleRepositoryV1SavePost**
> \Krak\MagentoApiClient\Model\SalesRuleDataRuleInterface salesRuleRuleRepositoryV1SavePost($salesRuleRuleRepositoryV1SavePostBody)



Save sales rule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\SalesRuleRuleRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$salesRuleRuleRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\SalesRuleRuleRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\SalesRuleRuleRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->salesRuleRuleRepositoryV1SavePost($salesRuleRuleRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleRuleRepositoryV1Api->salesRuleRuleRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **salesRuleRuleRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\SalesRuleRuleRepositoryV1SavePostBody**](../Model/SalesRuleRuleRepositoryV1SavePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\SalesRuleDataRuleInterface**](../Model/SalesRuleDataRuleInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleRuleRepositoryV1SavePut**
> \Krak\MagentoApiClient\Model\SalesRuleDataRuleInterface salesRuleRuleRepositoryV1SavePut($ruleId, $salesRuleRuleRepositoryV1SavePutBody)



Save sales rule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\SalesRuleRuleRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ruleId = "ruleId_example"; // string | 
$salesRuleRuleRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\SalesRuleRuleRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\SalesRuleRuleRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->salesRuleRuleRepositoryV1SavePut($ruleId, $salesRuleRuleRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleRuleRepositoryV1Api->salesRuleRuleRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ruleId** | **string**|  |
 **salesRuleRuleRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\SalesRuleRuleRepositoryV1SavePutBody**](../Model/SalesRuleRuleRepositoryV1SavePutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\SalesRuleDataRuleInterface**](../Model/SalesRuleDataRuleInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

