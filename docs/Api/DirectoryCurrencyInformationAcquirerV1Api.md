# Krak\MagentoApiClient\DirectoryCurrencyInformationAcquirerV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**directoryCurrencyInformationAcquirerV1GetCurrencyInfoGet**](DirectoryCurrencyInformationAcquirerV1Api.md#directoryCurrencyInformationAcquirerV1GetCurrencyInfoGet) | **GET** /V1/directory/currency | 


# **directoryCurrencyInformationAcquirerV1GetCurrencyInfoGet**
> \Krak\MagentoApiClient\Model\DirectoryDataCurrencyInformationInterface directoryCurrencyInformationAcquirerV1GetCurrencyInfoGet()



Get currency information for the store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\DirectoryCurrencyInformationAcquirerV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->directoryCurrencyInformationAcquirerV1GetCurrencyInfoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryCurrencyInformationAcquirerV1Api->directoryCurrencyInformationAcquirerV1GetCurrencyInfoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Krak\MagentoApiClient\Model\DirectoryDataCurrencyInformationInterface**](../Model/DirectoryDataCurrencyInformationInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

