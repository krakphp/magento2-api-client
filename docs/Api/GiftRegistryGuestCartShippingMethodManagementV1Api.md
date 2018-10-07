# Krak\MagentoApiClient\GiftRegistryGuestCartShippingMethodManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost**](GiftRegistryGuestCartShippingMethodManagementV1Api.md#giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost) | **POST** /V1/guest-giftregistry/{cartId}/estimate-shipping-methods | 


# **giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost**
> \Krak\MagentoApiClient\Model\QuoteDataShippingMethodInterface[] giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost($cartId, $giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBody)



Estimate shipping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\GiftRegistryGuestCartShippingMethodManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | The shopping cart ID.
$giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBody = new \Krak\MagentoApiClient\Model\GiftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBody(); // \Krak\MagentoApiClient\Model\GiftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBody | 

try {
    $result = $apiInstance->giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost($cartId, $giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftRegistryGuestCartShippingMethodManagementV1Api->giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**| The shopping cart ID. |
 **giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBody** | [**\Krak\MagentoApiClient\Model\GiftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBody**](../Model/GiftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

