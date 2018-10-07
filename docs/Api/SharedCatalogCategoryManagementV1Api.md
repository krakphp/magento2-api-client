# Krak\MagentoApiClient\SharedCatalogCategoryManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sharedCatalogCategoryManagementV1AssignCategoriesPost**](SharedCatalogCategoryManagementV1Api.md#sharedCatalogCategoryManagementV1AssignCategoriesPost) | **POST** /V1/sharedCatalog/{id}/assignCategories | 
[**sharedCatalogCategoryManagementV1GetCategoriesGet**](SharedCatalogCategoryManagementV1Api.md#sharedCatalogCategoryManagementV1GetCategoriesGet) | **GET** /V1/sharedCatalog/{id}/categories | 
[**sharedCatalogCategoryManagementV1UnassignCategoriesPost**](SharedCatalogCategoryManagementV1Api.md#sharedCatalogCategoryManagementV1UnassignCategoriesPost) | **POST** /V1/sharedCatalog/{id}/unassignCategories | 


# **sharedCatalogCategoryManagementV1AssignCategoriesPost**
> bool sharedCatalogCategoryManagementV1AssignCategoriesPost($id, $sharedCatalogCategoryManagementV1AssignCategoriesPostBody)



Add categories into the shared catalog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\SharedCatalogCategoryManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$sharedCatalogCategoryManagementV1AssignCategoriesPostBody = new \Krak\MagentoApiClient\Model\SharedCatalogCategoryManagementV1AssignCategoriesPostBody(); // \Krak\MagentoApiClient\Model\SharedCatalogCategoryManagementV1AssignCategoriesPostBody | 

try {
    $result = $apiInstance->sharedCatalogCategoryManagementV1AssignCategoriesPost($id, $sharedCatalogCategoryManagementV1AssignCategoriesPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogCategoryManagementV1Api->sharedCatalogCategoryManagementV1AssignCategoriesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **sharedCatalogCategoryManagementV1AssignCategoriesPostBody** | [**\Krak\MagentoApiClient\Model\SharedCatalogCategoryManagementV1AssignCategoriesPostBody**](../Model/SharedCatalogCategoryManagementV1AssignCategoriesPostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharedCatalogCategoryManagementV1GetCategoriesGet**
> int[] sharedCatalogCategoryManagementV1GetCategoriesGet($id)



Return the list of categories in the selected shared catalog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\SharedCatalogCategoryManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->sharedCatalogCategoryManagementV1GetCategoriesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogCategoryManagementV1Api->sharedCatalogCategoryManagementV1GetCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**int[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharedCatalogCategoryManagementV1UnassignCategoriesPost**
> bool sharedCatalogCategoryManagementV1UnassignCategoriesPost($id, $sharedCatalogCategoryManagementV1UnassignCategoriesPostBody)



Remove the specified categories from the shared catalog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\SharedCatalogCategoryManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$sharedCatalogCategoryManagementV1UnassignCategoriesPostBody = new \Krak\MagentoApiClient\Model\SharedCatalogCategoryManagementV1UnassignCategoriesPostBody(); // \Krak\MagentoApiClient\Model\SharedCatalogCategoryManagementV1UnassignCategoriesPostBody | 

try {
    $result = $apiInstance->sharedCatalogCategoryManagementV1UnassignCategoriesPost($id, $sharedCatalogCategoryManagementV1UnassignCategoriesPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogCategoryManagementV1Api->sharedCatalogCategoryManagementV1UnassignCategoriesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **sharedCatalogCategoryManagementV1UnassignCategoriesPostBody** | [**\Krak\MagentoApiClient\Model\SharedCatalogCategoryManagementV1UnassignCategoriesPostBody**](../Model/SharedCatalogCategoryManagementV1UnassignCategoriesPostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

