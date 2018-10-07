# Krak\MagentoApiClient\SalesRuleCouponRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesRuleCouponRepositoryV1DeleteByIdDelete**](SalesRuleCouponRepositoryV1Api.md#salesRuleCouponRepositoryV1DeleteByIdDelete) | **DELETE** /V1/coupons/{couponId} | 
[**salesRuleCouponRepositoryV1GetByIdGet**](SalesRuleCouponRepositoryV1Api.md#salesRuleCouponRepositoryV1GetByIdGet) | **GET** /V1/coupons/{couponId} | 
[**salesRuleCouponRepositoryV1GetListGet**](SalesRuleCouponRepositoryV1Api.md#salesRuleCouponRepositoryV1GetListGet) | **GET** /V1/coupons/search | 
[**salesRuleCouponRepositoryV1SavePost**](SalesRuleCouponRepositoryV1Api.md#salesRuleCouponRepositoryV1SavePost) | **POST** /V1/coupons | 
[**salesRuleCouponRepositoryV1SavePut**](SalesRuleCouponRepositoryV1Api.md#salesRuleCouponRepositoryV1SavePut) | **PUT** /V1/coupons/{couponId} | 


# **salesRuleCouponRepositoryV1DeleteByIdDelete**
> bool salesRuleCouponRepositoryV1DeleteByIdDelete($couponId)



Delete coupon by coupon id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesRuleCouponRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$couponId = 56; // int | 

try {
    $result = $apiInstance->salesRuleCouponRepositoryV1DeleteByIdDelete($couponId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleCouponRepositoryV1Api->salesRuleCouponRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **couponId** | **int**|  |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleCouponRepositoryV1GetByIdGet**
> \Krak\MagentoApiClient\Model\SalesRuleDataCouponInterface salesRuleCouponRepositoryV1GetByIdGet($couponId)



Get coupon by coupon id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesRuleCouponRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$couponId = 56; // int | 

try {
    $result = $apiInstance->salesRuleCouponRepositoryV1GetByIdGet($couponId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleCouponRepositoryV1Api->salesRuleCouponRepositoryV1GetByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **couponId** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\SalesRuleDataCouponInterface**](../Model/SalesRuleDataCouponInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleCouponRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\SalesRuleDataCouponSearchResultInterface salesRuleCouponRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Retrieve a coupon using the specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#CouponRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesRuleCouponRepositoryV1Api(
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
    $result = $apiInstance->salesRuleCouponRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleCouponRepositoryV1Api->salesRuleCouponRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Krak\MagentoApiClient\Model\SalesRuleDataCouponSearchResultInterface**](../Model/SalesRuleDataCouponSearchResultInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleCouponRepositoryV1SavePost**
> \Krak\MagentoApiClient\Model\SalesRuleDataCouponInterface salesRuleCouponRepositoryV1SavePost($salesRuleCouponRepositoryV1SavePostBody)



Save a coupon.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesRuleCouponRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$salesRuleCouponRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\SalesRuleCouponRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\SalesRuleCouponRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->salesRuleCouponRepositoryV1SavePost($salesRuleCouponRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleCouponRepositoryV1Api->salesRuleCouponRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **salesRuleCouponRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\SalesRuleCouponRepositoryV1SavePostBody**](../Model/SalesRuleCouponRepositoryV1SavePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\SalesRuleDataCouponInterface**](../Model/SalesRuleDataCouponInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleCouponRepositoryV1SavePut**
> \Krak\MagentoApiClient\Model\SalesRuleDataCouponInterface salesRuleCouponRepositoryV1SavePut($couponId, $salesRuleCouponRepositoryV1SavePutBody)



Save a coupon.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesRuleCouponRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$couponId = "couponId_example"; // string | 
$salesRuleCouponRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\SalesRuleCouponRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\SalesRuleCouponRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->salesRuleCouponRepositoryV1SavePut($couponId, $salesRuleCouponRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleCouponRepositoryV1Api->salesRuleCouponRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **couponId** | **string**|  |
 **salesRuleCouponRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\SalesRuleCouponRepositoryV1SavePutBody**](../Model/SalesRuleCouponRepositoryV1SavePutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\SalesRuleDataCouponInterface**](../Model/SalesRuleDataCouponInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

