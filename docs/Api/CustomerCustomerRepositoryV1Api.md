# Krak\MagentoApiClient\CustomerCustomerRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerCustomerRepositoryV1DeleteByIdDelete**](CustomerCustomerRepositoryV1Api.md#customerCustomerRepositoryV1DeleteByIdDelete) | **DELETE** /V1/customers/{customerId} | 
[**customerCustomerRepositoryV1GetByIdGet**](CustomerCustomerRepositoryV1Api.md#customerCustomerRepositoryV1GetByIdGet) | **GET** /V1/customers/{customerId} | 
[**customerCustomerRepositoryV1GetByIdGet_0**](CustomerCustomerRepositoryV1Api.md#customerCustomerRepositoryV1GetByIdGet_0) | **GET** /V1/customers/me | 
[**customerCustomerRepositoryV1GetListGet**](CustomerCustomerRepositoryV1Api.md#customerCustomerRepositoryV1GetListGet) | **GET** /V1/customers/search | 
[**customerCustomerRepositoryV1SavePut**](CustomerCustomerRepositoryV1Api.md#customerCustomerRepositoryV1SavePut) | **PUT** /V1/customers/{customerId} | 
[**customerCustomerRepositoryV1SavePut_0**](CustomerCustomerRepositoryV1Api.md#customerCustomerRepositoryV1SavePut_0) | **PUT** /V1/customers/me | 


# **customerCustomerRepositoryV1DeleteByIdDelete**
> bool customerCustomerRepositoryV1DeleteByIdDelete($customerId)



Delete customer by Customer ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerCustomerRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | 

try {
    $result = $apiInstance->customerCustomerRepositoryV1DeleteByIdDelete($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCustomerRepositoryV1Api->customerCustomerRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**|  |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCustomerRepositoryV1GetByIdGet**
> \Krak\MagentoApiClient\Model\CustomerDataCustomerInterface customerCustomerRepositoryV1GetByIdGet($customerId)



Get customer by Customer ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerCustomerRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | 

try {
    $result = $apiInstance->customerCustomerRepositoryV1GetByIdGet($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCustomerRepositoryV1Api->customerCustomerRepositoryV1GetByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\CustomerDataCustomerInterface**](../Model/CustomerDataCustomerInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCustomerRepositoryV1GetByIdGet_0**
> \Krak\MagentoApiClient\Model\CustomerDataCustomerInterface customerCustomerRepositoryV1GetByIdGet_0()



Get customer by Customer ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerCustomerRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->customerCustomerRepositoryV1GetByIdGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCustomerRepositoryV1Api->customerCustomerRepositoryV1GetByIdGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Krak\MagentoApiClient\Model\CustomerDataCustomerInterface**](../Model/CustomerDataCustomerInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCustomerRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\CustomerDataCustomerSearchResultsInterface customerCustomerRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Retrieve customers which match a specified criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#CustomerRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerCustomerRepositoryV1Api(
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
    $result = $apiInstance->customerCustomerRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCustomerRepositoryV1Api->customerCustomerRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Krak\MagentoApiClient\Model\CustomerDataCustomerSearchResultsInterface**](../Model/CustomerDataCustomerSearchResultsInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCustomerRepositoryV1SavePut**
> \Krak\MagentoApiClient\Model\CustomerDataCustomerInterface customerCustomerRepositoryV1SavePut($customerId, $customerCustomerRepositoryV1SavePutBody)



Create or update a customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerCustomerRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "customerId_example"; // string | 
$customerCustomerRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\CustomerCustomerRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\CustomerCustomerRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->customerCustomerRepositoryV1SavePut($customerId, $customerCustomerRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCustomerRepositoryV1Api->customerCustomerRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **string**|  |
 **customerCustomerRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\CustomerCustomerRepositoryV1SavePutBody**](../Model/CustomerCustomerRepositoryV1SavePutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CustomerDataCustomerInterface**](../Model/CustomerDataCustomerInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCustomerRepositoryV1SavePut_0**
> \Krak\MagentoApiClient\Model\CustomerDataCustomerInterface customerCustomerRepositoryV1SavePut_0($customerCustomerRepositoryV1SavePutBody)



Create or update a customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerCustomerRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerCustomerRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\CustomerCustomerRepositoryV1SavePutBody1(); // \Krak\MagentoApiClient\Model\CustomerCustomerRepositoryV1SavePutBody1 | 

try {
    $result = $apiInstance->customerCustomerRepositoryV1SavePut_0($customerCustomerRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCustomerRepositoryV1Api->customerCustomerRepositoryV1SavePut_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerCustomerRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\CustomerCustomerRepositoryV1SavePutBody1**](../Model/CustomerCustomerRepositoryV1SavePutBody1.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CustomerDataCustomerInterface**](../Model/CustomerDataCustomerInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

