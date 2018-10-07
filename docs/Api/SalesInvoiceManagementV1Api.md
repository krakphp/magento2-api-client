# Krak\MagentoApiClient\SalesInvoiceManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesInvoiceManagementV1GetCommentsListGet**](SalesInvoiceManagementV1Api.md#salesInvoiceManagementV1GetCommentsListGet) | **GET** /V1/invoices/{id}/comments | 
[**salesInvoiceManagementV1NotifyPost**](SalesInvoiceManagementV1Api.md#salesInvoiceManagementV1NotifyPost) | **POST** /V1/invoices/{id}/emails | 
[**salesInvoiceManagementV1SetCapturePost**](SalesInvoiceManagementV1Api.md#salesInvoiceManagementV1SetCapturePost) | **POST** /V1/invoices/{id}/capture | 
[**salesInvoiceManagementV1SetVoidPost**](SalesInvoiceManagementV1Api.md#salesInvoiceManagementV1SetVoidPost) | **POST** /V1/invoices/{id}/void | 


# **salesInvoiceManagementV1GetCommentsListGet**
> \Krak\MagentoApiClient\Model\SalesDataInvoiceCommentSearchResultInterface salesInvoiceManagementV1GetCommentsListGet($id)



Lists comments for a specified invoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesInvoiceManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The invoice ID.

try {
    $result = $apiInstance->salesInvoiceManagementV1GetCommentsListGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceManagementV1Api->salesInvoiceManagementV1GetCommentsListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The invoice ID. |

### Return type

[**\Krak\MagentoApiClient\Model\SalesDataInvoiceCommentSearchResultInterface**](../Model/SalesDataInvoiceCommentSearchResultInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesInvoiceManagementV1NotifyPost**
> bool salesInvoiceManagementV1NotifyPost($id)



Emails a user a specified invoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesInvoiceManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The invoice ID.

try {
    $result = $apiInstance->salesInvoiceManagementV1NotifyPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceManagementV1Api->salesInvoiceManagementV1NotifyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The invoice ID. |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesInvoiceManagementV1SetCapturePost**
> string salesInvoiceManagementV1SetCapturePost($id)



Sets invoice capture.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesInvoiceManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->salesInvoiceManagementV1SetCapturePost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceManagementV1Api->salesInvoiceManagementV1SetCapturePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**string**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesInvoiceManagementV1SetVoidPost**
> bool salesInvoiceManagementV1SetVoidPost($id)



Voids a specified invoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\SalesInvoiceManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The invoice ID.

try {
    $result = $apiInstance->salesInvoiceManagementV1SetVoidPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceManagementV1Api->salesInvoiceManagementV1SetVoidPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The invoice ID. |

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

