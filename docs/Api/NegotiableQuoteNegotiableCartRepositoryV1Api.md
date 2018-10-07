# Krak\MagentoApiClient\NegotiableQuoteNegotiableCartRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuoteNegotiableCartRepositoryV1SavePut**](NegotiableQuoteNegotiableCartRepositoryV1Api.md#negotiableQuoteNegotiableCartRepositoryV1SavePut) | **PUT** /V1/negotiableQuote/{quoteId} | 


# **negotiableQuoteNegotiableCartRepositoryV1SavePut**
> \Krak\MagentoApiClient\Model\ErrorResponse negotiableQuoteNegotiableCartRepositoryV1SavePut($quoteId, $negotiableQuoteNegotiableCartRepositoryV1SavePutBody)



Save quote

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\NegotiableQuoteNegotiableCartRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quoteId = "quoteId_example"; // string | 
$negotiableQuoteNegotiableCartRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\NegotiableQuoteNegotiableCartRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\NegotiableQuoteNegotiableCartRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->negotiableQuoteNegotiableCartRepositoryV1SavePut($quoteId, $negotiableQuoteNegotiableCartRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteNegotiableCartRepositoryV1Api->negotiableQuoteNegotiableCartRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quoteId** | **string**|  |
 **negotiableQuoteNegotiableCartRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\NegotiableQuoteNegotiableCartRepositoryV1SavePutBody**](../Model/NegotiableQuoteNegotiableCartRepositoryV1SavePutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\ErrorResponse**](../Model/ErrorResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

