# Krak\MagentoApiClient\ConfigurableProductOptionRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurableProductOptionRepositoryV1DeleteByIdDelete**](ConfigurableProductOptionRepositoryV1Api.md#configurableProductOptionRepositoryV1DeleteByIdDelete) | **DELETE** /V1/configurable-products/{sku}/options/{id} | 
[**configurableProductOptionRepositoryV1GetGet**](ConfigurableProductOptionRepositoryV1Api.md#configurableProductOptionRepositoryV1GetGet) | **GET** /V1/configurable-products/{sku}/options/{id} | 
[**configurableProductOptionRepositoryV1GetListGet**](ConfigurableProductOptionRepositoryV1Api.md#configurableProductOptionRepositoryV1GetListGet) | **GET** /V1/configurable-products/{sku}/options/all | 
[**configurableProductOptionRepositoryV1SavePost**](ConfigurableProductOptionRepositoryV1Api.md#configurableProductOptionRepositoryV1SavePost) | **POST** /V1/configurable-products/{sku}/options | 
[**configurableProductOptionRepositoryV1SavePut**](ConfigurableProductOptionRepositoryV1Api.md#configurableProductOptionRepositoryV1SavePut) | **PUT** /V1/configurable-products/{sku}/options/{id} | 


# **configurableProductOptionRepositoryV1DeleteByIdDelete**
> bool configurableProductOptionRepositoryV1DeleteByIdDelete($sku, $id)



Remove option from configurable product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\ConfigurableProductOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 
$id = 56; // int | 

try {
    $result = $apiInstance->configurableProductOptionRepositoryV1DeleteByIdDelete($sku, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductOptionRepositoryV1Api->configurableProductOptionRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **id** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurableProductOptionRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\ConfigurableProductDataOptionInterface configurableProductOptionRepositoryV1GetGet($sku, $id)



Get option for configurable product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\ConfigurableProductOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 
$id = 56; // int | 

try {
    $result = $apiInstance->configurableProductOptionRepositoryV1GetGet($sku, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductOptionRepositoryV1Api->configurableProductOptionRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **id** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\ConfigurableProductDataOptionInterface**](../Model/ConfigurableProductDataOptionInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurableProductOptionRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\ConfigurableProductDataOptionInterface[] configurableProductOptionRepositoryV1GetListGet($sku)



Get all options for configurable product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\ConfigurableProductOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 

try {
    $result = $apiInstance->configurableProductOptionRepositoryV1GetListGet($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductOptionRepositoryV1Api->configurableProductOptionRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |

### Return type

[**\Krak\MagentoApiClient\Model\ConfigurableProductDataOptionInterface[]**](../Model/ConfigurableProductDataOptionInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurableProductOptionRepositoryV1SavePost**
> int configurableProductOptionRepositoryV1SavePost($sku, $configurableProductOptionRepositoryV1SavePostBody)



Save option

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\ConfigurableProductOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 
$configurableProductOptionRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\ConfigurableProductOptionRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\ConfigurableProductOptionRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->configurableProductOptionRepositoryV1SavePost($sku, $configurableProductOptionRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductOptionRepositoryV1Api->configurableProductOptionRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **configurableProductOptionRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\ConfigurableProductOptionRepositoryV1SavePostBody**](../Model/ConfigurableProductOptionRepositoryV1SavePostBody.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurableProductOptionRepositoryV1SavePut**
> int configurableProductOptionRepositoryV1SavePut($sku, $id, $configurableProductOptionRepositoryV1SavePutBody)



Save option

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\ConfigurableProductOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 
$id = "id_example"; // string | 
$configurableProductOptionRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\ConfigurableProductOptionRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\ConfigurableProductOptionRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->configurableProductOptionRepositoryV1SavePut($sku, $id, $configurableProductOptionRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductOptionRepositoryV1Api->configurableProductOptionRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **id** | **string**|  |
 **configurableProductOptionRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\ConfigurableProductOptionRepositoryV1SavePutBody**](../Model/ConfigurableProductOptionRepositoryV1SavePutBody.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

