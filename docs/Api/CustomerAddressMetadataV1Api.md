# Krak\MagentoApiClient\CustomerAddressMetadataV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerAddressMetadataV1GetAllAttributesMetadataGet**](CustomerAddressMetadataV1Api.md#customerAddressMetadataV1GetAllAttributesMetadataGet) | **GET** /V1/attributeMetadata/customerAddress | 
[**customerAddressMetadataV1GetAttributeMetadataGet**](CustomerAddressMetadataV1Api.md#customerAddressMetadataV1GetAttributeMetadataGet) | **GET** /V1/attributeMetadata/customerAddress/attribute/{attributeCode} | 
[**customerAddressMetadataV1GetAttributesGet**](CustomerAddressMetadataV1Api.md#customerAddressMetadataV1GetAttributesGet) | **GET** /V1/attributeMetadata/customerAddress/form/{formCode} | 
[**customerAddressMetadataV1GetCustomAttributesMetadataGet**](CustomerAddressMetadataV1Api.md#customerAddressMetadataV1GetCustomAttributesMetadataGet) | **GET** /V1/attributeMetadata/customerAddress/custom | 


# **customerAddressMetadataV1GetAllAttributesMetadataGet**
> \Krak\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[] customerAddressMetadataV1GetAllAttributesMetadataGet()



Get all attribute metadata.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerAddressMetadataV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->customerAddressMetadataV1GetAllAttributesMetadataGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressMetadataV1Api->customerAddressMetadataV1GetAllAttributesMetadataGet: ', $e->getMessage(), PHP_EOL;
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

# **customerAddressMetadataV1GetAttributeMetadataGet**
> \Krak\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface customerAddressMetadataV1GetAttributeMetadataGet($attributeCode)



Retrieve attribute metadata.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerAddressMetadataV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeCode = "attributeCode_example"; // string | 

try {
    $result = $apiInstance->customerAddressMetadataV1GetAttributeMetadataGet($attributeCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressMetadataV1Api->customerAddressMetadataV1GetAttributeMetadataGet: ', $e->getMessage(), PHP_EOL;
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

# **customerAddressMetadataV1GetAttributesGet**
> \Krak\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[] customerAddressMetadataV1GetAttributesGet($formCode)



Retrieve all attributes filtered by form code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerAddressMetadataV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formCode = "formCode_example"; // string | 

try {
    $result = $apiInstance->customerAddressMetadataV1GetAttributesGet($formCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressMetadataV1Api->customerAddressMetadataV1GetAttributesGet: ', $e->getMessage(), PHP_EOL;
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

# **customerAddressMetadataV1GetCustomAttributesMetadataGet**
> \Krak\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[] customerAddressMetadataV1GetCustomAttributesMetadataGet($dataInterfaceName)



Get custom attributes metadata for the given data interface.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerAddressMetadataV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dataInterfaceName = "dataInterfaceName_example"; // string | 

try {
    $result = $apiInstance->customerAddressMetadataV1GetCustomAttributesMetadataGet($dataInterfaceName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressMetadataV1Api->customerAddressMetadataV1GetCustomAttributesMetadataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dataInterfaceName** | **string**|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[]**](../Model/CustomerDataAttributeMetadataInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

