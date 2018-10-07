# Krak\MagentoApiClient\CatalogProductCustomOptionRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete**](CatalogProductCustomOptionRepositoryV1Api.md#catalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete) | **DELETE** /V1/products/{sku}/options/{optionId} | 
[**catalogProductCustomOptionRepositoryV1GetGet**](CatalogProductCustomOptionRepositoryV1Api.md#catalogProductCustomOptionRepositoryV1GetGet) | **GET** /V1/products/{sku}/options/{optionId} | 
[**catalogProductCustomOptionRepositoryV1GetListGet**](CatalogProductCustomOptionRepositoryV1Api.md#catalogProductCustomOptionRepositoryV1GetListGet) | **GET** /V1/products/{sku}/options | 
[**catalogProductCustomOptionRepositoryV1SavePost**](CatalogProductCustomOptionRepositoryV1Api.md#catalogProductCustomOptionRepositoryV1SavePost) | **POST** /V1/products/options | 
[**catalogProductCustomOptionRepositoryV1SavePut**](CatalogProductCustomOptionRepositoryV1Api.md#catalogProductCustomOptionRepositoryV1SavePut) | **PUT** /V1/products/options/{optionId} | 


# **catalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete**
> bool catalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete($sku, $optionId)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductCustomOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 
$optionId = 56; // int | 

try {
    $result = $apiInstance->catalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete($sku, $optionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductCustomOptionRepositoryV1Api->catalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **optionId** | **int**|  |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductCustomOptionRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\CatalogDataProductCustomOptionInterface catalogProductCustomOptionRepositoryV1GetGet($sku, $optionId)



Get custom option for a specific product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductCustomOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 
$optionId = 56; // int | 

try {
    $result = $apiInstance->catalogProductCustomOptionRepositoryV1GetGet($sku, $optionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductCustomOptionRepositoryV1Api->catalogProductCustomOptionRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **optionId** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataProductCustomOptionInterface**](../Model/CatalogDataProductCustomOptionInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductCustomOptionRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\CatalogDataProductCustomOptionInterface[] catalogProductCustomOptionRepositoryV1GetListGet($sku)



Get the list of custom options for a specific product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductCustomOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 

try {
    $result = $apiInstance->catalogProductCustomOptionRepositoryV1GetListGet($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductCustomOptionRepositoryV1Api->catalogProductCustomOptionRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataProductCustomOptionInterface[]**](../Model/CatalogDataProductCustomOptionInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductCustomOptionRepositoryV1SavePost**
> \Krak\MagentoApiClient\Model\CatalogDataProductCustomOptionInterface catalogProductCustomOptionRepositoryV1SavePost($catalogProductCustomOptionRepositoryV1SavePostBody)



Save Custom Option

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductCustomOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalogProductCustomOptionRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\CatalogProductCustomOptionRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\CatalogProductCustomOptionRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->catalogProductCustomOptionRepositoryV1SavePost($catalogProductCustomOptionRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductCustomOptionRepositoryV1Api->catalogProductCustomOptionRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogProductCustomOptionRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\CatalogProductCustomOptionRepositoryV1SavePostBody**](../Model/CatalogProductCustomOptionRepositoryV1SavePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataProductCustomOptionInterface**](../Model/CatalogDataProductCustomOptionInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductCustomOptionRepositoryV1SavePut**
> \Krak\MagentoApiClient\Model\CatalogDataProductCustomOptionInterface catalogProductCustomOptionRepositoryV1SavePut($optionId, $catalogProductCustomOptionRepositoryV1SavePutBody)



Save Custom Option

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductCustomOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$optionId = "optionId_example"; // string | 
$catalogProductCustomOptionRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\CatalogProductCustomOptionRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\CatalogProductCustomOptionRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->catalogProductCustomOptionRepositoryV1SavePut($optionId, $catalogProductCustomOptionRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductCustomOptionRepositoryV1Api->catalogProductCustomOptionRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **optionId** | **string**|  |
 **catalogProductCustomOptionRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\CatalogProductCustomOptionRepositoryV1SavePutBody**](../Model/CatalogProductCustomOptionRepositoryV1SavePutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataProductCustomOptionInterface**](../Model/CatalogDataProductCustomOptionInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

