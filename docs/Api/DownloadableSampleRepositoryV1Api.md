# Krak\MagentoApiClient\DownloadableSampleRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadableSampleRepositoryV1DeleteDelete**](DownloadableSampleRepositoryV1Api.md#downloadableSampleRepositoryV1DeleteDelete) | **DELETE** /V1/products/downloadable-links/samples/{id} | 
[**downloadableSampleRepositoryV1GetListGet**](DownloadableSampleRepositoryV1Api.md#downloadableSampleRepositoryV1GetListGet) | **GET** /V1/products/{sku}/downloadable-links/samples | 
[**downloadableSampleRepositoryV1SavePost**](DownloadableSampleRepositoryV1Api.md#downloadableSampleRepositoryV1SavePost) | **POST** /V1/products/{sku}/downloadable-links/samples | 
[**downloadableSampleRepositoryV1SavePut**](DownloadableSampleRepositoryV1Api.md#downloadableSampleRepositoryV1SavePut) | **PUT** /V1/products/{sku}/downloadable-links/samples/{id} | 


# **downloadableSampleRepositoryV1DeleteDelete**
> bool downloadableSampleRepositoryV1DeleteDelete($id)



Delete downloadable sample

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\DownloadableSampleRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->downloadableSampleRepositoryV1DeleteDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadableSampleRepositoryV1Api->downloadableSampleRepositoryV1DeleteDelete: ', $e->getMessage(), PHP_EOL;
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadableSampleRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\DownloadableDataSampleInterface[] downloadableSampleRepositoryV1GetListGet($sku)



List of samples for downloadable product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\DownloadableSampleRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 

try {
    $result = $apiInstance->downloadableSampleRepositoryV1GetListGet($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadableSampleRepositoryV1Api->downloadableSampleRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |

### Return type

[**\Krak\MagentoApiClient\Model\DownloadableDataSampleInterface[]**](../Model/DownloadableDataSampleInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadableSampleRepositoryV1SavePost**
> int downloadableSampleRepositoryV1SavePost($sku, $downloadableSampleRepositoryV1SavePostBody)



Update downloadable sample of the given product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\DownloadableSampleRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 
$downloadableSampleRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\DownloadableSampleRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\DownloadableSampleRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->downloadableSampleRepositoryV1SavePost($sku, $downloadableSampleRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadableSampleRepositoryV1Api->downloadableSampleRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **downloadableSampleRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\DownloadableSampleRepositoryV1SavePostBody**](../Model/DownloadableSampleRepositoryV1SavePostBody.md)|  | [optional]

### Return type

**int**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadableSampleRepositoryV1SavePut**
> int downloadableSampleRepositoryV1SavePut($sku, $id, $downloadableSampleRepositoryV1SavePutBody)



Update downloadable sample of the given product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\DownloadableSampleRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 
$id = "id_example"; // string | 
$downloadableSampleRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\DownloadableSampleRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\DownloadableSampleRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->downloadableSampleRepositoryV1SavePut($sku, $id, $downloadableSampleRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadableSampleRepositoryV1Api->downloadableSampleRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **id** | **string**|  |
 **downloadableSampleRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\DownloadableSampleRepositoryV1SavePutBody**](../Model/DownloadableSampleRepositoryV1SavePutBody.md)|  | [optional]

### Return type

**int**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

