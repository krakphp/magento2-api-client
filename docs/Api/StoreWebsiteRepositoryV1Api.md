# Krak\MagentoApiClient\StoreWebsiteRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**storeWebsiteRepositoryV1GetListGet**](StoreWebsiteRepositoryV1Api.md#storeWebsiteRepositoryV1GetListGet) | **GET** /V1/store/websites | 


# **storeWebsiteRepositoryV1GetListGet**
> \Krak\MagentoApiClient\Model\StoreDataWebsiteInterface[] storeWebsiteRepositoryV1GetListGet()



Retrieve list of all websites

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\StoreWebsiteRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->storeWebsiteRepositoryV1GetListGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreWebsiteRepositoryV1Api->storeWebsiteRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Krak\MagentoApiClient\Model\StoreDataWebsiteInterface[]**](../Model/StoreDataWebsiteInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

