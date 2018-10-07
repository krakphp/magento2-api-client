# Krak\MagentoApiClient\QuoteGuestCartManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestCartManagementV1AssignCustomerPut**](QuoteGuestCartManagementV1Api.md#quoteGuestCartManagementV1AssignCustomerPut) | **PUT** /V1/guest-carts/{cartId} | 
[**quoteGuestCartManagementV1CreateEmptyCartPost**](QuoteGuestCartManagementV1Api.md#quoteGuestCartManagementV1CreateEmptyCartPost) | **POST** /V1/guest-carts | 
[**quoteGuestCartManagementV1PlaceOrderPut**](QuoteGuestCartManagementV1Api.md#quoteGuestCartManagementV1PlaceOrderPut) | **PUT** /V1/guest-carts/{cartId}/order | 


# **quoteGuestCartManagementV1AssignCustomerPut**
> bool quoteGuestCartManagementV1AssignCustomerPut($cartId, $quoteGuestCartManagementV1AssignCustomerPutBody)



Assign a specified customer to a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteGuestCartManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | The cart ID.
$quoteGuestCartManagementV1AssignCustomerPutBody = new \Krak\MagentoApiClient\Model\QuoteGuestCartManagementV1AssignCustomerPutBody(); // \Krak\MagentoApiClient\Model\QuoteGuestCartManagementV1AssignCustomerPutBody | 

try {
    $result = $apiInstance->quoteGuestCartManagementV1AssignCustomerPut($cartId, $quoteGuestCartManagementV1AssignCustomerPutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCartManagementV1Api->quoteGuestCartManagementV1AssignCustomerPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**| The cart ID. |
 **quoteGuestCartManagementV1AssignCustomerPutBody** | [**\Krak\MagentoApiClient\Model\QuoteGuestCartManagementV1AssignCustomerPutBody**](../Model/QuoteGuestCartManagementV1AssignCustomerPutBody.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGuestCartManagementV1CreateEmptyCartPost**
> string quoteGuestCartManagementV1CreateEmptyCartPost()



Enable an customer or guest user to create an empty cart and quote for an anonymous customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteGuestCartManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->quoteGuestCartManagementV1CreateEmptyCartPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCartManagementV1Api->quoteGuestCartManagementV1CreateEmptyCartPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGuestCartManagementV1PlaceOrderPut**
> int quoteGuestCartManagementV1PlaceOrderPut($cartId, $quoteGuestCartManagementV1PlaceOrderPutBody)



Place an order for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteGuestCartManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | The cart ID.
$quoteGuestCartManagementV1PlaceOrderPutBody = new \Krak\MagentoApiClient\Model\QuoteGuestCartManagementV1PlaceOrderPutBody(); // \Krak\MagentoApiClient\Model\QuoteGuestCartManagementV1PlaceOrderPutBody | 

try {
    $result = $apiInstance->quoteGuestCartManagementV1PlaceOrderPut($cartId, $quoteGuestCartManagementV1PlaceOrderPutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCartManagementV1Api->quoteGuestCartManagementV1PlaceOrderPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**| The cart ID. |
 **quoteGuestCartManagementV1PlaceOrderPutBody** | [**\Krak\MagentoApiClient\Model\QuoteGuestCartManagementV1PlaceOrderPutBody**](../Model/QuoteGuestCartManagementV1PlaceOrderPutBody.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

