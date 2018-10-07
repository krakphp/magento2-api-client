# Krak\MagentoApiClient\CompanyAclV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyAclV1AssignRolesPut**](CompanyAclV1Api.md#companyAclV1AssignRolesPut) | **PUT** /V1/company/assignRoles | 
[**companyAclV1GetUsersByRoleIdGet**](CompanyAclV1Api.md#companyAclV1GetUsersByRoleIdGet) | **GET** /V1/company/role/{roleId}/users | 


# **companyAclV1AssignRolesPut**
> bool companyAclV1AssignRolesPut($companyAclV1AssignRolesPutBody)



Change a role for a company user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CompanyAclV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$companyAclV1AssignRolesPutBody = new \Krak\MagentoApiClient\Model\CompanyAclV1AssignRolesPutBody(); // \Krak\MagentoApiClient\Model\CompanyAclV1AssignRolesPutBody | 

try {
    $result = $apiInstance->companyAclV1AssignRolesPut($companyAclV1AssignRolesPutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyAclV1Api->companyAclV1AssignRolesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companyAclV1AssignRolesPutBody** | [**\Krak\MagentoApiClient\Model\CompanyAclV1AssignRolesPutBody**](../Model/CompanyAclV1AssignRolesPutBody.md)|  | [optional]

### Return type

**bool**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyAclV1GetUsersByRoleIdGet**
> \Krak\MagentoApiClient\Model\CustomerDataCustomerInterface[] companyAclV1GetUsersByRoleIdGet($roleId)



View the list of company users assigned to a specified role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Krak\MagentoApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Krak\MagentoApiClient\Api\CompanyAclV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$roleId = 56; // int | 

try {
    $result = $apiInstance->companyAclV1GetUsersByRoleIdGet($roleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyAclV1Api->companyAclV1GetUsersByRoleIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **roleId** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\CustomerDataCustomerInterface[]**](../Model/CustomerDataCustomerInterface.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

