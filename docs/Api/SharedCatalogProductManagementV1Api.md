# Krak\MagentoApiClient\SharedCatalogProductManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sharedCatalogProductManagementV1AssignProductsPost**](SharedCatalogProductManagementV1Api.md#sharedCatalogProductManagementV1AssignProductsPost) | **POST** /V1/sharedCatalog/{id}/assignProducts | 
[**sharedCatalogProductManagementV1GetProductsGet**](SharedCatalogProductManagementV1Api.md#sharedCatalogProductManagementV1GetProductsGet) | **GET** /V1/sharedCatalog/{id}/products | 
[**sharedCatalogProductManagementV1UnassignProductsPost**](SharedCatalogProductManagementV1Api.md#sharedCatalogProductManagementV1UnassignProductsPost) | **POST** /V1/sharedCatalog/{id}/unassignProducts | 


# **sharedCatalogProductManagementV1AssignProductsPost**
> bool sharedCatalogProductManagementV1AssignProductsPost($id, $sharedCatalogProductManagementV1AssignProductsPostBody)



Add products into the shared catalog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SharedCatalogProductManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$sharedCatalogProductManagementV1AssignProductsPostBody = new \Krak\MagentoApiClient\Model\SharedCatalogProductManagementV1AssignProductsPostBody(); // \Krak\MagentoApiClient\Model\SharedCatalogProductManagementV1AssignProductsPostBody | 

try {
    $result = $apiInstance->sharedCatalogProductManagementV1AssignProductsPost($id, $sharedCatalogProductManagementV1AssignProductsPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogProductManagementV1Api->sharedCatalogProductManagementV1AssignProductsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **sharedCatalogProductManagementV1AssignProductsPostBody** | [**\Krak\MagentoApiClient\Model\SharedCatalogProductManagementV1AssignProductsPostBody**](../Model/SharedCatalogProductManagementV1AssignProductsPostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharedCatalogProductManagementV1GetProductsGet**
> string[] sharedCatalogProductManagementV1GetProductsGet($id)



Return the list of product SKUs in the selected shared catalog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SharedCatalogProductManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->sharedCatalogProductManagementV1GetProductsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogProductManagementV1Api->sharedCatalogProductManagementV1GetProductsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**string[]**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharedCatalogProductManagementV1UnassignProductsPost**
> bool sharedCatalogProductManagementV1UnassignProductsPost($id, $sharedCatalogProductManagementV1UnassignProductsPostBody)



Remove the specified products from the shared catalog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SharedCatalogProductManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$sharedCatalogProductManagementV1UnassignProductsPostBody = new \Krak\MagentoApiClient\Model\SharedCatalogProductManagementV1UnassignProductsPostBody(); // \Krak\MagentoApiClient\Model\SharedCatalogProductManagementV1UnassignProductsPostBody | 

try {
    $result = $apiInstance->sharedCatalogProductManagementV1UnassignProductsPost($id, $sharedCatalogProductManagementV1UnassignProductsPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogProductManagementV1Api->sharedCatalogProductManagementV1UnassignProductsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **sharedCatalogProductManagementV1UnassignProductsPostBody** | [**\Krak\MagentoApiClient\Model\SharedCatalogProductManagementV1UnassignProductsPostBody**](../Model/SharedCatalogProductManagementV1UnassignProductsPostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

