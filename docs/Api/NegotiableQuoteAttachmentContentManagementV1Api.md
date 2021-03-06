# Krak\MagentoApiClient\NegotiableQuoteAttachmentContentManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuoteAttachmentContentManagementV1GetGet**](NegotiableQuoteAttachmentContentManagementV1Api.md#negotiableQuoteAttachmentContentManagementV1GetGet) | **GET** /V1/negotiableQuote/attachmentContent | 


# **negotiableQuoteAttachmentContentManagementV1GetGet**
> \Krak\MagentoApiClient\Model\NegotiableQuoteDataAttachmentContentInterface[] negotiableQuoteAttachmentContentManagementV1GetGet($attachmentIds)



Returns content for one or more files attached on the quote comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\NegotiableQuoteAttachmentContentManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachmentIds = array(56); // int[] | 

try {
    $result = $apiInstance->negotiableQuoteAttachmentContentManagementV1GetGet($attachmentIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteAttachmentContentManagementV1Api->negotiableQuoteAttachmentContentManagementV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachmentIds** | [**int[]**](../Model/int.md)|  |

### Return type

[**\Krak\MagentoApiClient\Model\NegotiableQuoteDataAttachmentContentInterface[]**](../Model/NegotiableQuoteDataAttachmentContentInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

