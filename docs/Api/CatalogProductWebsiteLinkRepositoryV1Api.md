# Krak\MagentoApiClient\CatalogProductWebsiteLinkRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete**](CatalogProductWebsiteLinkRepositoryV1Api.md#catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete) | **DELETE** /V1/products/{sku}/websites/{websiteId} | 
[**catalogProductWebsiteLinkRepositoryV1SavePost**](CatalogProductWebsiteLinkRepositoryV1Api.md#catalogProductWebsiteLinkRepositoryV1SavePost) | **POST** /V1/products/{sku}/websites | 
[**catalogProductWebsiteLinkRepositoryV1SavePut**](CatalogProductWebsiteLinkRepositoryV1Api.md#catalogProductWebsiteLinkRepositoryV1SavePut) | **PUT** /V1/products/{sku}/websites | 


# **catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete**
> bool catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete($sku, $websiteId)



Remove the website assignment from the product by product sku

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductWebsiteLinkRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 
$websiteId = 56; // int | 

try {
    $result = $apiInstance->catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete($sku, $websiteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductWebsiteLinkRepositoryV1Api->catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **websiteId** | **int**|  |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductWebsiteLinkRepositoryV1SavePost**
> bool catalogProductWebsiteLinkRepositoryV1SavePost($sku, $catalogProductWebsiteLinkRepositoryV1SavePostBody)



Assign a product to the website

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductWebsiteLinkRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 
$catalogProductWebsiteLinkRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\CatalogProductWebsiteLinkRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\CatalogProductWebsiteLinkRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->catalogProductWebsiteLinkRepositoryV1SavePost($sku, $catalogProductWebsiteLinkRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductWebsiteLinkRepositoryV1Api->catalogProductWebsiteLinkRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **catalogProductWebsiteLinkRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\CatalogProductWebsiteLinkRepositoryV1SavePostBody**](../Model/CatalogProductWebsiteLinkRepositoryV1SavePostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductWebsiteLinkRepositoryV1SavePut**
> bool catalogProductWebsiteLinkRepositoryV1SavePut($sku, $catalogProductWebsiteLinkRepositoryV1SavePutBody)



Assign a product to the website

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductWebsiteLinkRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 
$catalogProductWebsiteLinkRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\CatalogProductWebsiteLinkRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\CatalogProductWebsiteLinkRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->catalogProductWebsiteLinkRepositoryV1SavePut($sku, $catalogProductWebsiteLinkRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductWebsiteLinkRepositoryV1Api->catalogProductWebsiteLinkRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **catalogProductWebsiteLinkRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\CatalogProductWebsiteLinkRepositoryV1SavePutBody**](../Model/CatalogProductWebsiteLinkRepositoryV1SavePutBody.md)|  | [optional]

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

