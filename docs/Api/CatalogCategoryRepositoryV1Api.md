# Krak\MagentoApiClient\CatalogCategoryRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogCategoryRepositoryV1DeleteByIdentifierDelete**](CatalogCategoryRepositoryV1Api.md#catalogCategoryRepositoryV1DeleteByIdentifierDelete) | **DELETE** /V1/categories/{categoryId} | 
[**catalogCategoryRepositoryV1GetGet**](CatalogCategoryRepositoryV1Api.md#catalogCategoryRepositoryV1GetGet) | **GET** /V1/categories/{categoryId} | 
[**catalogCategoryRepositoryV1SavePost**](CatalogCategoryRepositoryV1Api.md#catalogCategoryRepositoryV1SavePost) | **POST** /V1/categories | 
[**catalogCategoryRepositoryV1SavePut**](CatalogCategoryRepositoryV1Api.md#catalogCategoryRepositoryV1SavePut) | **PUT** /V1/categories/{id} | 


# **catalogCategoryRepositoryV1DeleteByIdentifierDelete**
> bool catalogCategoryRepositoryV1DeleteByIdentifierDelete($categoryId)



Delete category by identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogCategoryRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryId = 56; // int | 

try {
    $result = $apiInstance->catalogCategoryRepositoryV1DeleteByIdentifierDelete($categoryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryRepositoryV1Api->catalogCategoryRepositoryV1DeleteByIdentifierDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryId** | **int**|  |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogCategoryRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\CatalogDataCategoryInterface catalogCategoryRepositoryV1GetGet($categoryId, $storeId)



Get info about category by category id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogCategoryRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryId = 56; // int | 
$storeId = 56; // int | 

try {
    $result = $apiInstance->catalogCategoryRepositoryV1GetGet($categoryId, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryRepositoryV1Api->catalogCategoryRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryId** | **int**|  |
 **storeId** | **int**|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataCategoryInterface**](../Model/CatalogDataCategoryInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogCategoryRepositoryV1SavePost**
> \Krak\MagentoApiClient\Model\CatalogDataCategoryInterface catalogCategoryRepositoryV1SavePost($catalogCategoryRepositoryV1SavePostBody)



Create category service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogCategoryRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalogCategoryRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\CatalogCategoryRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\CatalogCategoryRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->catalogCategoryRepositoryV1SavePost($catalogCategoryRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryRepositoryV1Api->catalogCategoryRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogCategoryRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\CatalogCategoryRepositoryV1SavePostBody**](../Model/CatalogCategoryRepositoryV1SavePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataCategoryInterface**](../Model/CatalogDataCategoryInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogCategoryRepositoryV1SavePut**
> \Krak\MagentoApiClient\Model\CatalogDataCategoryInterface catalogCategoryRepositoryV1SavePut($id, $catalogCategoryRepositoryV1SavePutBody)



Create category service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogCategoryRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$catalogCategoryRepositoryV1SavePutBody = new \Krak\MagentoApiClient\Model\CatalogCategoryRepositoryV1SavePutBody(); // \Krak\MagentoApiClient\Model\CatalogCategoryRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->catalogCategoryRepositoryV1SavePut($id, $catalogCategoryRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryRepositoryV1Api->catalogCategoryRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **catalogCategoryRepositoryV1SavePutBody** | [**\Krak\MagentoApiClient\Model\CatalogCategoryRepositoryV1SavePutBody**](../Model/CatalogCategoryRepositoryV1SavePutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataCategoryInterface**](../Model/CatalogDataCategoryInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

