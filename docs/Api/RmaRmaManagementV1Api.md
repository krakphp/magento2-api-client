# Krak\MagentoApiClient\RmaRmaManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rmaRmaManagementV1SaveRmaPost**](RmaRmaManagementV1Api.md#rmaRmaManagementV1SaveRmaPost) | **POST** /V1/returns | 
[**rmaRmaManagementV1SaveRmaPut**](RmaRmaManagementV1Api.md#rmaRmaManagementV1SaveRmaPut) | **PUT** /V1/returns/{id} | 
[**rmaRmaManagementV1SearchGet**](RmaRmaManagementV1Api.md#rmaRmaManagementV1SearchGet) | **GET** /V1/returns | 


# **rmaRmaManagementV1SaveRmaPost**
> \Krak\MagentoApiClient\Model\RmaDataRmaInterface rmaRmaManagementV1SaveRmaPost($rmaRmaManagementV1SaveRmaPostBody)



Save RMA

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\RmaRmaManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$rmaRmaManagementV1SaveRmaPostBody = new \Krak\MagentoApiClient\Model\RmaRmaManagementV1SaveRmaPostBody(); // \Krak\MagentoApiClient\Model\RmaRmaManagementV1SaveRmaPostBody | 

try {
    $result = $apiInstance->rmaRmaManagementV1SaveRmaPost($rmaRmaManagementV1SaveRmaPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaRmaManagementV1Api->rmaRmaManagementV1SaveRmaPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rmaRmaManagementV1SaveRmaPostBody** | [**\Krak\MagentoApiClient\Model\RmaRmaManagementV1SaveRmaPostBody**](../Model/RmaRmaManagementV1SaveRmaPostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\RmaDataRmaInterface**](../Model/RmaDataRmaInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rmaRmaManagementV1SaveRmaPut**
> \Krak\MagentoApiClient\Model\RmaDataRmaInterface rmaRmaManagementV1SaveRmaPut($id, $rmaRmaManagementV1SaveRmaPutBody)



Save RMA

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\RmaRmaManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$rmaRmaManagementV1SaveRmaPutBody = new \Krak\MagentoApiClient\Model\RmaRmaManagementV1SaveRmaPutBody(); // \Krak\MagentoApiClient\Model\RmaRmaManagementV1SaveRmaPutBody | 

try {
    $result = $apiInstance->rmaRmaManagementV1SaveRmaPut($id, $rmaRmaManagementV1SaveRmaPutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaRmaManagementV1Api->rmaRmaManagementV1SaveRmaPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **rmaRmaManagementV1SaveRmaPutBody** | [**\Krak\MagentoApiClient\Model\RmaRmaManagementV1SaveRmaPutBody**](../Model/RmaRmaManagementV1SaveRmaPutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\RmaDataRmaInterface**](../Model/RmaDataRmaInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rmaRmaManagementV1SearchGet**
> \Krak\MagentoApiClient\Model\RmaDataRmaSearchResultInterface rmaRmaManagementV1SearchGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Return list of rma data objects based on search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\RmaRmaManagementV1Api(
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
    $result = $apiInstance->rmaRmaManagementV1SearchGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaRmaManagementV1Api->rmaRmaManagementV1SearchGet: ', $e->getMessage(), PHP_EOL;
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

[**\Krak\MagentoApiClient\Model\RmaDataRmaSearchResultInterface**](../Model/RmaDataRmaSearchResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

