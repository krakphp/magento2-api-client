# Krak\MagentoApiClient\CatalogProductTierPriceManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductTierPriceManagementV1AddPost**](CatalogProductTierPriceManagementV1Api.md#catalogProductTierPriceManagementV1AddPost) | **POST** /V1/products/{sku}/group-prices/{customerGroupId}/tiers/{qty}/price/{price} | 
[**catalogProductTierPriceManagementV1GetListGet**](CatalogProductTierPriceManagementV1Api.md#catalogProductTierPriceManagementV1GetListGet) | **GET** /V1/products/{sku}/group-prices/{customerGroupId}/tiers | 
[**catalogProductTierPriceManagementV1RemoveDelete**](CatalogProductTierPriceManagementV1Api.md#catalogProductTierPriceManagementV1RemoveDelete) | **DELETE** /V1/products/{sku}/group-prices/{customerGroupId}/tiers/{qty} | 


# **catalogProductTierPriceManagementV1AddPost**
> bool catalogProductTierPriceManagementV1AddPost($sku, $customerGroupId, $price, $qty)



Create tier price for product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductTierPriceManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 
$customerGroupId = "customerGroupId_example"; // string | 'all' can be used to specify 'ALL GROUPS'
$price = 8.14; // float | 
$qty = 8.14; // float | 

try {
    $result = $apiInstance->catalogProductTierPriceManagementV1AddPost($sku, $customerGroupId, $price, $qty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductTierPriceManagementV1Api->catalogProductTierPriceManagementV1AddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **customerGroupId** | **string**| &#39;all&#39; can be used to specify &#39;ALL GROUPS&#39; |
 **price** | **float**|  |
 **qty** | **float**|  |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductTierPriceManagementV1GetListGet**
> \Krak\MagentoApiClient\Model\CatalogDataProductTierPriceInterface[] catalogProductTierPriceManagementV1GetListGet($sku, $customerGroupId)



Get tier price of product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductTierPriceManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 
$customerGroupId = "customerGroupId_example"; // string | 'all' can be used to specify 'ALL GROUPS'

try {
    $result = $apiInstance->catalogProductTierPriceManagementV1GetListGet($sku, $customerGroupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductTierPriceManagementV1Api->catalogProductTierPriceManagementV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **customerGroupId** | **string**| &#39;all&#39; can be used to specify &#39;ALL GROUPS&#39; |

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataProductTierPriceInterface[]**](../Model/CatalogDataProductTierPriceInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductTierPriceManagementV1RemoveDelete**
> bool catalogProductTierPriceManagementV1RemoveDelete($sku, $customerGroupId, $qty)



Remove tier price from product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductTierPriceManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 
$customerGroupId = "customerGroupId_example"; // string | 'all' can be used to specify 'ALL GROUPS'
$qty = 8.14; // float | 

try {
    $result = $apiInstance->catalogProductTierPriceManagementV1RemoveDelete($sku, $customerGroupId, $qty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductTierPriceManagementV1Api->catalogProductTierPriceManagementV1RemoveDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **customerGroupId** | **string**| &#39;all&#39; can be used to specify &#39;ALL GROUPS&#39; |
 **qty** | **float**|  |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

