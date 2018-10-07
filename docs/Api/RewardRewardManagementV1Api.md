# Krak\MagentoApiClient\RewardRewardManagementV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rewardRewardManagementV1SetPost**](RewardRewardManagementV1Api.md#rewardRewardManagementV1SetPost) | **POST** /V1/reward/mine/use-reward | 


# **rewardRewardManagementV1SetPost**
> bool rewardRewardManagementV1SetPost()



Set reward points to quote

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\RewardRewardManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->rewardRewardManagementV1SetPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardRewardManagementV1Api->rewardRewardManagementV1SetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

