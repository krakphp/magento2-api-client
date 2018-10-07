# CompanyCreditDataHistoryDataInterface

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID. | [optional] 
**companyCreditId** | **int** | Company credit id. | [optional] 
**userId** | **int** | User Id. | [optional] 
**userType** | **int** | User type: integration, admin, customer. | [optional] 
**currencyCredit** | **string** | Currency code of credit. | [optional] 
**currencyOperation** | **string** | Currency code of operation. | [optional] 
**rate** | **float** | Currency rate between credit and operation currencies. | 
**rateCredit** | **float** | Rate between credit and base currencies. | [optional] 
**amount** | **float** | Amount. | 
**balance** | **float** | Outstanding balance. | 
**creditLimit** | **float** | Credit limit. | 
**availableLimit** | **float** | Available limit. | [optional] 
**type** | **int** | Type of operation. | [optional] 
**datetime** | **string** | Operation datetime. | [optional] 
**purchaseOrder** | **string** | Purchase Order number. | [optional] 
**comment** | **string** | Comment. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


