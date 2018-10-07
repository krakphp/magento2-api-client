# Krak\MagentoApiClient\SalesShipmentRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesShipmentRepositoryV1GetGet**](SalesShipmentRepositoryV1Api.md#salesShipmentRepositoryV1GetGet) | **GET** /V1/shipment/{id} | 
[**salesShipmentRepositoryV1GetListGet**](SalesShipmentRepositoryV1Api.md#salesShipmentRepositoryV1GetListGet) | **GET** /V1/shipments | 
[**salesShipmentRepositoryV1SavePost**](SalesShipmentRepositoryV1Api.md#salesShipmentRepositoryV1SavePost) | **POST** /V1/shipment/ | 


# **salesShipmentRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\SalesDataShipmentInterface salesShipmentRepositoryV1GetGet($id)



Loads a specified shipment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesShipmentRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The shipment ID.

try {
    $result = $apiInstance->salesShipmentRepositoryV1GetGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesShipmentRepositoryV1Api->salesShipmentRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The shipment ID. |

### Return type

[**\Krak\MagentoApiClient\Model\SalesDataShipmentInterface**](../Model/SalesDataShipmentInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesShipmentRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\SalesDataShipmentSearchResultInterface salesShipmentRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Lists shipments that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#ShipmentRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesShipmentRepositoryV1Api(
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
    $result = $apiInstance->salesShipmentRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesShipmentRepositoryV1Api->salesShipmentRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Krak\MagentoApiClient\Model\SalesDataShipmentSearchResultInterface**](../Model/SalesDataShipmentSearchResultInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesShipmentRepositoryV1SavePost**
> \Krak\MagentoApiClient\Model\SalesDataShipmentInterface salesShipmentRepositoryV1SavePost($salesShipmentRepositoryV1SavePostBody)



Performs persist operations for a specified shipment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesShipmentRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$salesShipmentRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\SalesShipmentRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\SalesShipmentRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->salesShipmentRepositoryV1SavePost($salesShipmentRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesShipmentRepositoryV1Api->salesShipmentRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **salesShipmentRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\SalesShipmentRepositoryV1SavePostBody**](../Model/SalesShipmentRepositoryV1SavePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\SalesDataShipmentInterface**](../Model/SalesDataShipmentInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

