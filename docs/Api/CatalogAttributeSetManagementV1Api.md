# Krak\MagentoApiClient\CatalogAttributeSetManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogAttributeSetManagementV1CreatePost**](CatalogAttributeSetManagementV1Api.md#catalogAttributeSetManagementV1CreatePost) | **POST** /V1/products/attribute-sets | 


# **catalogAttributeSetManagementV1CreatePost**
> \Krak\MagentoApiClient\Model\EavDataAttributeSetInterface catalogAttributeSetManagementV1CreatePost($catalogAttributeSetManagementV1CreatePostBody)



Create attribute set from data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogAttributeSetManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$catalogAttributeSetManagementV1CreatePostBody = new \Krak\MagentoApiClient\Model\CatalogAttributeSetManagementV1CreatePostBody(); // \Krak\MagentoApiClient\Model\CatalogAttributeSetManagementV1CreatePostBody | 

try {
    $result = $apiInstance->catalogAttributeSetManagementV1CreatePost($catalogAttributeSetManagementV1CreatePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogAttributeSetManagementV1Api->catalogAttributeSetManagementV1CreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogAttributeSetManagementV1CreatePostBody** | [**\Krak\MagentoApiClient\Model\CatalogAttributeSetManagementV1CreatePostBody**](../Model/CatalogAttributeSetManagementV1CreatePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\EavDataAttributeSetInterface**](../Model/EavDataAttributeSetInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

