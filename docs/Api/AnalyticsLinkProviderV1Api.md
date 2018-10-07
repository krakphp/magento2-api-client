# Krak\MagentoApiClient\AnalyticsLinkProviderV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**analyticsLinkProviderV1GetGet**](AnalyticsLinkProviderV1Api.md#analyticsLinkProviderV1GetGet) | **GET** /V1/analytics/link | 


# **analyticsLinkProviderV1GetGet**
> \Krak\MagentoApiClient\Model\AnalyticsDataLinkInterface analyticsLinkProviderV1GetGet()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\AnalyticsLinkProviderV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->analyticsLinkProviderV1GetGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsLinkProviderV1Api->analyticsLinkProviderV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Krak\MagentoApiClient\Model\AnalyticsDataLinkInterface**](../Model/AnalyticsDataLinkInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

