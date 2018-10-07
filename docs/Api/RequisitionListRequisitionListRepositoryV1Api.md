# Krak\MagentoApiClient\RequisitionListRequisitionListRepositoryV1Api

All URIs are relative to *http://ce22.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**requisitionListRequisitionListRepositoryV1SavePost**](RequisitionListRequisitionListRepositoryV1Api.md#requisitionListRequisitionListRepositoryV1SavePost) | **POST** /V1/requisition_lists | 


# **requisitionListRequisitionListRepositoryV1SavePost**
> \Krak\MagentoApiClient\Model\RequisitionListDataRequisitionListInterface requisitionListRequisitionListRepositoryV1SavePost($requisitionListRequisitionListRepositoryV1SavePostBody)



Save Requisition List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Krak\MagentoApiClient\Api\RequisitionListRequisitionListRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$requisitionListRequisitionListRepositoryV1SavePostBody = new \Krak\MagentoApiClient\Model\RequisitionListRequisitionListRepositoryV1SavePostBody(); // \Krak\MagentoApiClient\Model\RequisitionListRequisitionListRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->requisitionListRequisitionListRepositoryV1SavePost($requisitionListRequisitionListRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequisitionListRequisitionListRepositoryV1Api->requisitionListRequisitionListRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requisitionListRequisitionListRepositoryV1SavePostBody** | [**\Krak\MagentoApiClient\Model\RequisitionListRequisitionListRepositoryV1SavePostBody**](../Model/RequisitionListRequisitionListRepositoryV1SavePostBody.md)|  | [optional]

### Return type

[**\Krak\MagentoApiClient\Model\RequisitionListDataRequisitionListInterface**](../Model/RequisitionListDataRequisitionListInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

