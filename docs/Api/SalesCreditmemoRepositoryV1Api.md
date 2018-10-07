# Krak\MagentoApiClient\SalesCreditmemoRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesCreditmemoRepositoryV1GetGet**](SalesCreditmemoRepositoryV1Api.md#salesCreditmemoRepositoryV1GetGet) | **GET** /V1/creditmemo/{id} | 
[**salesCreditmemoRepositoryV1GetListGet**](SalesCreditmemoRepositoryV1Api.md#salesCreditmemoRepositoryV1GetListGet) | **GET** /V1/creditmemos | 
[**salesCreditmemoRepositoryV1SavePost**](SalesCreditmemoRepositoryV1Api.md#salesCreditmemoRepositoryV1SavePost) | **POST** /V1/creditmemo | 


# **salesCreditmemoRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\SalesDataCreditmemoInterface salesCreditmemoRepositoryV1GetGet($id)



Loads a specified credit memo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesCreditmemoRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The credit memo ID.

try {
    $result = $apiInstance->salesCreditmemoRepositoryV1GetGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditmemoRepositoryV1Api->salesCreditmemoRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The credit memo ID. |

### Return type

[**\Krak\MagentoApiClient\Model\SalesDataCreditmemoInterface**](../Model/SalesDataCreditmemoInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesCreditmemoRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\SalesDataCreditmemoSearchResultInterface salesCreditmemoRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Lists credit memos that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#CreditmemoRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesCreditmemoRepositoryV1Api(
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
    $result = $apiInstance->salesCreditmemoRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditmemoRepositoryV1Api->salesCreditmemoRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Krak\MagentoApiClient\Model\SalesDataCreditmemoSearchResultInterface**](../Model/SalesDataCreditmemoSearchResultInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesCreditmemoRepositoryV1SavePost**
> \Krak\MagentoApiClient\Model\SalesDataCreditmemoInterface salesCreditmemoRepositoryV1SavePost($salesCreditmemoRepositoryV1SavePostBody)



Performs persist operations for a specified credit memo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesCreditmemoRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$salesCreditmemoRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\SalesCreditmemoRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\SalesCreditmemoRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->salesCreditmemoRepositoryV1SavePost($salesCreditmemoRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditmemoRepositoryV1Api->salesCreditmemoRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **salesCreditmemoRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\SalesCreditmemoRepositoryV1SavePostBody**](../Model/SalesCreditmemoRepositoryV1SavePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\SalesDataCreditmemoInterface**](../Model/SalesDataCreditmemoInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

