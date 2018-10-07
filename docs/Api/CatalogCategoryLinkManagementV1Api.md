# Krak\MagentoApiClient\CatalogCategoryLinkManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogCategoryLinkManagementV1GetAssignedProductsGet**](CatalogCategoryLinkManagementV1Api.md#catalogCategoryLinkManagementV1GetAssignedProductsGet) | **GET** /V1/categories/{categoryId}/products | 


# **catalogCategoryLinkManagementV1GetAssignedProductsGet**
> \Krak\MagentoApiClient\Model\CatalogDataCategoryProductLinkInterface[] catalogCategoryLinkManagementV1GetAssignedProductsGet($categoryId)



Get products assigned to category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogCategoryLinkManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryId = 56; // int | 

try {
    $result = $apiInstance->catalogCategoryLinkManagementV1GetAssignedProductsGet($categoryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryLinkManagementV1Api->catalogCategoryLinkManagementV1GetAssignedProductsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryId** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataCategoryProductLinkInterface[]**](../Model/CatalogDataCategoryProductLinkInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

