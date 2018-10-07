# Krak\MagentoApiClient\EavAttributeSetManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eavAttributeSetManagementV1CreatePost**](EavAttributeSetManagementV1Api.md#eavAttributeSetManagementV1CreatePost) | **POST** /V1/eav/attribute-sets | 


# **eavAttributeSetManagementV1CreatePost**
> \Krak\MagentoApiClient\Model\EavDataAttributeSetInterface eavAttributeSetManagementV1CreatePost($eavAttributeSetManagementV1CreatePostBody)



Create attribute set from data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\EavAttributeSetManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eavAttributeSetManagementV1CreatePostBody = new \Krak\MagentoApiClient\Model\EavAttributeSetManagementV1CreatePostBody(); // \Krak\MagentoApiClient\Model\EavAttributeSetManagementV1CreatePostBody | 

try {
    $result = $apiInstance->eavAttributeSetManagementV1CreatePost($eavAttributeSetManagementV1CreatePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EavAttributeSetManagementV1Api->eavAttributeSetManagementV1CreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eavAttributeSetManagementV1CreatePostBody** | [**\Krak\MagentoApiClient\Model\EavAttributeSetManagementV1CreatePostBody**](../Model/EavAttributeSetManagementV1CreatePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\EavDataAttributeSetInterface**](../Model/EavDataAttributeSetInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

