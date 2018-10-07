# Krak\MagentoApiClient\SharedCatalogCompanyManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sharedCatalogCompanyManagementV1AssignCompaniesPost**](SharedCatalogCompanyManagementV1Api.md#sharedCatalogCompanyManagementV1AssignCompaniesPost) | **POST** /V1/sharedCatalog/{sharedCatalogId}/assignCompanies | 
[**sharedCatalogCompanyManagementV1GetCompaniesGet**](SharedCatalogCompanyManagementV1Api.md#sharedCatalogCompanyManagementV1GetCompaniesGet) | **GET** /V1/sharedCatalog/{sharedCatalogId}/companies | 
[**sharedCatalogCompanyManagementV1UnassignCompaniesPost**](SharedCatalogCompanyManagementV1Api.md#sharedCatalogCompanyManagementV1UnassignCompaniesPost) | **POST** /V1/sharedCatalog/{sharedCatalogId}/unassignCompanies | 


# **sharedCatalogCompanyManagementV1AssignCompaniesPost**
> bool sharedCatalogCompanyManagementV1AssignCompaniesPost($sharedCatalogId, $sharedCatalogCompanyManagementV1AssignCompaniesPostBody)



Assign companies to a shared catalog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\SharedCatalogCompanyManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sharedCatalogId = 56; // int | 
$sharedCatalogCompanyManagementV1AssignCompaniesPostBody = new \Krak\MagentoApiClient\Model\SharedCatalogCompanyManagementV1AssignCompaniesPostBody(); // \Krak\MagentoApiClient\Model\SharedCatalogCompanyManagementV1AssignCompaniesPostBody | 

try {
    $result = $apiInstance->sharedCatalogCompanyManagementV1AssignCompaniesPost($sharedCatalogId, $sharedCatalogCompanyManagementV1AssignCompaniesPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogCompanyManagementV1Api->sharedCatalogCompanyManagementV1AssignCompaniesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharedCatalogId** | **int**|  |
 **sharedCatalogCompanyManagementV1AssignCompaniesPostBody** | [**\Krak\MagentoApiClient\Model\SharedCatalogCompanyManagementV1AssignCompaniesPostBody**](../Model/SharedCatalogCompanyManagementV1AssignCompaniesPostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharedCatalogCompanyManagementV1GetCompaniesGet**
> string sharedCatalogCompanyManagementV1GetCompaniesGet($sharedCatalogId)



Return the list of company IDs for the companies assigned to the selected catalog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\SharedCatalogCompanyManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sharedCatalogId = 56; // int | 

try {
    $result = $apiInstance->sharedCatalogCompanyManagementV1GetCompaniesGet($sharedCatalogId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogCompanyManagementV1Api->sharedCatalogCompanyManagementV1GetCompaniesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharedCatalogId** | **int**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharedCatalogCompanyManagementV1UnassignCompaniesPost**
> bool sharedCatalogCompanyManagementV1UnassignCompaniesPost($sharedCatalogId, $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody)



Unassign companies from a shared catalog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\SharedCatalogCompanyManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sharedCatalogId = 56; // int | 
$sharedCatalogCompanyManagementV1UnassignCompaniesPostBody = new \Krak\MagentoApiClient\Model\SharedCatalogCompanyManagementV1UnassignCompaniesPostBody(); // \Krak\MagentoApiClient\Model\SharedCatalogCompanyManagementV1UnassignCompaniesPostBody | 

try {
    $result = $apiInstance->sharedCatalogCompanyManagementV1UnassignCompaniesPost($sharedCatalogId, $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogCompanyManagementV1Api->sharedCatalogCompanyManagementV1UnassignCompaniesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharedCatalogId** | **int**|  |
 **sharedCatalogCompanyManagementV1UnassignCompaniesPostBody** | [**\Krak\MagentoApiClient\Model\SharedCatalogCompanyManagementV1UnassignCompaniesPostBody**](../Model/SharedCatalogCompanyManagementV1UnassignCompaniesPostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

