# Krak\MagentoApiClient\EavAttributeSetRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eavAttributeSetRepositoryV1DeleteByIdDelete**](EavAttributeSetRepositoryV1Api.md#eavAttributeSetRepositoryV1DeleteByIdDelete) | **DELETE** /V1/eav/attribute-sets/{attributeSetId} | 
[**eavAttributeSetRepositoryV1GetGet**](EavAttributeSetRepositoryV1Api.md#eavAttributeSetRepositoryV1GetGet) | **GET** /V1/eav/attribute-sets/{attributeSetId} | 
[**eavAttributeSetRepositoryV1GetListGet**](EavAttributeSetRepositoryV1Api.md#eavAttributeSetRepositoryV1GetListGet) | **GET** /V1/eav/attribute-sets/list | 
[**eavAttributeSetRepositoryV1SavePut**](EavAttributeSetRepositoryV1Api.md#eavAttributeSetRepositoryV1SavePut) | **PUT** /V1/eav/attribute-sets/{attributeSetId} | 


# **eavAttributeSetRepositoryV1DeleteByIdDelete**
> bool eavAttributeSetRepositoryV1DeleteByIdDelete($attributeSetId)



Remove attribute set by given ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\EavAttributeSetRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeSetId = 56; // int | 

try {
    $result = $apiInstance->eavAttributeSetRepositoryV1DeleteByIdDelete($attributeSetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EavAttributeSetRepositoryV1Api->eavAttributeSetRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **eavAttributeSetRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\EavDataAttributeSetInterface eavAttributeSetRepositoryV1GetGet($attributeSetId)



Retrieve attribute set information based on given ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\EavAttributeSetRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeSetId = 56; // int | 

try {
    $result = $apiInstance->eavAttributeSetRepositoryV1GetGet($attributeSetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EavAttributeSetRepositoryV1Api->eavAttributeSetRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
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

# **eavAttributeSetRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\EavDataAttributeSetSearchResultsInterface eavAttributeSetRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Retrieve list of Attribute Sets This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#AttributeSetRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\EavAttributeSetRepositoryV1Api(
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
    $result = $apiInstance->eavAttributeSetRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EavAttributeSetRepositoryV1Api->eavAttributeSetRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

# **eavAttributeSetRepositoryV1SavePut**
> \Krak\MagentoApiClient\Model\EavDataAttributeSetInterface eavAttributeSetRepositoryV1SavePut($attributeSetId, $eavAttributeSetRepositoryV1SavePutBody)



Save attribute set data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\EavAttributeSetRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeSetId = "attributeSetId_example"; // string | 
$eavAttributeSetRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\EavAttributeSetRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\EavAttributeSetRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->eavAttributeSetRepositoryV1SavePut($attributeSetId, $eavAttributeSetRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EavAttributeSetRepositoryV1Api->eavAttributeSetRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeSetId** | **string**|  |
 **eavAttributeSetRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\EavAttributeSetRepositoryV1SavePutBody**](../Model/EavAttributeSetRepositoryV1SavePutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\EavDataAttributeSetInterface**](../Model/EavDataAttributeSetInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

