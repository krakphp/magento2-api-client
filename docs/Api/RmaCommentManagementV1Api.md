# Krak\MagentoApiClient\RmaCommentManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rmaCommentManagementV1AddCommentPost**](RmaCommentManagementV1Api.md#rmaCommentManagementV1AddCommentPost) | **POST** /V1/returns/{id}/comments | 
[**rmaCommentManagementV1CommentsListGet**](RmaCommentManagementV1Api.md#rmaCommentManagementV1CommentsListGet) | **GET** /V1/returns/{id}/comments | 


# **rmaCommentManagementV1AddCommentPost**
> bool rmaCommentManagementV1AddCommentPost($id, $rmaCommentManagementV1AddCommentPostBody)



Add comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\RmaCommentManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$rmaCommentManagementV1AddCommentPostBody = new \Krak\MagentoApiClient\Model\RmaCommentManagementV1AddCommentPostBody(); // \Krak\MagentoApiClient\Model\RmaCommentManagementV1AddCommentPostBody | 

try {
    $result = $apiInstance->rmaCommentManagementV1AddCommentPost($id, $rmaCommentManagementV1AddCommentPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaCommentManagementV1Api->rmaCommentManagementV1AddCommentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **rmaCommentManagementV1AddCommentPostBody** | [**\Krak\MagentoApiClient\Model\RmaCommentManagementV1AddCommentPostBody**](../Model/RmaCommentManagementV1AddCommentPostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rmaCommentManagementV1CommentsListGet**
> \Krak\MagentoApiClient\Model\RmaDataCommentSearchResultInterface rmaCommentManagementV1CommentsListGet($id)



Comments list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\RmaCommentManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->rmaCommentManagementV1CommentsListGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaCommentManagementV1Api->rmaCommentManagementV1CommentsListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\RmaDataCommentSearchResultInterface**](../Model/RmaDataCommentSearchResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

