# Krak\MagentoApiClient\CatalogProductCustomOptionTypeListV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductCustomOptionTypeListV1GetItemsGet**](CatalogProductCustomOptionTypeListV1Api.md#catalogProductCustomOptionTypeListV1GetItemsGet) | **GET** /V1/products/options/types | 


# **catalogProductCustomOptionTypeListV1GetItemsGet**
> \Krak\MagentoApiClient\Model\CatalogDataProductCustomOptionTypeInterface[] catalogProductCustomOptionTypeListV1GetItemsGet()



Get custom option types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CatalogProductCustomOptionTypeListV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->catalogProductCustomOptionTypeListV1GetItemsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductCustomOptionTypeListV1Api->catalogProductCustomOptionTypeListV1GetItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Krak\MagentoApiClient\Model\CatalogDataProductCustomOptionTypeInterface[]**](../Model/CatalogDataProductCustomOptionTypeInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

