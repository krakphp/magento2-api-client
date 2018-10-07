# Krak\MagentoApiClient\TaxTaxClassRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taxTaxClassRepositoryV1DeleteByIdDelete**](TaxTaxClassRepositoryV1Api.md#taxTaxClassRepositoryV1DeleteByIdDelete) | **DELETE** /V1/taxClasses/{taxClassId} | 
[**taxTaxClassRepositoryV1GetGet**](TaxTaxClassRepositoryV1Api.md#taxTaxClassRepositoryV1GetGet) | **GET** /V1/taxClasses/{taxClassId} | 
[**taxTaxClassRepositoryV1GetListGet**](TaxTaxClassRepositoryV1Api.md#taxTaxClassRepositoryV1GetListGet) | **GET** /V1/taxClasses/search | 
[**taxTaxClassRepositoryV1SavePost**](TaxTaxClassRepositoryV1Api.md#taxTaxClassRepositoryV1SavePost) | **POST** /V1/taxClasses | 
[**taxTaxClassRepositoryV1SavePut**](TaxTaxClassRepositoryV1Api.md#taxTaxClassRepositoryV1SavePut) | **PUT** /V1/taxClasses/{classId} | 


# **taxTaxClassRepositoryV1DeleteByIdDelete**
> bool taxTaxClassRepositoryV1DeleteByIdDelete($taxClassId)



Delete a tax class with the given tax class id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\TaxTaxClassRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taxClassId = 56; // int | 

try {
    $result = $apiInstance->taxTaxClassRepositoryV1DeleteByIdDelete($taxClassId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxClassRepositoryV1Api->taxTaxClassRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taxClassId** | **int**|  |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxClassRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\TaxDataTaxClassInterface taxTaxClassRepositoryV1GetGet($taxClassId)



Get a tax class with the given tax class id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\TaxTaxClassRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taxClassId = 56; // int | 

try {
    $result = $apiInstance->taxTaxClassRepositoryV1GetGet($taxClassId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxClassRepositoryV1Api->taxTaxClassRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taxClassId** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\TaxDataTaxClassInterface**](../Model/TaxDataTaxClassInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxClassRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\TaxDataTaxClassSearchResultsInterface taxTaxClassRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Retrieve tax classes which match a specific criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#TaxClassRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\TaxTaxClassRepositoryV1Api(
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
    $result = $apiInstance->taxTaxClassRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxClassRepositoryV1Api->taxTaxClassRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Krak\MagentoApiClient\Model\TaxDataTaxClassSearchResultsInterface**](../Model/TaxDataTaxClassSearchResultsInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxClassRepositoryV1SavePost**
> string taxTaxClassRepositoryV1SavePost($taxTaxClassRepositoryV1SavePostBody)



Create a Tax Class

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\TaxTaxClassRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taxTaxClassRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\TaxTaxClassRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\TaxTaxClassRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->taxTaxClassRepositoryV1SavePost($taxTaxClassRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxClassRepositoryV1Api->taxTaxClassRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taxTaxClassRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\TaxTaxClassRepositoryV1SavePostBody**](../Model/TaxTaxClassRepositoryV1SavePostBody.md)|  | [optional]

### Return type

**string**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxClassRepositoryV1SavePut**
> string taxTaxClassRepositoryV1SavePut($classId, $taxTaxClassRepositoryV1SavePutBody)



Create a Tax Class

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\TaxTaxClassRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$classId = "classId_example"; // string | 
$taxTaxClassRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\TaxTaxClassRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\TaxTaxClassRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->taxTaxClassRepositoryV1SavePut($classId, $taxTaxClassRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxClassRepositoryV1Api->taxTaxClassRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **classId** | **string**|  |
 **taxTaxClassRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\TaxTaxClassRepositoryV1SavePutBody**](../Model/TaxTaxClassRepositoryV1SavePutBody.md)|  | [optional]

### Return type

**string**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

