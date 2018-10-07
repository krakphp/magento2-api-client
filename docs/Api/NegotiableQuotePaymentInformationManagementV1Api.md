# Krak\MagentoApiClient\NegotiableQuotePaymentInformationManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuotePaymentInformationManagementV1GetPaymentInformationGet**](NegotiableQuotePaymentInformationManagementV1Api.md#negotiableQuotePaymentInformationManagementV1GetPaymentInformationGet) | **GET** /V1/negotiable-carts/{cartId}/payment-information | 
[**negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost**](NegotiableQuotePaymentInformationManagementV1Api.md#negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost) | **POST** /V1/negotiable-carts/{cartId}/payment-information | 
[**negotiableQuotePaymentInformationManagementV1SavePaymentInformationPost**](NegotiableQuotePaymentInformationManagementV1Api.md#negotiableQuotePaymentInformationManagementV1SavePaymentInformationPost) | **POST** /V1/negotiable-carts/{cartId}/set-payment-information | 


# **negotiableQuotePaymentInformationManagementV1GetPaymentInformationGet**
> \Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface negotiableQuotePaymentInformationManagementV1GetPaymentInformationGet($cartId)



Get payment information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\NegotiableQuotePaymentInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = 56; // int | 

try {
    $result = $apiInstance->negotiableQuotePaymentInformationManagementV1GetPaymentInformationGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuotePaymentInformationManagementV1Api->negotiableQuotePaymentInformationManagementV1GetPaymentInformationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface**](../Model/CheckoutDataPaymentDetailsInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost**
> int negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($cartId, $negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody)



Set payment information and place order for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\NegotiableQuotePaymentInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = 56; // int | 
$negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody = new \Krak\MagentoApiClient\Model\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody(); // \Krak\MagentoApiClient\Model\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody | 

try {
    $result = $apiInstance->negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($cartId, $negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuotePaymentInformationManagementV1Api->negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**|  |
 **negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody** | [**\Krak\MagentoApiClient\Model\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody**](../Model/NegotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody.md)|  | [optional]

### Return type

**int**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **negotiableQuotePaymentInformationManagementV1SavePaymentInformationPost**
> int negotiableQuotePaymentInformationManagementV1SavePaymentInformationPost($cartId, $negotiableQuotePaymentInformationManagementV1SavePaymentInformationPostBody)



Set payment information for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\NegotiableQuotePaymentInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = 56; // int | 
$negotiableQuotePaymentInformationManagementV1SavePaymentInformationPostBody = new \Krak\MagentoApiClient\Model\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationPostBody(); // \Krak\MagentoApiClient\Model\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationPostBody | 

try {
    $result = $apiInstance->negotiableQuotePaymentInformationManagementV1SavePaymentInformationPost($cartId, $negotiableQuotePaymentInformationManagementV1SavePaymentInformationPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuotePaymentInformationManagementV1Api->negotiableQuotePaymentInformationManagementV1SavePaymentInformationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**|  |
 **negotiableQuotePaymentInformationManagementV1SavePaymentInformationPostBody** | [**\Krak\MagentoApiClient\Model\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationPostBody**](../Model/NegotiableQuotePaymentInformationManagementV1SavePaymentInformationPostBody.md)|  | [optional]

### Return type

**int**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

