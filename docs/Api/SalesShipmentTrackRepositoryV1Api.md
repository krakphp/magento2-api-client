# Krak\MagentoApiClient\SalesShipmentTrackRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesShipmentTrackRepositoryV1DeleteByIdDelete**](SalesShipmentTrackRepositoryV1Api.md#salesShipmentTrackRepositoryV1DeleteByIdDelete) | **DELETE** /V1/shipment/track/{id} | 
[**salesShipmentTrackRepositoryV1SavePost**](SalesShipmentTrackRepositoryV1Api.md#salesShipmentTrackRepositoryV1SavePost) | **POST** /V1/shipment/track | 


# **salesShipmentTrackRepositoryV1DeleteByIdDelete**
> bool salesShipmentTrackRepositoryV1DeleteByIdDelete($id)



Deletes a specified shipment track by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesShipmentTrackRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The shipment track ID.

try {
    $result = $apiInstance->salesShipmentTrackRepositoryV1DeleteByIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesShipmentTrackRepositoryV1Api->salesShipmentTrackRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The shipment track ID. |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesShipmentTrackRepositoryV1SavePost**
> \Krak\MagentoApiClient\Model\SalesDataShipmentTrackInterface salesShipmentTrackRepositoryV1SavePost($salesShipmentTrackRepositoryV1SavePostBody)



Performs persist operations for a specified shipment track.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesShipmentTrackRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$salesShipmentTrackRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\SalesShipmentTrackRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\SalesShipmentTrackRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->salesShipmentTrackRepositoryV1SavePost($salesShipmentTrackRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesShipmentTrackRepositoryV1Api->salesShipmentTrackRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **salesShipmentTrackRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\SalesShipmentTrackRepositoryV1SavePostBody**](../Model/SalesShipmentTrackRepositoryV1SavePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\SalesDataShipmentTrackInterface**](../Model/SalesDataShipmentTrackInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

