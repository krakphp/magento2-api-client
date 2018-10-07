# Krak\MagentoApiClient\CatalogProductAttributeManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductAttributeManagementV1AssignPost**](CatalogProductAttributeManagementV1Api.md#catalogProductAttributeManagementV1AssignPost) | **POST** /V1/products/attribute-sets/attributes | 
[**catalogProductAttributeManagementV1GetAttributesGet**](CatalogProductAttributeManagementV1Api.md#catalogProductAttributeManagementV1GetAttributesGet) | **GET** /V1/products/attribute-sets/{attributeSetId}/attributes | 
[**catalogProductAttributeManagementV1UnassignDelete**](CatalogProductAttributeManagementV1Api.md#catalogProductAttributeManagementV1UnassignDelete) | **DELETE** /V1/products/attribute-sets/{attributeSetId}/attributes/{attributeCode} | 


# **catalogProductAttributeManagementV1AssignPost**
> int catalogProductAttributeManagementV1AssignPost($catalogProductAttributeManagementV1AssignPostBody)



Assign attribute to attribute set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductAttributeManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$catalogProductAttributeManagementV1AssignPostBody = new \Krak\MagentoApiClient\Model\CatalogProductAttributeManagementV1AssignPostBody(); // \Krak\MagentoApiClient\Model\CatalogProductAttributeManagementV1AssignPostBody | 

try {
    $result = $apiInstance->catalogProductAttributeManagementV1AssignPost($catalogProductAttributeManagementV1AssignPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeManagementV1Api->catalogProductAttributeManagementV1AssignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogProductAttributeManagementV1AssignPostBody** | [**\Krak\MagentoApiClient\Model\CatalogProductAttributeManagementV1AssignPostBody**](../Model/CatalogProductAttributeManagementV1AssignPostBody.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeManagementV1GetAttributesGet**
> \Krak\MagentoApiClient\Model\CatalogDataProductAttributeInterface[] catalogProductAttributeManagementV1GetAttributesGet($attributeSetId)



Retrieve related attributes based on given attribute set ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductAttributeManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attributeSetId = "attributeSetId_example"; // string | 

try {
    $result = $apiInstance->catalogProductAttributeManagementV1GetAttributesGet($attributeSetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeManagementV1Api->catalogProductAttributeManagementV1GetAttributesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeSetId** | **string**|  |

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataProductAttributeInterface[]**](../Model/CatalogDataProductAttributeInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeManagementV1UnassignDelete**
> bool catalogProductAttributeManagementV1UnassignDelete($attributeSetId, $attributeCode)



Remove attribute from attribute set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductAttributeManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attributeSetId = "attributeSetId_example"; // string | 
$attributeCode = "attributeCode_example"; // string | 

try {
    $result = $apiInstance->catalogProductAttributeManagementV1UnassignDelete($attributeSetId, $attributeCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeManagementV1Api->catalogProductAttributeManagementV1UnassignDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeSetId** | **string**|  |
 **attributeCode** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

