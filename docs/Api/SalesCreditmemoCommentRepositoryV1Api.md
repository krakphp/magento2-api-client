# Krak\MagentoApiClient\SalesCreditmemoCommentRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesCreditmemoCommentRepositoryV1SavePost**](SalesCreditmemoCommentRepositoryV1Api.md#salesCreditmemoCommentRepositoryV1SavePost) | **POST** /V1/creditmemo/{id}/comments | 


# **salesCreditmemoCommentRepositoryV1SavePost**
> \Krak\MagentoApiClient\Model\SalesDataCreditmemoCommentInterface salesCreditmemoCommentRepositoryV1SavePost($id, $salesCreditmemoCommentRepositoryV1SavePostBody)



Performs persist operations for a specified entity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\SalesCreditmemoCommentRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$salesCreditmemoCommentRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\SalesCreditmemoCommentRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\SalesCreditmemoCommentRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->salesCreditmemoCommentRepositoryV1SavePost($id, $salesCreditmemoCommentRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditmemoCommentRepositoryV1Api->salesCreditmemoCommentRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **salesCreditmemoCommentRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\SalesCreditmemoCommentRepositoryV1SavePostBody**](../Model/SalesCreditmemoCommentRepositoryV1SavePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\SalesDataCreditmemoCommentInterface**](../Model/SalesDataCreditmemoCommentInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

