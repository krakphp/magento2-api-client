# Krak\MagentoApiClient\GiftRegistryShippingMethodManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**giftRegistryShippingMethodManagementV1EstimateByRegistryIdPost**](GiftRegistryShippingMethodManagementV1Api.md#giftRegistryShippingMethodManagementV1EstimateByRegistryIdPost) | **POST** /V1/giftregistry/mine/estimate-shipping-methods | 


# **giftRegistryShippingMethodManagementV1EstimateByRegistryIdPost**
> \Krak\MagentoApiClient\Model\QuoteDataShippingMethodInterface[] giftRegistryShippingMethodManagementV1EstimateByRegistryIdPost($giftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBody)



Estimate shipping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\GiftRegistryShippingMethodManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$giftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBody = new \Krak\MagentoApiClient\Model\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBody(); // \Krak\MagentoApiClient\Model\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBody | 

try {
    $result = $apiInstance->giftRegistryShippingMethodManagementV1EstimateByRegistryIdPost($giftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftRegistryShippingMethodManagementV1Api->giftRegistryShippingMethodManagementV1EstimateByRegistryIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **giftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBody** | [**\Krak\MagentoApiClient\Model\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBody**](../Model/GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

