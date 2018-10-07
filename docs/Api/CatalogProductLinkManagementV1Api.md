# Krak\MagentoApiClient\CatalogProductLinkManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductLinkManagementV1GetLinkedItemsByTypeGet**](CatalogProductLinkManagementV1Api.md#catalogProductLinkManagementV1GetLinkedItemsByTypeGet) | **GET** /V1/products/{sku}/links/{type} | 
[**catalogProductLinkManagementV1SetProductLinksPost**](CatalogProductLinkManagementV1Api.md#catalogProductLinkManagementV1SetProductLinksPost) | **POST** /V1/products/{sku}/links | 


# **catalogProductLinkManagementV1GetLinkedItemsByTypeGet**
> \Krak\MagentoApiClient\Model\CatalogDataProductLinkInterface[] catalogProductLinkManagementV1GetLinkedItemsByTypeGet($sku, $type)



Provide the list of links for a specific product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductLinkManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 
$type = "type_example"; // string | 

try {
    $result = $apiInstance->catalogProductLinkManagementV1GetLinkedItemsByTypeGet($sku, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductLinkManagementV1Api->catalogProductLinkManagementV1GetLinkedItemsByTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **type** | **string**|  |

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataProductLinkInterface[]**](../Model/CatalogDataProductLinkInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductLinkManagementV1SetProductLinksPost**
> bool catalogProductLinkManagementV1SetProductLinksPost($sku, $catalogProductLinkManagementV1SetProductLinksPostBody)



Assign a product link to another product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductLinkManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 
$catalogProductLinkManagementV1SetProductLinksPostBody = new \Krak\MagentoApiClient\Model\CatalogProductLinkManagementV1SetProductLinksPostBody(); // \Krak\MagentoApiClient\Model\CatalogProductLinkManagementV1SetProductLinksPostBody | 

try {
    $result = $apiInstance->catalogProductLinkManagementV1SetProductLinksPost($sku, $catalogProductLinkManagementV1SetProductLinksPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductLinkManagementV1Api->catalogProductLinkManagementV1SetProductLinksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **catalogProductLinkManagementV1SetProductLinksPostBody** | [**\Krak\MagentoApiClient\Model\CatalogProductLinkManagementV1SetProductLinksPostBody**](../Model/CatalogProductLinkManagementV1SetProductLinksPostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

