# Krak\MagentoApiClient\NegotiableQuoteBillingAddressManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuoteBillingAddressManagementV1AssignPost**](NegotiableQuoteBillingAddressManagementV1Api.md#negotiableQuoteBillingAddressManagementV1AssignPost) | **POST** /V1/negotiable-carts/{cartId}/billing-address | 
[**negotiableQuoteBillingAddressManagementV1GetGet**](NegotiableQuoteBillingAddressManagementV1Api.md#negotiableQuoteBillingAddressManagementV1GetGet) | **GET** /V1/negotiable-carts/{cartId}/billing-address | 


# **negotiableQuoteBillingAddressManagementV1AssignPost**
> int negotiableQuoteBillingAddressManagementV1AssignPost($cartId, $negotiableQuoteBillingAddressManagementV1AssignPostBody)



Assigns a specified billing address to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\NegotiableQuoteBillingAddressManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = 56; // int | The cart ID.
$negotiableQuoteBillingAddressManagementV1AssignPostBody = new \Krak\MagentoApiClient\Model\NegotiableQuoteBillingAddressManagementV1AssignPostBody(); // \Krak\MagentoApiClient\Model\NegotiableQuoteBillingAddressManagementV1AssignPostBody | 

try {
    $result = $apiInstance->negotiableQuoteBillingAddressManagementV1AssignPost($cartId, $negotiableQuoteBillingAddressManagementV1AssignPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteBillingAddressManagementV1Api->negotiableQuoteBillingAddressManagementV1AssignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |
 **negotiableQuoteBillingAddressManagementV1AssignPostBody** | [**\Krak\MagentoApiClient\Model\NegotiableQuoteBillingAddressManagementV1AssignPostBody**](../Model/NegotiableQuoteBillingAddressManagementV1AssignPostBody.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **negotiableQuoteBillingAddressManagementV1GetGet**
> \Krak\MagentoApiClient\Model\QuoteDataAddressInterface negotiableQuoteBillingAddressManagementV1GetGet($cartId)



Returns the billing address for a specified quote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\NegotiableQuoteBillingAddressManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = 56; // int | The cart ID.

try {
    $result = $apiInstance->negotiableQuoteBillingAddressManagementV1GetGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteBillingAddressManagementV1Api->negotiableQuoteBillingAddressManagementV1GetGet: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

