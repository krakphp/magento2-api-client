# Krak\MagentoApiClient\QuotePaymentMethodManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quotePaymentMethodManagementV1GetGet**](QuotePaymentMethodManagementV1Api.md#quotePaymentMethodManagementV1GetGet) | **GET** /V1/carts/{cartId}/selected-payment-method | 
[**quotePaymentMethodManagementV1GetGet_0**](QuotePaymentMethodManagementV1Api.md#quotePaymentMethodManagementV1GetGet_0) | **GET** /V1/carts/mine/selected-payment-method | 
[**quotePaymentMethodManagementV1GetListGet**](QuotePaymentMethodManagementV1Api.md#quotePaymentMethodManagementV1GetListGet) | **GET** /V1/carts/{cartId}/payment-methods | 
[**quotePaymentMethodManagementV1GetListGet_0**](QuotePaymentMethodManagementV1Api.md#quotePaymentMethodManagementV1GetListGet_0) | **GET** /V1/carts/mine/payment-methods | 
[**quotePaymentMethodManagementV1SetPut**](QuotePaymentMethodManagementV1Api.md#quotePaymentMethodManagementV1SetPut) | **PUT** /V1/carts/{cartId}/selected-payment-method | 
[**quotePaymentMethodManagementV1SetPut_0**](QuotePaymentMethodManagementV1Api.md#quotePaymentMethodManagementV1SetPut_0) | **PUT** /V1/carts/mine/selected-payment-method | 


# **quotePaymentMethodManagementV1GetGet**
> \Krak\MagentoApiClient\Model\QuoteDataPaymentInterface quotePaymentMethodManagementV1GetGet($cartId)



Returns the payment method for a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\QuotePaymentMethodManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = 56; // int | The cart ID.

try {
    $result = $apiInstance->quotePaymentMethodManagementV1GetGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotePaymentMethodManagementV1Api->quotePaymentMethodManagementV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataPaymentInterface**](../Model/QuoteDataPaymentInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotePaymentMethodManagementV1GetGet_0**
> \Krak\MagentoApiClient\Model\QuoteDataPaymentInterface quotePaymentMethodManagementV1GetGet_0()



Returns the payment method for a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\QuotePaymentMethodManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->quotePaymentMethodManagementV1GetGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotePaymentMethodManagementV1Api->quotePaymentMethodManagementV1GetGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataPaymentInterface**](../Model/QuoteDataPaymentInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotePaymentMethodManagementV1GetListGet**
> \Krak\MagentoApiClient\Model\QuoteDataPaymentMethodInterface[] quotePaymentMethodManagementV1GetListGet($cartId)



Lists available payment methods for a specified shopping cart. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See http://devdocs.magento.com/codelinks/attributes.html#PaymentMethodManagementInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\QuotePaymentMethodManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = 56; // int | The cart ID.

try {
    $result = $apiInstance->quotePaymentMethodManagementV1GetListGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotePaymentMethodManagementV1Api->quotePaymentMethodManagementV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataPaymentMethodInterface[]**](../Model/QuoteDataPaymentMethodInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotePaymentMethodManagementV1GetListGet_0**
> \Krak\MagentoApiClient\Model\QuoteDataPaymentMethodInterface[] quotePaymentMethodManagementV1GetListGet_0()



Lists available payment methods for a specified shopping cart. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See http://devdocs.magento.com/codelinks/attributes.html#PaymentMethodManagementInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\QuotePaymentMethodManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->quotePaymentMethodManagementV1GetListGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotePaymentMethodManagementV1Api->quotePaymentMethodManagementV1GetListGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataPaymentMethodInterface[]**](../Model/QuoteDataPaymentMethodInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotePaymentMethodManagementV1SetPut**
> string quotePaymentMethodManagementV1SetPut($cartId, $quotePaymentMethodManagementV1SetPutBody)



Adds a specified payment method to a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\QuotePaymentMethodManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = 56; // int | The cart ID.
$quotePaymentMethodManagementV1SetPutBody = new \Krak\MagentoApiClient\Model\QuotePaymentMethodManagementV1SetPutBody(); // \Krak\MagentoApiClient\Model\QuotePaymentMethodManagementV1SetPutBody | 

try {
    $result = $apiInstance->quotePaymentMethodManagementV1SetPut($cartId, $quotePaymentMethodManagementV1SetPutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotePaymentMethodManagementV1Api->quotePaymentMethodManagementV1SetPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |
 **quotePaymentMethodManagementV1SetPutBody** | [**\Krak\MagentoApiClient\Model\QuotePaymentMethodManagementV1SetPutBody**](../Model/QuotePaymentMethodManagementV1SetPutBody.md)|  | [optional]

### Return type

**string**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotePaymentMethodManagementV1SetPut_0**
> string quotePaymentMethodManagementV1SetPut_0($quotePaymentMethodManagementV1SetPutBody)



Adds a specified payment method to a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\QuotePaymentMethodManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quotePaymentMethodManagementV1SetPutBody = new \Krak\MagentoApiClient\Model\QuotePaymentMethodManagementV1SetPutBody1(); // \Krak\MagentoApiClient\Model\QuotePaymentMethodManagementV1SetPutBody1 | 

try {
    $result = $apiInstance->quotePaymentMethodManagementV1SetPut_0($quotePaymentMethodManagementV1SetPutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotePaymentMethodManagementV1Api->quotePaymentMethodManagementV1SetPut_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quotePaymentMethodManagementV1SetPutBody** | [**\Krak\MagentoApiClient\Model\QuotePaymentMethodManagementV1SetPutBody1**](../Model/QuotePaymentMethodManagementV1SetPutBody1.md)|  | [optional]

### Return type

**string**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

