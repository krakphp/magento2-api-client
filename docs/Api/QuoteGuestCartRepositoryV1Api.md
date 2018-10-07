# Krak\MagentoApiClient\QuoteGuestCartRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestCartRepositoryV1GetGet**](QuoteGuestCartRepositoryV1Api.md#quoteGuestCartRepositoryV1GetGet) | **GET** /V1/guest-carts/{cartId} | 


# **quoteGuestCartRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\QuoteDataCartInterface quoteGuestCartRepositoryV1GetGet($cartId)



Enable a guest user to return information for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\QuoteGuestCartRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = "cartId_example"; // string | 

try {
    $result = $apiInstance->quoteGuestCartRepositoryV1GetGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCartRepositoryV1Api->quoteGuestCartRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataCartInterface**](../Model/QuoteDataCartInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

