# Krak\MagentoApiClient\BundleProductOptionTypeListV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bundleProductOptionTypeListV1GetItemsGet**](BundleProductOptionTypeListV1Api.md#bundleProductOptionTypeListV1GetItemsGet) | **GET** /V1/bundle-products/options/types | 


# **bundleProductOptionTypeListV1GetItemsGet**
> \Krak\MagentoApiClient\Model\BundleDataOptionTypeInterface[] bundleProductOptionTypeListV1GetItemsGet()



Get all types for options for bundle products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\BundleProductOptionTypeListV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->bundleProductOptionTypeListV1GetItemsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleProductOptionTypeListV1Api->bundleProductOptionTypeListV1GetItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Krak\MagentoApiClient\Model\BundleDataOptionTypeInterface[]**](../Model/BundleDataOptionTypeInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

