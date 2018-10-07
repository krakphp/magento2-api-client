# Krak\MagentoApiClient\ConfigurableProductConfigurableProductManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurableProductConfigurableProductManagementV1GenerateVariationPut**](ConfigurableProductConfigurableProductManagementV1Api.md#configurableProductConfigurableProductManagementV1GenerateVariationPut) | **PUT** /V1/configurable-products/variation | 


# **configurableProductConfigurableProductManagementV1GenerateVariationPut**
> \Krak\MagentoApiClient\Model\CatalogDataProductInterface[] configurableProductConfigurableProductManagementV1GenerateVariationPut($configurableProductConfigurableProductManagementV1GenerateVariationPutBody)



Generate variation based on same product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\ConfigurableProductConfigurableProductManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$configurableProductConfigurableProductManagementV1GenerateVariationPutBody = new \Krak\MagentoApiClient\Model\ConfigurableProductConfigurableProductManagementV1GenerateVariationPutBody(); // \Krak\MagentoApiClient\Model\ConfigurableProductConfigurableProductManagementV1GenerateVariationPutBody | 

try {
    $result = $apiInstance->configurableProductConfigurableProductManagementV1GenerateVariationPut($configurableProductConfigurableProductManagementV1GenerateVariationPutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductConfigurableProductManagementV1Api->configurableProductConfigurableProductManagementV1GenerateVariationPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **configurableProductConfigurableProductManagementV1GenerateVariationPutBody** | [**\Krak\MagentoApiClient\Model\ConfigurableProductConfigurableProductManagementV1GenerateVariationPutBody**](../Model/ConfigurableProductConfigurableProductManagementV1GenerateVariationPutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataProductInterface[]**](../Model/CatalogDataProductInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

