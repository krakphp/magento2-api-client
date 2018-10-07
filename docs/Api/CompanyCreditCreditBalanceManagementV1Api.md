# Krak\MagentoApiClient\CompanyCreditCreditBalanceManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyCreditCreditBalanceManagementV1DecreasePost**](CompanyCreditCreditBalanceManagementV1Api.md#companyCreditCreditBalanceManagementV1DecreasePost) | **POST** /V1/companyCredits/{creditId}/decreaseBalance | 
[**companyCreditCreditBalanceManagementV1IncreasePost**](CompanyCreditCreditBalanceManagementV1Api.md#companyCreditCreditBalanceManagementV1IncreasePost) | **POST** /V1/companyCredits/{creditId}/increaseBalance | 


# **companyCreditCreditBalanceManagementV1DecreasePost**
> bool companyCreditCreditBalanceManagementV1DecreasePost($creditId, $companyCreditCreditBalanceManagementV1DecreasePostBody)



Decreases the company credit with an Update, Reimburse, or Purchase transaction. This transaction increases company's outstanding balance and decreases company's available credit.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CompanyCreditCreditBalanceManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$creditId = 56; // int | 
$companyCreditCreditBalanceManagementV1DecreasePostBody = new \Krak\MagentoApiClient\Model\CompanyCreditCreditBalanceManagementV1DecreasePostBody(); // \Krak\MagentoApiClient\Model\CompanyCreditCreditBalanceManagementV1DecreasePostBody | 

try {
    $result = $apiInstance->companyCreditCreditBalanceManagementV1DecreasePost($creditId, $companyCreditCreditBalanceManagementV1DecreasePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyCreditCreditBalanceManagementV1Api->companyCreditCreditBalanceManagementV1DecreasePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creditId** | **int**|  |
 **companyCreditCreditBalanceManagementV1DecreasePostBody** | [**\Krak\MagentoApiClient\Model\CompanyCreditCreditBalanceManagementV1DecreasePostBody**](../Model/CompanyCreditCreditBalanceManagementV1DecreasePostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCreditCreditBalanceManagementV1IncreasePost**
> bool companyCreditCreditBalanceManagementV1IncreasePost($creditId, $companyCreditCreditBalanceManagementV1IncreasePostBody)



Increases the company credit with an Allocate, Update, Refund, Revert, or Reimburse transaction. This transaction decreases company's outstanding balance and increases company's available credit.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CompanyCreditCreditBalanceManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$creditId = 56; // int | 
$companyCreditCreditBalanceManagementV1IncreasePostBody = new \Krak\MagentoApiClient\Model\CompanyCreditCreditBalanceManagementV1IncreasePostBody(); // \Krak\MagentoApiClient\Model\CompanyCreditCreditBalanceManagementV1IncreasePostBody | 

try {
    $result = $apiInstance->companyCreditCreditBalanceManagementV1IncreasePost($creditId, $companyCreditCreditBalanceManagementV1IncreasePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyCreditCreditBalanceManagementV1Api->companyCreditCreditBalanceManagementV1IncreasePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creditId** | **int**|  |
 **companyCreditCreditBalanceManagementV1IncreasePostBody** | [**\Krak\MagentoApiClient\Model\CompanyCreditCreditBalanceManagementV1IncreasePostBody**](../Model/CompanyCreditCreditBalanceManagementV1IncreasePostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

