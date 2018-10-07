# Krak\MagentoApiClient\SalesOrderRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesOrderRepositoryV1GetGet**](SalesOrderRepositoryV1Api.md#salesOrderRepositoryV1GetGet) | **GET** /V1/orders/{id} | 
[**salesOrderRepositoryV1GetListGet**](SalesOrderRepositoryV1Api.md#salesOrderRepositoryV1GetListGet) | **GET** /V1/orders | 
[**salesOrderRepositoryV1SavePost**](SalesOrderRepositoryV1Api.md#salesOrderRepositoryV1SavePost) | **POST** /V1/orders/ | 
[**salesOrderRepositoryV1SavePut**](SalesOrderRepositoryV1Api.md#salesOrderRepositoryV1SavePut) | **PUT** /V1/orders/create | 


# **salesOrderRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\SalesDataOrderInterface salesOrderRepositoryV1GetGet($id)



Loads a specified order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesOrderRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The order ID.

try {
    $result = $apiInstance->salesOrderRepositoryV1GetGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderRepositoryV1Api->salesOrderRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The order ID. |

### Return type

[**\Krak\MagentoApiClient\Model\SalesDataOrderInterface**](../Model/SalesDataOrderInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\SalesDataOrderSearchResultInterface salesOrderRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Lists orders that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#OrderRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesOrderRepositoryV1Api(
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
    $result = $apiInstance->salesOrderRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderRepositoryV1Api->salesOrderRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Krak\MagentoApiClient\Model\SalesDataOrderSearchResultInterface**](../Model/SalesDataOrderSearchResultInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderRepositoryV1SavePost**
> \Krak\MagentoApiClient\Model\SalesDataOrderInterface salesOrderRepositoryV1SavePost($salesOrderRepositoryV1SavePostBody)



Performs persist operations for a specified order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesOrderRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$salesOrderRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\SalesOrderRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\SalesOrderRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->salesOrderRepositoryV1SavePost($salesOrderRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderRepositoryV1Api->salesOrderRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **salesOrderRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\SalesOrderRepositoryV1SavePostBody**](../Model/SalesOrderRepositoryV1SavePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\SalesDataOrderInterface**](../Model/SalesDataOrderInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderRepositoryV1SavePut**
> \Krak\MagentoApiClient\Model\SalesDataOrderInterface salesOrderRepositoryV1SavePut($salesOrderRepositoryV1SavePutBody)



Performs persist operations for a specified order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesOrderRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$salesOrderRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\SalesOrderRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\SalesOrderRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->salesOrderRepositoryV1SavePut($salesOrderRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderRepositoryV1Api->salesOrderRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **salesOrderRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\SalesOrderRepositoryV1SavePutBody**](../Model/SalesOrderRepositoryV1SavePutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\SalesDataOrderInterface**](../Model/SalesDataOrderInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

