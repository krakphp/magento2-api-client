# Krak\MagentoApiClient\IntegrationAdminTokenServiceV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**integrationAdminTokenServiceV1CreateAdminAccessTokenPost**](IntegrationAdminTokenServiceV1Api.md#integrationAdminTokenServiceV1CreateAdminAccessTokenPost) | **POST** /V1/integration/admin/token | 


# **integrationAdminTokenServiceV1CreateAdminAccessTokenPost**
> string integrationAdminTokenServiceV1CreateAdminAccessTokenPost($integrationAdminTokenServiceV1CreateAdminAccessTokenPostBody)



Create access token for admin given the admin credentials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\IntegrationAdminTokenServiceV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationAdminTokenServiceV1CreateAdminAccessTokenPostBody = new \Krak\MagentoApiClient\Model\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostBody(); // \Krak\MagentoApiClient\Model\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostBody | 

try {
    $result = $apiInstance->integrationAdminTokenServiceV1CreateAdminAccessTokenPost($integrationAdminTokenServiceV1CreateAdminAccessTokenPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationAdminTokenServiceV1Api->integrationAdminTokenServiceV1CreateAdminAccessTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationAdminTokenServiceV1CreateAdminAccessTokenPostBody** | [**\Krak\MagentoApiClient\Model\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostBody**](../Model/IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostBody.md)|  | [optional]

### Return type

**string**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

