# Krak\MagentoApiClient\DownloadableLinkRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadableLinkRepositoryV1DeleteDelete**](DownloadableLinkRepositoryV1Api.md#downloadableLinkRepositoryV1DeleteDelete) | **DELETE** /V1/products/downloadable-links/{id} | 
[**downloadableLinkRepositoryV1GetListGet**](DownloadableLinkRepositoryV1Api.md#downloadableLinkRepositoryV1GetListGet) | **GET** /V1/products/{sku}/downloadable-links | 
[**downloadableLinkRepositoryV1SavePost**](DownloadableLinkRepositoryV1Api.md#downloadableLinkRepositoryV1SavePost) | **POST** /V1/products/{sku}/downloadable-links | 
[**downloadableLinkRepositoryV1SavePut**](DownloadableLinkRepositoryV1Api.md#downloadableLinkRepositoryV1SavePut) | **PUT** /V1/products/{sku}/downloadable-links/{id} | 


# **downloadableLinkRepositoryV1DeleteDelete**
> bool downloadableLinkRepositoryV1DeleteDelete($id)



Delete downloadable link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\DownloadableLinkRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->downloadableLinkRepositoryV1DeleteDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadableLinkRepositoryV1Api->downloadableLinkRepositoryV1DeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadableLinkRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\DownloadableDataLinkInterface[] downloadableLinkRepositoryV1GetListGet($sku)



List of links with associated samples

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\DownloadableLinkRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 

try {
    $result = $apiInstance->downloadableLinkRepositoryV1GetListGet($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadableLinkRepositoryV1Api->downloadableLinkRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |

### Return type

[**\Krak\MagentoApiClient\Model\DownloadableDataLinkInterface[]**](../Model/DownloadableDataLinkInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadableLinkRepositoryV1SavePost**
> int downloadableLinkRepositoryV1SavePost($sku, $downloadableLinkRepositoryV1SavePostBody)



Update downloadable link of the given product (link type and its resources cannot be changed)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\DownloadableLinkRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 
$downloadableLinkRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\DownloadableLinkRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\DownloadableLinkRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->downloadableLinkRepositoryV1SavePost($sku, $downloadableLinkRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadableLinkRepositoryV1Api->downloadableLinkRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **downloadableLinkRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\DownloadableLinkRepositoryV1SavePostBody**](../Model/DownloadableLinkRepositoryV1SavePostBody.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadableLinkRepositoryV1SavePut**
> int downloadableLinkRepositoryV1SavePut($sku, $id, $downloadableLinkRepositoryV1SavePutBody)



Update downloadable link of the given product (link type and its resources cannot be changed)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\DownloadableLinkRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 
$id = "id_example"; // string | 
$downloadableLinkRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\DownloadableLinkRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\DownloadableLinkRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->downloadableLinkRepositoryV1SavePut($sku, $id, $downloadableLinkRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadableLinkRepositoryV1Api->downloadableLinkRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **id** | **string**|  |
 **downloadableLinkRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\DownloadableLinkRepositoryV1SavePutBody**](../Model/DownloadableLinkRepositoryV1SavePutBody.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

