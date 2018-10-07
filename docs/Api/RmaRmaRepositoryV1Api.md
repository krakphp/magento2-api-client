# Krak\MagentoApiClient\RmaRmaRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rmaRmaRepositoryV1DeleteDelete**](RmaRmaRepositoryV1Api.md#rmaRmaRepositoryV1DeleteDelete) | **DELETE** /V1/returns/{id} | 
[**rmaRmaRepositoryV1GetGet**](RmaRmaRepositoryV1Api.md#rmaRmaRepositoryV1GetGet) | **GET** /V1/returns/{id} | 


# **rmaRmaRepositoryV1DeleteDelete**
> bool rmaRmaRepositoryV1DeleteDelete($id, $rmaRmaRepositoryV1DeleteDeleteBody)



Delete RMA

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\RmaRmaRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$rmaRmaRepositoryV1DeleteDeleteBody = new \Krak\MagentoApiClient\Model\RmaRmaRepositoryV1DeleteDeleteBody(); // \Krak\MagentoApiClient\Model\RmaRmaRepositoryV1DeleteDeleteBody | 

try {
    $result = $apiInstance->rmaRmaRepositoryV1DeleteDelete($id, $rmaRmaRepositoryV1DeleteDeleteBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaRmaRepositoryV1Api->rmaRmaRepositoryV1DeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **rmaRmaRepositoryV1DeleteDeleteBody** | [**\Krak\MagentoApiClient\Model\RmaRmaRepositoryV1DeleteDeleteBody**](../Model/RmaRmaRepositoryV1DeleteDeleteBody.md)|  | [optional]

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rmaRmaRepositoryV1GetGet**
> \Krak\MagentoApiClient\Model\RmaDataRmaInterface rmaRmaRepositoryV1GetGet($id)



Return data object for specified RMA id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\RmaRmaRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->rmaRmaRepositoryV1GetGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaRmaRepositoryV1Api->rmaRmaRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\RmaDataRmaInterface**](../Model/RmaDataRmaInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

