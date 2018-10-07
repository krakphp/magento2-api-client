# Krak\MagentoApiClient\CatalogProductMediaAttributeManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductMediaAttributeManagementV1GetListGet**](CatalogProductMediaAttributeManagementV1Api.md#catalogProductMediaAttributeManagementV1GetListGet) | **GET** /V1/products/media/types/{attributeSetName} | 


# **catalogProductMediaAttributeManagementV1GetListGet**
> \Krak\MagentoApiClient\Model\CatalogDataProductAttributeInterface[] catalogProductMediaAttributeManagementV1GetListGet($attributeSetName)



Retrieve the list of media attributes (fronted input type is media_image) assigned to the given attribute set.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductMediaAttributeManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeSetName = "attributeSetName_example"; // string | 

try {
    $result = $apiInstance->catalogProductMediaAttributeManagementV1GetListGet($attributeSetName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductMediaAttributeManagementV1Api->catalogProductMediaAttributeManagementV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeSetName** | **string**|  |

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataProductAttributeInterface[]**](../Model/CatalogDataProductAttributeInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

