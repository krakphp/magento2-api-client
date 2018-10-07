# Krak\MagentoApiClient\CheckoutGuestPaymentInformationManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet**](CheckoutGuestPaymentInformationManagementV1Api.md#checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet) | **GET** /V1/guest-carts/{cartId}/payment-information | 
[**checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost**](CheckoutGuestPaymentInformationManagementV1Api.md#checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost) | **POST** /V1/guest-carts/{cartId}/payment-information | 
[**checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost**](CheckoutGuestPaymentInformationManagementV1Api.md#checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost) | **POST** /V1/guest-carts/{cartId}/set-payment-information | 


# **checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet**
> \Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet($cartId)



Get payment information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CheckoutGuestPaymentInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = "cartId_example"; // string | 

try {
    $result = $apiInstance->checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutGuestPaymentInformationManagementV1Api->checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |

### Return type

[**\Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface**](../Model/CheckoutDataPaymentDetailsInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost**
> int checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody)



Set payment information and place order for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CheckoutGuestPaymentInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = "cartId_example"; // string | 
$checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody = new \Krak\MagentoApiClient\Model\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody(); // \Krak\MagentoApiClient\Model\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody | 

try {
    $result = $apiInstance->checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutGuestPaymentInformationManagementV1Api->checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody** | [**\Krak\MagentoApiClient\Model\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody**](../Model/CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody.md)|  | [optional]

### Return type

**int**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost**
> int checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody)



Set payment information for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CheckoutGuestPaymentInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = "cartId_example"; // string | 
$checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody = new \Krak\MagentoApiClient\Model\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody(); // \Krak\MagentoApiClient\Model\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody | 

try {
    $result = $apiInstance->checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutGuestPaymentInformationManagementV1Api->checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody** | [**\Krak\MagentoApiClient\Model\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody**](../Model/CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody.md)|  | [optional]

### Return type

**int**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

