# Krak\MagentoApiClient\CustomerAccountManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerAccountManagementV1ActivateByIdPut**](CustomerAccountManagementV1Api.md#customerAccountManagementV1ActivateByIdPut) | **PUT** /V1/customers/me/activate | 
[**customerAccountManagementV1ActivatePut**](CustomerAccountManagementV1Api.md#customerAccountManagementV1ActivatePut) | **PUT** /V1/customers/{email}/activate | 
[**customerAccountManagementV1ChangePasswordByIdPut**](CustomerAccountManagementV1Api.md#customerAccountManagementV1ChangePasswordByIdPut) | **PUT** /V1/customers/me/password | 
[**customerAccountManagementV1CreateAccountPost**](CustomerAccountManagementV1Api.md#customerAccountManagementV1CreateAccountPost) | **POST** /V1/customers | 
[**customerAccountManagementV1GetConfirmationStatusGet**](CustomerAccountManagementV1Api.md#customerAccountManagementV1GetConfirmationStatusGet) | **GET** /V1/customers/{customerId}/confirm | 
[**customerAccountManagementV1GetDefaultBillingAddressGet**](CustomerAccountManagementV1Api.md#customerAccountManagementV1GetDefaultBillingAddressGet) | **GET** /V1/customers/me/billingAddress | 
[**customerAccountManagementV1GetDefaultBillingAddressGet_0**](CustomerAccountManagementV1Api.md#customerAccountManagementV1GetDefaultBillingAddressGet_0) | **GET** /V1/customers/{customerId}/billingAddress | 
[**customerAccountManagementV1GetDefaultShippingAddressGet**](CustomerAccountManagementV1Api.md#customerAccountManagementV1GetDefaultShippingAddressGet) | **GET** /V1/customers/me/shippingAddress | 
[**customerAccountManagementV1GetDefaultShippingAddressGet_0**](CustomerAccountManagementV1Api.md#customerAccountManagementV1GetDefaultShippingAddressGet_0) | **GET** /V1/customers/{customerId}/shippingAddress | 
[**customerAccountManagementV1InitiatePasswordResetPut**](CustomerAccountManagementV1Api.md#customerAccountManagementV1InitiatePasswordResetPut) | **PUT** /V1/customers/password | 
[**customerAccountManagementV1IsEmailAvailablePost**](CustomerAccountManagementV1Api.md#customerAccountManagementV1IsEmailAvailablePost) | **POST** /V1/customers/isEmailAvailable | 
[**customerAccountManagementV1IsReadonlyGet**](CustomerAccountManagementV1Api.md#customerAccountManagementV1IsReadonlyGet) | **GET** /V1/customers/{customerId}/permissions/readonly | 
[**customerAccountManagementV1ResendConfirmationPost**](CustomerAccountManagementV1Api.md#customerAccountManagementV1ResendConfirmationPost) | **POST** /V1/customers/confirm | 
[**customerAccountManagementV1ResetPasswordPost**](CustomerAccountManagementV1Api.md#customerAccountManagementV1ResetPasswordPost) | **POST** /V1/customers/resetPassword | 
[**customerAccountManagementV1ValidatePut**](CustomerAccountManagementV1Api.md#customerAccountManagementV1ValidatePut) | **PUT** /V1/customers/validate | 
[**customerAccountManagementV1ValidateResetPasswordLinkTokenGet**](CustomerAccountManagementV1Api.md#customerAccountManagementV1ValidateResetPasswordLinkTokenGet) | **GET** /V1/customers/{customerId}/password/resetLinkToken/{resetPasswordLinkToken} | 


# **customerAccountManagementV1ActivateByIdPut**
> \Krak\MagentoApiClient\Model\CustomerDataCustomerInterface customerAccountManagementV1ActivateByIdPut($customerAccountManagementV1ActivateByIdPutBody)



Activate a customer account using a key that was sent in a confirmation email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customerAccountManagementV1ActivateByIdPutBody = new \Krak\MagentoApiClient\Model\CustomerAccountManagementV1ActivateByIdPutBody(); // \Krak\MagentoApiClient\Model\CustomerAccountManagementV1ActivateByIdPutBody | 

try {
    $result = $apiInstance->customerAccountManagementV1ActivateByIdPut($customerAccountManagementV1ActivateByIdPutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1ActivateByIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerAccountManagementV1ActivateByIdPutBody** | [**\Krak\MagentoApiClient\Model\CustomerAccountManagementV1ActivateByIdPutBody**](../Model/CustomerAccountManagementV1ActivateByIdPutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CustomerDataCustomerInterface**](../Model/CustomerDataCustomerInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1ActivatePut**
> \Krak\MagentoApiClient\Model\CustomerDataCustomerInterface customerAccountManagementV1ActivatePut($email, $customerAccountManagementV1ActivatePutBody)



Activate a customer account using a key that was sent in a confirmation email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = "email_example"; // string | 
$customerAccountManagementV1ActivatePutBody = new \Krak\MagentoApiClient\Model\CustomerAccountManagementV1ActivatePutBody(); // \Krak\MagentoApiClient\Model\CustomerAccountManagementV1ActivatePutBody | 

try {
    $result = $apiInstance->customerAccountManagementV1ActivatePut($email, $customerAccountManagementV1ActivatePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1ActivatePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  |
 **customerAccountManagementV1ActivatePutBody** | [**\Krak\MagentoApiClient\Model\CustomerAccountManagementV1ActivatePutBody**](../Model/CustomerAccountManagementV1ActivatePutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CustomerDataCustomerInterface**](../Model/CustomerDataCustomerInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1ChangePasswordByIdPut**
> bool customerAccountManagementV1ChangePasswordByIdPut($customerAccountManagementV1ChangePasswordByIdPutBody)



Change customer password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customerAccountManagementV1ChangePasswordByIdPutBody = new \Krak\MagentoApiClient\Model\CustomerAccountManagementV1ChangePasswordByIdPutBody(); // \Krak\MagentoApiClient\Model\CustomerAccountManagementV1ChangePasswordByIdPutBody | 

try {
    $result = $apiInstance->customerAccountManagementV1ChangePasswordByIdPut($customerAccountManagementV1ChangePasswordByIdPutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1ChangePasswordByIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerAccountManagementV1ChangePasswordByIdPutBody** | [**\Krak\MagentoApiClient\Model\CustomerAccountManagementV1ChangePasswordByIdPutBody**](../Model/CustomerAccountManagementV1ChangePasswordByIdPutBody.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1CreateAccountPost**
> \Krak\MagentoApiClient\Model\CustomerDataCustomerInterface customerAccountManagementV1CreateAccountPost($customerAccountManagementV1CreateAccountPostBody)



Create customer account. Perform necessary business operations like sending email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customerAccountManagementV1CreateAccountPostBody = new \Krak\MagentoApiClient\Model\CustomerAccountManagementV1CreateAccountPostBody(); // \Krak\MagentoApiClient\Model\CustomerAccountManagementV1CreateAccountPostBody | 

try {
    $result = $apiInstance->customerAccountManagementV1CreateAccountPost($customerAccountManagementV1CreateAccountPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1CreateAccountPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerAccountManagementV1CreateAccountPostBody** | [**\Krak\MagentoApiClient\Model\CustomerAccountManagementV1CreateAccountPostBody**](../Model/CustomerAccountManagementV1CreateAccountPostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CustomerDataCustomerInterface**](../Model/CustomerDataCustomerInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1GetConfirmationStatusGet**
> string customerAccountManagementV1GetConfirmationStatusGet($customerId)



Gets the account confirmation status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customerId = 56; // int | 

try {
    $result = $apiInstance->customerAccountManagementV1GetConfirmationStatusGet($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1GetConfirmationStatusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1GetDefaultBillingAddressGet**
> \Krak\MagentoApiClient\Model\CustomerDataAddressInterface customerAccountManagementV1GetDefaultBillingAddressGet()



Retrieve default billing address for the given customerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->customerAccountManagementV1GetDefaultBillingAddressGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1GetDefaultBillingAddressGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Krak\MagentoApiClient\Model\CustomerDataAddressInterface**](../Model/CustomerDataAddressInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1GetDefaultBillingAddressGet_0**
> \Krak\MagentoApiClient\Model\CustomerDataAddressInterface customerAccountManagementV1GetDefaultBillingAddressGet_0($customerId)



Retrieve default billing address for the given customerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customerId = 56; // int | 

try {
    $result = $apiInstance->customerAccountManagementV1GetDefaultBillingAddressGet_0($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1GetDefaultBillingAddressGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\CustomerDataAddressInterface**](../Model/CustomerDataAddressInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1GetDefaultShippingAddressGet**
> \Krak\MagentoApiClient\Model\CustomerDataAddressInterface customerAccountManagementV1GetDefaultShippingAddressGet()



Retrieve default shipping address for the given customerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->customerAccountManagementV1GetDefaultShippingAddressGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1GetDefaultShippingAddressGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Krak\MagentoApiClient\Model\CustomerDataAddressInterface**](../Model/CustomerDataAddressInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1GetDefaultShippingAddressGet_0**
> \Krak\MagentoApiClient\Model\CustomerDataAddressInterface customerAccountManagementV1GetDefaultShippingAddressGet_0($customerId)



Retrieve default shipping address for the given customerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customerId = 56; // int | 

try {
    $result = $apiInstance->customerAccountManagementV1GetDefaultShippingAddressGet_0($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1GetDefaultShippingAddressGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**|  |

### Return type

[**\Krak\MagentoApiClient\Model\CustomerDataAddressInterface**](../Model/CustomerDataAddressInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1InitiatePasswordResetPut**
> bool customerAccountManagementV1InitiatePasswordResetPut($customerAccountManagementV1InitiatePasswordResetPutBody)



Send an email to the customer with a password reset link.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customerAccountManagementV1InitiatePasswordResetPutBody = new \Krak\MagentoApiClient\Model\CustomerAccountManagementV1InitiatePasswordResetPutBody(); // \Krak\MagentoApiClient\Model\CustomerAccountManagementV1InitiatePasswordResetPutBody | 

try {
    $result = $apiInstance->customerAccountManagementV1InitiatePasswordResetPut($customerAccountManagementV1InitiatePasswordResetPutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1InitiatePasswordResetPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerAccountManagementV1InitiatePasswordResetPutBody** | [**\Krak\MagentoApiClient\Model\CustomerAccountManagementV1InitiatePasswordResetPutBody**](../Model/CustomerAccountManagementV1InitiatePasswordResetPutBody.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1IsEmailAvailablePost**
> bool customerAccountManagementV1IsEmailAvailablePost($customerAccountManagementV1IsEmailAvailablePostBody)



Check if given email is associated with a customer account in given website.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customerAccountManagementV1IsEmailAvailablePostBody = new \Krak\MagentoApiClient\Model\CustomerAccountManagementV1IsEmailAvailablePostBody(); // \Krak\MagentoApiClient\Model\CustomerAccountManagementV1IsEmailAvailablePostBody | 

try {
    $result = $apiInstance->customerAccountManagementV1IsEmailAvailablePost($customerAccountManagementV1IsEmailAvailablePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1IsEmailAvailablePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerAccountManagementV1IsEmailAvailablePostBody** | [**\Krak\MagentoApiClient\Model\CustomerAccountManagementV1IsEmailAvailablePostBody**](../Model/CustomerAccountManagementV1IsEmailAvailablePostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1IsReadonlyGet**
> bool customerAccountManagementV1IsReadonlyGet($customerId)



Check if customer can be deleted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customerId = 56; // int | 

try {
    $result = $apiInstance->customerAccountManagementV1IsReadonlyGet($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1IsReadonlyGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1ResendConfirmationPost**
> bool customerAccountManagementV1ResendConfirmationPost($customerAccountManagementV1ResendConfirmationPostBody)



Resend confirmation email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customerAccountManagementV1ResendConfirmationPostBody = new \Krak\MagentoApiClient\Model\CustomerAccountManagementV1ResendConfirmationPostBody(); // \Krak\MagentoApiClient\Model\CustomerAccountManagementV1ResendConfirmationPostBody | 

try {
    $result = $apiInstance->customerAccountManagementV1ResendConfirmationPost($customerAccountManagementV1ResendConfirmationPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1ResendConfirmationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerAccountManagementV1ResendConfirmationPostBody** | [**\Krak\MagentoApiClient\Model\CustomerAccountManagementV1ResendConfirmationPostBody**](../Model/CustomerAccountManagementV1ResendConfirmationPostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1ResetPasswordPost**
> bool customerAccountManagementV1ResetPasswordPost($customerAccountManagementV1ResetPasswordPostBody)



Reset customer password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customerAccountManagementV1ResetPasswordPostBody = new \Krak\MagentoApiClient\Model\CustomerAccountManagementV1ResetPasswordPostBody(); // \Krak\MagentoApiClient\Model\CustomerAccountManagementV1ResetPasswordPostBody | 

try {
    $result = $apiInstance->customerAccountManagementV1ResetPasswordPost($customerAccountManagementV1ResetPasswordPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1ResetPasswordPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerAccountManagementV1ResetPasswordPostBody** | [**\Krak\MagentoApiClient\Model\CustomerAccountManagementV1ResetPasswordPostBody**](../Model/CustomerAccountManagementV1ResetPasswordPostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1ValidatePut**
> \Krak\MagentoApiClient\Model\CustomerDataValidationResultsInterface customerAccountManagementV1ValidatePut($customerAccountManagementV1ValidatePutBody)



Validate customer data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customerAccountManagementV1ValidatePutBody = new \Krak\MagentoApiClient\Model\CustomerAccountManagementV1ValidatePutBody(); // \Krak\MagentoApiClient\Model\CustomerAccountManagementV1ValidatePutBody | 

try {
    $result = $apiInstance->customerAccountManagementV1ValidatePut($customerAccountManagementV1ValidatePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1ValidatePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerAccountManagementV1ValidatePutBody** | [**\Krak\MagentoApiClient\Model\CustomerAccountManagementV1ValidatePutBody**](../Model/CustomerAccountManagementV1ValidatePutBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\CustomerDataValidationResultsInterface**](../Model/CustomerDataValidationResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1ValidateResetPasswordLinkTokenGet**
> bool customerAccountManagementV1ValidateResetPasswordLinkTokenGet($customerId, $resetPasswordLinkToken)



Check if password reset token is valid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\CustomerAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customerId = 56; // int | 
$resetPasswordLinkToken = "resetPasswordLinkToken_example"; // string | 

try {
    $result = $apiInstance->customerAccountManagementV1ValidateResetPasswordLinkTokenGet($customerId, $resetPasswordLinkToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1ValidateResetPasswordLinkTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**|  |
 **resetPasswordLinkToken** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

