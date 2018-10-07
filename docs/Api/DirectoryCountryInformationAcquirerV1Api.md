# Krak\MagentoApiClient\DirectoryCountryInformationAcquirerV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**directoryCountryInformationAcquirerV1GetCountriesInfoGet**](DirectoryCountryInformationAcquirerV1Api.md#directoryCountryInformationAcquirerV1GetCountriesInfoGet) | **GET** /V1/directory/countries | 
[**directoryCountryInformationAcquirerV1GetCountryInfoGet**](DirectoryCountryInformationAcquirerV1Api.md#directoryCountryInformationAcquirerV1GetCountryInfoGet) | **GET** /V1/directory/countries/{countryId} | 


# **directoryCountryInformationAcquirerV1GetCountriesInfoGet**
> \Krak\MagentoApiClient\Model\DirectoryDataCountryInformationInterface[] directoryCountryInformationAcquirerV1GetCountriesInfoGet()



Get all countries and regions information for the store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\DirectoryCountryInformationAcquirerV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->directoryCountryInformationAcquirerV1GetCountriesInfoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryCountryInformationAcquirerV1Api->directoryCountryInformationAcquirerV1GetCountriesInfoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Krak\MagentoApiClient\Model\DirectoryDataCountryInformationInterface[]**](../Model/DirectoryDataCountryInformationInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **directoryCountryInformationAcquirerV1GetCountryInfoGet**
> \Krak\MagentoApiClient\Model\DirectoryDataCountryInformationInterface directoryCountryInformationAcquirerV1GetCountryInfoGet($countryId)



Get country and region information for the store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\DirectoryCountryInformationAcquirerV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$countryId = "countryId_example"; // string | 

try {
    $result = $apiInstance->directoryCountryInformationAcquirerV1GetCountryInfoGet($countryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryCountryInformationAcquirerV1Api->directoryCountryInformationAcquirerV1GetCountryInfoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **countryId** | **string**|  |

### Return type

[**\Krak\MagentoApiClient\Model\DirectoryDataCountryInformationInterface**](../Model/DirectoryDataCountryInformationInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

