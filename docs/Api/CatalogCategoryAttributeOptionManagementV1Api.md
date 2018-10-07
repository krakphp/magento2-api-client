# Krak\MagentoApiClient\CatalogCategoryAttributeOptionManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogCategoryAttributeOptionManagementV1GetItemsGet**](CatalogCategoryAttributeOptionManagementV1Api.md#catalogCategoryAttributeOptionManagementV1GetItemsGet) | **GET** /V1/categories/attributes/{attributeCode}/options | 


# **catalogCategoryAttributeOptionManagementV1GetItemsGet**
> \Krak\MagentoApiClient\Model\EavDataAttributeOptionInterface[] catalogCategoryAttributeOptionManagementV1GetItemsGet($attributeCode)



Retrieve list of attribute options

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogCategoryAttributeOptionManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attributeCode = "attributeCode_example"; // string | 

try {
    $result = $apiInstance->catalogCategoryAttributeOptionManagementV1GetItemsGet($attributeCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryAttributeOptionManagementV1Api->catalogCategoryAttributeOptionManagementV1GetItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeCode** | **string**|  |

### Return type

[**\Krak\MagentoApiClient\Model\EavDataAttributeOptionInterface[]**](../Model/EavDataAttributeOptionInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

