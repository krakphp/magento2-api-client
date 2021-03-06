# Krak\MagentoApiClient\NegotiableQuoteCartTotalRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuoteCartTotalRepositoryV1GetGet**](NegotiableQuoteCartTotalRepositoryV1Api.md#negotiableQuoteCartTotalRepositoryV1GetGet) | **GET** /V1/negotiable-carts/{cartId}/totals | 


# **negotiableQuoteCartTotalRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\QuoteDataTotalsInterface negotiableQuoteCartTotalRepositoryV1GetGet($cartId)



Returns quote totals data for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\NegotiableQuoteCartTotalRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = 56; // int | The cart ID.

try {
    $result = $apiInstance->negotiableQuoteCartTotalRepositoryV1GetGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteCartTotalRepositoryV1Api->negotiableQuoteCartTotalRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

