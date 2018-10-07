# Krak\MagentoApiClient\SalesRuleCouponManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesRuleCouponManagementV1DeleteByCodesPost**](SalesRuleCouponManagementV1Api.md#salesRuleCouponManagementV1DeleteByCodesPost) | **POST** /V1/coupons/deleteByCodes | 
[**salesRuleCouponManagementV1DeleteByIdsPost**](SalesRuleCouponManagementV1Api.md#salesRuleCouponManagementV1DeleteByIdsPost) | **POST** /V1/coupons/deleteByIds | 
[**salesRuleCouponManagementV1GeneratePost**](SalesRuleCouponManagementV1Api.md#salesRuleCouponManagementV1GeneratePost) | **POST** /V1/coupons/generate | 


# **salesRuleCouponManagementV1DeleteByCodesPost**
> \Krak\MagentoApiClient\Model\SalesRuleDataCouponMassDeleteResultInterface salesRuleCouponManagementV1DeleteByCodesPost($salesRuleCouponManagementV1DeleteByCodesPostBody)



Delete coupon by coupon codes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesRuleCouponManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$salesRuleCouponManagementV1DeleteByCodesPostBody = new \Krak\MagentoApiClient\Model\SalesRuleCouponManagementV1DeleteByCodesPostBody(); // \Krak\MagentoApiClient\Model\SalesRuleCouponManagementV1DeleteByCodesPostBody | 

try {
    $result = $apiInstance->salesRuleCouponManagementV1DeleteByCodesPost($salesRuleCouponManagementV1DeleteByCodesPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleCouponManagementV1Api->salesRuleCouponManagementV1DeleteByCodesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **salesRuleCouponManagementV1DeleteByCodesPostBody** | [**\Krak\MagentoApiClient\Model\SalesRuleCouponManagementV1DeleteByCodesPostBody**](../Model/SalesRuleCouponManagementV1DeleteByCodesPostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\SalesRuleDataCouponMassDeleteResultInterface**](../Model/SalesRuleDataCouponMassDeleteResultInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleCouponManagementV1DeleteByIdsPost**
> \Krak\MagentoApiClient\Model\SalesRuleDataCouponMassDeleteResultInterface salesRuleCouponManagementV1DeleteByIdsPost($salesRuleCouponManagementV1DeleteByIdsPostBody)



Delete coupon by coupon ids.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesRuleCouponManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$salesRuleCouponManagementV1DeleteByIdsPostBody = new \Krak\MagentoApiClient\Model\SalesRuleCouponManagementV1DeleteByIdsPostBody(); // \Krak\MagentoApiClient\Model\SalesRuleCouponManagementV1DeleteByIdsPostBody | 

try {
    $result = $apiInstance->salesRuleCouponManagementV1DeleteByIdsPost($salesRuleCouponManagementV1DeleteByIdsPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleCouponManagementV1Api->salesRuleCouponManagementV1DeleteByIdsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **salesRuleCouponManagementV1DeleteByIdsPostBody** | [**\Krak\MagentoApiClient\Model\SalesRuleCouponManagementV1DeleteByIdsPostBody**](../Model/SalesRuleCouponManagementV1DeleteByIdsPostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\SalesRuleDataCouponMassDeleteResultInterface**](../Model/SalesRuleDataCouponMassDeleteResultInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleCouponManagementV1GeneratePost**
> string[] salesRuleCouponManagementV1GeneratePost($salesRuleCouponManagementV1GeneratePostBody)



Generate coupon for a rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesRuleCouponManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$salesRuleCouponManagementV1GeneratePostBody = new \Krak\MagentoApiClient\Model\SalesRuleCouponManagementV1GeneratePostBody(); // \Krak\MagentoApiClient\Model\SalesRuleCouponManagementV1GeneratePostBody | 

try {
    $result = $apiInstance->salesRuleCouponManagementV1GeneratePost($salesRuleCouponManagementV1GeneratePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleCouponManagementV1Api->salesRuleCouponManagementV1GeneratePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **salesRuleCouponManagementV1GeneratePostBody** | [**\Krak\MagentoApiClient\Model\SalesRuleCouponManagementV1GeneratePostBody**](../Model/SalesRuleCouponManagementV1GeneratePostBody.md)|  | [optional]

### Return type

**string[]**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

