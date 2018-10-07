# Krak\MagentoApiClient\TaxTaxRuleRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taxTaxRuleRepositoryV1DeleteByIdDelete**](TaxTaxRuleRepositoryV1Api.md#taxTaxRuleRepositoryV1DeleteByIdDelete) | **DELETE** /V1/taxRules/{ruleId} | 
[**taxTaxRuleRepositoryV1GetGet**](TaxTaxRuleRepositoryV1Api.md#taxTaxRuleRepositoryV1GetGet) | **GET** /V1/taxRules/{ruleId} | 
[**taxTaxRuleRepositoryV1GetListGet**](TaxTaxRuleRepositoryV1Api.md#taxTaxRuleRepositoryV1GetListGet) | **GET** /V1/taxRules/search | 
[**taxTaxRuleRepositoryV1SavePost**](TaxTaxRuleRepositoryV1Api.md#taxTaxRuleRepositoryV1SavePost) | **POST** /V1/taxRules | 
[**taxTaxRuleRepositoryV1SavePut**](TaxTaxRuleRepositoryV1Api.md#taxTaxRuleRepositoryV1SavePut) | **PUT** /V1/taxRules | 


# **taxTaxRuleRepositoryV1DeleteByIdDelete**
> bool taxTaxRuleRepositoryV1DeleteByIdDelete($ruleId)



Delete TaxRule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\TaxTaxRuleRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ruleId = 56; // int | 

try {
    $result = $apiInstance->taxTaxRuleRepositoryV1DeleteByIdDelete($ruleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRuleRepositoryV1Api->taxTaxRuleRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **taxTaxRuleRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\TaxDataTaxRuleInterface taxTaxRuleRepositoryV1GetGet($ruleId)



Get TaxRule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\TaxTaxRuleRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ruleId = 56; // int | 

try {
    $result = $apiInstance->taxTaxRuleRepositoryV1GetGet($ruleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRuleRepositoryV1Api->taxTaxRuleRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ruleId** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\TaxDataTaxRuleInterface**](../Model/TaxDataTaxRuleInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxRuleRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\TaxDataTaxRuleSearchResultsInterface taxTaxRuleRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Search TaxRules This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#TaxRuleRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\TaxTaxRuleRepositoryV1Api(
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
    $result = $apiInstance->taxTaxRuleRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRuleRepositoryV1Api->taxTaxRuleRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Krak\MagentoApiClient\Model\TaxDataTaxRuleSearchResultsInterface**](../Model/TaxDataTaxRuleSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxRuleRepositoryV1SavePost**
> \Krak\MagentoApiClient\Model\TaxDataTaxRuleInterface taxTaxRuleRepositoryV1SavePost($taxTaxRuleRepositoryV1SavePostBody)



Save TaxRule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\TaxTaxRuleRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$taxTaxRuleRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\TaxTaxRuleRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\TaxTaxRuleRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->taxTaxRuleRepositoryV1SavePost($taxTaxRuleRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRuleRepositoryV1Api->taxTaxRuleRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taxTaxRuleRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\TaxTaxRuleRepositoryV1SavePostBody**](../Model/TaxTaxRuleRepositoryV1SavePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\TaxDataTaxRuleInterface**](../Model/TaxDataTaxRuleInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxRuleRepositoryV1SavePut**
> \Krak\MagentoApiClient\Model\TaxDataTaxRuleInterface taxTaxRuleRepositoryV1SavePut($taxTaxRuleRepositoryV1SavePutBody)



Save TaxRule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\TaxTaxRuleRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$taxTaxRuleRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\TaxTaxRuleRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\TaxTaxRuleRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->taxTaxRuleRepositoryV1SavePut($taxTaxRuleRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRuleRepositoryV1Api->taxTaxRuleRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taxTaxRuleRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\TaxTaxRuleRepositoryV1SavePutBody**](../Model/TaxTaxRuleRepositoryV1SavePutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\TaxDataTaxRuleInterface**](../Model/TaxDataTaxRuleInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

