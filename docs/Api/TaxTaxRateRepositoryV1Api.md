# Krak\MagentoApiClient\TaxTaxRateRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taxTaxRateRepositoryV1DeleteByIdDelete**](TaxTaxRateRepositoryV1Api.md#taxTaxRateRepositoryV1DeleteByIdDelete) | **DELETE** /V1/taxRates/{rateId} | 
[**taxTaxRateRepositoryV1GetGet**](TaxTaxRateRepositoryV1Api.md#taxTaxRateRepositoryV1GetGet) | **GET** /V1/taxRates/{rateId} | 
[**taxTaxRateRepositoryV1GetListGet**](TaxTaxRateRepositoryV1Api.md#taxTaxRateRepositoryV1GetListGet) | **GET** /V1/taxRates/search | 
[**taxTaxRateRepositoryV1SavePost**](TaxTaxRateRepositoryV1Api.md#taxTaxRateRepositoryV1SavePost) | **POST** /V1/taxRates | 
[**taxTaxRateRepositoryV1SavePut**](TaxTaxRateRepositoryV1Api.md#taxTaxRateRepositoryV1SavePut) | **PUT** /V1/taxRates | 


# **taxTaxRateRepositoryV1DeleteByIdDelete**
> bool taxTaxRateRepositoryV1DeleteByIdDelete($rateId)



Delete tax rate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\TaxTaxRateRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rateId = 56; // int | 

try {
    $result = $apiInstance->taxTaxRateRepositoryV1DeleteByIdDelete($rateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRateRepositoryV1Api->taxTaxRateRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rateId** | **int**|  |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxRateRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\TaxDataTaxRateInterface taxTaxRateRepositoryV1GetGet($rateId)



Get tax rate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\TaxTaxRateRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rateId = 56; // int | 

try {
    $result = $apiInstance->taxTaxRateRepositoryV1GetGet($rateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRateRepositoryV1Api->taxTaxRateRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rateId** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\TaxDataTaxRateInterface**](../Model/TaxDataTaxRateInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxRateRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\TaxDataTaxRateSearchResultsInterface taxTaxRateRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Search TaxRates This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#TaxRateRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\TaxTaxRateRepositoryV1Api(
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
    $result = $apiInstance->taxTaxRateRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRateRepositoryV1Api->taxTaxRateRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Krak\MagentoApiClient\Model\TaxDataTaxRateSearchResultsInterface**](../Model/TaxDataTaxRateSearchResultsInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxRateRepositoryV1SavePost**
> \Krak\MagentoApiClient\Model\TaxDataTaxRateInterface taxTaxRateRepositoryV1SavePost($taxTaxRateRepositoryV1SavePostBody)



Create or update tax rate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\TaxTaxRateRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taxTaxRateRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\TaxTaxRateRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\TaxTaxRateRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->taxTaxRateRepositoryV1SavePost($taxTaxRateRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRateRepositoryV1Api->taxTaxRateRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taxTaxRateRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\TaxTaxRateRepositoryV1SavePostBody**](../Model/TaxTaxRateRepositoryV1SavePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\TaxDataTaxRateInterface**](../Model/TaxDataTaxRateInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxRateRepositoryV1SavePut**
> \Krak\MagentoApiClient\Model\TaxDataTaxRateInterface taxTaxRateRepositoryV1SavePut($taxTaxRateRepositoryV1SavePutBody)



Create or update tax rate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\TaxTaxRateRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taxTaxRateRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\TaxTaxRateRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\TaxTaxRateRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->taxTaxRateRepositoryV1SavePut($taxTaxRateRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRateRepositoryV1Api->taxTaxRateRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taxTaxRateRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\TaxTaxRateRepositoryV1SavePutBody**](../Model/TaxTaxRateRepositoryV1SavePutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\TaxDataTaxRateInterface**](../Model/TaxDataTaxRateInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

