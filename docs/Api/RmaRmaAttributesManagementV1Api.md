# Krak\MagentoApiClient\RmaRmaAttributesManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rmaRmaAttributesManagementV1GetAllAttributesMetadataGet**](RmaRmaAttributesManagementV1Api.md#rmaRmaAttributesManagementV1GetAllAttributesMetadataGet) | **GET** /V1/returnsAttributeMetadata | 
[**rmaRmaAttributesManagementV1GetAttributeMetadataGet**](RmaRmaAttributesManagementV1Api.md#rmaRmaAttributesManagementV1GetAttributeMetadataGet) | **GET** /V1/returnsAttributeMetadata/{attributeCode} | 
[**rmaRmaAttributesManagementV1GetAttributesGet**](RmaRmaAttributesManagementV1Api.md#rmaRmaAttributesManagementV1GetAttributesGet) | **GET** /V1/returnsAttributeMetadata/form/{formCode} | 
[**rmaRmaAttributesManagementV1GetCustomAttributesMetadataGet**](RmaRmaAttributesManagementV1Api.md#rmaRmaAttributesManagementV1GetCustomAttributesMetadataGet) | **GET** /V1/returnsAttributeMetadata/custom | 


# **rmaRmaAttributesManagementV1GetAllAttributesMetadataGet**
> \Krak\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[] rmaRmaAttributesManagementV1GetAllAttributesMetadataGet()



Get all attribute metadata.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\RmaRmaAttributesManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->rmaRmaAttributesManagementV1GetAllAttributesMetadataGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaRmaAttributesManagementV1Api->rmaRmaAttributesManagementV1GetAllAttributesMetadataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Krak\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[]**](../Model/CustomerDataAttributeMetadataInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rmaRmaAttributesManagementV1GetAttributeMetadataGet**
> \Krak\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface rmaRmaAttributesManagementV1GetAttributeMetadataGet($attributeCode)



Retrieve attribute metadata.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\RmaRmaAttributesManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeCode = "attributeCode_example"; // string | 

try {
    $result = $apiInstance->rmaRmaAttributesManagementV1GetAttributeMetadataGet($attributeCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaRmaAttributesManagementV1Api->rmaRmaAttributesManagementV1GetAttributeMetadataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeCode** | **string**|  |

### Return type

[**\Krak\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface**](../Model/CustomerDataAttributeMetadataInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rmaRmaAttributesManagementV1GetAttributesGet**
> \Krak\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[] rmaRmaAttributesManagementV1GetAttributesGet($formCode)



Retrieve all attributes filtered by form code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\RmaRmaAttributesManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formCode = "formCode_example"; // string | 

try {
    $result = $apiInstance->rmaRmaAttributesManagementV1GetAttributesGet($formCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaRmaAttributesManagementV1Api->rmaRmaAttributesManagementV1GetAttributesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formCode** | **string**|  |

### Return type

[**\Krak\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[]**](../Model/CustomerDataAttributeMetadataInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rmaRmaAttributesManagementV1GetCustomAttributesMetadataGet**
> \Krak\MagentoApiClient\Model\FrameworkMetadataObjectInterface[] rmaRmaAttributesManagementV1GetCustomAttributesMetadataGet($dataObjectClassName)



Get custom attribute metadata for the given Data object's attribute set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\RmaRmaAttributesManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dataObjectClassName = "dataObjectClassName_example"; // string | Data object class name

try {
    $result = $apiInstance->rmaRmaAttributesManagementV1GetCustomAttributesMetadataGet($dataObjectClassName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaRmaAttributesManagementV1Api->rmaRmaAttributesManagementV1GetCustomAttributesMetadataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dataObjectClassName** | **string**| Data object class name | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\FrameworkMetadataObjectInterface[]**](../Model/FrameworkMetadataObjectInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

