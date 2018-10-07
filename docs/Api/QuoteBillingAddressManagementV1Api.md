# Krak\MagentoApiClient\QuoteBillingAddressManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteBillingAddressManagementV1AssignPost**](QuoteBillingAddressManagementV1Api.md#quoteBillingAddressManagementV1AssignPost) | **POST** /V1/carts/{cartId}/billing-address | 
[**quoteBillingAddressManagementV1AssignPost_0**](QuoteBillingAddressManagementV1Api.md#quoteBillingAddressManagementV1AssignPost_0) | **POST** /V1/carts/mine/billing-address | 
[**quoteBillingAddressManagementV1GetGet**](QuoteBillingAddressManagementV1Api.md#quoteBillingAddressManagementV1GetGet) | **GET** /V1/carts/{cartId}/billing-address | 
[**quoteBillingAddressManagementV1GetGet_0**](QuoteBillingAddressManagementV1Api.md#quoteBillingAddressManagementV1GetGet_0) | **GET** /V1/carts/mine/billing-address | 


# **quoteBillingAddressManagementV1AssignPost**
> int quoteBillingAddressManagementV1AssignPost($cartId, $quoteBillingAddressManagementV1AssignPostBody)



Assigns a specified billing address to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteBillingAddressManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = 56; // int | The cart ID.
$quoteBillingAddressManagementV1AssignPostBody = new \Krak\MagentoApiClient\Model\QuoteBillingAddressManagementV1AssignPostBody(); // \Krak\MagentoApiClient\Model\QuoteBillingAddressManagementV1AssignPostBody | 

try {
    $result = $apiInstance->quoteBillingAddressManagementV1AssignPost($cartId, $quoteBillingAddressManagementV1AssignPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteBillingAddressManagementV1Api->quoteBillingAddressManagementV1AssignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |
 **quoteBillingAddressManagementV1AssignPostBody** | [**\Krak\MagentoApiClient\Model\QuoteBillingAddressManagementV1AssignPostBody**](../Model/QuoteBillingAddressManagementV1AssignPostBody.md)|  | [optional]

### Return type

**int**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteBillingAddressManagementV1AssignPost_0**
> int quoteBillingAddressManagementV1AssignPost_0($quoteBillingAddressManagementV1AssignPostBody)



Assigns a specified billing address to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteBillingAddressManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quoteBillingAddressManagementV1AssignPostBody = new \Krak\MagentoApiClient\Model\QuoteBillingAddressManagementV1AssignPostBody1(); // \Krak\MagentoApiClient\Model\QuoteBillingAddressManagementV1AssignPostBody1 | 

try {
    $result = $apiInstance->quoteBillingAddressManagementV1AssignPost_0($quoteBillingAddressManagementV1AssignPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteBillingAddressManagementV1Api->quoteBillingAddressManagementV1AssignPost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quoteBillingAddressManagementV1AssignPostBody** | [**\Krak\MagentoApiClient\Model\QuoteBillingAddressManagementV1AssignPostBody1**](../Model/QuoteBillingAddressManagementV1AssignPostBody1.md)|  | [optional]

### Return type

**int**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteBillingAddressManagementV1GetGet**
> \Krak\MagentoApiClient\Model\QuoteDataAddressInterface quoteBillingAddressManagementV1GetGet($cartId)



Returns the billing address for a specified quote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteBillingAddressManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = 56; // int | The cart ID.

try {
    $result = $apiInstance->quoteBillingAddressManagementV1GetGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteBillingAddressManagementV1Api->quoteBillingAddressManagementV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataAddressInterface**](../Model/QuoteDataAddressInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteBillingAddressManagementV1GetGet_0**
> \Krak\MagentoApiClient\Model\QuoteDataAddressInterface quoteBillingAddressManagementV1GetGet_0()



Returns the billing address for a specified quote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteBillingAddressManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->quoteBillingAddressManagementV1GetGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteBillingAddressManagementV1Api->quoteBillingAddressManagementV1GetGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataAddressInterface**](../Model/QuoteDataAddressInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

