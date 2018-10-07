# Krak\MagentoApiClient\SalesShipmentCommentRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesShipmentCommentRepositoryV1SavePost**](SalesShipmentCommentRepositoryV1Api.md#salesShipmentCommentRepositoryV1SavePost) | **POST** /V1/shipment/{id}/comments | 


# **salesShipmentCommentRepositoryV1SavePost**
> \Krak\MagentoApiClient\Model\SalesDataShipmentCommentInterface salesShipmentCommentRepositoryV1SavePost($id, $salesShipmentCommentRepositoryV1SavePostBody)



Performs persist operations for a specified shipment comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\SalesShipmentCommentRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$salesShipmentCommentRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\SalesShipmentCommentRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\SalesShipmentCommentRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->salesShipmentCommentRepositoryV1SavePost($id, $salesShipmentCommentRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesShipmentCommentRepositoryV1Api->salesShipmentCommentRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **salesShipmentCommentRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\SalesShipmentCommentRepositoryV1SavePostBody**](../Model/SalesShipmentCommentRepositoryV1SavePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\SalesDataShipmentCommentInterface**](../Model/SalesDataShipmentCommentInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

