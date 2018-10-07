# Krak\MagentoApiClient\CompanyCreditCreditLimitManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyCreditCreditLimitManagementV1GetCreditByCompanyIdGet**](CompanyCreditCreditLimitManagementV1Api.md#companyCreditCreditLimitManagementV1GetCreditByCompanyIdGet) | **GET** /V1/companyCredits/company/{companyId} | 


# **companyCreditCreditLimitManagementV1GetCreditByCompanyIdGet**
> \Krak\MagentoApiClient\Model\CompanyCreditDataCreditLimitInterface companyCreditCreditLimitManagementV1GetCreditByCompanyIdGet($companyId)



Returns data on the credit limit for a specified company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CompanyCreditCreditLimitManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$companyId = 56; // int | 

try {
    $result = $apiInstance->companyCreditCreditLimitManagementV1GetCreditByCompanyIdGet($companyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyCreditCreditLimitManagementV1Api->companyCreditCreditLimitManagementV1GetCreditByCompanyIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companyId** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\CompanyCreditDataCreditLimitInterface**](../Model/CompanyCreditDataCreditLimitInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

