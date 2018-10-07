# Krak\MagentoApiClient\CheckoutPaymentInformationManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkoutPaymentInformationManagementV1GetPaymentInformationGet**](CheckoutPaymentInformationManagementV1Api.md#checkoutPaymentInformationManagementV1GetPaymentInformationGet) | **GET** /V1/carts/mine/payment-information | 
[**checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost**](CheckoutPaymentInformationManagementV1Api.md#checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost) | **POST** /V1/carts/mine/payment-information | 
[**checkoutPaymentInformationManagementV1SavePaymentInformationPost**](CheckoutPaymentInformationManagementV1Api.md#checkoutPaymentInformationManagementV1SavePaymentInformationPost) | **POST** /V1/carts/mine/set-payment-information | 


# **checkoutPaymentInformationManagementV1GetPaymentInformationGet**
> \Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface checkoutPaymentInformationManagementV1GetPaymentInformationGet()



Get payment information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CheckoutPaymentInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->checkoutPaymentInformationManagementV1GetPaymentInformationGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutPaymentInformationManagementV1Api->checkoutPaymentInformationManagementV1GetPaymentInformationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface**](../Model/CheckoutDataPaymentDetailsInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost**
> int checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody)



Set payment information and place order for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CheckoutPaymentInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody = new \Krak\MagentoApiClient\Model\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody(); // \Krak\MagentoApiClient\Model\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody | 

try {
    $result = $apiInstance->checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutPaymentInformationManagementV1Api->checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody** | [**\Krak\MagentoApiClient\Model\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody**](../Model/CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody.md)|  | [optional]

### Return type

**int**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkoutPaymentInformationManagementV1SavePaymentInformationPost**
> int checkoutPaymentInformationManagementV1SavePaymentInformationPost($checkoutPaymentInformationManagementV1SavePaymentInformationPostBody)



Set payment information for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CheckoutPaymentInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkoutPaymentInformationManagementV1SavePaymentInformationPostBody = new \Krak\MagentoApiClient\Model\CheckoutPaymentInformationManagementV1SavePaymentInformationPostBody(); // \Krak\MagentoApiClient\Model\CheckoutPaymentInformationManagementV1SavePaymentInformationPostBody | 

try {
    $result = $apiInstance->checkoutPaymentInformationManagementV1SavePaymentInformationPost($checkoutPaymentInformationManagementV1SavePaymentInformationPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutPaymentInformationManagementV1Api->checkoutPaymentInformationManagementV1SavePaymentInformationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkoutPaymentInformationManagementV1SavePaymentInformationPostBody** | [**\Krak\MagentoApiClient\Model\CheckoutPaymentInformationManagementV1SavePaymentInformationPostBody**](../Model/CheckoutPaymentInformationManagementV1SavePaymentInformationPostBody.md)|  | [optional]

### Return type

**int**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

