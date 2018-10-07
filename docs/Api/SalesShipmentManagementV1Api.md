# Krak\MagentoApiClient\SalesShipmentManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesShipmentManagementV1GetCommentsListGet**](SalesShipmentManagementV1Api.md#salesShipmentManagementV1GetCommentsListGet) | **GET** /V1/shipment/{id}/comments | 
[**salesShipmentManagementV1GetLabelGet**](SalesShipmentManagementV1Api.md#salesShipmentManagementV1GetLabelGet) | **GET** /V1/shipment/{id}/label | 
[**salesShipmentManagementV1NotifyPost**](SalesShipmentManagementV1Api.md#salesShipmentManagementV1NotifyPost) | **POST** /V1/shipment/{id}/emails | 


# **salesShipmentManagementV1GetCommentsListGet**
> \Krak\MagentoApiClient\Model\SalesDataShipmentCommentSearchResultInterface salesShipmentManagementV1GetCommentsListGet($id)



Lists comments for a specified shipment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesShipmentManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The shipment ID.

try {
    $result = $apiInstance->salesShipmentManagementV1GetCommentsListGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesShipmentManagementV1Api->salesShipmentManagementV1GetCommentsListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The shipment ID. |

### Return type

[**\Krak\MagentoApiClient\Model\SalesDataShipmentCommentSearchResultInterface**](../Model/SalesDataShipmentCommentSearchResultInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesShipmentManagementV1GetLabelGet**
> string salesShipmentManagementV1GetLabelGet($id)



Gets a specified shipment label.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesShipmentManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The shipment label ID.

try {
    $result = $apiInstance->salesShipmentManagementV1GetLabelGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesShipmentManagementV1Api->salesShipmentManagementV1GetLabelGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The shipment label ID. |

### Return type

**string**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesShipmentManagementV1NotifyPost**
> bool salesShipmentManagementV1NotifyPost($id)



Emails user a specified shipment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesShipmentManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The shipment ID.

try {
    $result = $apiInstance->salesShipmentManagementV1NotifyPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesShipmentManagementV1Api->salesShipmentManagementV1NotifyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The shipment ID. |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

