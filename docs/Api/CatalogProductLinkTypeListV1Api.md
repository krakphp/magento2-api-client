# Krak\MagentoApiClient\CatalogProductLinkTypeListV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductLinkTypeListV1GetItemAttributesGet**](CatalogProductLinkTypeListV1Api.md#catalogProductLinkTypeListV1GetItemAttributesGet) | **GET** /V1/products/links/{type}/attributes | 
[**catalogProductLinkTypeListV1GetItemsGet**](CatalogProductLinkTypeListV1Api.md#catalogProductLinkTypeListV1GetItemsGet) | **GET** /V1/products/links/types | 


# **catalogProductLinkTypeListV1GetItemAttributesGet**
> \Krak\MagentoApiClient\Model\CatalogDataProductLinkAttributeInterface[] catalogProductLinkTypeListV1GetItemAttributesGet($type)



Provide a list of the product link type attributes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductLinkTypeListV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | 

try {
    $result = $apiInstance->catalogProductLinkTypeListV1GetItemAttributesGet($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductLinkTypeListV1Api->catalogProductLinkTypeListV1GetItemAttributesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  |

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataProductLinkAttributeInterface[]**](../Model/CatalogDataProductLinkAttributeInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductLinkTypeListV1GetItemsGet**
> \Krak\MagentoApiClient\Model\CatalogDataProductLinkTypeInterface[] catalogProductLinkTypeListV1GetItemsGet()



Retrieve information about available product link types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductLinkTypeListV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->catalogProductLinkTypeListV1GetItemsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductLinkTypeListV1Api->catalogProductLinkTypeListV1GetItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataProductLinkTypeInterface[]**](../Model/CatalogDataProductLinkTypeInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

