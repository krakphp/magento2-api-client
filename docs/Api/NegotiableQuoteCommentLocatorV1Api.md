# Krak\MagentoApiClient\NegotiableQuoteCommentLocatorV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuoteCommentLocatorV1GetListForQuoteGet**](NegotiableQuoteCommentLocatorV1Api.md#negotiableQuoteCommentLocatorV1GetListForQuoteGet) | **GET** /V1/negotiableQuote/{quoteId}/comments | 


# **negotiableQuoteCommentLocatorV1GetListForQuoteGet**
> \Krak\MagentoApiClient\Model\NegotiableQuoteDataCommentInterface[] negotiableQuoteCommentLocatorV1GetListForQuoteGet($quoteId)



Returns comments for a specified negotiable quote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\NegotiableQuoteCommentLocatorV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$quoteId = 56; // int | Negotiable Quote ID.

try {
    $result = $apiInstance->negotiableQuoteCommentLocatorV1GetListForQuoteGet($quoteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteCommentLocatorV1Api->negotiableQuoteCommentLocatorV1GetListForQuoteGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quoteId** | **int**| Negotiable Quote ID. |

### Return type

[**\Krak\MagentoApiClient\Model\NegotiableQuoteDataCommentInterface[]**](../Model/NegotiableQuoteDataCommentInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

