# Krak\MagentoApiClient\CheckoutGuestTotalsInformationManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkoutGuestTotalsInformationManagementV1CalculatePost**](CheckoutGuestTotalsInformationManagementV1Api.md#checkoutGuestTotalsInformationManagementV1CalculatePost) | **POST** /V1/guest-carts/{cartId}/totals-information | 


# **checkoutGuestTotalsInformationManagementV1CalculatePost**
> \Krak\MagentoApiClient\Model\QuoteDataTotalsInterface checkoutGuestTotalsInformationManagementV1CalculatePost($cartId, $checkoutGuestTotalsInformationManagementV1CalculatePostBody)



Calculate quote totals based on address and shipping method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CheckoutGuestTotalsInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cartId = "cartId_example"; // string | 
$checkoutGuestTotalsInformationManagementV1CalculatePostBody = new \Krak\MagentoApiClient\Model\CheckoutGuestTotalsInformationManagementV1CalculatePostBody(); // \Krak\MagentoApiClient\Model\CheckoutGuestTotalsInformationManagementV1CalculatePostBody | 

try {
    $result = $apiInstance->checkoutGuestTotalsInformationManagementV1CalculatePost($cartId, $checkoutGuestTotalsInformationManagementV1CalculatePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutGuestTotalsInformationManagementV1Api->checkoutGuestTotalsInformationManagementV1CalculatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **checkoutGuestTotalsInformationManagementV1CalculatePostBody** | [**\Krak\MagentoApiClient\Model\CheckoutGuestTotalsInformationManagementV1CalculatePostBody**](../Model/CheckoutGuestTotalsInformationManagementV1CalculatePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

