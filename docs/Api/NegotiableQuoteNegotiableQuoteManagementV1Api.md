# Krak\MagentoApiClient\NegotiableQuoteNegotiableQuoteManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuoteNegotiableQuoteManagementV1AdminSendPost**](NegotiableQuoteNegotiableQuoteManagementV1Api.md#negotiableQuoteNegotiableQuoteManagementV1AdminSendPost) | **POST** /V1/negotiableQuote/submitToCustomer | 
[**negotiableQuoteNegotiableQuoteManagementV1CreatePost**](NegotiableQuoteNegotiableQuoteManagementV1Api.md#negotiableQuoteNegotiableQuoteManagementV1CreatePost) | **POST** /V1/negotiableQuote/request | 
[**negotiableQuoteNegotiableQuoteManagementV1DeclinePost**](NegotiableQuoteNegotiableQuoteManagementV1Api.md#negotiableQuoteNegotiableQuoteManagementV1DeclinePost) | **POST** /V1/negotiableQuote/decline | 


# **negotiableQuoteNegotiableQuoteManagementV1AdminSendPost**
> bool negotiableQuoteNegotiableQuoteManagementV1AdminSendPost($negotiableQuoteNegotiableQuoteManagementV1AdminSendPostBody)



Submit the B2B quote to the customer. The quote status for the customer will be changed to 'Updated', and the customer can work with the quote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\NegotiableQuoteNegotiableQuoteManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$negotiableQuoteNegotiableQuoteManagementV1AdminSendPostBody = new \Krak\MagentoApiClient\Model\NegotiableQuoteNegotiableQuoteManagementV1AdminSendPostBody(); // \Krak\MagentoApiClient\Model\NegotiableQuoteNegotiableQuoteManagementV1AdminSendPostBody | 

try {
    $result = $apiInstance->negotiableQuoteNegotiableQuoteManagementV1AdminSendPost($negotiableQuoteNegotiableQuoteManagementV1AdminSendPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteNegotiableQuoteManagementV1Api->negotiableQuoteNegotiableQuoteManagementV1AdminSendPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **negotiableQuoteNegotiableQuoteManagementV1AdminSendPostBody** | [**\Krak\MagentoApiClient\Model\NegotiableQuoteNegotiableQuoteManagementV1AdminSendPostBody**](../Model/NegotiableQuoteNegotiableQuoteManagementV1AdminSendPostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **negotiableQuoteNegotiableQuoteManagementV1CreatePost**
> bool negotiableQuoteNegotiableQuoteManagementV1CreatePost($negotiableQuoteNegotiableQuoteManagementV1CreatePostBody)



Create a B2B quote based on a regular Magento quote. If the B2B quote requires a shipping address (for negotiation or tax calculations), add it to the regular quote before you create a B2B quote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\NegotiableQuoteNegotiableQuoteManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$negotiableQuoteNegotiableQuoteManagementV1CreatePostBody = new \Krak\MagentoApiClient\Model\NegotiableQuoteNegotiableQuoteManagementV1CreatePostBody(); // \Krak\MagentoApiClient\Model\NegotiableQuoteNegotiableQuoteManagementV1CreatePostBody | 

try {
    $result = $apiInstance->negotiableQuoteNegotiableQuoteManagementV1CreatePost($negotiableQuoteNegotiableQuoteManagementV1CreatePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteNegotiableQuoteManagementV1Api->negotiableQuoteNegotiableQuoteManagementV1CreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **negotiableQuoteNegotiableQuoteManagementV1CreatePostBody** | [**\Krak\MagentoApiClient\Model\NegotiableQuoteNegotiableQuoteManagementV1CreatePostBody**](../Model/NegotiableQuoteNegotiableQuoteManagementV1CreatePostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **negotiableQuoteNegotiableQuoteManagementV1DeclinePost**
> bool negotiableQuoteNegotiableQuoteManagementV1DeclinePost($negotiableQuoteNegotiableQuoteManagementV1DeclinePostBody)



Decline the B2B quote. All custom pricing will be removed from this quote. The buyer will be able to place an order using their standard catalog prices and discounts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\NegotiableQuoteNegotiableQuoteManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$negotiableQuoteNegotiableQuoteManagementV1DeclinePostBody = new \Krak\MagentoApiClient\Model\NegotiableQuoteNegotiableQuoteManagementV1DeclinePostBody(); // \Krak\MagentoApiClient\Model\NegotiableQuoteNegotiableQuoteManagementV1DeclinePostBody | 

try {
    $result = $apiInstance->negotiableQuoteNegotiableQuoteManagementV1DeclinePost($negotiableQuoteNegotiableQuoteManagementV1DeclinePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteNegotiableQuoteManagementV1Api->negotiableQuoteNegotiableQuoteManagementV1DeclinePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **negotiableQuoteNegotiableQuoteManagementV1DeclinePostBody** | [**\Krak\MagentoApiClient\Model\NegotiableQuoteNegotiableQuoteManagementV1DeclinePostBody**](../Model/NegotiableQuoteNegotiableQuoteManagementV1DeclinePostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

