# Krak\MagentoApiClient\SalesInvoiceCommentRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesInvoiceCommentRepositoryV1SavePost**](SalesInvoiceCommentRepositoryV1Api.md#salesInvoiceCommentRepositoryV1SavePost) | **POST** /V1/invoices/comments | 


# **salesInvoiceCommentRepositoryV1SavePost**
> \Krak\MagentoApiClient\Model\SalesDataInvoiceCommentInterface salesInvoiceCommentRepositoryV1SavePost($salesInvoiceCommentRepositoryV1SavePostBody)



Performs persist operations for a specified invoice comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\SalesInvoiceCommentRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$salesInvoiceCommentRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\SalesInvoiceCommentRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\SalesInvoiceCommentRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->salesInvoiceCommentRepositoryV1SavePost($salesInvoiceCommentRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceCommentRepositoryV1Api->salesInvoiceCommentRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **salesInvoiceCommentRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\SalesInvoiceCommentRepositoryV1SavePostBody**](../Model/SalesInvoiceCommentRepositoryV1SavePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\SalesDataInvoiceCommentInterface**](../Model/SalesDataInvoiceCommentInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

