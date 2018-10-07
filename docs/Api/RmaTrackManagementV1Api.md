# Krak\MagentoApiClient\RmaTrackManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rmaTrackManagementV1AddTrackPost**](RmaTrackManagementV1Api.md#rmaTrackManagementV1AddTrackPost) | **POST** /V1/returns/{id}/tracking-numbers | 
[**rmaTrackManagementV1GetShippingLabelPdfGet**](RmaTrackManagementV1Api.md#rmaTrackManagementV1GetShippingLabelPdfGet) | **GET** /V1/returns/{id}/labels | 
[**rmaTrackManagementV1GetTracksGet**](RmaTrackManagementV1Api.md#rmaTrackManagementV1GetTracksGet) | **GET** /V1/returns/{id}/tracking-numbers | 
[**rmaTrackManagementV1RemoveTrackByIdDelete**](RmaTrackManagementV1Api.md#rmaTrackManagementV1RemoveTrackByIdDelete) | **DELETE** /V1/returns/{id}/tracking-numbers/{trackId} | 


# **rmaTrackManagementV1AddTrackPost**
> bool rmaTrackManagementV1AddTrackPost($id, $rmaTrackManagementV1AddTrackPostBody)



Add track

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\RmaTrackManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$rmaTrackManagementV1AddTrackPostBody = new \Krak\MagentoApiClient\Model\RmaTrackManagementV1AddTrackPostBody(); // \Krak\MagentoApiClient\Model\RmaTrackManagementV1AddTrackPostBody | 

try {
    $result = $apiInstance->rmaTrackManagementV1AddTrackPost($id, $rmaTrackManagementV1AddTrackPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaTrackManagementV1Api->rmaTrackManagementV1AddTrackPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **rmaTrackManagementV1AddTrackPostBody** | [**\Krak\MagentoApiClient\Model\RmaTrackManagementV1AddTrackPostBody**](../Model/RmaTrackManagementV1AddTrackPostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rmaTrackManagementV1GetShippingLabelPdfGet**
> string rmaTrackManagementV1GetShippingLabelPdfGet($id)



Get shipping label int the PDF format

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\RmaTrackManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->rmaTrackManagementV1GetShippingLabelPdfGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaTrackManagementV1Api->rmaTrackManagementV1GetShippingLabelPdfGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rmaTrackManagementV1GetTracksGet**
> \Krak\MagentoApiClient\Model\RmaDataTrackSearchResultInterface rmaTrackManagementV1GetTracksGet($id)



Get track list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\RmaTrackManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->rmaTrackManagementV1GetTracksGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaTrackManagementV1Api->rmaTrackManagementV1GetTracksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\RmaDataTrackSearchResultInterface**](../Model/RmaDataTrackSearchResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rmaTrackManagementV1RemoveTrackByIdDelete**
> bool rmaTrackManagementV1RemoveTrackByIdDelete($id, $trackId)



Remove track by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\RmaTrackManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$trackId = 56; // int | 

try {
    $result = $apiInstance->rmaTrackManagementV1RemoveTrackByIdDelete($id, $trackId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaTrackManagementV1Api->rmaTrackManagementV1RemoveTrackByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **trackId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

